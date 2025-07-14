<?php
header('Content-Type: application/json');

// Mailjet API credentials
$apiKey = '54a7dbedad47ff60dd4702a161323d5c';
$apiSecret = '36a686283da4a9b0777d57a54fa84838';

// Get POST data and sanitize
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$occupation = isset($_POST['occupation']) ? trim($_POST['occupation']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

// Basic validation
if (!$name || !$email || !$phone || !$occupation || !$message) {
    echo json_encode(['success' => false, 'error' => 'All fields are required.']);
    exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'error' => 'Invalid email address.']);
    exit;
}

// Cloudflare Turnstile secret key
$turnstileSecret = '0x4AAAAAABlEdZwiKS3ixcJvGmX7fByjvwU';
$turnstileResponse = isset($_POST['cf-turnstile-response']) ? $_POST['cf-turnstile-response'] : '';
if (!$turnstileResponse) {
    echo json_encode(['success' => false, 'error' => 'CAPTCHA verification failed.']);
    exit;
}
// Verify Turnstile token
$verifyUrl = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';
$verifyData = http_build_query([
    'secret' => $turnstileSecret,
    'response' => $turnstileResponse,
    'remoteip' => $_SERVER['REMOTE_ADDR'] ?? ''
]);
$verifyOptions = [
    'http' => [
        'method' => 'POST',
        'header' => "Content-type: application/x-www-form-urlencoded",
        'content' => $verifyData
    ]
];
$verifyContext = stream_context_create($verifyOptions);
$verifyResult = file_get_contents($verifyUrl, false, $verifyContext);
$verifyResultData = json_decode($verifyResult, true);
if (!$verifyResultData || empty($verifyResultData['success'])) {
    echo json_encode(['success' => false, 'error' => 'CAPTCHA verification failed.']);
    exit;
}

// Prepare Mailjet API request
$toEmail = 'hello@adifferentstory.in';
$fromEmail = 'no-reply@adifferentstory.in';
$subject = 'New Invitation Request from A Different Story Website';

$body = "<strong>Name:</strong> {$name}<br>"
      ."<strong>Email:</strong> {$email}<br>"
      ."<strong>Phone:</strong> {$phone}<br>"
      ."<strong>Occupation:</strong> {$occupation}<br>"
      ."<strong>Message:</strong><br>".nl2br(htmlspecialchars($message));

$data = [
  'Messages' => [
    [
      'From' => [
        'Email' => $fromEmail,
        'Name' => 'A Different Story Website'
      ],
      'To' => [
        [
          'Email' => $toEmail,
          'Name' => 'Joe'
        ]
      ],
      'Subject' => $subject,
      'HTMLPart' => $body
    ]
  ]
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.mailjet.com/v3.1/send');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_USERPWD, $apiKey . ':' . $apiSecret);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json'
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$error = curl_error($ch);
curl_close($ch);

if ($httpCode == 200) {
    echo json_encode(['success' => true, 'debug' => $response]);
} else {
    $msg = 'Failed to send email.';
    if ($error) $msg .= ' Curl error: ' . $error;
    echo json_encode([
        'success' => false,
        'error' => $msg,
        'httpCode' => $httpCode,
        'mailjet_response' => $response,
        'curl_error' => $error
    ]);
} 
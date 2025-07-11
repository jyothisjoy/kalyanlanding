# A Different Story - Luxury Real Estate Website

A premium, invitation-only luxury real estate website for Kalyan Developers' exclusive waterfront residences in Thevara, Kochi.

## 🏗️ Project Overview

"A Different Story" is an exquisite luxury project featuring 25 exclusive waterfront residences, each spanning 10,000-11,000 sqft of luxurious living space across 2.5 acres. This website serves as the digital showcase for this invitation-only development, priced between 13-15 CR.

## ✨ Features

- **Responsive Design**: Mobile-first approach with smooth animations
- **Video Backgrounds**: High-quality video content showcasing the property
- **3D Walkthrough**: Interactive 3D property visualization
- **Contact Form**: AJAX-powered invitation request form with Mailjet integration
- **Smooth Scrolling**: Enhanced user experience with custom scrollbar
- **Modern UI/UX**: Clean, elegant design with premium aesthetics
- **SEO Optimized**: Proper meta tags and semantic HTML structure

## 🛠️ Technology Stack

- **Frontend**: HTML5, CSS3, Vanilla JavaScript
- **Backend**: PHP (Mailjet API integration)
- **Styling**: Custom CSS with CSS Grid and Flexbox
- **Icons**: Iconoir Icons
- **Fonts**: Manrope (Google Fonts alternative)
- **Email Service**: Mailjet API
- **Smooth Scrolling**: Smooth Scrollbar library

## 📁 Project Structure

```
kalyan/
├── index.html          # Main website page
├── style.css           # Complete styling
├── mailer.php          # PHP backend for contact form
├── images/             # Project images and assets
├── fonts/              # Custom font files (Manrope)
└── README.md           # This file
```

## 🚀 Getting Started

### Prerequisites

- Web server with PHP support (Apache/Nginx)
- PHP 7.4 or higher
- Mailjet API credentials (for contact form functionality)

### Installation

1. **Clone or download the project**
   ```bash
   git clone [repository-url]
   cd kalyan
   ```

2. **Configure Email Service**
   - Update `mailer.php` with your Mailjet API credentials:
     ```php
     $apiKey = 'your-mailjet-api-key';
     $apiSecret = 'your-mailjet-api-secret';
     ```
   - Update the recipient email address:
     ```php
     $toEmail = 'your-email@domain.com';
     ```

3. **Upload to Web Server**
   - Upload all files to your web server's public directory
   - Ensure PHP is enabled on your server

4. **Test the Website**
   - Navigate to your domain to view the website
   - Test the contact form functionality

## 🎨 Design Features

### Color Scheme
- **Primary Color**: #8171b2 (Purple)
- **Text Color**: #222831 (Dark Gray)
- **Background**: #f8f9fb (Light Gray)
- **Footer**: #000 (Black)

### Typography
- **Font Family**: Manrope (Light, Regular, Medium, SemiBold weights)
- **Fallback**: Poppins, sans-serif

### Responsive Breakpoints
- **Mobile**: < 767px
- **Tablet**: 768px - 1024px
- **Desktop**: > 1024px

## 📧 Contact Form Configuration

The contact form integrates with Mailjet API for reliable email delivery:

- **Form Fields**: Name, Email, Phone, Occupation, Message
- **Validation**: Client-side and server-side validation
- **Security**: Input sanitization and email validation
- **Response**: JSON responses for AJAX handling

## 🔧 Customization

### Updating Content
- Edit `index.html` for text content changes
- Replace images in the `images/` directory
- Update contact information in the footer

### Styling Changes
- Modify `style.css` for design updates
- CSS variables are defined in `:root` for easy color changes
- Responsive design breakpoints are clearly marked

### Video Content
- Update video sources in `index.html`:
  - Hero video: `hero-bg-trimmed.mp4`
  - 3D Walkthrough: `output.mp4`

## 🌐 Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## 📱 Performance Optimizations

- Optimized images (WebP format)
- Minified CSS and JavaScript
- Efficient font loading with `font-display: swap`
- Lazy loading for video content
- Smooth scrolling with optimized damping

## 🔒 Security Considerations

- Input sanitization in PHP backend
- Email validation
- CSRF protection (implement as needed)
- Secure API key handling

## 📞 Support

For technical support or questions about this project:
- **Email**: hello@adifferentstory.in
- **Phone**: +91 9847000000

## 📄 License

This project is proprietary and confidential. All rights reserved by Kalyan Developers.

---

**Developed for Kalyan Developers** - Kerala's leading real estate developer owned by the promoters of Kalyan Jewelers. 
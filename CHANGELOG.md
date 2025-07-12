# Changelog

All notable changes to the "A Different Story" luxury real estate website project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Planned
- Enhanced mobile navigation experience
- Additional animation effects
- Performance optimizations
- SEO improvements

### Changed
- Improved mobile slide height for the Glide.js slider:
  - Changed `.main-glide-slider .glide__track` height from `50vw` to `60vh` and `max-height` from `70vw` to `100vh` for a more consistent and visually appealing vertical size on mobile devices.
  - Changed `.main-glide-slider .glide__slide`, `picture`, and `img` height from `50vw` to `100%` and removed `max-height`, ensuring images fill the slider area and maintain aspect ratio.

**Effect:**
- The slider now appears taller and more consistent on mobile screens, with images filling the available space more naturally.
- This improves the user experience and visual impact of the slider on smaller devices.

## [1.0.0] - 2025-01-XX

### Added
- **Initial Website Launch**
  - Complete responsive website design for "A Different Story" luxury project
  - Hero section with video background showcasing the property
  - About section with project details and images
  - 3D walkthrough section with video integration
  - Contact form with invitation request functionality
  - Footer with company information and social links

- **Core Features**
  - Responsive design optimized for mobile, tablet, and desktop
  - Smooth scrolling navigation with custom scrollbar
  - Intersection Observer animations for scroll-triggered effects
  - AJAX-powered contact form with Mailjet API integration
  - Mobile-friendly navigation menu with dropdown functionality
  - Video backgrounds with fallback images

- **Design System**
  - Custom Manrope font implementation with multiple weights
  - Purple color scheme (#8171b2) with complementary colors
  - Modern, clean UI with premium aesthetics
  - CSS Grid and Flexbox layouts
  - Iconoir Icons integration

- **Technical Implementation**
  - Semantic HTML5 structure
  - CSS3 with custom properties (variables)
  - Vanilla JavaScript for interactivity
  - PHP backend for form processing
  - Mailjet API integration for email delivery
  - Smooth Scrollbar library integration

### Technical Specifications
- **Frontend**: HTML5, CSS3, Vanilla JavaScript
- **Backend**: PHP 7.4+
- **Email Service**: Mailjet API
- **Icons**: Iconoir Icons
- **Fonts**: Manrope (Light, Regular, Medium, SemiBold)
- **Video Format**: MP4 with WebM fallback
- **Image Format**: WebP with fallback support

### File Structure
```
kalyan/
├── index.html          # Main website (242 lines)
├── style.css           # Complete styling (613 lines)
├── mailer.php          # PHP backend (82 lines)
├── images/             # Project assets
├── fonts/              # Custom fonts
└── README.md           # Documentation
```

### Browser Support
- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

### Performance Features
- Optimized images in WebP format
- Efficient font loading with `font-display: swap`
- Lazy loading for video content
- Smooth scrolling with optimized damping (0.01)
- Minified CSS and JavaScript

### Security Features
- Input sanitization in PHP backend
- Email validation (client and server-side)
- CSRF protection ready
- Secure API key handling

### Content Sections
1. **Header**: Logo and navigation menu
2. **Hero**: Video background with overlay
3. **About**: Project description with images
4. **3D Walkthrough**: Video showcase section
5. **Contact**: Invitation request form
6. **Footer**: Company info and social links

### Form Fields
- Name (required)
- Email (required, validated)
- Phone (required, pattern validation)
- Occupation (dropdown selection)
- Message (required)

### Responsive Breakpoints
- **Mobile**: < 767px
- **Tablet**: 768px - 1024px
- **Desktop**: > 1024px

---

## Version History Summary

| Version | Date | Description |
|---------|------|-------------|
| 1.0.0 | 2025-06-28 | Initial website launch with all core features |


---

**Note**: This changelog tracks all significant changes to the project. For detailed development history, refer to the git commit history.

**Maintained by**: KloudBoy
# Estatein WordPress Theme

A modern, responsive WordPress theme for real estate websites, built based on the Figma design specification.

## Features

- **Responsive Design**: Fully responsive layout that works on all devices
- **Modern UI**: Dark theme with purple accents matching the Figma design
- **Custom Post Types**: Properties and Services with custom fields
- **Interactive Elements**: Smooth animations, hover effects, and functional forms
- **SEO Optimized**: Clean code structure with proper semantic HTML5
- **Performance Optimized**: Efficient CSS and JavaScript with lazy loading
- **WordPress Best Practices**: Follows WordPress coding standards

## Theme Structure

```
estatein/
├── style.css                 # Main stylesheet with theme header
├── index.php                 # Homepage template
├── header.php                # Header with navigation
├── footer.php                # Footer with links
├── functions.php             # Theme functions and setup
├── page-about.php            # About page template
├── page-contact.php          # Contact page template
├── page-properties.php       # Properties listing page
├── single-property.php       # Single property page
├── screenshot.png           # Theme screenshot
├── assets/
│   ├── js/
│   │   └── script.js        # Main JavaScript file
│   └── images/              # Image assets
└── README.md               # This file
```

## Installation

1. Upload the `estatein` folder to your WordPress `wp-content/themes/` directory
2. Activate the theme in WordPress admin under Appearance > Themes
3. Configure the theme options under Appearance > Theme Options

## Custom Post Types

### Properties
- **Fields**: Price, Location, Bedrooms, Bathrooms, Area, Status, Type, Year Built
- **Archive**: `/properties/`
- **Single**: Custom single property template with gallery and inquiry form

### Services
- **Fields**: Service description, icon, features
- **Archive**: `/services/`
- **Usage**: Displayed on services page and throughout the site

## Theme Features

### Navigation Menus
- **Primary Menu**: Main navigation (Home, About, Properties, Services)
- **Footer Menu**: Secondary navigation in footer

### Widget Areas
- **Footer Widgets**: Widget area for footer content

### Customizer Options
- **Primary Color**: Customize the theme's primary accent color
- **Site Identity**: Logo, title, and tagline settings

## Page Templates

### Homepage (index.php)
- Hero section with call-to-action
- Statistics cards
- Feature cards
- Fully responsive design

### Properties Page (page-properties.php)
- Property filtering by type, price, and location
- Grid layout with property cards
- Pagination support
- Search functionality

### About Page (page-about.php)
- Company information and mission
- Team member profiles
- Client testimonials
- Company statistics

### Contact Page (page-contact.php)
- Contact form with validation
- Office information and hours
- Interactive map placeholder
- FAQ section

### Single Property (single-property.php)
- Image gallery
- Property details and features
- Agent information
- Mortgage calculator
- Similar properties section

## JavaScript Features

- **Smooth Scrolling**: Anchor link smooth scrolling
- **Form Validation**: Contact and inquiry form validation
- **Image Lazy Loading**: Performance optimization for images
- **Counter Animation**: Animated statistics counters
- **Gallery Lightbox**: Image gallery with lightbox functionality
- **Mobile Menu**: Responsive mobile navigation
- **Scroll Effects**: Header scroll effects and element animations

## CSS Features

- **Responsive Grid**: CSS Grid and Flexbox for layouts
- **Smooth Transitions**: Hover effects and animations
- **Mobile-First**: Mobile-first responsive design
- **Custom Properties**: CSS variables for easy customization
- **Optimized Performance**: Efficient CSS organization

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Performance Optimization

- **Minified Assets**: Optimized CSS and JavaScript
- **Image Optimization**: Lazy loading and proper sizing
- **Caching Ready**: Compatible with caching plugins
- **SEO Friendly**: Proper meta tags and semantic HTML

## Customization

### Colors
The theme uses CSS custom properties for colors. You can modify them in `style.css`:

```css
:root {
    --primary-color: #6366f1;
    --secondary-color: #8b5cf6;
    --background-color: #0a0a0a;
    --text-color: #ffffff;
    --text-muted: #a0a0a0;
}
```

### Typography
The theme uses Inter font family. You can modify font settings in the CSS variables.

### Layout
The theme uses CSS Grid and Flexbox. Breakpoints are:
- Mobile: < 768px
- Tablet: 768px - 1024px
- Desktop: > 1024px

## Development

### File Organization
- Follow WordPress coding standards
- Use semantic HTML5 elements
- Implement proper accessibility (ARIA labels, etc.)
- Use WordPress functions and hooks appropriately

### JavaScript
- Use jQuery for compatibility
- Implement proper event handling
- Follow WordPress JavaScript standards
- Use non-blocking script loading

### PHP
- Follow WordPress PHP coding standards
- Use proper security practices (nonce verification, data sanitization)
- Implement WordPress hooks and filters
- Use WordPress template hierarchy

## License

This theme is licensed under the GNU General Public License v2 or later.

## Support

For support and questions:
- Check the WordPress codex
- Review the theme documentation
- Contact the development team

## Changelog

### Version 1.0.0
- Initial release
- Responsive design implementation
- Custom post types for Properties and Services
- Interactive JavaScript features
- Full WordPress theme functionality

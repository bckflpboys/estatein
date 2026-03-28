# WordPress Local Setup Guide

## Option 1: Local by Flywheel (Recommended)

### Installation
1. Download from https://localwp.com/
2. Install and open the application
3. Click "+" to create new site
4. Enter:
   - Site Name: `estatein`
   - Local Domain: `estatein.local`
   - Admin credentials of your choice
5. Wait for installation to complete
dev-email@wpengine.local

### Theme Installation
1. Click "Open Site" or go to `http://estatein.local/wp-admin`
2. Login with admin credentials
3. Go to Appearance → Themes → Add New → Upload Theme
4. Upload the `estatein` folder
5. Activate the theme

## Option 2: XAMPP Manual Setup

### Step 1: Install XAMPP
1. Download XAMPP from https://www.apachefriends.org/
2. Install Apache and MySQL modules
3. Start Apache and MySQL from XAMPP control panel

### Step 2: Create Database
1. Go to http://localhost/phpmyadmin
2. Click "New Database"
3. Name it `estatein_db`
4. Click "Create"

### Step 3: Install WordPress
1. Download WordPress from https://wordpress.org/
2. Extract to `C:/xampp/htdocs/estatein/`
3. Visit http://localhost/estatein/
4. Follow installation wizard:
   - Database name: `estatein_db`
   - Username: `root`
   - Password: (leave empty)
   - Database host: `localhost`
   - Table prefix: `wp_`

### Step 4: Install Theme
1. Copy `estatein` theme folder to `C:/xampp/htdocs/estatein/wp-content/themes/`
2. Login to WordPress admin: http://localhost/estatein/wp-admin
3. Go to Appearance → Themes
4. Activate "Estatein" theme

## After Installation

### Configure WordPress
1. Go to Settings → General
   - Site Title: "Estatein"
   - Tagline: "Discover Your Dream Property"
   - Email: your email
   - Timezone: your timezone

2. Go to Settings → Permalinks
   - Select "Post name"
   - Click "Save Changes"

3. Go to Settings → Reading
   - Front page displays: "A static page"
   - Front page: Select "Home" (create if needed)

### Create Sample Content
1. Go to Properties → Add New
2. Create sample property listings
3. Go to Pages → Add New
4. Create About, Contact, and Properties pages
5. Assign appropriate page templates

### Test the Website
1. Visit your homepage
2. Check all navigation links
3. Test contact forms
4. Verify responsive design on different screen sizes

## Troubleshooting

### Common Issues
- **White screen**: Check PHP error logs in XAMPP
- **Database connection**: Verify database credentials
- **Theme not showing**: Check folder permissions
- **Images not loading**: Verify image paths in assets folder

### Getting Help
- WordPress Codex: https://codex.wordpress.org/
- WordPress Forums: https://wordpress.org/support/
- Local by Flywheel Support: https://localwp.com/support/

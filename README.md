# Estatein - Custom WordPress Theme

Estatein is a modern, fully responsive WordPress theme custom-built for real estate agencies. It was developed from scratch based on a provided Figma design, transforming static HTML/CSS into a dynamic, content-manageable WordPress experience.

---

## 🚀 Key Features Implemented

- **Pixel-Perfect UI:** A sleek, dark-themed UI with purple accents (`#703BF7`), matching the original Figma specifications perfectly.
- **Frontend Author Dashboard:** A custom-built, secure frontend dashboard (`/dashboard`) allowing authorized users to write, edit, delete, and publish blog posts without ever seeing the WordPress admin backend.
- **Advanced Blog Functionality:** 
  - Dynamic blog archive grid.
  - Single post templates with category tags, author meta, and robust comment sections.
  - Support for uploading local Cover Images or linking external Image URLs.
- **Custom Post Types:** Native WordPress CPTs registered for **Properties** and **Services** to keep content organized and separate from standard blog posts.
- **Fully Responsive:** Mobile-first approach using CSS media queries to ensure the site looks stunning on phones, tablets, and desktops.
- **SEO & Performance:** 
  - Dynamic Open Graph (OG) meta tags for social sharing.
  - Deferred JavaScript loading for faster initial page renders.
  - Clean, semantic HTML5 structure.

---

## 🛠️ Development Process & Technical Choices

### 1. Theme Architecture
The theme was built from the ground up without relying on heavy starter themes (like Bootstrap or Underscores) to ensure maximum performance and strictly adhere to the Figma design. 
- **`style.css`**: Contains all custom styling, organized clearly without bloated frameworks.
- **`functions.php`**: Acts as the engine room, registering menus, enqueuing scripts (with `defer` attributes), registering Custom Post Types, and handling custom comment UI rendering.

### 2. Frontend Dashboard Strategy
Instead of forcing clients to use the complex `wp-admin` panel, a custom page template (`page-dashboard.php`) was engineered. 
- It uses native WordPress functions (`wp_insert_post`, `wp_update_post`, `wp_trash_post`) combined with secure Nonce fields to safely process form submissions on the frontend.
- It seamlessly integrates `wp_login_form()` to handle authentication on the page.

### 3. Content Management (Recommended Plugins)
While the theme registers Custom Post Types natively, it is highly recommended to install the **Advanced Custom Fields (ACF)** plugin. 
- **Why?** ACF provides an intuitive way to add specific data fields (Price, Bedrooms, Bathrooms, Location) to the "Properties" post type without hardcoding custom meta boxes, giving the client an incredibly easy-to-manage backend experience.

---

## 📂 Codebase Structure

```
estatein/
├── style.css                 # Main stylesheet and core UI design
├── front-page.php            # Static Homepage template
├── index.php                 # Blog archive (The Loop)
├── single.php                # Single blog post template
├── page-dashboard.php        # Custom frontend Author Dashboard
├── header.php                # Global header, navigation, and SEO meta tags
├── footer.php                # Global footer
├── functions.php             # Theme setup, CPTs, and custom PHP logic
├── comments.php              # Custom dark-themed comment section
└── assets/
    ├── js/script.js          # Interactive frontend logic
    └── images/               # Local image assets
```

---

## 💻 Local Setup & Installation Guide

To run this theme locally and test the functionality, follow these steps:

### Prerequisites
You will need a local WordPress environment. We highly recommend [Local by Flywheel](https://localwp.com/) as it is the easiest to set up.

### Step 1: Install WordPress
1. Open **Local**, click the **+** button to create a new site.
2. Name the site `estatein` and set up your WordPress Admin username and password.
3. Wait for Local to provision the site and start the server.

### Step 2: Install the Theme
1. Navigate to the `wp-content/themes/` directory of your new local site.
2. Copy the entire `estatein` folder from this repository into the `themes` directory.
3. Open your local site's WordPress Admin dashboard (`http://estatein.local/wp-admin`).
4. Go to **Appearance > Themes** and activate the **Estatein** theme.

### Step 3: Configure Settings
1. **Permalinks:** Go to **Settings > Permalinks** and select **Post name**. Click Save. (This ensures your `/dashboard` and `/blog` URLs work correctly).
2. **Homepage:** Go to **Settings > Reading**. Under "Your homepage displays", select **A static page**. Set the Homepage to your "Home" page, and the Posts page to a "Blog" page.
3. **Dashboard:** The theme automatically creates a "Dashboard" page upon activation. You can visit `http://estatein.local/dashboard` to see the custom frontend publisher in action.

### Step 4: Test the Features
- Visit the site frontend.
- Click on **Dashboard** in the top menu.
- Log in using the credentials you created in Step 1.
- Create a new blog post, add a Cover Image URL, and publish it.
- Navigate to the **Blog** page to see your post live, click into it, and test out the custom comment section!
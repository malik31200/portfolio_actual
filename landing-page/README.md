# Actual Sport - Landing Page

A professional landing page for the Actual Sport booking system project.

## 🚀 Live Demo

Visit the live landing page: [Your GitHub Pages URL]

## 📁 Project Structure

```
landing-page/
├── index.html          # Main HTML file
├── style.css           # Stylesheet
├── assets/             # Images and media files
│   └── screenshots/    # App screenshots
└── README.md          # This file
```

## 🎨 Features

- **Modern Design**: Clean, professional UI with smooth animations
- **Fully Responsive**: Works perfectly on desktop, tablet, and mobile
- **Fast Loading**: Optimized for performance
- **SEO Friendly**: Proper meta tags and semantic HTML
- **Easy to Customize**: Well-organized code with clear sections

## 📸 Adding Screenshots

1. Place your application screenshots in `assets/screenshots/`
2. Replace the placeholder in the Demo section:

```html
<!-- In index.html, replace the screenshot-placeholder div -->
<div class="browser-content">
    <img src="assets/screenshots/dashboard.png" alt="Actual Sport Dashboard" style="width: 100%; height: auto;">
</div>
```

Recommended screenshots:
- Dashboard view
- Booking flow
- Payment page
- Admin panel
- Mobile view

## 🔗 Customization

### Update Links

Replace placeholder links in `index.html`:

- Line 23: GitHub repository URL
- Line 33: GitHub repository URL
- Line 36: Demo application URL
- Line 195: Live demo URL
- Line 257: Team member GitHub links
- Line 258: Team member LinkedIn links
- Line 279: Live demo URL
- Line 280: GitHub repository URL

### Update Colors

Edit CSS variables in `style.css` (lines 9-20):

```css
:root {
    --primary-color: #3b82f6;
    --primary-dark: #2563eb;
    /* ... customize other colors */
}
```

### Add Logo

1. Add your logo image to `assets/`
2. Replace the text logo in navigation:

```html
<!-- Replace in index.html line 19 -->
<div class="nav-brand">
    <img src="assets/logo.png" alt="Actual Sport" height="40">
</div>
```

## 🌐 Deploying to GitHub Pages

### Method 1: From Main Repository

1. **Move files to root or docs folder**:
   ```bash
   # Option A: Move to root
   mv landing-page/* .
   mv landing-page/.* .
   rmdir landing-page

   # Option B: Use docs folder (recommended)
   mv landing-page docs
   ```

2. **Commit and push**:
   ```bash
   git add .
   git commit -m "Add landing page"
   git push origin main
   ```

3. **Enable GitHub Pages**:
   - Go to repository Settings
   - Navigate to "Pages" section
   - Source: Select "main" branch
   - Folder: Select "/docs" or "/ (root)"
   - Click "Save"

4. **Access your site**:
   - URL will be: `https://YOUR-USERNAME.github.io/REPO-NAME/`

### Method 2: Separate Repository

1. **Create new repository**:
   - Name it: `actual-sport-landing` or `YOUR-USERNAME.github.io`

2. **Push landing page files**:
   ```bash
   cd landing-page
   git init
   git add .
   git commit -m "Initial commit"
   git branch -M main
   git remote add origin https://github.com/YOUR-USERNAME/REPO-NAME.git
   git push -u origin main
   ```

3. **Enable GitHub Pages**:
   - Go to Settings → Pages
   - Source: main branch / (root)
   - Save

4. **Access**:
   - `https://YOUR-USERNAME.github.io/REPO-NAME/`
   - Or if using `YOUR-USERNAME.github.io`: `https://YOUR-USERNAME.github.io/`

## 🛠️ Local Development

1. **Open with browser**:
   ```bash
   # Simply open index.html in your browser
   # Or use a local server:
   
   # Python 3
   python -m http.server 8000
   
   # PHP
   php -S localhost:8000
   
   # Node.js (with http-server)
   npx http-server -p 8000
   ```

2. **Visit**: `http://localhost:8000`

## ✅ Checklist Before Publishing

- [ ] Add real screenshots to `assets/screenshots/`
- [ ] Update all GitHub repository links
- [ ] Update demo application URL
- [ ] Add team member GitHub/LinkedIn profiles
- [ ] Add logo image (optional)
- [ ] Test on mobile devices
- [ ] Check all links work
- [ ] Verify responsive design
- [ ] Add favicon (optional)
- [ ] Test page load speed

## 📝 Adding a Favicon

1. Create or get your favicon (.ico or .png format)
2. Place it in the landing-page folder
3. Add to `<head>` in index.html:

```html
<link rel="icon" type="image/png" href="favicon.png">
```

## 🎯 SEO Optimization

The landing page includes:
- ✅ Semantic HTML5
- ✅ Meta description
- ✅ Meta keywords
- ✅ Proper heading hierarchy
- ✅ Alt text for images (add when you include screenshots)
- ✅ Mobile-friendly design

## 🐛 Troubleshooting

**Page not loading on GitHub Pages:**
- Check that index.html is in the root or docs folder
- Verify GitHub Pages is enabled in settings
- Wait 2-3 minutes for deployment

**Styles not working:**
- Ensure style.css is in the same folder as index.html
- Check browser console for errors

**Images not showing:**
- Verify image paths are correct
- Use relative paths, not absolute
- Check file names are case-sensitive on GitHub Pages

## 📄 License

This landing page is part of the Actual Sport portfolio project.

---

**Built with ❤️ by Christophe BARRERE & Malik BOUANANI**

Holberton School Toulouse - Cohort 27 - 2026

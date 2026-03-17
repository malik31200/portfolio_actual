# 🎨 Customization Tips for Actual Sport Landing Page

## Quick Customizations

### 1. Change Colors

Edit `style.css` (lines 9-20):

```css
:root {
    --primary-color: #3b82f6;      /* Main blue - buttons, highlights */
    --primary-dark: #2563eb;       /* Darker blue - hover states */
    --primary-light: #60a5fa;      /* Lighter blue - accents */
    --secondary-color: #1e293b;    /* Dark gray - footer, CTA */
    --text-dark: #0f172a;          /* Main text color */
    --text-light: #64748b;         /* Secondary text */
    --bg-light: #f8fafc;           /* Light background */
}
```

**Popular color schemes:**

🔵 **Tech Blue** (current):
- Primary: `#3b82f6`

🟢 **Success Green**:
- Primary: `#10b981`
- Primary Dark: `#059669`

🟣 **Purple Premium**:
- Primary: `#8b5cf6`
- Primary Dark: `#7c3aed`

🔴 **Bold Red**:
- Primary: `#ef4444`
- Primary Dark: `#dc2626`

🟠 **Energetic Orange**:
- Primary: `#f59e0b`
- Primary Dark: `#d97706`

### 2. Change Font

Currently using **Inter** from Google Fonts.

To change:

1. Visit [Google Fonts](https://fonts.google.com)
2. Select your font (e.g., Roboto, Poppins, Montserrat)
3. Copy the `<link>` code
4. Replace line 12-13 in `index.html`
5. Update line 23 in `style.css`:
   ```css
   font-family: 'YourFont', sans-serif;
   ```

**Font recommendations:**
- **Poppins** - Modern, rounded
- **Roboto** - Clean, professional
- **Montserrat** - Bold, geometric
- **Work Sans** - Tech-friendly

### 3. Add Your Logo

Replace text logo with image:

```html
<!-- In index.html, line 19-21 -->
<div class="nav-brand">
    <img src="assets/logo.png" alt="Actual Sport" height="50">
</div>
```

Logo specs:
- Format: PNG with transparent background
- Size: 200-400px wide, 50-80px tall
- File size: < 50KB

### 4. Add Favicon

1. Create favicon (16x16, 32x32, or 48x48 px)
2. Save as `favicon.ico` or `favicon.png`
3. Add to `<head>` in index.html (after line 10):

```html
<link rel="icon" type="image/png" href="assets/favicon.png">
```

Free favicon generators:
- [Favicon.io](https://favicon.io/)
- [RealFaviconGenerator](https://realfavicongenerator.net/)

### 5. Replace Screenshots

1. Take screenshots of your app (1200x800px recommended)
2. Save to `assets/screenshots/`
3. Update line 190-192 in `index.html`:

```html
<img src="assets/screenshots/dashboard.png" alt="Dashboard">
```

**Screenshot tips:**
- Use 1200x800px or 1920x1080px
- Show realistic data (not test/dummy data)
- Compress images ([TinyPNG](https://tinypng.com/))
- Use descriptive alt text

### 6. Customize Text Content

Key sections to personalize:

**Hero section** (lines 42-48):
- Change tagline
- Update call-to-action

**About section** (lines 60-77):
- Describe your specific use case
- Highlight unique value

**Features** (lines 93-134):
- Add/remove features
- Update descriptions

**Team section** (lines 244-283):
- Add photos
- Update descriptions
- Add social links

### 7. Add Team Photos

Replace avatar placeholders:

```html
<!-- Line 253, replace: -->
<div class="avatar-placeholder">CB</div>
<!-- With: -->
<img src="assets/team/christophe.jpg" alt="Christophe" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover;">
```

Photo specs:
- Square format (500x500px)
- Professional headshot
- File size: < 100KB
- Format: JPG or PNG

### 8. Add More Sections (Optional)

**Testimonials:**
```html
<section class="testimonials">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Testimonials</span>
            <h2>What Users Say</h2>
        </div>
        <!-- Add testimonial cards -->
    </div>
</section>
```

**Video Demo:**
```html
<div class="video-container">
    <iframe width="100%" height="500" 
            src="https://www.youtube.com/embed/YOUR-VIDEO-ID" 
            frameborder="0" allowfullscreen>
    </iframe>
</div>
```

**FAQ:**
```html
<section class="faq">
    <div class="container">
        <h2>Frequently Asked Questions</h2>
        <!-- Add FAQ items -->
    </div>
</section>
```

### 9. Animations & Effects

Add subtle animations to sections:

```css
/* Add to style.css */
.feature-card {
    opacity: 0;
    animation: fadeInUp 0.6s ease forwards;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
```

### 10. Social Media Meta Tags

Add for better social sharing (in `<head>`):

```html
<!-- Facebook Open Graph -->
<meta property="og:title" content="Actual Sport - Smart Booking System">
<meta property="og:description" content="A modern booking system for group sports classes">
<meta property="og:image" content="https://your-url.com/assets/og-image.jpg">
<meta property="og:url" content="https://your-url.com">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Actual Sport">
<meta name="twitter:description" content="Smart sports booking system">
<meta name="twitter:image" content="https://your-url.com/assets/og-image.jpg">
```

---

## 🎯 Pro Tips

1. **Keep it simple** - Don't overcomplicate
2. **Mobile first** - Test on phone
3. **Fast loading** - Optimize images
4. **Clear CTA** - Make actions obvious
5. **Consistent spacing** - Use existing padding/margins
6. **Readable text** - Maintain good contrast
7. **Test links** - Verify everything works

---

## 🛠️ Tools to Help

- **Colors**: [Coolors.co](https://coolors.co/) - Color scheme generator
- **Images**: [Unsplash](https://unsplash.com/) - Free stock photos
- **Icons**: [Heroicons](https://heroicons.com/) - Free SVG icons
- **Compress**: [TinyPNG](https://tinypng.com/) - Image optimization
- **Fonts**: [Google Fonts](https://fonts.google.com/) - Free fonts

---

**Need inspiration?** Check out:
- [Land-book.com](https://land-book.com/) - Landing page gallery
- [Lapa.ninja](https://www.lapa.ninja/) - Landing page inspiration

---

Happy customizing! 🎨

**Christophe & Malik** - Holberton School Toulouse

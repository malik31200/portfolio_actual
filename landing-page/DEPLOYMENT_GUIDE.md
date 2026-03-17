# 🚀 Complete Deployment Guide - Actual Sport Landing Page

This guide will walk you through deploying your landing page to GitHub Pages step by step.

## 📋 Pre-Deployment Checklist

Before deploying, make sure you've completed these steps:

### 1. Update All Links

Open `index.html` and update:

```html
<!-- Line 23 & 33: GitHub Repository -->
<a href="https://github.com/YOUR-USERNAME/actual-sport" target="_blank">

<!-- Line 36 & 195 & 279: Live Demo URL -->
<a href="https://your-actual-sport-app.com" target="_blank">

<!-- Line 257-265: Team GitHub Links -->
<a href="https://github.com/christophe-username" target="_blank">GitHub</a>
<a href="https://github.com/malik-username" target="_blank">GitHub</a>

<!-- Line 258-266: Team LinkedIn Links -->
<a href="https://linkedin.com/in/christophe-profile" target="_blank">LinkedIn</a>
<a href="https://linkedin.com/in/malik-profile" target="_blank">LinkedIn</a>
```

### 2. Add Screenshots

1. Take screenshots of your application
2. Place them in `landing-page/assets/screenshots/`
3. Update the demo section in `index.html`:

```html
<!-- Replace line 190-192 -->
<div class="browser-content">
    <img src="assets/screenshots/dashboard.png" alt="Actual Sport Dashboard" 
         style="width: 100%; height: auto; display: block;">
</div>
```

### 3. Test Locally

```bash
cd landing-page
python -m http.server 8000
# Visit http://localhost:8000
```

Check:
- All links work
- Images load correctly
- Responsive design (test on mobile size)
- No console errors

---

## 🌐 Deployment Options

Choose one of these methods:

### ✨ Option 1: Deploy in Main Repository (Recommended)

This keeps everything together in one repository.

#### Step 1: Prepare the Files

```bash
# Navigate to your project root
cd \\wsl.localhost\Ubuntu\home\chris\portfolio_actual

# Option A: Move to docs/ folder (recommended)
mkdir -p docs
cp -r landing-page/* docs/
cp landing-page/.gitkeep docs/assets/.gitkeep

# Option B: Move to root (alternative)
# cp -r landing-page/* .
```

#### Step 2: Commit and Push

```bash
git add docs/
# or: git add index.html style.css assets/ README.md

git commit -m "Add landing page for Actual Sport"
git push origin main
```

#### Step 3: Enable GitHub Pages

1. Go to your repository on GitHub: `https://github.com/YOUR-USERNAME/actual-sport`
2. Click **Settings** (top menu)
3. Scroll down to **Pages** (left sidebar)
4. Under **Source**:
   - Branch: Select `main`
   - Folder: Select `/docs` (or `/root` if you used Option B)
5. Click **Save**

#### Step 4: Wait and Access

- GitHub will build your site (takes 1-3 minutes)
- Your landing page will be available at:
  ```
  https://YOUR-USERNAME.github.io/actual-sport/
  ```

---

### 🎯 Option 2: Separate Landing Page Repository

Create a dedicated repository just for the landing page.

#### Step 1: Create New Repository

1. Go to GitHub: https://github.com/new
2. Repository name: `actual-sport-landing`
3. Public repository
4. Don't initialize with README (we already have one)
5. Click **Create repository**

#### Step 2: Push Landing Page

```bash
# Navigate to landing page folder
cd \\wsl.localhost\Ubuntu\home\chris\portfolio_actual\landing-page

# Initialize git
git init
git add .
git commit -m "Initial commit: Actual Sport landing page"

# Connect to GitHub
git branch -M main
git remote add origin https://github.com/YOUR-USERNAME/actual-sport-landing.git

# Push
git push -u origin main
```

#### Step 3: Enable GitHub Pages

1. Go to repository: `https://github.com/YOUR-USERNAME/actual-sport-landing`
2. Settings → Pages
3. Source: `main` branch, `/ (root)` folder
4. Save

#### Step 4: Access

Your page will be at:
```
https://YOUR-USERNAME.github.io/actual-sport-landing/
```

---

### 🌟 Option 3: Personal GitHub Pages Site

Use your personal GitHub Pages domain.

#### Requirements

Repository must be named: `YOUR-USERNAME.github.io`

#### Steps

```bash
cd \\wsl.localhost\Ubuntu\home\chris\portfolio_actual\landing-page

git init
git add .
git commit -m "Actual Sport landing page"

git branch -M main
git remote add origin https://github.com/YOUR-USERNAME/YOUR-USERNAME.github.io.git
git push -u origin main
```

Enable Pages (should be automatic), then access at:
```
https://YOUR-USERNAME.github.io/
```

---

## ⚙️ Advanced Configuration

### Custom Domain (Optional)

If you own a domain like `actualsport.com`:

1. Add a `CNAME` file in your landing page folder:
   ```bash
   echo "actualsport.com" > CNAME
   ```

2. Configure DNS:
   - Add A records pointing to GitHub Pages IPs:
     ```
     185.199.108.153
     185.199.109.153
     185.199.110.153
     185.199.111.153
     ```
   - Or add CNAME record: `YOUR-USERNAME.github.io`

3. In GitHub Settings → Pages:
   - Enter your custom domain
   - Enable "Enforce HTTPS"

### Google Analytics (Optional)

Add tracking before closing `</head>` tag:

```html
<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'GA_MEASUREMENT_ID');
</script>
```

---

## 🔄 Updating Your Landing Page

After making changes:

```bash
# Make your edits to index.html or style.css

# Commit changes
git add .
git commit -m "Update landing page content"

# Push to GitHub
git push origin main

# GitHub Pages will automatically rebuild (1-3 minutes)
```

---

## 🐛 Troubleshooting

### Issue: Page shows 404

**Solutions:**
- Verify index.html is in correct folder (root or docs)
- Check GitHub Pages is enabled in Settings
- Wait 2-3 minutes for initial deployment
- Clear browser cache

### Issue: CSS not loading

**Solutions:**
- Verify style.css is in same folder as index.html
- Check capitalization (GitHub Pages is case-sensitive)
- Check browser console for errors
- Use relative paths only

### Issue: Images not displaying

**Solutions:**
- Verify image paths: `assets/screenshots/image.png`
- Check file exists and is committed
- Check file extension matches actual file
- GitHub Pages is case-sensitive: `Image.png` ≠ `image.png`

### Issue: Changes not showing

**Solutions:**
- Wait 1-3 minutes for rebuild
- Clear browser cache (Ctrl+F5 or Cmd+Shift+R)
- Try incognito/private window
- Check GitHub Actions for build status

---

## 📊 Monitoring

### Check Build Status

1. Go to your repository
2. Click **Actions** tab
3. See "pages build and deployment" workflow
4. Green checkmark = successful deployment

### View Traffic

1. Repository → Insights
2. Traffic section
3. See views and visitors

---

## ✅ Final Checklist

Before sharing your landing page:

- [ ] All links updated (GitHub, demo, LinkedIn)
- [ ] Screenshots added and displaying correctly
- [ ] Tested on mobile devices
- [ ] Tested on different browsers
- [ ] No console errors
- [ ] GitHub Pages enabled and working
- [ ] Page loads in under 3 seconds
- [ ] All sections have correct content
- [ ] Contact information is correct
- [ ] Repository is public

---

## 🎉 You're Done!

Your landing page is now live! Share it:

- Add link to your main repository README
- Share on LinkedIn
- Add to your resume/CV
- Include in Holberton project submission

**Example README badge:**

```markdown
## 🌐 Landing Page

Visit the [Actual Sport Landing Page](https://YOUR-USERNAME.github.io/actual-sport/)

[![Landing Page](https://img.shields.io/badge/Landing-Page-blue)](https://YOUR-USERNAME.github.io/actual-sport/)
```

---

**Need help?** Check the main README.md or contact the development team.

**Christophe BARRERE & Malik BOUANANI** - Holberton School Toulouse

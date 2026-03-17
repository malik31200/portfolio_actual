# 🚀 Quick Start - Deploy in 5 Minutes

## Step 1: Update Your Links (2 min)

Open `index.html` and replace:

1. **Line 23, 33, 280**: `https://github.com/your-repo/actual-sport` 
   → Your actual GitHub repo URL

2. **Line 36, 195, 279**: `https://your-demo-url.com`
   → Your live application URL (or remove if not deployed yet)

3. **Lines 257-266**: Update GitHub and LinkedIn profile links for both team members

## Step 2: Add Screenshots (Optional, 1 min)

- Place screenshot in `assets/screenshots/`
- Update line 190-192 in `index.html`:
  ```html
  <img src="assets/screenshots/dashboard.png" alt="Dashboard">
  ```

## Step 3: Deploy to GitHub Pages (2 min)

### Option A: Use docs/ folder (Recommended)

```bash
cd \\wsl.localhost\Ubuntu\home\chris\portfolio_actual
mkdir -p docs
cp -r landing-page/* docs/
git add docs/
git commit -m "Add landing page"
git push origin main
```

Then on GitHub:
- Settings → Pages
- Source: main branch, /docs folder
- Save

### Option B: New repository

```bash
cd landing-page
git init
git add .
git commit -m "Initial commit"
git remote add origin https://github.com/YOUR-USERNAME/actual-sport-landing.git
git push -u origin main
```

Then enable Pages in Settings.

## ✅ Done!

Your landing page will be live at:
- `https://YOUR-USERNAME.github.io/actual-sport/` (Option A)
- `https://YOUR-USERNAME.github.io/actual-sport-landing/` (Option B)

Wait 1-3 minutes for GitHub to build and deploy.

---

**For detailed instructions, see [DEPLOYMENT_GUIDE.md](DEPLOYMENT_GUIDE.md)**

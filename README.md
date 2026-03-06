# Actual Sport

Web application for managing sports courses with booking and online payment.

**Portfolio Project** - Holberton School Toulouse - Cohort 27  
**Team:** Malik BOUNANI & Christophe BARRERE  
**Date:** February 2026

---

## 🚀 Technologies

- **Backend:** PHP 8.1+, Symfony 6.4, Doctrine ORM
- **Frontend:** Twig, Custom CSS
- **Database:** MySQL 8.0
- **Payment:** Stripe (test mode)
- **Dev:** Docker, Docker Compose

---

## 📦 Installation & Setup

### With Docker (recommended)

```bash
# Clone the project
git clone https://github.com/yourusername/portfolio_actual.git
cd portfolio_actual

# Configure environment
cp .env.example .env
# Edit .env: DATABASE_URL, STRIPE_SECRET_KEY

# Start containers
docker-compose up -d --build

# Install dependencies
docker-compose exec php composer install

# Create database
docker-compose exec php php bin/console doctrine:migrations:migrate --no-interaction

# Access the application
# URL: http://localhost:8081
```

### Without Docker

```bash
# Install dependencies
composer install

# Create database
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate

# Start server
symfony serve
# or: php -S localhost:8000 -t public/

# URL: http://localhost:8000
```

---

## 📝 Usage

### Create an admin account

1. Register via `/register`
2. Promote user to admin:

```bash
# With Docker
docker-compose exec mysql mysql -u actual_user -pactual_pass actual_db -e "UPDATE user SET roles='[\"ROLE_ADMIN\"]' WHERE email='your-email@example.com';"

# Without Docker
mysql -u actual_user -pactual_pass actual_db -e "UPDATE user SET roles='[\"ROLE_ADMIN\"]' WHERE email='your-email@example.com';"
```

### Test Stripe payments

Test card: `4242 4242 4242 4242`  
Expiration date: any future date  
CVV: any 3-digit code

---

## ✨ Features

**Users:**
- Registration and login
- Browse courses and sessions
- Book a session (Stripe payment)
- Purchase session packages
- Cancel bookings (automatic refund)

**Administrators:**
- Manage courses (CRUD)
- Schedule sessions (CRUD)
- View all bookings
- Manage users and roles

---

## 🧪 Tests

```bash
# With Docker
docker-compose exec php php bin/phpunit

# Without Docker
php bin/phpunit
```

---

## 📁 Structure

```
portfolio_actual/
├── src/
│   ├── Controller/    # Controllers (routes + logic)
│   ├── Entity/        # Doctrine entities (models)
│   └── Repository/    # Database queries
├── templates/         # Twig views
├── public/            # Assets (CSS, images)
├── migrations/        # Doctrine migrations
├── docker/            # Docker configuration
└── tests/             # PHPUnit tests
```
---

## ✅ MVP Scope

### What Was Implemented

**Authentication & Security**
- ✔️ User gistration with email/password
- ✔️ Secure login with bcrypt password hashing
- ✔️ Role-based access control (ROLE_USER, ROLE_ADMIN)
- ✔️ CSRF token protection on forms
- ✔️ Session management

**User Features**
- ✔️ Browse all available courses
- ✔️ View sessions with available spots and dates
- ✔️ Book a session (if spots available)
- ✔️ Pay for sessions via Stripe (test mode)
- ✔️ Purchase SessionBooks (multi-session packages)
- ✔️ User dashboard to view bookings
- ✔️ Cancel future bookings with automatic refund
- ✔️ Homepage with course highlights

**Admin Features**
- ✔️ Admin dashboard with stats
- ✔️ CRUD operations for courses (Create, Read, Update, Delete)
- ✔️ CRUD operations for sessions (schedule time slots)
- ✔️ View all registrations and payments
- ✔️ Manage users (view, toggle admin role)
- ✔️ Cancel bookings on behalf of users

**Technical Features**
- ✔️ Responsive design (custom CSS inspired by Bootstrap principles)
- ✔️ Database transactions for booking safety
- ✔️ Stripe payment integration (test mode)
- ✔️ Docker development environment
- ✔️ Database migrations with Doctrine
- ✔️ Unit tests (~65% coverage)

### What Was Not Implemented

- ❌ Email notifications (booking confirmations, reminders)
- ❌ Calendar view for sessions
- ❌ Multi-language support (only French for now)
- ❌ Mobile app version
- ❌ Advanced admin analytics dashboard
- ❌ Production deployment (in progress)
- ❌ Stripe webhooks for payment confirmation
- ❌ User profile editing
- ❌ Course categories/filters
- ❌ Photo uploads for courses
- ❌ Reviews/ratings system

---

## 📞 Contact
  
**Malik BOUNANI** - malik.bounani@holbertonstudents.com
**Christophe BARRERE** - christophe.barrere@holbertonstudents.com

**© 2026 - Holberton School Toulouse**

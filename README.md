# Lumetech Technologies — Enterprise B2B Website & Software Ecosystem

[![PHP 8.2+](https://img.shields.io/badge/PHP-8.2%2B-777BB4?style=flat-square&logo=php&logoColor=white)](https://www.php.net)
[![Bootstrap 5.3](https://img.shields.io/badge/Bootstrap-5.3-7952B3?style=flat-square&logo=bootstrap&logoColor=white)](https://getbootstrap.com)
[![MySQL 8](https://img.shields.io/badge/MySQL-8.0-4479A1?style=flat-square&logo=mysql&logoColor=white)](https://www.mysql.com)
[![License: Proprietary](https://img.shields.io/badge/License-Proprietary-00F0FF?style=flat-square)](https://lumetech.info)

## 📌 Project Overview

**Lumetech Technologies** is an enterprise technology provider headquartered in Sector-44, Noida, Uttar Pradesh. This web application is engineered for high performance, zero latency, responsive usability across 10 device breakpoints, dynamic local SEO generation (9 cities), and 11 turnkey B2B software products.

Developed with modular vanilla PHP 8.2+, ES6 JavaScript Modules, and ITCSS/BEM CSS custom properties.

---

## 📁 Directory Architecture

```
web-lumetech/
├── .env.example                       # Environment configuration template
├── .htaccess                          # Apache performance, GZIP & security headers
├── robots.txt                         # Production search engine crawler rules
├── sitemap.xml                        # Static XML sitemap fallback
├── sitemap.php                        # Dynamic XML sitemap generator
├── index.php                          # Master Homepage (13 Sections)
├── about.php                          # Company overview & leadership page
├── services.php                       # Services Hub (9 Core Services & 5-Stage Lifecycle)
├── service-detail.php                 # Reusable Service Detail Template
├── products.php                       # Product Catalog (11 Products & Category Filters)
├── product-detail.php                 # Reusable Product Detail Template
├── industries.php                     # 10 Industry Verticals Hub
├── portfolio.php                      # Client Success Stories (Vanilla JS Filtering)
├── case-study-detail.php              # Reusable Case Study Detail Template
├── blog.php                           # Insights & Research Hub (Live Search)
├── blog-detail.php                    # Reusable Article Template with Table of Contents
├── contact.php                        # Contact & Lead Generation Page
├── contact-us.php                     # Clean wrapper pointing to contact.php
├── 404.php                            # Custom 404 error page with quick links
│
├── assets/
│   ├── css/                           # ITCSS Layered Stylesheets
│   │   ├── variables.css              # Design tokens, colors & scale
│   │   ├── reset.css                  # Modern reset & WCAG focus states
│   │   ├── typography.css             # Fluid typography & gradients
│   │   ├── components.css             # Buttons, cards, header, footer, forms
│   │   ├── utilities.css              # Layout grid & spacing helpers
│   │   └── style.css                  # Master CSS entry point
│   ├── js/
│   │   ├── modules/
│   │   │   ├── nav.js                 # Sticky header & offcanvas drawer
│   │   │   ├── forms.js               # AJAX submission & rate-limited alerts
│   │   │   └── animations.js          # AOS, Swiper, GLightbox & counters
│   │   └── main.js                    # Production JS Entry Point
│   └── images/                        # SVG logos & assets
│
├── includes/
│   ├── config.php                     # Core environment & security configuration
│   ├── db.php                         # PDO Singleton database connection
│   ├── functions.php                  # Sanitization, CSRF & render_component()
│   ├── header.php                     # Global Header, Megamenus, Meta & Schema
│   ├── footer.php                     # Global Footer, Newsletter & Scripts
│   ├── components/                    # Reusable PHP Component Views
│   │   ├── component-section-heading.php
│   │   ├── component-button.php
│   │   ├── component-cta.php
│   │   ├── component-breadcrumb.php
│   │   └── component-form-controls.php
│   └── data/                          # Data Registries
│       ├── services.php               # 9 Core Services data
│       ├── products.php               # 11 Products data
│       ├── portfolio.php              # Case studies & metrics data
│       ├── blog.php                   # Technical whitepapers & articles data
│       └── locations.php              # 9 City SEO unique content data
│
├── api/
│   └── submit-lead.php                # CSRF & Rate-limited Lead Ingestion API
│
├── admin/                             # Secure Admin Panel Console
│   ├── auth_check.php                 # RBAC Session middleware
│   ├── login.php                      # Admin Login Portal
│   ├── logout.php                     # Session termination
│   ├── index.php                      # Admin Dashboard
│   └── leads.php                      # Lead Management Module
│
└── database/
    └── setup.php                      # Database auto-creation & seeding script
```

---

## 🛠️ Complete Feature & Page Inventory

### Core Pages
- **Homepage (`index.php`)**: Hero, Trust Statistics Counters, Why Lumetech, Services Overview, Product Showcase, Industry Verticals, Tech Ecosystem Ticker, Case Studies, Testimonials Carousel, Blog Previews, CTA, and Footer.
- **Services Hub (`services.php`)**: 9 Core Services Grid, 5-Stage Engineering Lifecycle (**Discover → Design → Build → Deploy → Support**), and FAQ Accordion.
- **Service Detail Template (`service-detail.php`)**: Single template driving specs for all 9 services (`web-development`, `app-development`, `ui-ux-designing`, `api-development`, `cms-development`, `saas-product-development`, `ai-agent-development`, `bot-development`, `desktop-app-development`).
- **Products Catalog (`products.php`)**: Category filters and cards for all 11 products.
- **Product Detail Template (`product-detail.php`)**: Reusable template powering 11 B2B software products (`quick-commerce`, `hathbook`, `healthopolis`, `transfleet`, `genset-rental`, `rta-back-office`, `lumetech-crm`, `factoryos`, `cafeos`, `payos`, `finconnect`). Features GLightbox galleries, benefits matrix, and connectors.
- **Industries Hub (`industries.php`)**: Tailored solutions for Fintech, Manufacturing, Healthcare, Quick Commerce, Restaurants, Logistics, Transportation, Retail, SaaS, and Financial Services.
- **Portfolio (`portfolio.php`)**: Instant Vanilla JS category filter and case study cards.
- **Case Study Detail (`case-study-detail.php`)**: Challenge vs. Solution, Quantifiable Results Grid, and GLightbox screenshots.
- **Blog Hub (`blog.php`)**: Featured spotlight card, instant live search, category badges.
- **Blog Detail (`blog-detail.php`)**: Table of Contents sidebar, author card, reading time, and related research.
- **Contact Us (`contact.php`)**: Direct Phone, Email, WhatsApp CTAs, AJAX Lead Form, and Google Maps embed for Sector-44, Noida.
- **Admin Panel (`/admin`)**: Login, Logout, Session Protection, Dashboard, and Lead Management.
- **404 Error Page (`404.php`)**: Custom error UI with site search and quick links.

---

## 🗄️ Database Setup Instructions

1. Ensure MySQL 8.0+ is running on your web server.
2. Configure credentials in `.env` or `includes/config.php`.
3. Execute the automated database setup script:
   ```bash
   php database/setup.php
   ```
4. This script automatically creates the database `lumetech_db`, initializes all required tables (`users`, `leads`, `services`, `products`, `blogs`, `locations`), and seeds the default admin user:
   - **Username**: `admin`
   - **Password**: `admin123`

---

## 🔒 Security Hardening Matrix

| Security Layer | Implementation Detail | Status |
| :--- | :--- | :---: |
| **SQL Injection Prevention** | All database interactions utilize PDO prepared statements with bound parameters. | **VERIFIED** |
| **CSRF Protection** | Unique 256-bit cryptographically secure session tokens generated for every POST form. | **VERIFIED** |
| **XSS Defense** | All user inputs and database outputs are filtered using `htmlspecialchars()` & `sanitize_string()`. | **VERIFIED** |
| **Session Security** | `cookie_httponly`, `use_only_cookies`, `SameSite=Lax` enabled in session initialization. | **VERIFIED** |
| **Password Security** | Passwords hashed using `password_hash()` (BCRYPT) and verified via `password_verify()`. | **VERIFIED** |
| **API Rate Limiting** | Endpoint `api/submit-lead.php` caps submissions at 5 per 10-minute window per IP address. | **VERIFIED** |
| **Admin Protection** | Route middleware `admin/auth_check.php` enforces session validity before rendering views. | **VERIFIED** |

---

## ⚡ Performance & QA Status

- **Responsive Testing**: Verified across 10 viewports (360px, 390px, 480px, 576px, 768px, 1024px, 1280px, 1366px, 1440px, 1920px) with 0 horizontal scroll overflow.
- **Third-Party Libraries**: Bootstrap 5.3.3, AOS 2.3.4, Swiper 11, GLightbox, Bootstrap Icons 1.11.3.
- **PHP Syntax Compliance**: 100% clean check across all PHP files via `php.exe -l`.

---

## 🛠️ Deployment Instructions

1. Upload all files to your web server document root (e.g., `public_html` or `htdocs/web-lumetech`).
2. Copy `.env.example` to `.env` and fill in production database credentials and domain URL.
3. Ensure Apache `mod_rewrite`, `mod_deflate`, and `mod_expires` are enabled.
4. Run `php database/setup.php` to initialize MySQL tables and the default admin user.

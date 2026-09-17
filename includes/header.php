<?php
/**
 * Lumetech Global Header Shell Component - Phase 14 SEO Enhanced
 */
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/functions.php';

$page_title = $page_title ?? DEFAULT_META_TITLE;
$page_desc = $page_desc ?? DEFAULT_META_DESC;
$current_page = $current_page ?? 'home';
$header_transparent = $header_transparent ?? false;
$header_class = $header_transparent ? 'lum-header lum-header--transparent' : 'lum-header';

$canonical_url = SITE_URL . strtok($_SERVER['REQUEST_URI'] ?? '', '?');
$og_image = $og_image ?? (SITE_URL . '/assets/images/logo/lumetech-logo-dark.svg');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= sanitize_string($page_title) ?></title>
  <meta name="description" content="<?= sanitize_string($page_desc) ?>">
  <meta name="theme-color" content="#F8FAFC">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="<?= SITE_URL ?>/assets/images/logo/lumetech-logo.png">
  <link rel="apple-touch-icon" href="<?= SITE_URL ?>/assets/images/logo/lumetech-logo.png">

  <!-- Canonical URL -->
  <link rel="canonical" href="<?= sanitize_string($canonical_url) ?>">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Lumetech Technologies">
  <meta property="og:url" content="<?= sanitize_string($canonical_url) ?>">
  <meta property="og:title" content="<?= sanitize_string($page_title) ?>">
  <meta property="og:description" content="<?= sanitize_string($page_desc) ?>">
  <meta property="og:image" content="<?= sanitize_string($og_image) ?>">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= sanitize_string($page_title) ?>">
  <meta name="twitter:description" content="<?= sanitize_string($page_desc) ?>">
  <meta name="twitter:image" content="<?= sanitize_string($og_image) ?>">

  <!-- Google Fonts: Inter & Plus Jakarta Sans -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">

  <!-- Bootstrap 5.3.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Bootstrap Icons 1.11.3 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Swiper 11 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- GLightbox CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

  <!-- Lumetech Custom Design System Stylesheet -->
  <link rel="stylesheet" href="<?= SITE_URL ?>/assets/css/style.css">

  <!-- Organization & WebSite JSON-LD Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Organization",
        "@id": "<?= SITE_URL ?>/#organization",
        "name": "Lumetech Technologies",
        "url": "<?= SITE_URL ?>",
        "logo": "<?= SITE_URL ?>/assets/images/logo/lumetech-logo-dark.svg",
        "telephone": "<?= CONTACT_PHONE_FORMATTED ?>",
        "email": "<?= CONTACT_EMAIL ?>",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "Sector-44",
          "addressLocality": "Noida",
          "addressRegion": "Uttar Pradesh",
          "addressCountry": "IN"
        }
      },
      {
        "@type": "WebSite",
        "@id": "<?= SITE_URL ?>/#website",
        "url": "<?= SITE_URL ?>",
        "name": "Lumetech Technologies",
        "publisher": {
          "@id": "<?= SITE_URL ?>/#organization"
        }
      }
    ]
  }
  </script>
</head>
<body>

  <!-- Accessible Skip to Main Content Link -->
  <a href="#main-content" class="visually-hidden focusable p-3 bg-primary text-white position-absolute start-0 top-0 z-3">Skip to main content</a>

  <!-- Top Enterprise Utility Bar (Dark Charcoal Top Bar, 100% Crisp White Readable Links) -->
  <div class="py-2 d-none d-md-block text-white overflow-hidden" style="background-color: #26282B !important; border-bottom: 1px solid rgba(255, 255, 255, 0.1); font-size: 0.82rem; line-height: 1;">
    <div class="lum-container">
      <div class="d-flex justify-content-between align-items-center flex-nowrap" style="white-space: nowrap;">
        
        <!-- Left Zone: Support & Email Contacts -->
        <div class="d-flex align-items-center gap-3 gap-xl-4 flex-nowrap">
          <span style="color: #FFFFFF !important; white-space: nowrap;">
            <i class="bi bi-headset me-1" style="color: #FF6B00 !important;"></i> Support: 
            <a href="tel:<?= CONTACT_PHONE ?>" class="text-decoration-none fw-bold" style="color: #FFFFFF !important; white-space: nowrap;"><?= CONTACT_PHONE_FORMATTED ?></a>
          </span>

          <span style="color: #FFFFFF !important; white-space: nowrap;">
            <i class="bi bi-envelope me-1" style="color: #FF6B00 !important;"></i> Email: 
            <a href="mailto:<?= CONTACT_EMAIL ?>" class="text-decoration-none fw-bold" style="color: #FFFFFF !important; white-space: nowrap;"><?= CONTACT_EMAIL ?></a>
          </span>
        </div>

        <!-- Right Zone: WhatsApp Scoping, Noida Desk & Brand Orange CTA Button -->
        <div class="d-flex align-items-center gap-3 gap-xl-4 flex-nowrap">
          <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=Hello%20Lumetech%20Team,%20I%20want%20to%20discuss%20an%20enterprise%20project." target="_blank" rel="noopener noreferrer" class="text-decoration-none fw-bold" style="color: #FFFFFF !important; white-space: nowrap;">
            <i class="bi bi-whatsapp me-1" style="color: #25D366 !important;"></i> <?= CONTACT_PHONE_FORMATTED ?>
          </a>

          <a href="<?= SITE_URL ?>/contact.php" class="text-decoration-none" style="color: #FFFFFF !important; white-space: nowrap;">
            <i class="bi bi-building me-1" style="color: #FF6B00 !important;"></i> Noida Desk
          </a>
          
          <a href="<?= SITE_URL ?>/contact.php" class="btn btn-sm lum-animated-quote-btn px-3 py-1.5 fw-bold text-uppercase ms-1">
            Request A Quote
          </a>
        </div>

      </div>
    </div>
  </div>

  <!-- Header Shell Component -->
  <header class="<?= $header_class ?>">
    <div class="lum-container">
      <div class="lum-header__inner">
        <!-- Brand Logo -->
        <a href="<?= SITE_URL ?>" class="lum-brand-logo" aria-label="Lumetech Technologies Home">
          <img src="<?= SITE_URL ?>/assets/images/logo/lumetech-logo.png" alt="Lumetech Technologies" style="height: 48px; max-height: 48px; width: auto; object-fit: contain;">
        </a>

        <!-- Desktop Navigation with Megamenu -->
        <nav class="d-none d-lg-block" aria-label="Main Navigation">
          <ul class="lum-nav-list">
            <li class="lum-nav-item">
              <a href="<?= SITE_URL ?>" class="lum-nav-link <?= $current_page === 'home' ? 'active' : '' ?>">Home</a>
            </li>

            <!-- Services Megamenu Dropdown (4-Column Layout & Dark Quick Bar) -->
            <li class="lum-nav-item lum-nav-item--has-megamenu lum-nav-item--wide-megamenu">
              <button class="lum-nav-link <?= $current_page === 'services' ? 'active' : '' ?>" aria-expanded="false" aria-haspopup="true">
                Services <i class="bi bi-chevron-down ms-1 fs-6"></i>
              </button>
              
              <div class="lum-megamenu lum-megamenu--services">
                <div class="row g-0">
                  
                  <!-- Column 1: Web & Mobile Services -->
                  <div class="col-md-3 px-3 py-2 border-end border-secondary border-opacity-10">
                    <div class="d-flex align-items-center gap-3 mb-3">
                      <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 44px; height: 44px; border: 1.5px solid #FF6B00; color: #FF6B00; background: transparent;">
                        <i class="bi bi-code-slash fs-5"></i>
                      </div>
                      <div>
                        <strong class="d-block fw-bold lh-1 mb-1" style="font-size: 1.02rem; color: #FF6B00 !important;">Web &amp; Mobile</strong>
                        <span class="small fw-semibold" style="font-size: 0.84rem; color: #FF6B00 !important;">Engineering</span>
                      </div>
                    </div>
                    <ul class="list-unstyled mb-0 lum-tech-menu-list">
                      <li><a href="<?= SITE_URL ?>/service-detail.php?slug=web-development"><i class="bi bi-circle"></i> Web Development</a></li>
                      <li><a href="<?= SITE_URL ?>/service-detail.php?slug=app-development"><i class="bi bi-circle"></i> App Development</a></li>
                      <li><a href="<?= SITE_URL ?>/service-detail.php?slug=ui-ux-designing"><i class="bi bi-circle"></i> UI/UX Designing</a></li>
                      <li><a href="<?= SITE_URL ?>/service-detail.php?slug=web-development"><i class="bi bi-circle"></i> Progressive Web Apps</a></li>
                    </ul>
                  </div>

                  <!-- Column 2: Enterprise & Cloud Services -->
                  <div class="col-md-3 px-3 py-2 border-end border-secondary border-opacity-10">
                    <div class="d-flex align-items-center gap-3 mb-3">
                      <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 44px; height: 44px; border: 1.5px solid #FF6B00; color: #FF6B00; background: transparent;">
                        <i class="bi bi-cloud-slash fs-5"></i>
                      </div>
                      <div>
                        <strong class="d-block fw-bold lh-1 mb-1" style="font-size: 1.02rem; color: #FF6B00 !important;">Enterprise &amp; Cloud</strong>
                        <span class="small fw-semibold" style="font-size: 0.84rem; color: #FF6B00 !important;">Architectures</span>
                      </div>
                    </div>
                    <ul class="list-unstyled mb-0 lum-tech-menu-list">
                      <li><a href="<?= SITE_URL ?>/service-detail.php?slug=saas-product-development"><i class="bi bi-circle"></i> SaaS Product Development</a></li>
                      <li><a href="<?= SITE_URL ?>/service-detail.php?slug=api-development"><i class="bi bi-circle"></i> API Engineering &amp; Integration</a></li>
                      <li><a href="<?= SITE_URL ?>/service-detail.php?slug=cms-development"><i class="bi bi-circle"></i> Enterprise CMS Portals</a></li>
                      <li><a href="<?= SITE_URL ?>/service-detail.php?slug=saas-product-development"><i class="bi bi-circle"></i> Multi-Tenant Platforms</a></li>
                    </ul>
                  </div>

                  <!-- Column 3: AI & Automation Services -->
                  <div class="col-md-3 px-3 py-2 border-end border-secondary border-opacity-10">
                    <div class="d-flex align-items-center gap-3 mb-3">
                      <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 44px; height: 44px; border: 1.5px solid #FF6B00; color: #FF6B00; background: transparent;">
                        <i class="bi bi-robot fs-5"></i>
                      </div>
                      <div>
                        <strong class="d-block fw-bold lh-1 mb-1" style="font-size: 1.02rem; color: #FF6B00 !important;">AI &amp; Automation</strong>
                        <span class="small fw-semibold" style="font-size: 0.84rem; color: #FF6B00 !important;">Workflows</span>
                      </div>
                    </div>
                    <ul class="list-unstyled mb-0 lum-tech-menu-list">
                      <li><a href="<?= SITE_URL ?>/service-detail.php?slug=ai-agent-development"><i class="bi bi-circle"></i> Autonomous AI Agents</a></li>
                      <li><a href="<?= SITE_URL ?>/service-detail.php?slug=bot-development"><i class="bi bi-circle"></i> Omnichannel Bots &amp; NLU</a></li>
                      <li><a href="<?= SITE_URL ?>/service-detail.php?slug=ai-agent-development"><i class="bi bi-circle"></i> RAG &amp; Vector Databases</a></li>
                      <li><a href="<?= SITE_URL ?>/service-detail.php?slug=desktop-app-development"><i class="bi bi-circle"></i> Desktop Software Engineering</a></li>
                    </ul>
                  </div>

                  <!-- Column 4: Specialized Capabilities -->
                  <div class="col-md-3 px-3 py-2">
                    <div class="d-flex align-items-center gap-3 mb-3">
                      <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 44px; height: 44px; border: 1.5px solid #FF6B00; color: #FF6B00; background: transparent;">
                        <i class="bi bi-lightning-charge fs-5"></i>
                      </div>
                      <div>
                        <strong class="d-block fw-bold lh-1 mb-1" style="font-size: 1.02rem; color: #FF6B00 !important;">Specialized</strong>
                        <span class="small fw-semibold" style="font-size: 0.85rem; color: #FF6B00 !important;">Capabilities</span>
                      </div>
                    </div>
                    <ul class="list-unstyled mb-0 lum-tech-menu-list">
                      <li><a href="<?= SITE_URL ?>/services.php"><i class="bi bi-circle"></i> Microservices Architecture</a></li>
                      <li><a href="<?= SITE_URL ?>/services.php"><i class="bi bi-circle"></i> DevOps &amp; CI/CD Pipelines</a></li>
                      <li><a href="<?= SITE_URL ?>/services.php"><i class="bi bi-circle"></i> Legacy System Migration</a></li>
                      <li><a href="<?= SITE_URL ?>/services.php"><i class="bi bi-circle"></i> Security &amp; Compliance Audit</a></li>
                    </ul>
                  </div>

                </div>

                <!-- Megamenu Dark Bottom Quick Action Bar (5 Real Site Links) -->
                <div class="lum-megamenu-bottom-bar">
                  <div class="row g-0 text-center">
                    <div class="col">
                      <a href="<?= SITE_URL ?>/portfolio.php" class="lum-megamenu-bottom-link d-flex align-items-center justify-content-center gap-2 py-3 px-2">
                        <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 32px; height: 32px; border: 1px solid rgba(255, 255, 255, 0.3); color: #FF6B00; transition: all 0.2s ease;">
                          <i class="bi bi-trophy fs-6"></i>
                        </div>
                        <span class="fw-bold text-white text-uppercase" style="font-size: 0.78rem; letter-spacing: 0.05em;">Case Studies</span>
                      </a>
                    </div>
                    <div class="col">
                      <a href="<?= SITE_URL ?>/industries.php" class="lum-megamenu-bottom-link d-flex align-items-center justify-content-center gap-2 py-3 px-2">
                        <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 32px; height: 32px; border: 1px solid rgba(255, 255, 255, 0.3); color: #FF6B00; transition: all 0.2s ease;">
                          <i class="bi bi-buildings fs-6"></i>
                        </div>
                        <span class="fw-bold text-white text-uppercase" style="font-size: 0.78rem; letter-spacing: 0.05em;">Industries</span>
                      </a>
                    </div>
                    <div class="col">
                      <a href="<?= SITE_URL ?>/blog.php" class="lum-megamenu-bottom-link d-flex align-items-center justify-content-center gap-2 py-3 px-2">
                        <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 32px; height: 32px; border: 1px solid rgba(255, 255, 255, 0.3); color: #FF6B00; transition: all 0.2s ease;">
                          <i class="bi bi-journal-text fs-6"></i>
                        </div>
                        <span class="fw-bold text-white text-uppercase" style="font-size: 0.78rem; letter-spacing: 0.05em;">Tech Insights</span>
                      </a>
                    </div>
                    <div class="col">
                      <a href="<?= SITE_URL ?>/about.php" class="lum-megamenu-bottom-link d-flex align-items-center justify-content-center gap-2 py-3 px-2">
                        <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 32px; height: 32px; border: 1px solid rgba(255, 255, 255, 0.3); color: #FF6B00; transition: all 0.2s ease;">
                          <i class="bi bi-building fs-6"></i>
                        </div>
                        <span class="fw-bold text-white text-uppercase" style="font-size: 0.78rem; letter-spacing: 0.05em;">About Us</span>
                      </a>
                    </div>
                    <div class="col">
                      <a href="<?= SITE_URL ?>/services.php" class="lum-megamenu-bottom-link d-flex align-items-center justify-content-center gap-2 py-3 px-2 border-end-0">
                        <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 32px; height: 32px; border: 1px solid rgba(255, 255, 255, 0.3); color: #FF6B00; transition: all 0.2s ease;">
                          <i class="bi bi-gear-wide-connected fs-6"></i>
                        </div>
                        <span class="fw-bold text-white text-uppercase" style="font-size: 0.78rem; letter-spacing: 0.05em;">All Services</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <!-- Products Megamenu Dropdown (All 11 Turnkey Products) -->
            <li class="lum-nav-item lum-nav-item--has-megamenu lum-nav-item--wide-megamenu">
              <button class="lum-nav-link <?= $current_page === 'products' ? 'active' : '' ?>" aria-expanded="false" aria-haspopup="true">
                Products <i class="bi bi-chevron-down ms-1 fs-6"></i>
              </button>
              
              <div class="lum-megamenu lum-megamenu--services">
                <div class="row g-0">
                  
                  <!-- Column 1: E-Commerce & Retail (3 Products) -->
                  <div class="col-md-3 px-3 py-2 border-end border-secondary border-opacity-10">
                    <div class="d-flex align-items-center gap-3 mb-3">
                      <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 44px; height: 44px; border: 1.5px solid #FF6B00; color: #FF6B00; background: transparent;">
                        <i class="bi bi-cart3 fs-5"></i>
                      </div>
                      <div>
                        <strong class="d-block fw-bold lh-1 mb-1" style="font-size: 1.02rem; color: #FF6B00 !important;">E-Commerce &amp; Retail</strong>
                        <span class="small fw-semibold" style="font-size: 0.84rem; color: #FF6B00 !important;">3 Platforms</span>
                      </div>
                    </div>
                    <ul class="list-unstyled mb-0 lum-tech-menu-list">
                      <li><a href="<?= SITE_URL ?>/product-detail.php?slug=quick-commerce"><i class="bi bi-circle"></i> Quick Commerce Platform</a></li>
                      <li><a href="<?= SITE_URL ?>/product-detail.php?slug=hathbook"><i class="bi bi-circle"></i> Hathbook Marketplace</a></li>
                      <li><a href="<?= SITE_URL ?>/product-detail.php?slug=cafeos"><i class="bi bi-circle"></i> CaféOS Restaurant Suite</a></li>
                    </ul>
                  </div>

                  <!-- Column 2: Fintech & Payments (3 Products) -->
                  <div class="col-md-3 px-3 py-2 border-end border-secondary border-opacity-10">
                    <div class="d-flex align-items-center gap-3 mb-3">
                      <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 44px; height: 44px; border: 1.5px solid #FF6B00; color: #FF6B00; background: transparent;">
                        <i class="bi bi-credit-card fs-5"></i>
                      </div>
                      <div>
                        <strong class="d-block fw-bold lh-1 mb-1" style="font-size: 1.02rem; color: #FF6B00 !important;">Fintech &amp; Payments</strong>
                        <span class="small fw-semibold" style="font-size: 0.84rem; color: #FF6B00 !important;">3 Engines</span>
                      </div>
                    </div>
                    <ul class="list-unstyled mb-0 lum-tech-menu-list">
                      <li><a href="<?= SITE_URL ?>/product-detail.php?slug=payos"><i class="bi bi-circle"></i> PayOS Gateway Switch</a></li>
                      <li><a href="<?= SITE_URL ?>/product-detail.php?slug=lumetech-crm"><i class="bi bi-circle"></i> Lumetech Lending CRM</a></li>
                      <li><a href="<?= SITE_URL ?>/product-detail.php?slug=finconnect"><i class="bi bi-circle"></i> FinConnect AEPS Distributor</a></li>
                    </ul>
                  </div>

                  <!-- Column 3: Industrial & Operations (3 Products) -->
                  <div class="col-md-3 px-3 py-2 border-end border-secondary border-opacity-10">
                    <div class="d-flex align-items-center gap-3 mb-3">
                      <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 44px; height: 44px; border: 1.5px solid #FF6B00; color: #FF6B00; background: transparent;">
                        <i class="bi bi-gear-wide fs-5"></i>
                      </div>
                      <div>
                        <strong class="d-block fw-bold lh-1 mb-1" style="font-size: 1.02rem; color: #FF6B00 !important;">Industrial &amp; Operations</strong>
                        <span class="small fw-semibold" style="font-size: 0.84rem; color: #FF6B00 !important;">3 Systems</span>
                      </div>
                    </div>
                    <ul class="list-unstyled mb-0 lum-tech-menu-list">
                      <li><a href="<?= SITE_URL ?>/product-detail.php?slug=factoryos"><i class="bi bi-circle"></i> FactoryOS Manufacturing ERP</a></li>
                      <li><a href="<?= SITE_URL ?>/product-detail.php?slug=transfleet"><i class="bi bi-circle"></i> TransFleet Logistics</a></li>
                      <li><a href="<?= SITE_URL ?>/product-detail.php?slug=genset-rental"><i class="bi bi-circle"></i> Genset Rental Software</a></li>
                    </ul>
                  </div>

                  <!-- Column 4: Healthcare & Compliance (2 Products) -->
                  <div class="col-md-3 px-3 py-2">
                    <div class="d-flex align-items-center gap-3 mb-3">
                      <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 44px; height: 44px; border: 1.5px solid #FF6B00; color: #FF6B00; background: transparent;">
                        <i class="bi bi-hospital fs-5"></i>
                      </div>
                      <div>
                        <strong class="d-block fw-bold lh-1 mb-1" style="font-size: 1.02rem; color: #FF6B00 !important;">Healthcare &amp; Compliance</strong>
                        <span class="small fw-semibold" style="font-size: 0.85rem; color: #FF6B00 !important;">2 Platforms</span>
                      </div>
                    </div>
                    <ul class="list-unstyled mb-0 lum-tech-menu-list">
                      <li><a href="<?= SITE_URL ?>/product-detail.php?slug=healthopolis"><i class="bi bi-circle"></i> Healthopolis Diagnostics</a></li>
                      <li><a href="<?= SITE_URL ?>/product-detail.php?slug=rta-back-office"><i class="bi bi-circle"></i> RTA Back Office System</a></li>
                    </ul>
                  </div>

                </div>

                <!-- Megamenu Dark Bottom Quick Action Bar (5 Real Site Links) -->
                <div class="lum-megamenu-bottom-bar">
                  <div class="row g-0 text-center">
                    <div class="col">
                      <a href="<?= SITE_URL ?>/products.php" class="lum-megamenu-bottom-link d-flex align-items-center justify-content-center gap-2 py-3 px-2">
                        <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 32px; height: 32px; border: 1px solid rgba(255, 255, 255, 0.3); color: #FF6B00; transition: all 0.2s ease;">
                          <i class="bi bi-box-seam fs-6"></i>
                        </div>
                        <span class="fw-bold text-white text-uppercase" style="font-size: 0.78rem; letter-spacing: 0.05em;">All 11 Products</span>
                      </a>
                    </div>
                    <div class="col">
                      <a href="<?= SITE_URL ?>/portfolio.php" class="lum-megamenu-bottom-link d-flex align-items-center justify-content-center gap-2 py-3 px-2">
                        <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 32px; height: 32px; border: 1px solid rgba(255, 255, 255, 0.3); color: #FF6B00; transition: all 0.2s ease;">
                          <i class="bi bi-trophy fs-6"></i>
                        </div>
                        <span class="fw-bold text-white text-uppercase" style="font-size: 0.78rem; letter-spacing: 0.05em;">Case Studies</span>
                      </a>
                    </div>
                    <div class="col">
                      <a href="<?= SITE_URL ?>/industries.php" class="lum-megamenu-bottom-link d-flex align-items-center justify-content-center gap-2 py-3 px-2">
                        <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 32px; height: 32px; border: 1px solid rgba(255, 255, 255, 0.3); color: #FF6B00; transition: all 0.2s ease;">
                          <i class="bi bi-buildings fs-6"></i>
                        </div>
                        <span class="fw-bold text-white text-uppercase" style="font-size: 0.78rem; letter-spacing: 0.05em;">Industries</span>
                      </a>
                    </div>
                    <div class="col">
                      <a href="<?= SITE_URL ?>/blog.php" class="lum-megamenu-bottom-link d-flex align-items-center justify-content-center gap-2 py-3 px-2">
                        <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 32px; height: 32px; border: 1px solid rgba(255, 255, 255, 0.3); color: #FF6B00; transition: all 0.2s ease;">
                          <i class="bi bi-journal-text fs-6"></i>
                        </div>
                        <span class="fw-bold text-white text-uppercase" style="font-size: 0.78rem; letter-spacing: 0.05em;">Tech Insights</span>
                      </a>
                    </div>
                    <div class="col">
                      <a href="<?= SITE_URL ?>/contact.php" class="lum-megamenu-bottom-link d-flex align-items-center justify-content-center gap-2 py-3 px-2 border-end-0">
                        <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 32px; height: 32px; border: 1px solid rgba(255, 255, 255, 0.3); color: #FF6B00; transition: all 0.2s ease;">
                          <i class="bi bi-headset fs-6"></i>
                        </div>
                        <span class="fw-bold text-white text-uppercase" style="font-size: 0.78rem; letter-spacing: 0.05em;">Request Demo</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li class="lum-nav-item">
              <a href="<?= SITE_URL ?>/portfolio.php" class="lum-nav-link <?= $current_page === 'portfolio' ? 'active' : '' ?>">Portfolio</a>
            </li>
            <li class="lum-nav-item">
              <a href="<?= SITE_URL ?>/blog.php" class="lum-nav-link <?= $current_page === 'blog' ? 'active' : '' ?>">Blog</a>
            </li>
          </ul>
        </nav>

        <!-- CTA Action Buttons & Mobile Trigger -->
        <div class="d-flex align-items-center gap-3">
          <a href="<?= SITE_URL ?>/contact.php" class="lum-btn lum-btn-primary lum-btn-sm d-none d-sm-inline-flex">
            Get a Quote <i class="bi bi-arrow-right-short"></i>
          </a>
          <button class="lum-btn lum-btn-secondary lum-btn-sm d-lg-none lum-nav-toggle" aria-label="Toggle navigation menu" aria-expanded="false">
            <i class="bi bi-list fs-4"></i>
          </button>
        </div>
      </div>
    </div>
  </header>

  <!-- Mobile Offcanvas Backdrop Overlay -->
  <div class="lum-drawer-overlay"></div>

  <!-- Mobile Offcanvas Navigation Drawer -->
  <aside class="lum-nav-drawer" aria-label="Mobile Navigation">
    <div class="lum-nav-drawer__header">
      <a href="<?= SITE_URL ?>" class="lum-brand-logo">
        <img src="<?= SITE_URL ?>/assets/images/logo/lumetech-logo.png" alt="Lumetech Technologies" style="height: 44px; max-height: 44px; width: auto; object-fit: contain;">
      </a>
      <button class="lum-btn lum-btn-secondary lum-btn-sm lum-nav-toggle" aria-label="Close navigation menu">
        <i class="bi bi-x-lg fs-5"></i>
      </button>
    </div>
    
    <div class="lum-nav-drawer__body">
      <ul class="lum-mobile-nav">
        <li><a href="<?= SITE_URL ?>" class="lum-mobile-nav__link">Home</a></li>
        <li><a href="<?= SITE_URL ?>/services.php" class="lum-mobile-nav__link">Services <i class="bi bi-chevron-right fs-6"></i></a></li>
        <li><a href="<?= SITE_URL ?>/products.php" class="lum-mobile-nav__link">Products <i class="bi bi-chevron-right fs-6"></i></a></li>
        <li><a href="<?= SITE_URL ?>/portfolio.php" class="lum-mobile-nav__link">Portfolio</a></li>
        <li><a href="<?= SITE_URL ?>/blog.php" class="lum-mobile-nav__link">Blog & Insights</a></li>
        <li><a href="<?= SITE_URL ?>/contact.php" class="lum-mobile-nav__link">Contact Us</a></li>
      </ul>
    </div>

    <div class="lum-nav-drawer__footer">
      <a href="<?= SITE_URL ?>/contact.php" class="lum-btn lum-btn-primary w-100 justify-content-center">
        Contact Noida Desk <i class="bi bi-arrow-right"></i>
      </a>
    </div>
  </aside>

  <!-- Main Content Anchor -->
  <main id="main-content">

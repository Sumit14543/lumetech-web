<?php
/**
 * Lumetech Master Homepage
 */
$page_title = "Lumetech | Enterprise Technology, Custom Software & Hardware Solutions";
$page_desc = "Lumetech empowers global enterprises with cloud infrastructure, custom software development, AI agents, cybersecurity, and specialized B2B hardware solutions.";
$current_page = "home";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/data/services.php';
require_once __DIR__ . '/includes/data/products.php';

$all_services = get_services_data();
$all_products = get_products_data();
?>

<!-- 1. Header is loaded via includes/header.php -->

<!-- 2. SECTION: Hero (Full-Width Immersive 3D Sphere Banner) -->
<section class="lum-hero-section position-relative pt-5 pb-1.5 text-white overflow-hidden" style="background-image: url('<?= SITE_URL ?>/assets/images/hero/hero-banner.jpg'); background-size: cover; background-position: center top; min-height: 480px;">
  <!-- Subtle dark gradient overlay scoped to left text zone (Center sphere & right menu remain 100% bright & untouched) -->
  <div class="position-absolute inset-0 z-0" style="background: linear-gradient(90deg, #09041a 0%, rgba(9, 4, 26, 0.45) 22%, transparent 45%);"></div>

  <div class="lum-container position-relative z-1 pt-4 pt-lg-5 pb-2">
    <div class="row align-items-center g-4 g-lg-5">
      
      <!-- Left Column: Headline, Subtitle & CTA Action Buttons -->
      <div class="col-lg-6">

        <h1 class="lum-heading-1 text-white mb-3 fw-semibold" style="font-size: clamp(1.95rem, 3.2vw, 2.5rem); line-height: 1.25; letter-spacing: -0.02em; color: #FFFFFF !important; font-weight: 600 !important;">
          Custom <span style="color: #FF6B00 !important;">Web &amp;</span> <span style="color: #FFC107 !important;">Mobile App &amp;</span><br>CRM Development
        </h1>
        
        <p class="lum-lead mb-4" style="font-size: 1.1rem; line-height: 1.6; max-width: 600px; color: #FFFFFF !important; opacity: 1 !important; font-weight: 400 !important;">
          Lumetech delivers ultra-scalable web development, cross-platform mobile apps, custom CRM solutions, cloud DevOps, and autonomous AI agents engineered for sub-second speed, bank-grade security, and zero-downtime enterprise reliability.
        </p>

        <!-- CTA Action Buttons -->
        <div class="d-flex flex-column flex-sm-row gap-3 mt-4 mt-md-5 pt-2 mb-2 w-100">
          <a href="<?= SITE_URL ?>/products.php" class="lum-btn lum-hero-cta-primary justify-content-center">
            Explore Product Solutions <i class="bi bi-arrow-right-circle-fill ms-1 text-white"></i>
          </a>
          <a href="<?= SITE_URL ?>/services.php" class="lum-btn lum-hero-cta-secondary justify-content-center">
            Our Core Services <i class="bi bi-gear-wide-connected ms-1 text-white"></i>
          </a>
        </div>
      </div>

    </div>
  </div>

  <!-- Right Menu Block (Top Edge Aligned 1:1 Equal with Left Badge Pill) -->
  <div class="d-none d-lg-block position-absolute end-0 top-50 translate-middle-y me-1 me-xl-2 z-2" style="width: 265px; min-width: 265px; max-width: 265px; margin-top: -10px;">
    <div class="pe-0 me-0">
      
      <!-- Quick Service Links List -->
      <div class="d-flex flex-column mb-3">
        
        <a href="<?= SITE_URL ?>/service-detail.php?slug=app-development" class="d-flex align-items-center gap-3 text-white text-decoration-none py-2 border-bottom border-white border-opacity-10 hover-cyan">
          <i class="bi bi-phone fs-4 flex-shrink-0" style="color: #FFC107 !important;"></i>
          <span class="fw-semibold" style="color: #FFFFFF !important; font-size: 0.95rem;">Mobile App Development</span>
        </a>

        <a href="<?= SITE_URL ?>/service-detail.php?slug=web-development" class="d-flex align-items-center gap-3 text-white text-decoration-none py-2 border-bottom border-white border-opacity-10 hover-cyan">
          <i class="bi bi-display fs-4 flex-shrink-0" style="color: #FFC107 !important;"></i>
          <span class="fw-semibold" style="color: #FFFFFF !important; font-size: 0.95rem;">Website Design</span>
        </a>

        <a href="<?= SITE_URL ?>/product-detail.php?slug=quick-commerce" class="d-flex align-items-center gap-3 text-white text-decoration-none py-2 border-bottom border-white border-opacity-10 hover-cyan">
          <i class="bi bi-cart3 fs-4 flex-shrink-0" style="color: #FFC107 !important;"></i>
          <span class="fw-semibold" style="color: #FFFFFF !important; font-size: 0.95rem;">eCommerce Development</span>
        </a>

        <a href="<?= SITE_URL ?>/product-detail.php?slug=enterprise-crm" class="d-flex align-items-center gap-3 text-white text-decoration-none py-2 border-bottom border-white border-opacity-10 hover-cyan">
          <i class="bi bi-diagram-3 fs-4 flex-shrink-0" style="color: #FFC107 !important;"></i>
          <span class="fw-semibold" style="color: #FFFFFF !important; font-size: 0.95rem;">CRM Development</span>
        </a>

        <a href="<?= SITE_URL ?>/service-detail.php?slug=ai-agent-development" class="d-flex align-items-center gap-3 text-white text-decoration-none py-2 border-bottom border-white border-opacity-10 hover-cyan">
          <i class="bi bi-robot fs-4 flex-shrink-0" style="color: #FFC107 !important;"></i>
          <span class="fw-semibold" style="color: #FFFFFF !important; font-size: 0.95rem;">AI Agent Development</span>
        </a>

      </div>

      <!-- Tech Highlights Auto-Rotating Slider (Locked Box Dimension) -->
      <div class="pt-1">
        <h5 class="fw-bold mb-2" style="color: #FFC107 !important; font-size: 1.1rem; letter-spacing: -0.01em;">Tech Highlights</h5>
        
        <div id="lumHeroInsightsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3500">
          <div class="carousel-inner mb-2" style="height: 48px; min-height: 48px; max-height: 48px; overflow: hidden;">
            <div class="carousel-item active">
              <a href="<?= SITE_URL ?>/service-detail.php?slug=cloud-devops" class="text-white text-decoration-none d-block hover-cyan" style="font-size: 0.88rem; line-height: 1.35; color: #FFFFFF !important; opacity: 1 !important; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                APIs and Microservices - What Are They?
              </a>
            </div>
            <div class="carousel-item">
              <a href="<?= SITE_URL ?>/service-detail.php?slug=ai-agent-development" class="text-white text-decoration-none d-block hover-cyan" style="font-size: 0.88rem; line-height: 1.35; color: #FFFFFF !important; opacity: 1 !important; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                Autonomous AI Agents - Automating Enterprise Workflows
              </a>
            </div>
            <div class="carousel-item">
              <a href="<?= SITE_URL ?>/service-detail.php?slug=web-development" class="text-white text-decoration-none d-block hover-cyan" style="font-size: 0.88rem; line-height: 1.35; color: #FFFFFF !important; opacity: 1 !important; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                Sub-Second Latency - Cloud Infrastructure Blueprint
              </a>
            </div>
            <div class="carousel-item">
              <a href="<?= SITE_URL ?>/service-detail.php?slug=cybersecurity" class="text-white text-decoration-none d-block hover-cyan" style="font-size: 0.88rem; line-height: 1.35; color: #FFFFFF !important; opacity: 1 !important; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                SOC2 & ISO Certified - Zero-Trust Security Shield
              </a>
            </div>
          </div>
          
          <!-- Dynamic Active Carousel Indicator Dots -->
          <div class="carousel-indicators position-static justify-content-start m-0 pt-1">
            <button type="button" data-bs-target="#lumHeroInsightsCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#lumHeroInsightsCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#lumHeroInsightsCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#lumHeroInsightsCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- Tech Tags Marquee Ticker (Above Countdown & Below Hero Image) -->
<div class="py-3 position-relative z-3 overflow-hidden" style="background: #09041a; border-top: 1px solid rgba(255,255,255,0.08); border-bottom: 1px solid rgba(255,255,255,0.08);">
  <div class="lum-container">
    <div class="lum-tech-pill-ticker py-1">
      <div class="lum-tech-pill-track">
        <!-- Set 1 -->
        <span class="lum-tech-pill-tag"><i class="bi bi-microsoft text-primary"></i> Power Platform</span>
        <span class="lum-tech-pill-tag"><i class="bi bi-cloud-fill text-info"></i> Microsoft Azure</span>
        <span class="lum-tech-pill-tag"><i class="bi bi-layers-fill text-warning"></i> Frappe / ERPNext</span>
        <span class="lum-tech-pill-tag"><i class="bi bi-database-fill-gear text-danger"></i> Databricks</span>
        <span class="lum-tech-pill-tag"><i class="bi bi-cpu-fill text-success"></i> OpenAI / Azure AI</span>
        <span class="lum-tech-pill-tag"><i class="bi bi-bar-chart-line-fill text-primary"></i> Power BI</span>
        <span class="lum-tech-pill-tag"><i class="bi bi-code-slash" style="color: #8B5CF6;"></i> REST &amp; GraphQL APIs</span>
        <span class="lum-tech-pill-tag"><i class="bi bi-diagram-3-fill text-info"></i> Cloud-Native Architecture</span>
        <span class="lum-tech-pill-tag"><i class="bi bi-box-seam-fill text-primary"></i> Docker &amp; Kubernetes</span>
        <span class="lum-tech-pill-tag"><i class="bi bi-phone-fill text-danger"></i> Flutter &amp; React Native</span>
        <span class="lum-tech-pill-tag"><i class="bi bi-terminal-fill text-warning"></i> Python / PyTorch</span>
        <span class="lum-tech-pill-tag"><i class="bi bi-database-check text-success"></i> PostgreSQL &amp; MySQL</span>
        
        <!-- Set 2 (Infinite Loop Duplicate) -->
        <span class="lum-tech-pill-tag"><i class="bi bi-microsoft text-primary"></i> Power Platform</span>
        <span class="lum-tech-pill-tag"><i class="bi bi-cloud-fill text-info"></i> Microsoft Azure</span>
        <span class="lum-tech-pill-tag"><i class="bi bi-layers-fill text-warning"></i> Frappe / ERPNext</span>
        <span class="lum-tech-pill-tag"><i class="bi bi-database-fill-gear text-danger"></i> Databricks</span>
        <span class="lum-tech-pill-tag"><i class="bi bi-cpu-fill text-success"></i> OpenAI / Azure AI</span>
        <span class="lum-tech-pill-tag"><i class="bi bi-bar-chart-line-fill text-primary"></i> Power BI</span>
        <span class="lum-tech-pill-tag"><i class="bi bi-code-slash" style="color: #8B5CF6;"></i> REST &amp; GraphQL APIs</span>
        <span class="lum-tech-pill-tag"><i class="bi bi-diagram-3-fill text-info"></i> Cloud-Native Architecture</span>
        <span class="lum-tech-pill-tag"><i class="bi bi-box-seam-fill text-primary"></i> Docker &amp; Kubernetes</span>
        <span class="lum-tech-pill-tag"><i class="bi bi-phone-fill text-danger"></i> Flutter &amp; React Native</span>
        <span class="lum-tech-pill-tag"><i class="bi bi-terminal-fill text-warning"></i> Python / PyTorch</span>
        <span class="lum-tech-pill-tag"><i class="bi bi-database-check text-success"></i> PostgreSQL &amp; MySQL</span>
      </div>
    </div>
  </div>
</div>

<!-- 3. SECTION: Trust Statistics & Animated Counters (Vibrant Dark Tech Gradient Bar) -->
<section class="py-4 py-md-4.5 position-relative z-2 mb-4 mb-lg-5 text-white overflow-hidden" style="background: linear-gradient(135deg, #0c0727 0%, #170b3b 50%, #09041a 100%) !important; border-top: 1px solid rgba(255,255,255,0.1); border-bottom: 1px solid rgba(255,255,255,0.1); box-shadow: 0 10px 30px rgba(0,0,0,0.25);">
  <!-- Ambient Glow Blobs inside Stats Bar -->
  <div class="lum-blob lum-blob-orange" style="top: -120px; left: -80px; opacity: 0.4;"></div>
  <div class="lum-blob lum-blob-cyan" style="bottom: -120px; right: -80px; opacity: 0.4;"></div>

  <div class="lum-container position-relative z-1">
    <div class="row g-3 g-md-4 text-center align-items-center">
      
      <div class="col-6 col-md-3">
        <div class="py-3 px-2 rounded-3" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); backdrop-filter: blur(8px);">
          <i class="bi bi-hand-thumbs-up-fill fs-3 d-block mb-1.5" style="color: #FF6B00 !important;"></i>
          <div class="fw-bold mb-0" style="color: #FFFFFF !important; font-size: 1.85rem; line-height: 1.2;" data-counter="1000" data-suffix="+" data-decimals="0">0</div>
          <p class="small mb-0 fw-semibold text-uppercase" style="color: #FF8C00 !important; font-size: 0.74rem; letter-spacing: 0.05em;">Happy Enterprise Clients</p>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="py-3 px-2 rounded-3" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); backdrop-filter: blur(8px);">
          <i class="bi bi-globe-americas fs-3 d-block mb-1.5" style="color: #FF6B00 !important;"></i>
          <div class="fw-bold mb-0" style="color: #FFFFFF !important; font-size: 1.85rem; line-height: 1.2;" data-counter="25" data-suffix="+" data-decimals="0">0</div>
          <p class="small mb-0 fw-semibold text-uppercase" style="color: #FF8C00 !important; font-size: 0.74rem; letter-spacing: 0.05em;">Countries Served</p>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="py-3 px-2 rounded-3" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); backdrop-filter: blur(8px);">
          <i class="bi bi-award-fill fs-3 d-block mb-1.5" style="color: #FFC107 !important;"></i>
          <div class="fw-bold mb-0" style="color: #FFFFFF !important; font-size: 1.85rem; line-height: 1.2;" data-counter="15" data-suffix="+" data-decimals="0">0</div>
          <p class="small mb-0 fw-semibold text-uppercase" style="color: #FFC107 !important; font-size: 0.74rem; letter-spacing: 0.05em;">Years Enterprise Trust</p>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="py-3 px-2 rounded-3" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); backdrop-filter: blur(8px);">
          <i class="bi bi-shield-check fs-3 d-block mb-1.5" style="color: #10B981 !important;"></i>
          <div class="fw-bold mb-0" style="color: #FFFFFF !important; font-size: 1.85rem; line-height: 1.2;" data-counter="99.99" data-suffix="%" data-decimals="2">0</div>
          <p class="small mb-0 fw-semibold text-uppercase" style="color: #10B981 !important; font-size: 0.74rem; letter-spacing: 0.05em;">Uptime SLA Guarantee</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- 4. SECTION: Why Lumetech (1:1 WebGuru Layout Alignment) -->
<section class="position-relative overflow-hidden bg-white pt-4 pt-lg-5 pb-0 border-bottom">
  <!-- Ambient Background Glow Blobs -->
  <div class="lum-blob lum-blob-orange" style="top: 20px; left: -120px;"></div>
  <div class="lum-blob lum-blob-cyan" style="bottom: 20px; right: -120px;"></div>

  <div class="lum-container position-relative z-1">
    <div class="row align-items-center g-4 g-lg-5">
      
      <!-- Left Column: Title, Subheading, Paragraph & 4 Circular Feature Badges -->
      <div class="col-lg-7 pb-4 pb-lg-5">
        <h2 class="lum-heading-2 mb-2" style="color: #0F172A !important; font-size: clamp(2.1rem, 3.8vw, 3rem); font-weight: 400; letter-spacing: -0.02em;">
          Why Lumetech?
        </h2>

        <h3 class="h4 text-secondary mb-3 fw-normal" style="color: #334155 !important; font-size: 1.35rem; line-height: 1.35;">
          More Than Just an Enterprise Software Engineering Partner
        </h3>

        <p class="text-muted mb-4 pb-2" style="font-size: 0.98rem; line-height: 1.7; max-width: 660px;">
          We combine deep engineering rigor with domain-specific SaaS products to accelerate digital transformation. From bank-grade SOC2 security to sub-second cloud performance, our architecture empowers global enterprises to scale without friction.
        </p>

        <!-- 4 Circular Feature Badges (1:1 WebGuru Style Circular Badge Row) -->
        <div class="row g-3 g-md-4 pt-2">
          
          <div class="col-6 col-sm-3 text-center">
            <div class="mx-auto mb-2.5 rounded-circle d-flex align-items-center justify-content-center shadow-sm" style="width: 66px; height: 66px; background-color: #26282B !important; color: #FFFFFF !important; font-size: 1.45rem;">
              <i class="bi bi-layers-half" style="color: #FF6B00 !important;"></i>
            </div>
            <h5 class="fw-semibold mb-0" style="font-size: 0.84rem; line-height: 1.35; color: #0F172A !important;">
              Modular Enterprise Architecture
            </h5>
          </div>

          <div class="col-6 col-sm-3 text-center">
            <div class="mx-auto mb-2.5 rounded-circle d-flex align-items-center justify-content-center shadow-sm" style="width: 66px; height: 66px; background-color: #26282B !important; color: #FFFFFF !important; font-size: 1.45rem;">
              <i class="bi bi-shield-shaded" style="color: #10B981 !important;"></i>
            </div>
            <h5 class="fw-semibold mb-0" style="font-size: 0.84rem; line-height: 1.35; color: #0F172A !important;">
              Bank-Grade Compliance &amp; Security
            </h5>
          </div>

          <div class="col-6 col-sm-3 text-center">
            <div class="mx-auto mb-2.5 rounded-circle d-flex align-items-center justify-content-center shadow-sm" style="width: 66px; height: 66px; background-color: #26282B !important; color: #FFFFFF !important; font-size: 1.45rem;">
              <i class="bi bi-lightning-charge-fill" style="color: #FF6B00 !important;"></i>
            </div>
            <h5 class="fw-semibold mb-0" style="font-size: 0.84rem; line-height: 1.35; color: #0F172A !important;">
              Sub-Second Low Latency Performance
            </h5>
          </div>

          <div class="col-6 col-sm-3 text-center">
            <div class="mx-auto mb-2.5 rounded-circle d-flex align-items-center justify-content-center shadow-sm" style="width: 66px; height: 66px; background-color: #26282B !important; color: #FFFFFF !important; font-size: 1.45rem;">
              <i class="bi bi-box-seam-fill" style="color: #8B5CF6 !important;"></i>
            </div>
            <h5 class="fw-semibold mb-0" style="font-size: 0.84rem; line-height: 1.35; color: #0F172A !important;">
              Product &amp; SaaS Service Synergy
            </h5>
          </div>

        </div>
      </div>

      <!-- Right Column: Model Image with Orbital Graphic (Image 3) -->
      <div class="col-lg-5 text-center text-lg-end pt-3 pt-lg-0 align-self-end">
        <img src="<?= SITE_URL ?>/assets/images/why-lumetech-model.png" alt="Why Lumetech - Enterprise Technology Partner" class="img-fluid d-block ms-auto mx-auto mb-0" style="max-height: 480px; width: auto; object-fit: contain; vertical-align: bottom;">
      </div>

    </div>
  </div>
</section>

<!-- 5. SECTION: Featured Services -->
<section class="lum-section position-relative overflow-hidden bg-dark bg-opacity-50 border-top border-secondary border-opacity-25">
  <!-- Ambient Background Glow Blobs -->
  <div class="lum-blob lum-blob-purple" style="top: -50px; right: -80px;"></div>
  <div class="lum-blob lum-blob-orange" style="bottom: -50px; left: -80px;"></div>

  <div class="lum-container position-relative z-1">
    <div class="d-flex align-items-end justify-content-between mb-5">
      <div>
        <h2 class="lum-heading-2 mb-0">Core Engineering Solutions</h2>
      </div>
      <a href="<?= SITE_URL ?>/services.php" class="lum-btn lum-btn-outline lum-btn-sm d-none d-md-inline-flex">
        View All 9 Services <i class="bi bi-arrow-right"></i>
      </a>
    </div>

    <div class="lum-grid lum-grid-3">
      <?php 
      $featured_services = array_slice($all_services, 0, 6, true);
      $icon_variants = ['lum-icon-orange', 'lum-icon-cyan', 'lum-icon-purple', 'lum-icon-green', 'lum-icon-coral', 'lum-icon-orange'];
      $watermark_tech_icons = [
        'web-development' => 'bi-react',
        'app-development' => 'bi-android2',
        'ui-ux-designing' => 'bi-figma',
        'api-development' => 'bi-diagram-3-fill',
        'cms-development' => 'bi-wordpress',
        'saas-product' => 'bi-cpu-fill',
        'cloud-devops' => 'bi-hdd-network-fill',
        'cybersecurity' => 'bi-shield-lock-fill',
        'ai-agent-development' => 'bi-robot'
      ];
      $idx = 0;
      foreach ($featured_services as $svc): 
        $icon_cls = $icon_variants[$idx % count($icon_variants)];
        $watermark_icon = $watermark_tech_icons[$svc['slug']] ?? $svc['icon'];
        $idx++;
      ?>
        <div class="lum-card lum-card-watermark position-relative overflow-hidden">
          <i class="bi <?= $watermark_icon ?> lum-card-watermark__icon"></i>
          <div class="position-relative z-1">
            <div class="lum-card__icon <?= $icon_cls ?>"><i class="bi <?= $svc['icon'] ?>"></i></div>
            <h3 class="lum-heading-5 mb-2"><?= sanitize_string($svc['title']) ?></h3>
            <p class="small text-muted mb-4"><?= sanitize_string($svc['short_desc']) ?></p>
            <a href="<?= SITE_URL ?>/service-detail.php?slug=<?= $svc['slug'] ?>" class="lum-btn lum-btn-outline lum-btn-sm">
              Service Details <i class="bi bi-chevron-right ms-1"></i>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Mobile-Only Bottom CTA Button -->
    <div class="text-center mt-4 d-md-none">
      <a href="<?= SITE_URL ?>/services.php" class="lum-btn lum-btn-outline lum-btn-sm w-100 justify-content-center">
        View All 9 Services <i class="bi bi-arrow-right ms-1"></i>
      </a>
    </div>
  </div>
</section>

<!-- Sleek SVG Wave Divider -->
<div class="lum-wave-divider">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" preserveAspectRatio="none">
    <path fill="#F8FAFC" fill-opacity="1" d="M0,32L60,42.7C120,53,240,75,360,74.7C480,75,600,53,720,48C840,43,960,53,1080,58.7C1200,64,1320,64,1380,64L1440,64L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
  </svg>
</div>

<!-- 6. SECTION: Featured Products Showcase -->
<section class="lum-section">
  <div class="lum-container">
    <div class="d-flex align-items-end justify-content-between mb-5">
      <div>
        <h2 class="lum-heading-2 mb-0">Turnkey Enterprise Products</h2>
      </div>
      <a href="<?= SITE_URL ?>/products.php" class="lum-btn lum-btn-outline lum-btn-sm d-none d-md-inline-flex">
        View All 11 Products <i class="bi bi-arrow-right"></i>
      </a>
    </div>

    <div class="lum-grid lum-grid-3">
      <?php 
      $featured_products = array_slice($all_products, 0, 6, true);
      foreach ($featured_products as $prd): 
      ?>
        <div class="lum-card d-flex flex-column justify-content-between">
          <div>
            <h3 class="lum-heading-5 mb-2"><?= sanitize_string($prd['name']) ?></h3>
            <p class="small text-muted mb-4"><?= sanitize_string($prd['short_desc']) ?></p>
          </div>
          <div>
            <a href="<?= SITE_URL ?>/product-detail.php?slug=<?= $prd['slug'] ?>" class="lum-btn lum-btn-primary lum-btn-sm w-100 justify-content-center">
              Explore Product <i class="bi bi-arrow-right ms-1"></i>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Mobile-Only Bottom CTA Button -->
    <div class="text-center mt-4 d-md-none">
      <a href="<?= SITE_URL ?>/products.php" class="lum-btn lum-btn-outline lum-btn-sm w-100 justify-content-center">
        View All 11 Products <i class="bi bi-arrow-right ms-1"></i>
      </a>
    </div>
  </div>
</section>

<!-- 7. SECTION: Industries We Serve -->
<section class="lum-section bg-dark bg-opacity-50 border-top border-bottom border-secondary border-opacity-25">
  <div class="lum-container">
    <?php render_component('section-heading', [
      'badge' => 'Industry Solutions',
      'title' => 'Tailored Solutions for Key Verticals',
      'description' => 'Domain-specific software architectures engineered for strict compliance, high volume, and operational speed.',
      'center' => true
    ]); ?>

    <div class="row g-4">
      <div class="col-md-6 col-lg-4">
        <div class="p-4 rounded-3 bg-white border shadow-sm h-100 lum-card-watermark position-relative overflow-hidden">
          <i class="bi bi-currency-exchange lum-card-watermark__icon"></i>
          <div class="position-relative z-1">
            <i class="bi bi-bank fs-2 d-block mb-3" style="color: #FF6B00 !important;"></i>
            <h4 class="lum-heading-5 mb-2 text-dark">Banking &amp; FinTech</h4>
            <p class="small text-muted mb-0">Loan origination systems, payment gateways, e-KYC, and multi-lender distribution platforms.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="p-4 rounded-3 bg-white border shadow-sm h-100 lum-card-watermark position-relative overflow-hidden">
          <i class="bi bi-hospital lum-card-watermark__icon"></i>
          <div class="position-relative z-1">
            <i class="bi bi-heart-pulse fs-2 d-block mb-3" style="color: #10B981 !important;"></i>
            <h4 class="lum-heading-5 mb-2 text-dark">Healthcare &amp; Life Sciences</h4>
            <p class="small text-muted mb-0">HIPAA &amp; ABDM compliant hospital information systems, EHR, lab automation, and pharmacy controllers.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="p-4 rounded-3 bg-white border shadow-sm h-100 lum-card-watermark position-relative overflow-hidden">
          <i class="bi bi-geo-alt-fill lum-card-watermark__icon"></i>
          <div class="position-relative z-1">
            <i class="bi bi-truck fs-2 d-block mb-3" style="color: #FF6B00 !important;"></i>
            <h4 class="lum-heading-5 mb-2 text-dark">Logistics &amp; Transport</h4>
            <p class="small text-muted mb-0">Interstate fleet tracking, fuel theft sensors, route optimization, and driver scorecards.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="p-4 rounded-3 bg-white border shadow-sm h-100 lum-card-watermark position-relative overflow-hidden">
          <i class="bi bi-building-gear lum-card-watermark__icon"></i>
          <div class="position-relative z-1">
            <i class="bi bi-gear-wide fs-2 d-block mb-3" style="color: #8B5CF6 !important;"></i>
            <h4 class="lum-heading-5 mb-2 text-dark">Manufacturing ERP</h4>
            <p class="small text-muted mb-0">Shop floor execution, multi-level BOMs, IoT machine telemetry, and quality control.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="p-4 rounded-3 bg-white border shadow-sm h-100 lum-card-watermark position-relative overflow-hidden">
          <i class="bi bi-bag-check-fill lum-card-watermark__icon"></i>
          <div class="position-relative z-1">
            <i class="bi bi-cart3 fs-2 d-block mb-3" style="color: #FF2D55 !important;"></i>
            <h4 class="lum-heading-5 mb-2 text-dark">Quick Commerce &amp; Retail</h4>
            <p class="small text-muted mb-0">Dark store inventory management, sub-second checkout, and rider dispatch apps.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="p-4 rounded-3 bg-white border shadow-sm h-100 lum-card-watermark position-relative overflow-hidden">
          <i class="bi bi-qr-code-scan lum-card-watermark__icon"></i>
          <div class="position-relative z-1">
            <i class="bi bi-cup-hot fs-2 d-block mb-3" style="color: #FF9800 !important;"></i>
            <h4 class="lum-heading-5 mb-2 text-dark">Hospitality &amp; Dining</h4>
            <p class="small text-muted mb-0">Cloud restaurant POS, kitchen display systems, QR ordering, and recipe costing.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 8. SECTION: Tools & Technologies -->
<section class="py-5 bg-white border-top border-bottom position-relative z-2">
  <div class="lum-container">
    <h2 class="text-center fw-normal mb-4" style="color: #2C3E50 !important; font-size: 2.1rem; letter-spacing: -0.01em;">
      Tools &amp; Technologies
    </h2>
    
    <div class="text-center py-2 align-items-center justify-content-center">
      <img src="<?= SITE_URL ?>/assets/images/tech-stack-logos.png" alt="Tools &amp; Technologies Logos" class="img-fluid d-block mx-auto" style="max-height: 180px; width: auto; object-fit: contain;">
    </div>

    <!-- Enterprise Architectural Guarantees & Trust Badges Strip (WebGuru Style) -->
    <div class="row g-3 g-md-4 mt-4 pt-2 justify-content-center">
      <div class="col-6 col-lg-3">
        <div class="p-3.5 p-md-4 rounded-3 border bg-light text-center h-100 shadow-sm transition-all hover-lift">
          <i class="bi bi-award-fill fs-2 d-block mb-2" style="color: #FFC107 !important;"></i>
          <h4 class="h6 fw-bold text-dark mb-1">1000+ Projects</h4>
          <p class="small text-muted mb-0">Delivered Worldwide</p>
        </div>
      </div>
      
      <div class="col-6 col-lg-3">
        <div class="p-3.5 p-md-4 rounded-3 border bg-light text-center h-100 shadow-sm transition-all hover-lift">
          <i class="bi bi-shield-check fs-2 d-block mb-2" style="color: #10B981 !important;"></i>
          <h4 class="h6 fw-bold text-dark mb-1">ISO 27001 Certified</h4>
          <p class="small text-muted mb-0">Bank-Grade Data Security</p>
        </div>
      </div>

      <div class="col-6 col-lg-3">
        <div class="p-3.5 p-md-4 rounded-3 border bg-light text-center h-100 shadow-sm transition-all hover-lift">
          <i class="bi bi-cloud-check-fill fs-2 d-block mb-2" style="color: #FF6B00 !important;"></i>
          <h4 class="h6 fw-bold text-dark mb-1">AWS &amp; Azure Partner</h4>
          <p class="small text-muted mb-0">Cloud Certified Infrastructure</p>
        </div>
      </div>

      <div class="col-6 col-lg-3">
        <div class="p-3.5 p-md-4 rounded-3 border bg-light text-center h-100 shadow-sm transition-all hover-lift">
          <i class="bi bi-lightning-charge-fill fs-2 d-block mb-2" style="color: #FF6B00 !important;"></i>
          <h4 class="h6 fw-bold text-dark mb-1">99.99% Uptime SLA</h4>
          <p class="small text-muted mb-0">Zero-Downtime Guarantee</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 9. SECTION: Portfolio / Case Studies -->
<section class="lum-section">
  <div class="lum-container">
    <?php render_component('section-heading', [
      'badge' => 'Enterprise Impact',
      'title' => 'Real-World Client Success Stories',
      'description' => 'How Lumetech technology architectures deliver measurable operational outcomes for market leaders.',
      'center' => true
    ]); ?>

    <div class="row g-4">
      <div class="col-lg-6">
        <div class="lum-card h-100 p-4">
          <h3 class="lum-heading-4 mb-3">Processing $500M+ Monthly Loans with Zero Downtime</h3>
          <p class="text-secondary small mb-4">
            A leading NBFC migrated their loan origination and collection workflows to Lumetech CRM, reducing customer approval time from 3 days to under 15 minutes.
          </p>
          <div class="row g-3 text-center border-top border-secondary border-opacity-25 pt-3">
            <div class="col-4">
              <strong class="h4 text-info d-block mb-0">15 Min</strong>
              <span class="small text-muted">Approval Speed</span>
            </div>
            <div class="col-4">
              <strong class="h4 text-white d-block mb-0">70%</strong>
              <span class="small text-muted">Cost Saved</span>
            </div>
            <div class="col-4">
              <strong class="h4 text-info d-block mb-0">99.99%</strong>
              <span class="small text-muted">System Uptime</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="lum-card h-100 p-4">
          <h3 class="lum-heading-4 mb-3">Scaling 10-Minute Grocery Delivery Across 120+ Dark Stores</h3>
          <p class="text-secondary small mb-4">
            Deployed Lumetech Quick Commerce platform to manage rider dispatch and inventory telemetry, achieving 99.4% on-time delivery across major metro cities.
          </p>
          <div class="row g-3 text-center border-top border-secondary border-opacity-25 pt-3">
            <div class="col-4">
              <strong class="h4 text-info d-block mb-0">8.5 Min</strong>
              <span class="small text-muted">Avg Delivery</span>
            </div>
            <div class="col-4">
              <strong class="h4 text-white d-block mb-0">120+</strong>
              <span class="small text-muted">Dark Stores</span>
            </div>
            <div class="col-4">
              <strong class="h4 text-info d-block mb-0">100K+</strong>
              <span class="small text-muted">Daily Orders</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 10. SECTION: Testimonials Carousel (Swiper.js) -->
<section class="lum-section bg-dark bg-opacity-50 border-top border-bottom border-secondary border-opacity-25">
  <div class="lum-container">
    <?php render_component('section-heading', [
      'badge' => 'Client Testimonials',
      'title' => 'Trusted by Technology Leaders',
      'description' => 'Hear from CTOs and Operations Directors scaling with Lumetech.',
      'center' => true
    ]); ?>

    <div class="swiper lum-testimonial-swiper p-2">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="lum-card h-100">
            <div class="text-warning mb-3"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
            <p class="small text-secondary mb-4">"Lumetech's API architecture allowed us to connect our banking channels in record time. Their sub-second latency is unmatched."</p>
            <div class="d-flex align-items-center gap-3">
              <div class="lum-card__icon mb-0 flex-shrink-0 fs-6" style="width:40px;height:40px;"><i class="bi bi-person-circle"></i></div>
              <div>
                <strong class="d-block text-white small">David Vance</strong>
                <span class="small text-muted">CTO, FinEdge Capital</span>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="lum-card h-100">
            <div class="text-warning mb-3"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
            <p class="small text-secondary mb-4">"FactoryOS completely streamlined our shop floor execution. We gained real-time machine visibility and eliminated raw material stockouts."</p>
            <div class="d-flex align-items-center gap-3">
              <div class="lum-card__icon mb-0 flex-shrink-0 fs-6" style="width:40px;height:40px;"><i class="bi bi-person-circle"></i></div>
              <div>
                <strong class="d-block text-white small">Elena Rostova</strong>
                <span class="small text-muted">VP Operations, Precision Manufacturing</span>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="lum-card h-100">
            <div class="text-warning mb-3"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
            <p class="small text-secondary mb-4">"The team at Lumetech built our AI customer agent with incredible precision. Our support tickets dropped by 45% within 30 days."</p>
            <div class="d-flex align-items-center gap-3">
              <div class="lum-card__icon mb-0 flex-shrink-0 fs-6" style="width:40px;height:40px;"><i class="bi bi-person-circle"></i></div>
              <div>
                <strong class="d-block text-white small">Marcus Chen</strong>
                <span class="small text-muted">Head of Product, Omnilink SaaS</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination position-relative mt-4"></div>
    </div>
  </div>
</section>

<!-- 11. SECTION: Blog & Insights Preview -->
<section class="lum-section">
  <div class="lum-container">
    <div class="d-flex align-items-end justify-content-between mb-5">
      <div>
        <h2 class="lum-heading-2 mb-0">Latest Enterprise Research</h2>
      </div>
      <a href="<?= SITE_URL ?>/blog.php" class="lum-btn lum-btn-outline lum-btn-sm d-none d-md-inline-flex">
        Explore All Articles <i class="bi bi-arrow-right"></i>
      </a>
    </div>

    <div class="lum-grid lum-grid-3">
      <div class="lum-card">
        <h4 class="lum-heading-5 mb-2">Zero-Downtime Microservice Deployment Strategies</h4>
        <p class="small text-muted mb-4">How blue-green deployments and automated canary tests prevent outage risks during production updates.</p>
        <span class="small text-secondary"><i class="bi bi-clock me-1"></i> 5 min read</span>
      </div>

      <div class="lum-card">
        <h4 class="lum-heading-5 mb-2">Building Enterprise Knowledge RAG Pipelines</h4>
        <p class="small text-muted mb-4">Connecting vector databases with local LLMs to query confidential corporate document vaults safely.</p>
        <span class="small text-secondary"><i class="bi bi-clock me-1"></i> 7 min read</span>
      </div>

      <div class="lum-card">
        <h4 class="lum-heading-5 mb-2">PCI-DSS 4.0 Compliance: What CTOs Must Prepare</h4>
        <p class="small text-muted mb-4">Key changes in encryption protocols, multi-factor authentication, and continuous API payload monitoring.</p>
        <span class="small text-secondary"><i class="bi bi-clock me-1"></i> 6 min read</span>
      </div>
    </div>

    <!-- Mobile-Only Bottom CTA Button -->
    <div class="text-center mt-4 d-md-none">
      <a href="<?= SITE_URL ?>/blog.php" class="lum-btn lum-btn-outline lum-btn-sm w-100 justify-content-center">
        Explore All Articles <i class="bi bi-arrow-right ms-1"></i>
      </a>
    </div>
  </div>
</section>

<!-- 12. SECTION: Final CTA -->
<div class="lum-container">
  <?php render_component('cta', [
    'title' => 'Ready to Accelerate Your Enterprise Architecture?',
    'description' => 'Consult with Lumetech solutions architects to evaluate your cloud, software, or product requirements today.',
    'btn_text' => 'Schedule Technical Consultation'
  ]); ?>
</div>

<!-- 13. Footer is loaded via includes/footer.php -->
<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
/**
 * Lumetech Services Hub
 */
$page_title = "Enterprise Services & Engineering Solutions | Lumetech";
$page_desc = "Explore Lumetech's 9 core technology services: Web Development, App Development, UI/UX, API Engineering, CMS, SaaS, AI Agents, Bots, and Desktop Apps.";
$current_page = "services";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/data/services.php';

$services = get_services_data();
?>

<!-- 1. Hero -->
<section class="lum-section pt-5 pb-5">
  <div class="lum-container">
    <?php render_component('breadcrumb', [
      'items' => [
        'Home' => SITE_URL,
        'Services' => ''
      ]
    ]); ?>

    <div class="row align-items-center g-5 py-4">
      <div class="col-lg-8">
        <h1 class="lum-heading-1 mb-3">Enterprise Engineering & Digital Transformation Services</h1>
        <p class="lum-lead mb-4">
          From custom cloud web platforms to autonomous AI agents, Lumetech delivers high-performance digital solutions tailored to complex business requirements.
        </p>
        <?php render_component('button', [
          'label' => 'Talk to an Engineering Lead',
          'href' => SITE_URL . '/contact.php',
          'variant' => 'primary',
          'size' => 'lg',
          'icon' => 'bi-chat-dots-fill'
        ]); ?>
      </div>
    </div>
  </div>
</section>

<!-- 2. Services Overview Grid (All 9 Services) -->
<section class="lum-section bg-dark bg-opacity-50 border-top border-bottom border-secondary border-opacity-25">
  <div class="lum-container">
    <?php render_component('section-heading', [
      'title' => 'Our Core Technology Services',
      'description' => 'Explore our full spectrum of software engineering, cloud architecture, and AI automation services.',
      'center' => true
    ]); ?>

    <div class="lum-grid lum-grid-3">
      <?php foreach ($services as $svc): ?>
        <div class="lum-card d-flex flex-column justify-content-between">
          <div>
            <div class="lum-card__icon"><i class="bi <?= $svc['icon'] ?>"></i></div>
            <h3 class="lum-heading-5 mb-2"><?= sanitize_string($svc['title']) ?></h3>
            <p class="small text-muted mb-4"><?= sanitize_string($svc['short_desc']) ?></p>
          </div>
          <div>
            <a href="<?= SITE_URL ?>/service-detail.php?slug=<?= $svc['slug'] ?>" class="lum-btn lum-btn-outline lum-btn-sm w-100 justify-content-center">
              Detailed Specifications <i class="bi bi-arrow-right ms-1"></i>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 3. Process Lifecycle Steps: Discover -> Design -> Build -> Deploy -> Support -->
<section class="lum-section">
  <div class="lum-container">
    <?php render_component('section-heading', [
      'title' => 'Our 5-Stage Development Process',
      'description' => 'A disciplined, agile engineering framework built for velocity, security, and continuous quality delivery.',
      'center' => true
    ]); ?>

    <div class="row g-4">
      <div class="col-md-6 col-lg">
        <div class="p-4 rounded-3 bg-dark border border-secondary border-opacity-25 text-center h-100">
          <i class="bi bi-search text-info fs-2 d-block mb-2"></i>
          <h4 class="lum-heading-6 mb-2">1. Discover</h4>
          <p class="small text-muted mb-0">Technical discovery, requirement scoping, and architecture planning.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg">
        <div class="p-4 rounded-3 bg-dark border border-secondary border-opacity-25 text-center h-100">
          <i class="bi bi-palette text-info fs-2 d-block mb-2"></i>
          <h4 class="lum-heading-6 mb-2">2. Design</h4>
          <p class="small text-muted mb-0">Wireframing, UI/UX prototyping, and component design token setup.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg">
        <div class="p-4 rounded-3 bg-dark border border-secondary border-opacity-25 text-center h-100">
          <i class="bi bi-code-square text-info fs-2 d-block mb-2"></i>
          <h4 class="lum-heading-6 mb-2">3. Build</h4>
          <p class="small text-muted mb-0">Agile sprint execution, API development, and unit test coverage.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg">
        <div class="p-4 rounded-3 bg-dark border border-secondary border-opacity-25 text-center h-100">
          <i class="bi bi-cloud-upload text-info fs-2 d-block mb-2"></i>
          <h4 class="lum-heading-6 mb-2">4. Deploy</h4>
          <p class="small text-muted mb-0">Zero-downtime CI/CD deployment, security audit, and DNS cutover.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg">
        <div class="p-4 rounded-3 bg-dark border border-secondary border-opacity-25 text-center h-100">
          <i class="bi bi-headset text-info fs-2 d-block mb-2"></i>
          <h4 class="lum-heading-6 mb-2">5. Support</h4>
          <p class="small text-muted mb-0">24/7 SLA monitoring, security patch updates, and feature scaling.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 4. Service FAQ Accordion -->
<section class="lum-section bg-dark bg-opacity-50 border-top border-bottom border-secondary border-opacity-25">
  <div class="lum-container">
    <?php render_component('section-heading', [
      'badge' => 'Frequently Asked Questions',
      'title' => 'Services FAQ',
      'description' => 'Common questions about our engineering engagements, SLAs, and technical delivery.',
      'center' => true
    ]); ?>

    <div class="max-w-3xl mx-auto">
      <div class="accordion lum-accordion" id="servicesFaq">
        <div class="accordion-item bg-dark border border-secondary border-opacity-25 mb-3 rounded overflow-hidden">
          <h2 class="accordion-header">
            <button class="accordion-button bg-dark text-white shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
              What engagement models does Lumetech offer?
            </button>
          </h2>
          <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#servicesFaq">
            <div class="accordion-body text-secondary small">
              We offer flexible engagement options: Fixed-Scope Dedicated Project, Dedicated Engineering Team, and Ongoing SLA Support Contracts.
            </div>
          </div>
        </div>

        <div class="accordion-item bg-dark border border-secondary border-opacity-25 mb-3 rounded overflow-hidden">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed bg-dark text-white shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
              Who retains the intellectual property (IP) of custom developed code?
            </button>
          </h2>
          <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#servicesFaq">
            <div class="accordion-body text-secondary small">
              You retain 100% full ownership of all source code, design assets, and intellectual property developed during the engagement upon project completion.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 5. CTA -->
<div class="lum-container">
  <?php render_component('cta', [
    'title' => 'Need a Custom Engineering Solution?',
    'description' => 'Contact our engineering leads for a technical scoping session and project estimate.',
    'btn_text' => 'Initiate Project Discussion'
  ]); ?>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

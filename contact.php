<?php
/**
 * Lumetech Contact Us & Lead Generation Page
 */
$page_title = "Contact Lumetech Technologies | Sector-44 Noida Enterprise Desk";
$page_desc = "Get in touch with Lumetech Technologies in Sector-44, Noida. Call 7007892136 or email hello@lumetech.info for enterprise software scoping.";
$current_page = "contact";

require_once __DIR__ . '/includes/header.php';
?>

<section class="lum-section pt-5 pb-5">
  <div class="lum-container">
    <?php render_component('breadcrumb', [
      'items' => [
        'Home' => SITE_URL,
        'Contact Us' => ''
      ]
    ]); ?>

    <div class="row align-items-center g-5 py-4">
      <div class="col-lg-8">
        <h1 class="lum-heading-1 mb-3">Connect With Lumetech Technologies</h1>
        <p class="lum-lead mb-4">
          Have an enterprise software project, cloud migration, or SaaS platform requirement? Speak directly with our architecture team in Sector-44, Noida.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Direct Action CTAs: Phone, Email, WhatsApp -->
<section class="pb-5">
  <div class="lum-container">
    <div class="row g-4">
      
      <!-- Phone CTA -->
      <div class="col-md-4">
        <div class="lum-card h-100 p-4 text-center">
          <div class="lum-card__icon mx-auto mb-3"><i class="bi bi-telephone-fill"></i></div>
          <h4 class="lum-heading-5 mb-2">Direct Phone Support</h4>
          <p class="small text-muted mb-3">Speak with our sales and scoping desk immediately.</p>
          <a href="tel:<?= CONTACT_PHONE ?>" class="lum-btn lum-btn-outline lum-btn-sm w-100 justify-content-center">
            Call <?= CONTACT_PHONE_FORMATTED ?>
          </a>
        </div>
      </div>

      <!-- Email CTA -->
      <div class="col-md-4">
        <div class="lum-card h-100 p-4 text-center">
          <div class="lum-card__icon mx-auto mb-3"><i class="bi bi-envelope-fill"></i></div>
          <h4 class="lum-heading-5 mb-2">Corporate Email</h4>
          <p class="small text-muted mb-3">Send RFPs, project specs, and technical documentation.</p>
          <a href="mailto:<?= CONTACT_EMAIL ?>" class="lum-btn lum-btn-outline lum-btn-sm w-100 justify-content-center">
            <?= CONTACT_EMAIL ?>
          </a>
        </div>
      </div>

      <!-- WhatsApp CTA -->
      <div class="col-md-4">
        <div class="lum-card h-100 p-4 text-center border-success border-opacity-25">
          <div class="lum-card__icon mx-auto mb-3 bg-success bg-opacity-10 text-success"><i class="bi bi-whatsapp"></i></div>
          <h4 class="lum-heading-5 mb-2">Instant WhatsApp Chat</h4>
          <p class="small text-muted mb-3">Chat live with our technical solutions architects.</p>
          <a href="https://wa.me/<?= WHATSAPP_NUMBER ?>?text=Hello%20Lumetech%20Team%2C%20I%20would%20like%20to%20discuss%20a%20software%20project." target="_blank" rel="noopener noreferrer" class="lum-btn lum-btn-primary lum-btn-sm w-100 justify-content-center">
            Start WhatsApp Chat <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Contact Form & Headquarters Location Section -->
<section class="lum-section bg-dark bg-opacity-50 border-top border-bottom border-secondary border-opacity-25">
  <div class="lum-container">
    <div class="row g-5">
      
      <!-- Lead Form Column -->
      <div class="col-lg-7">
        <div class="lum-card p-4 p-md-5">
          <h3 class="lum-heading-3 mb-2">Request an Enterprise Scoping Call</h3>
          <p class="small text-muted mb-4">Fill out the form below to receive a detailed project scoping document and cost estimation within 24 hours.</p>

          <form class="lum-ajax-form" action="<?= SITE_URL ?>/api/submit-lead.php" method="POST">
            <?= csrf_field() ?>

            <div class="row g-3">
              <div class="col-md-6">
                <?php render_component('form-controls', [
                  'type' => 'text',
                  'name' => 'full_name',
                  'label' => 'Full Name',
                  'placeholder' => 'e.g. Rahul Sharma',
                  'required' => true
                ]); ?>
              </div>

              <div class="col-md-6">
                <?php render_component('form-controls', [
                  'type' => 'email',
                  'name' => 'email',
                  'label' => 'Work Email Address',
                  'placeholder' => 'rahul@enterprise.com',
                  'required' => true
                ]); ?>
              </div>

              <div class="col-md-6">
                <?php render_component('form-controls', [
                  'type' => 'text',
                  'name' => 'phone',
                  'label' => 'Phone Number',
                  'placeholder' => '+91 9876543210',
                  'required' => true
                ]); ?>
              </div>

              <div class="col-md-6">
                <?php render_component('form-controls', [
                  'type' => 'text',
                  'name' => 'company',
                  'label' => 'Company Name',
                  'placeholder' => 'e.g. AcroTech Systems'
                ]); ?>
              </div>

              <div class="col-md-6">
                <?php render_component('form-controls', [
                  'type' => 'select',
                  'name' => 'service',
                  'label' => 'Service Required',
                  'placeholder' => 'Select Service',
                  'options' => [
                    'web-development' => 'Web Development',
                    'app-development' => 'App Development',
                    'ui-ux-designing' => 'UI/UX Designing',
                    'api-development' => 'API Development',
                    'saas-product-development' => 'SaaS Product Development',
                    'ai-agent-development' => 'AI Agent Development',
                    'custom-hardware-product' => 'B2B Product Platform'
                  ]
                ]); ?>
              </div>

              <div class="col-md-6">
                <?php render_component('form-controls', [
                  'type' => 'select',
                  'name' => 'budget',
                  'label' => 'Estimated Budget',
                  'placeholder' => 'Select Budget Range',
                  'options' => [
                    '$5k-$15k' => '$5,000 – $15,000',
                    '$15k-$50k' => '$15,000 – $50,000',
                    '$50k+' => '$50,000+'
                  ]
                ]); ?>
              </div>

              <div class="col-12">
                <?php render_component('form-controls', [
                  'type' => 'textarea',
                  'name' => 'message',
                  'label' => 'Project Details & Technical Scope',
                  'placeholder' => 'Briefly describe your requirements, timeline, and goals...',
                  'required' => true
                ]); ?>
              </div>
            </div>

            <div class="mt-4">
              <?php render_component('button', [
                'label' => 'Submit Scoping Request',
                'variant' => 'primary',
                'type' => 'submit',
                'size' => 'lg',
                'icon' => 'bi-send-fill'
              ]); ?>
            </div>
          </form>
        </div>
      </div>

      <!-- Corporate Office Info & Map Column -->
      <div class="col-lg-5">
        <div class="lum-card p-4 mb-4">
          <h4 class="lum-heading-5 mb-3"><i class="bi bi-geo-alt-fill text-info me-2"></i> Corporate Headquarters</h4>
          
          <div class="space-y-3 small text-secondary">
            <div>
              <strong class="d-block text-white">Lumetech Technologies</strong>
              <span><?= CONTACT_ADDRESS ?></span>
            </div>
            <div>
              <strong class="d-block text-white">Phone Support:</strong>
              <a href="tel:<?= CONTACT_PHONE ?>" class="text-info"><?= CONTACT_PHONE_FORMATTED ?></a>
            </div>
            <div>
              <strong class="d-block text-white">Corporate Email:</strong>
              <a href="mailto:<?= CONTACT_EMAIL ?>" class="text-info"><?= CONTACT_EMAIL ?></a>
            </div>
            <div>
              <strong class="d-block text-white">Operating Hours:</strong>
              <span>Monday – Saturday: 9:00 AM – 7:00 PM IST (24/7 SLA Monitoring)</span>
            </div>
          </div>
        </div>

        <!-- Google Maps Location Embed Section -->
        <div class="lum-card p-2 overflow-hidden">
          <iframe 
            title="Lumetech Sector 44 Noida Map"
            src="https://maps.google.com/maps?q=Sector%2044%20Noida%20Uttar%20Pradesh&t=&z=14&ie=UTF8&iwloc=&output=embed" 
            width="100%" 
            height="260" 
            style="border:0; border-radius: var(--lum-radius-md);" 
            allowfullscreen="" 
            loading="lazy">
          </iframe>
        </div>
      </div>

    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

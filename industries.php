<?php
/**
 * Lumetech Targeted Industries Hub
 */
$page_title = "Targeted Industries & Domain Solutions | Lumetech Enterprise";
$page_desc = "Lumetech engineers specialized software products and cloud architectures for Fintech, Manufacturing, Healthcare, Quick Commerce, Logistics, and Retail.";
$current_page = "industries";

require_once __DIR__ . '/includes/header.php';
?>

<!-- 1. Hero -->
<section class="lum-section pt-5 pb-5">
  <div class="lum-container">
    <?php render_component('breadcrumb', [
      'items' => [
        'Home' => SITE_URL,
        'Industries' => ''
      ]
    ]); ?>

    <div class="row align-items-center g-5 py-4">
      <div class="col-lg-8">
        <h1 class="lum-heading-1 mb-3">Domain-Specific Enterprise Software Solutions</h1>
        <p class="lum-lead mb-4">
          Deep industry expertise fused with modern software engineering. We solve regulatory, compliance, and throughput challenges across global markets.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- 2. Industries 10-Grid Overview -->
<section class="lum-section bg-dark bg-opacity-50 border-top border-bottom border-secondary border-opacity-25">
  <div class="lum-container">
    <div class="lum-grid lum-grid-2">

      <div class="lum-card">
        <div class="d-flex align-items-center gap-3 mb-3">
          <div class="lum-card__icon mb-0"><i class="bi bi-bank"></i></div>
          <div>
            <h3 class="lum-heading-4 mb-0">1. Fintech</h3>
            <span class="small text-info">Banking, NBFCs & Digital Lending</span>
          </div>
        </div>
        <p class="small text-muted mb-3">Loan origination systems (LOS), automated CIBIL credit underwriting, e-KYC verification, and PCI-DSS payment gateways.</p>
        <span class="badge bg-dark border border-secondary border-opacity-25 text-white">Products: Lumetech CRM, PayOS, FinConnect</span>
      </div>

      <div class="lum-card">
        <div class="d-flex align-items-center gap-3 mb-3">
          <div class="lum-card__icon mb-0"><i class="bi bi-gear-wide-connected"></i></div>
          <div>
            <h3 class="lum-heading-4 mb-0">2. Manufacturing</h3>
            <span class="small text-info">Industry 4.0 & Shop Floor ERP</span>
          </div>
        </div>
        <p class="small text-muted mb-3">Multi-level BOMs, real-time machine OEE telemetry, batch traceability, and ISO quality inspection workflows.</p>
        <span class="badge bg-dark border border-secondary border-opacity-25 text-white">Product: FactoryOS ERP</span>
      </div>

      <div class="lum-card">
        <div class="d-flex align-items-center gap-3 mb-3">
          <div class="lum-card__icon mb-0"><i class="bi bi-heart-pulse"></i></div>
          <div>
            <h3 class="lum-heading-4 mb-0">3. Healthcare</h3>
            <span class="small text-info">Hospitals, Polyclinics & Diagnostic Labs</span>
          </div>
        </div>
        <p class="small text-muted mb-3">HIPAA & ABDM compliant hospital information systems (HIS), Electronic Health Records (EHR), and lab LIS automation.</p>
        <span class="badge bg-dark border border-secondary border-opacity-25 text-white">Product: Healthopolis</span>
      </div>

      <div class="lum-card">
        <div class="d-flex align-items-center gap-3 mb-3">
          <div class="lum-card__icon mb-0"><i class="bi bi-cart3"></i></div>
          <div>
            <h3 class="lum-heading-4 mb-0">4. Quick Commerce</h3>
            <span class="small text-info">Hyper-Local 10-Min Delivery Tech</span>
          </div>
        </div>
        <p class="small text-muted mb-3">Dark store micro-warehouse inventory tracking, sub-second checkout, and rider dispatch route optimization.</p>
        <span class="badge bg-dark border border-secondary border-opacity-25 text-white">Product: Quick Commerce Platform</span>
      </div>

      <div class="lum-card">
        <div class="d-flex align-items-center gap-3 mb-3">
          <div class="lum-card__icon mb-0"><i class="bi bi-cup-hot"></i></div>
          <div>
            <h3 class="lum-heading-4 mb-0">5. Restaurants & Dining</h3>
            <span class="small text-info">Cloud Kitchens & QSR POS</span>
          </div>
        </div>
        <p class="small text-muted mb-3">Touchscreen POS, Kitchen Display Systems (KDS), QR digital menu ordering, and ingredient recipe costing.</p>
        <span class="badge bg-dark border border-secondary border-opacity-25 text-white">Product: CaféOS</span>
      </div>

      <div class="lum-card">
        <div class="d-flex align-items-center gap-3 mb-3">
          <div class="lum-card__icon mb-0"><i class="bi bi-truck"></i></div>
          <div>
            <h3 class="lum-heading-4 mb-0">6. Logistics</h3>
            <span class="small text-info">Interstate Freight & Cold Chain</span>
          </div>
        </div>
        <p class="small text-muted mb-3">Real-time GPS fleet tracking, ultrasonic fuel theft sensors, trip e-way bill validation, and driver scorecards.</p>
        <span class="badge bg-dark border border-secondary border-opacity-25 text-white">Product: TransFleet</span>
      </div>

      <div class="lum-card">
        <div class="d-flex align-items-center gap-3 mb-3">
          <div class="lum-card__icon mb-0"><i class="bi bi-car-front"></i></div>
          <div>
            <h3 class="lum-heading-4 mb-0">7. Transportation</h3>
            <span class="small text-info">RTA Agencies & Commercial Fleets</span>
          </div>
        </div>
        <p class="small text-muted mb-3">Vehicle registration, fitness renewal tracking, road tax penalty estimation, and automated permit client alerts.</p>
        <span class="badge bg-dark border border-secondary border-opacity-25 text-white">Product: RTA Back Office Software</span>
      </div>

      <div class="lum-card">
        <div class="d-flex align-items-center gap-3 mb-3">
          <div class="lum-card__icon mb-0"><i class="bi bi-bag"></i></div>
          <div>
            <h3 class="lum-heading-4 mb-0">8. Retail & Wholesale</h3>
            <span class="small text-info">Kirana, Wholesale & Distributors</span>
          </div>
        </div>
        <p class="small text-muted mb-3">Digital khata credit ledgers, GST invoicing, automated WhatsApp collection links, and stock reordering.</p>
        <span class="badge bg-dark border border-secondary border-opacity-25 text-white">Product: Hathbook</span>
      </div>

      <div class="lum-card">
        <div class="d-flex align-items-center gap-3 mb-3">
          <div class="lum-card__icon mb-0"><i class="bi bi-cloud-slash"></i></div>
          <div>
            <h3 class="lum-heading-4 mb-0">9. SaaS Platforms</h3>
            <span class="small text-info">Multi-Tenant Software Products</span>
          </div>
        </div>
        <p class="small text-muted mb-3">Multi-tenant workspace isolation, subscription recurring billing engines, and tenant custom domain management.</p>
        <span class="badge bg-dark border border-secondary border-opacity-25 text-white">Capability: SaaS Product Engineering</span>
      </div>

      <div class="lum-card">
        <div class="d-flex align-items-center gap-3 mb-3">
          <div class="lum-card__icon mb-0"><i class="bi bi-diagram-3"></i></div>
          <div>
            <h3 class="lum-heading-4 mb-0">10. Financial Services</h3>
            <span class="small text-info">Brokers & DSA Networks</span>
          </div>
        </div>
        <p class="small text-muted mb-3">Unified multi-lender distribution platforms, automated commission wallet payouts, and agent lead management apps.</p>
        <span class="badge bg-dark border border-secondary border-opacity-25 text-white">Product: FinConnect</span>
      </div>

    </div>
  </div>
</section>

<!-- CTA -->
<div class="lum-container">
  <?php render_component('cta', [
    'title' => 'Need Solutions Tailored to Your Industry Vertical?',
    'description' => 'Talk to Lumetech industry specialists to discuss tailored software deployments.',
    'btn_text' => 'Speak With an Industry Specialist'
  ]); ?>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

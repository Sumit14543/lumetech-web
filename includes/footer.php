<?php
/**
 * Lumetech Global Footer Shell Component - Phase 2 Enhanced
 */
?>
  </main> <!-- End Main Content -->

  <!-- Footer Shell Component -->
  <footer class="lum-footer">
    <div class="lum-container">
      
      <!-- Newsletter Row -->
      <div class="p-4 p-lg-5 mb-5 rounded-4 bg-gradient border border-secondary border-opacity-25" style="background-color: var(--lum-color-bg-surface);">
        <div class="row align-items-center g-4">
          <div class="col-lg-6">
            <h4 class="lum-heading-4 text-white mb-2"><i class="bi bi-envelope-check text-info me-2"></i> Subscribe to Lumetech Tech Insights</h4>
            <p class="lum-text-secondary mb-0 small">Get quarterly enterprise whitepapers, architecture updates, and security briefings directly to your inbox.</p>
          </div>
          <div class="col-lg-6">
            <form class="lum-ajax-form d-flex flex-column flex-sm-row gap-2" action="<?= SITE_URL ?>/api/submit-lead.php" method="POST">
              <?= csrf_field() ?>
              <input type="hidden" name="form_type" value="newsletter">
              <input type="email" name="email" class="lum-form-control mb-0" placeholder="Enter corporate email..." required aria-label="Corporate Email Address">
              <button type="submit" class="lum-btn lum-btn-primary whitespace-nowrap">
                Subscribe <i class="bi bi-send-fill ms-1"></i>
              </button>
            </form>
          </div>
        </div>
      </div>

      <!-- Main Footer Columns -->
      <div class="row g-4 mb-5">
        <!-- Brand Summary -->
        <div class="col-lg-4 col-md-6">
          <a href="<?= SITE_URL ?>" class="lum-brand-logo mb-3 d-inline-block">
            <img src="<?= SITE_URL ?>/assets/images/logo/lumetech-logo.png" alt="Lumetech Technologies" style="height: 58px; max-height: 58px; width: auto; object-fit: contain;">
          </a>
          <p class="lum-text-secondary small mb-4">
            Lumetech is a global enterprise technology provider delivering high-performance cloud infrastructure, custom software development, cybersecurity, and tech hardware products.
          </p>
          <div class="d-flex gap-3 text-secondary fs-5">
            <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="lum-footer__link" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
            <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="lum-footer__link" aria-label="Twitter X"><i class="bi bi-twitter-x"></i></a>
            <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="lum-footer__link" aria-label="GitHub"><i class="bi bi-github"></i></a>
            <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" class="lum-footer__link" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
          </div>
        </div>

        <!-- Solutions Links -->
        <div class="col-lg-2 col-md-6">
          <h4 class="lum-footer__title">Solutions</h4>
          <ul class="lum-footer__list">
            <li><a href="<?= SITE_URL ?>/services.php" class="lum-footer__link">Cloud Computing</a></li>
            <li><a href="<?= SITE_URL ?>/services.php" class="lum-footer__link">Cybersecurity</a></li>
            <li><a href="<?= SITE_URL ?>/services.php" class="lum-footer__link">Custom Software</a></li>
            <li><a href="<?= SITE_URL ?>/services.php" class="lum-footer__link">AI & Automation</a></li>
            <li><a href="<?= SITE_URL ?>/products.php" class="lum-footer__link">Enterprise Hardware</a></li>
          </ul>
        </div>

        <!-- Company Quick Links -->
        <div class="col-lg-3 col-md-6">
          <h4 class="lum-footer__title">Company</h4>
          <ul class="lum-footer__list">
            <li><a href="<?= SITE_URL ?>/about.php" class="lum-footer__link">About Lumetech</a></li>
            <li><a href="<?= SITE_URL ?>/portfolio.php" class="lum-footer__link">Case Studies & Portfolio</a></li>
            <li><a href="<?= SITE_URL ?>/industries.php" class="lum-footer__link">Industry Verticals</a></li>
            <li><a href="<?= SITE_URL ?>/blog.php" class="lum-footer__link">Insights & Whitepapers</a></li>
            <li><a href="<?= SITE_URL ?>/contact.php" class="lum-footer__link">Contact Sales Desk</a></li>
          </ul>
        </div>

        <!-- Contact Info & Company -->
        <div class="col-lg-3 col-md-6">
          <h4 class="lum-footer__title">Enterprise Contact</h4>
          <p class="small text-secondary mb-2"><i class="bi bi-geo-alt text-info me-2"></i> Sector-44, Noida, UP, India</p>
          <p class="small text-secondary mb-2"><i class="bi bi-envelope text-info me-2"></i> <?= CONTACT_EMAIL ?></p>
          <p class="small text-secondary mb-3"><i class="bi bi-telephone text-info me-2"></i> <?= CONTACT_PHONE_FORMATTED ?></p>
          <a href="<?= SITE_URL ?>/contact.php" class="lum-btn lum-btn-outline lum-btn-sm w-100">
            Contact Sales Desk
          </a>
        </div>
      </div>

      <!-- Copyright Subfooter -->
      <div class="pt-4 border-top border-secondary border-opacity-25 d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
        <p class="small text-muted mb-0">&copy; <?= date('Y') ?> Lumetech Enterprise Solutions Inc. All rights reserved.</p>
        <div class="d-flex gap-4 small">
          <a href="<?= SITE_URL ?>/privacy-policy.php" class="lum-footer__link">Privacy Policy</a>
          <a href="<?= SITE_URL ?>/terms.php" class="lum-footer__link">Terms of Service</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap 5.3.3 JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- Swiper 11 JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- GLightbox JS -->
  <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.js"></script>

  <!-- Lumetech Master ES6 Script Entry Point -->
  <script type="module" src="<?= SITE_URL ?>/assets/js/main.js"></script>
</body>
</html>

<?php require_once __DIR__ . '/../data/data.php'; ?>

<!-- ═══════════════════════════════ PRE-FOOTER CTA STRIP ═══════════════════════════════ -->
<section class="prefooter-cta">
  <div class="prefooter-cta-glow" aria-hidden="true"></div>
  <div class="container position-relative">
    <div class="prefooter-cta-inner">
      <div>
        <h2 class="prefooter-cta-h2">Ready to Scale Your Business?</h2>
        <p class="prefooter-cta-p">Get a free 30-minute strategy audit — zero obligation, pure value.</p>
      </div>
      <div class="prefooter-cta-btns">
        <a href="contact.php" class="btn-cta-white">Get Free Audit</a>
        <a href="<?= htmlspecialchars($contact_info['whatsapp']) ?>" class="btn-cta-wa" target="_blank" rel="noopener noreferrer">
          <i class="fab fa-whatsapp"></i>WhatsApp Us
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════ FOOTER ═══════════════════════════════ -->
<footer class="site-footer">
  <div class="footer-glow-l" aria-hidden="true"></div>
  <div class="footer-glow-r" aria-hidden="true"></div>

  <div class="footer-top">
    <div class="container">
      <div class="row g-5">

        <!-- ── Brand ── -->
        <div class="col-lg-4 col-md-12" data-aos="fade-up" data-aos-duration="700" data-aos-once="true">
          <a href="index.php" class="footer-logo" aria-label="Hanvesh Media Solutions">
            <span class="grad-text">HANVESH</span>
            <span class="footer-logo-tag">MEDIA SOLUTIONS</span>
          </a>
          <p class="footer-desc">
            A full-service digital marketing agency. We integrate SEO, PPC, Social Media, Email,
            Content &amp; Web Development into one unified growth engine for ambitious brands.
          </p>
          <div class="footer-socials">
            <?php foreach ($social_links as $s): ?>
              <a href="<?= htmlspecialchars($s['url']) ?>"
                 class="footer-soc"
                 aria-label="<?= htmlspecialchars($s['platform']) ?>"
                 <?= ($s['url'] !== '#') ? 'target="_blank" rel="noopener noreferrer"' : '' ?>>
                <i class="<?= htmlspecialchars($s['icon']) ?>"></i>
              </a>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- ── Quick Links ── -->
        <div class="col-lg-2 col-sm-6 col-6" data-aos="fade-up" data-aos-duration="700" data-aos-delay="80" data-aos-once="true">
          <h6 class="footer-heading">Quick Links</h6>
          <ul class="footer-links">
            <?php foreach ($footer_quick_links as $link): ?>
              <li>
                <a href="<?= htmlspecialchars($link['url']) ?>">
                  <i class="fas fa-chevron-right"></i><?= htmlspecialchars($link['label']) ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>

        <!-- ── Services ── -->
        <div class="col-lg-3 col-sm-6 col-6" data-aos="fade-up" data-aos-duration="700" data-aos-delay="160" data-aos-once="true">
          <h6 class="footer-heading">Our Services</h6>
          <ul class="footer-links">
            <?php foreach ($footer_services as $svc): ?>
              <li>
                <a href="<?= htmlspecialchars($svc['url']) ?>">
                  <i class="fas fa-chevron-right"></i><?= htmlspecialchars($svc['label']) ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>

        <!-- ── Contact ── -->
        <div class="col-lg-3 col-md-12" data-aos="fade-up" data-aos-duration="700" data-aos-delay="240" data-aos-once="true">
          <h6 class="footer-heading">Get In Touch</h6>
          <ul class="footer-contact-list">
            <li>
              <span class="fc-icon"><i class="fas fa-phone"></i></span>
              <a href="<?= htmlspecialchars($contact_info['phone_link']) ?>"><?= htmlspecialchars($contact_info['phone']) ?></a>
            </li>
            <li>
              <span class="fc-icon"><i class="fas fa-envelope"></i></span>
              <a href="<?= htmlspecialchars($contact_info['email_link']) ?>"><?= htmlspecialchars($contact_info['email']) ?></a>
            </li>
            <li>
              <span class="fc-icon"><i class="fas fa-map-marker-alt"></i></span>
              <span><?= htmlspecialchars($contact_info['address']) ?></span>
            </li>
          </ul>
          <a href="<?= htmlspecialchars($contact_info['whatsapp']) ?>" class="footer-wa-btn" target="_blank" rel="noopener noreferrer">
            <i class="fab fa-whatsapp"></i>Chat on WhatsApp
          </a>
        </div>

      </div><!-- /.row -->
    </div><!-- /.container -->
  </div><!-- /.footer-top -->

  <!-- Gradient divider -->
  <div class="container"><hr class="footer-hr"></div>

  <!-- Bottom bar -->
  <div class="footer-bottom">
    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between gap-2">
      <p class="footer-copy">
        &copy; <?= htmlspecialchars($site['year']) ?> <span class="grad-text fw-bold"><?= htmlspecialchars($site['name']) ?></span> &mdash; <?= htmlspecialchars($site['tagline']) ?>
      </p>
      <div class="footer-legal">
        <a href="privacy.php">Privacy Policy</a>
        <span class="footer-dot" aria-hidden="true">·</span>
        <a href="terms.php">Terms of Service</a>
      </div>
    </div>
  </div>
</footer>

<!-- ═══════════════════════════════ FLOATING BUTTONS ═══════════════════════════════ -->
<a href="<?= htmlspecialchars($contact_info['whatsapp']) ?>" class="float-wa" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">
  <i class="fab fa-whatsapp"></i>
</a>
<button class="btt-btn" id="bttBtn" aria-label="Back to top">
  <i class="fas fa-arrow-up"></i>
</button>

<!-- ═══════════════════════════════ SCRIPTS ═══════════════════════════════ -->
<!-- Bootstrap 5.3 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<?php if (!empty($hasSwiper)): ?>
<!-- Swiper 11 (home only) -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<?php endif; ?>

<script>
// ── AOS Init ──
AOS.init({ duration: 850, once: true, offset: 80 });

// ── Navbar scroll class ──
(function () {
  var nav = document.getElementById('mainNav');
  if (!nav) return;
  function setScrolled() {
    if (window.scrollY > 50) nav.classList.add('scrolled');
    else nav.classList.remove('scrolled');
  }
  window.addEventListener('scroll', setScrolled, { passive: true });
  setScrolled();
})();

// ── Back-to-top button ──
(function () {
  var btn = document.getElementById('bttBtn');
  if (!btn) return;
  window.addEventListener('scroll', function () {
    btn.classList.toggle('show', window.scrollY > 400);
  }, { passive: true });
  btn.addEventListener('click', function () {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
})();

// ── Services dropdown — hover on desktop ──
(function () {
  if (window.innerWidth < 992) return;
  var dd = document.getElementById('servicesDropdown');
  if (!dd) return;
  var parent = dd.closest('.dropdown');
  if (!parent) return;
  parent.addEventListener('mouseenter', function () {
    dd.setAttribute('aria-expanded', 'true');
    parent.querySelector('.dropdown-menu').classList.add('show');
  });
  parent.addEventListener('mouseleave', function () {
    dd.setAttribute('aria-expanded', 'false');
    parent.querySelector('.dropdown-menu').classList.remove('show');
  });
})();

// ── Smooth scroll for same-page anchors ──
document.querySelectorAll('a[href^="#"]').forEach(function (a) {
  a.addEventListener('click', function (e) {
    var id = this.getAttribute('href');
    if (id.length < 2) return;
    var el = document.querySelector(id);
    if (!el) return;
    e.preventDefault();
    el.scrollIntoView({ behavior: 'smooth', block: 'start' });
  });
});
</script>

<?php if (!empty($extraJs)): ?>
<!-- Page-specific JS -->
<script><?= $extraJs ?></script>
<?php endif; ?>

</body>
</html>

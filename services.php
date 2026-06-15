<?php
$pageTitle    = 'Our Services | Hanvesh Media Solutions';
$pageDesc     = 'Explore all 6 integrated digital marketing services — Social Media, SEO, PPC, Email, Content & Web Development — from Hanvesh Media Solutions.';
$pageKeywords = 'digital marketing services India, SEO services, PPC management India, social media marketing services, email marketing agency, web development services India, content marketing agency';
$activePage   = 'services';
$activeService = null;
$isInnerPage  = true;
$hasSwiper    = false;
$waMessage    = 'Hi%20Hanvesh%2C%20I%20need%20help%20with%20';
$extraJs      = '';

require_once 'data/data.php';
require_once 'components/header.php';
?>

<!-- PAGE BANNER -->
<div class="page-banner" style="background-image:url('https://picsum.photos/seed/hms-svc-banner/1920/700');" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
  <div class="banner-overlay"></div>
  <div class="banner-content container">
    <h1>Our Services</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Services</li>
      </ol>
    </nav>
  </div>
</div>


<!-- INTRO -->
<section class="sec">
  <div class="container text-center" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
    <h2 class="sec-title">Six Services. <span class="grad-text">One Integrated Strategy.</span></h2>
    <p class="sec-sub mx-auto mt-3">Every service we offer is designed to work with the others — not in isolation. When your SEO, Social, PPC, Email, Content, and Web all sing from the same hymn sheet, your growth becomes exponential.</p>
  </div>
</section>


<!-- SERVICE BLOCKS (foreach loop) -->
<?php foreach ($services as $i => $svc):
  $isAlt    = ($i % 2 !== 0);
  $bgStyle  = $isAlt ? ' style="background:var(--light);"' : '';
  $imgOrder = $isAlt ? ' order-lg-2' : '';
  $txtOrder = $isAlt ? ' order-lg-1' : '';
?>
<section class="svc-block" id="<?= $svc['key'] ?>"<?= $bgStyle ?>>
  <div class="container">
    <div class="row align-items-center g-5">

      <!-- Image -->
      <div class="col-lg-6<?= $imgOrder ?>" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
        <div class="svc-block-img">
          <img src="<?= $svc['image'] ?>" alt="<?= htmlspecialchars($svc['title']) ?>">
        </div>
      </div>

      <!-- Text -->
      <div class="col-lg-6<?= $txtOrder ?>" data-aos="fade-up" data-aos-duration="850" data-aos-once="true" data-aos-delay="100">
        <div class="d-flex align-items-center gap-3 mb-3">
          <div style="width:52px;height:52px;background:var(--grad);border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:1.4rem;color:#fff;flex-shrink:0;">
            <i class="<?= $svc['icon'] ?>"></i>
          </div>
          <h2 class="sec-title mb-0"><?= $svc['title'] ?></h2>
        </div>
        <p style="color:#444;line-height:1.8;margin-bottom:20px;"><?= $svc['desc'] ?></p>

        <?php foreach ($svc['features'] as $feat): ?>
          <div class="svc-feature" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
            <div class="sfi"><i class="fas fa-check"></i></div>
            <div>
              <h6><?= $feat['title'] ?></h6>
              <p><?= $feat['desc'] ?></p>
            </div>
          </div>
        <?php endforeach; ?>

        <a href="contact.php" class="btn-grad mt-3"><?= $svc['cta_text'] ?> <i class="fas fa-arrow-right ms-2"></i></a>
      </div>

    </div>
  </div>
</section>
<?php endforeach; ?>


<!-- CTA STRIP -->
<section class="why-sec sec">
  <div class="container text-center">
    <div data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
      <h2 class="sec-title text-white mb-3">Not Sure Which Services You <span class="grad-text">Need?</span></h2>
      <p class="sec-sub mx-auto mb-5" style="color:rgba(255,255,255,.6);">Book a free 30-minute audit call and we'll analyse your current digital presence and tell you exactly where to focus first.</p>
      <a href="contact.php" class="btn-grad me-3"><i class="fas fa-calendar me-2"></i>Get Free Digital Audit</a>
      <a href="portfolio.php" class="btn-outline-grad">See Our Results</a>
    </div>
  </div>
</section>

<?php require_once 'components/footer.php'; ?>

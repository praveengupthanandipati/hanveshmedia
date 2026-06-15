<?php
/**
 * Shared template for individual service pages.
 * Expects $sp array to be set before including this file.
 *
 * $sp keys:
 *  banner_img, banner_title, icon, intro_h2, intro_p1, intro_p2,
 *  stats[]{num, label}, included[]{icon, title, desc},
 *  process[]{num, title, desc}, faq[]{q, a}, faq_id,
 *  related[]{url, icon, title, desc}, cta_title, cta_sub, cta_btn
 */
?>

<!-- PAGE BANNER -->
<div class="page-banner" style="background-image:url('<?= $sp['banner_img'] ?>');" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
  <div class="banner-overlay"></div>
  <div class="banner-content container">
    <div class="d-flex align-items-center gap-3 justify-content-center mb-3">
      <div style="width:56px;height:56px;background:var(--grad);border-radius:16px;display:flex;align-items:center;justify-content:center;font-size:1.5rem;color:#fff;flex-shrink:0;">
        <i class="<?= $sp['icon'] ?>"></i>
      </div>
      <h1><?= $sp['banner_title'] ?></h1>
    </div>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="services.php">Services</a></li>
        <li class="breadcrumb-item active"><?= $sp['banner_title'] ?></li>
      </ol>
    </nav>
  </div>
</div>


<!-- INTRO / OVERVIEW -->
<section class="sec">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
        <div class="svc-block-img">
          <img src="<?= $sp['intro_img'] ?>" alt="<?= htmlspecialchars($sp['banner_title']) ?>">
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-up" data-aos-duration="850" data-aos-once="true" data-aos-delay="100">
        <span class="badge mb-3" style="background:var(--grad);font-size:.78rem;padding:6px 14px;border-radius:20px;letter-spacing:1px;"><?= strtoupper($sp['banner_title']) ?></span>
        <h2 class="sec-title"><?= $sp['intro_h2'] ?></h2>
        <p style="color:#555;line-height:1.85;margin-top:18px;"><?= $sp['intro_p1'] ?></p>
        <p style="color:#555;line-height:1.85;"><?= $sp['intro_p2'] ?></p>
        <div class="row g-3 mt-3">
          <?php foreach ($sp['stats'] as $stat): ?>
            <div class="col-6" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
              <div style="background:var(--light);border-radius:12px;padding:16px;text-align:center;">
                <div class="grad-text" style="font-size:1.8rem;font-weight:800;"><?= $stat['num'] ?></div>
                <div style="font-size:.82rem;color:#666;"><?= $stat['label'] ?></div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- WHAT'S INCLUDED -->
<section class="sec" style="background:var(--light);">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
      <h2 class="sec-title">Everything Included in <span class="grad-text">Your <?= $sp['banner_title'] ?> Package</span></h2>
      <p class="sec-sub mx-auto mt-3">No à-la-carte confusion. Every package covers the full lifecycle — from strategy to execution to reporting.</p>
    </div>
    <div class="row g-4">
      <?php foreach ($sp['included'] as $i => $item): ?>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="850" data-aos-once="true" data-aos-delay="<?= ($i % 3) * 60 ?>">
          <div class="cpc-card h-100">
            <div class="cpc-ico"><i class="<?= $item['icon'] ?>"></i></div>
            <h5><?= $item['title'] ?></h5>
            <p><?= $item['desc'] ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- OUR PROCESS -->
<section class="sec">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
      <h2 class="sec-title">How We <span class="grad-text">Deliver <?= $sp['banner_title'] ?></span></h2>
      <p class="sec-sub mx-auto mt-3">A structured, repeatable process that consistently delivers results — month after month.</p>
    </div>
    <div class="row g-4">
      <?php foreach ($sp['process'] as $i => $step): ?>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="850" data-aos-once="true" data-aos-delay="<?= ($i % 3) * 60 ?>">
          <div style="background:#fff;border-radius:16px;padding:28px;box-shadow:0 4px 24px rgba(212,0,110,.07);border:1px solid rgba(212,0,110,.08);height:100%;">
            <div style="width:44px;height:44px;background:var(--grad);border-radius:12px;display:flex;align-items:center;justify-content:center;color:#fff;font-weight:800;font-size:1rem;margin-bottom:16px;"><?= $step['num'] ?></div>
            <h5 style="font-weight:700;margin-bottom:10px;"><?= $step['title'] ?></h5>
            <p style="color:#666;font-size:.88rem;line-height:1.7;"><?= $step['desc'] ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- FAQ -->
<section class="sec" style="background:var(--light);">
  <div class="container">
    <div class="row g-5 align-items-start">
      <div class="col-lg-4" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
        <h2 class="sec-title">Frequently Asked <span class="grad-text">Questions</span></h2>
        <p style="color:#555;line-height:1.8;margin-top:16px;">Got more questions? <a href="contact.php" style="color:var(--pink);font-weight:600;">Talk to our team</a> — we respond within 2 hours.</p>
        <a href="contact.php" class="btn-grad mt-4 d-inline-block">Start My Free Audit <i class="fas fa-arrow-right ms-2"></i></a>
      </div>
      <div class="col-lg-8" data-aos="fade-up" data-aos-duration="850" data-aos-once="true" data-aos-delay="100">
        <div class="accordion" id="<?= $sp['faq_id'] ?>">
          <?php foreach ($sp['faq'] as $fi => $fitem): ?>
            <div class="accordion-item border-0 mb-3" style="border-radius:12px;overflow:hidden;box-shadow:0 2px 16px rgba(0,0,0,.06);">
              <h2 class="accordion-header">
                <button class="accordion-button<?= $fi > 0 ? ' collapsed' : '' ?>" type="button"
                        data-bs-toggle="collapse" data-bs-target="#<?= $sp['faq_id'] ?>_<?= $fi ?>">
                  <?= $fitem['q'] ?>
                </button>
              </h2>
              <div id="<?= $sp['faq_id'] ?>_<?= $fi ?>" class="accordion-collapse collapse<?= $fi === 0 ? ' show' : '' ?>" data-bs-parent="#<?= $sp['faq_id'] ?>">
                <div class="accordion-body" style="color:#555;line-height:1.8;"><?= $fitem['a'] ?></div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- RELATED SERVICES -->
<section class="sec">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
      <h2 class="sec-title">Services That <span class="grad-text">Work Best Alongside This</span></h2>
    </div>
    <div class="row g-4">
      <?php foreach ($sp['related'] as $i => $rel): ?>
        <div class="col-md-4" data-aos="fade-up" data-aos-duration="850" data-aos-once="true" data-aos-delay="<?= $i * 80 ?>">
          <a href="<?= $rel['url'] ?>" class="text-decoration-none">
            <div style="background:var(--light);border-radius:16px;padding:28px;text-align:center;transition:.3s;border:2px solid transparent;" onmouseover="this.style.borderColor='var(--pink)'" onmouseout="this.style.borderColor='transparent'">
              <div style="width:56px;height:56px;background:var(--grad);border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:1.4rem;color:#fff;margin:0 auto 16px;">
                <i class="<?= $rel['icon'] ?>"></i>
              </div>
              <h5 style="color:#111;font-weight:700;"><?= $rel['title'] ?></h5>
              <p style="color:#666;font-size:.85rem;"><?= $rel['desc'] ?></p>
              <span style="color:var(--pink);font-size:.84rem;font-weight:600;">Learn More <i class="fas fa-arrow-right ms-1"></i></span>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- CTA STRIP -->
<section class="why-sec sec">
  <div class="container text-center">
    <div data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
      <h2 class="sec-title text-white mb-3"><?= $sp['cta_title'] ?></h2>
      <p class="sec-sub mx-auto mb-5" style="color:rgba(255,255,255,.65);"><?= $sp['cta_sub'] ?></p>
      <a href="contact.php" class="btn-grad me-3"><i class="fas fa-rocket me-2"></i><?= $sp['cta_btn'] ?></a>
      <a href="services.php" class="btn-outline-grad">View All Services</a>
    </div>
  </div>
</section>

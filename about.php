<?php
$pageTitle    = 'About Us | Hanvesh Media Solutions';
$pageDesc     = 'Meet the team behind Hanvesh Media Solutions — a full-service digital marketing agency helping Indian businesses grow online.';
$pageKeywords = 'about Hanvesh Media Solutions, digital marketing team India, digital marketing experts India, marketing agency about us, Indian digital marketing company, who we are';
$activePage   = 'about';
$activeService = null;
$isInnerPage  = true;
$hasSwiper    = false;
$waMessage    = 'Hi%20Hanvesh%2C%20I%20need%20help%20with%20';
$extraJs      = '';

require_once 'data/data.php';
require_once 'components/header.php';
?>

<!-- PAGE BANNER -->
<div class="page-banner" style="background-image:url('https://picsum.photos/seed/hms-about-banner/1920/700');" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
  <div class="banner-overlay"></div>
  <div class="banner-content container">
    <h1>About Hanvesh Media Solutions</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">About Us</li>
      </ol>
    </nav>
  </div>
</div>


<!-- WHO WE ARE -->
<section class="sec">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-5" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
        <div class="about-img">
          <img src="https://picsum.photos/seed/hms-about1/900/600" alt="Hanvesh Media Team">
          <div class="about-badge"><span class="num">5+</span> Years of Excellence</div>
        </div>
      </div>
      <div class="col-lg-7" data-aos="fade-up" data-aos-duration="850" data-aos-once="true" data-aos-delay="100">
        <h2 class="sec-title mb-3">We Are Your <span class="grad-text">360-Degree Growth Partner</span></h2>
        <p style="font-size:.97rem;color:#444;line-height:1.8;">Hanvesh Media Solutions was built on a simple but powerful belief: businesses shouldn't have to juggle six different agencies to grow online. We combined Social Media Marketing, SEO, PPC, Email Marketing, Content, and Web Development under one roof — creating a seamless, integrated engine for growth.</p>
        <p style="font-size:.97rem;color:#444;line-height:1.8;" class="mt-3">Since our founding, we've helped 50+ businesses across e-commerce, healthcare, real estate, and B2B SaaS scale their digital presence, reduce their cost per lead, and build sustainable online revenue streams.</p>

        <div class="row g-3 mt-2">
          <?php foreach ($about_stats as $i => $stat): ?>
            <div class="col-6 col-sm-3" data-aos="fade-up" data-aos-duration="850" data-aos-once="true" data-aos-delay="<?= $i * 80 ?>">
              <div class="text-center">
                <div style="font-size:2rem;font-weight:900;background:var(--grad);-webkit-background-clip:text;background-clip:text;-webkit-text-fill-color:transparent;color:transparent;"><?= $stat['num'] ?></div>
                <div style="font-size:.8rem;color:#666;font-weight:600;"><?= $stat['label'] ?></div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <div class="mt-4">
          <a href="contact.php" class="btn-grad me-3">Work With Us</a>
          <a href="portfolio.php" class="btn-outline-grad">See Our Work</a>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- STATS STRIP -->
<section class="stats-strip">
  <div class="container">
    <div class="row g-4 text-center">
      <?php foreach ($stats_strip as $i => $stat): ?>
        <div class="col-6 col-md-3" data-aos="fade-up" data-aos-duration="850" data-aos-once="true" data-aos-delay="<?= $i * 100 ?>">
          <div class="stat-i">
            <div class="n"><?= $stat['num'] ?></div>
            <div class="l"><?= $stat['label'] ?></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- CORE VALUES -->
<section class="sec" style="background:var(--light);">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
      <h2 class="sec-title">What Drives <span class="grad-text">Everything We Do</span></h2>
      <p class="sec-sub mx-auto mt-3">Our values aren't words on a wall — they're the foundation of every campaign, every report, and every conversation we have with clients.</p>
    </div>
    <div class="row g-4">
      <?php foreach ($core_values as $i => $val): ?>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="850" data-aos-once="true" data-aos-delay="<?= ($i % 3) * 80 ?>">
          <div class="value-card">
            <div class="value-icon"><i class="<?= $val['icon'] ?>"></i></div>
            <h5><?= $val['title'] ?></h5>
            <p><?= $val['desc'] ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- MEET THE TEAM -->
<section class="sec">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
      <h2 class="sec-title">The People Behind <span class="grad-text">Your Growth</span></h2>
      <p class="sec-sub mx-auto mt-3">Real humans. Real expertise. Real passion for helping businesses win online.</p>
    </div>
    <div class="row g-4">
      <?php foreach ($team as $i => $member): ?>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="850" data-aos-once="true" data-aos-delay="<?= $i * 80 ?>">
          <div class="team-card">
            <div class="team-photo">
              <img src="<?= $member['img'] ?>" alt="<?= htmlspecialchars($member['name']) ?>">
              <div class="team-overlay">
                <?php foreach ($member['socials'] as $soc): ?>
                  <a href="<?= $soc['url'] ?>" aria-label="Social"><i class="<?= $soc['icon'] ?>"></i></a>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="team-info">
              <h5><?= $member['name'] ?></h5>
              <span class="role"><?= $member['role'] ?></span>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- CTA STRIP -->
<section class="why-sec sec">
  <div class="container text-center">
    <div data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
      <h2 class="sec-title text-white mb-3">Ready to Grow With <span class="grad-text">Our Team?</span></h2>
      <p class="sec-sub mx-auto mb-5" style="color:rgba(255,255,255,.6);">Book a free 30-minute discovery call and let's map out your growth roadmap together.</p>
      <a href="contact.php" class="btn-grad me-3"><i class="fas fa-calendar me-2"></i>Book Discovery Call</a>
      <a href="services.php" class="btn-outline-grad">Explore Our Services</a>
    </div>
  </div>
</section>

<?php require_once 'components/footer.php'; ?>

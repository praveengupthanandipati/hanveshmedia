<?php
$pageTitle    = 'Hanvesh Media Solutions | One Agency. Six Engines of Growth.';
$pageDesc     = 'Full-service digital marketing agency. Social Media Marketing, SEO, PPC, Email, Content & Web Development — all under one roof.';
$pageKeywords = 'digital marketing agency India, full-service digital marketing, SEO PPC social media marketing, online marketing agency India, digital marketing services, grow business online India, Hanvesh Media Solutions';
$activePage   = 'home';
$activeService = null;
$isInnerPage  = false;
$hasSwiper    = true;
$waMessage    = 'Hi%20Hanvesh%2C%20I%20need%20help%20with%20';

$swiperJs = <<<'JS'
new Swiper('.hero-swiper', {
  loop: true,
  speed: 900,
  autoplay: { delay: 5500, disableOnInteraction: false },
  parallax: true,
  pagination: { el: '.swiper-pagination', clickable: true },
  navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
  grabCursor: true
});
JS;
$extraJs = $swiperJs;

require_once 'data/data.php';
require_once 'components/header.php';
?>

<!-- ═══════════════════════════════ HERO — SWIPER 5 SLIDES ═══════════════════════════════ -->
<section id="home">
  <div class="swiper hero-swiper">
    <div class="swiper-wrapper">

      <!-- Slide 1 -->
      <div class="swiper-slide hero-slide s1">
        <div class="slide-bg"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
          <div class="hero-badge">Trusted by 50+ Indian Businesses</div>
          <h1 class="hero-h1">One Agency.<br><span class="hl">Six Engines of Growth.</span></h1>
          <p class="hero-p">Stop juggling multiple vendors. Get Social Media, SEO, PPC, Email, Content &amp; Web Development under one roof — one strategy, one report, one partner.</p>
          <div class="d-flex flex-wrap justify-content-center hero-btns">
            <a href="contact.php" class="btn-hw"><i class="fas fa-chart-bar me-2"></i>Get Free Growth Audit</a>
            <a href="<?= $contact_info['phone_link'] ?>" class="btn-ho ms-3"><i class="fas fa-phone me-2"></i>Call <?= $contact_info['phone'] ?></a>
          </div>
          <div class="hero-stats">
            <div class="hero-stat"><span class="num">50+</span><span class="lbl">Happy Clients</span></div>
            <div class="hero-stat"><span class="num">6</span><span class="lbl">Services</span></div>
            <div class="hero-stat"><span class="num">5x</span><span class="lbl">Avg. ROAS</span></div>
            <div class="hero-stat"><span class="num">24h</span><span class="lbl">Response</span></div>
          </div>
        </div>
      </div>

      <!-- Slide 2 — SMM -->
      <div class="swiper-slide hero-slide s2">
        <div class="slide-bg"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
          <div class="hero-badge"><i class="fab fa-instagram me-2"></i>Social Media Marketing</div>
          <h1 class="hero-h1">Turn Followers<br><span class="hl">Into Paying Customers</span></h1>
          <p class="hero-p">Organic &amp; paid social strategies for Instagram, Facebook, and LinkedIn. Build a community that actually buys from you.</p>
          <div class="d-flex flex-wrap justify-content-center hero-btns">
            <a href="contact.php" class="btn-hw"><i class="fas fa-rocket me-2"></i>Start Growing Today</a>
            <a href="service-smm.php" class="btn-ho ms-3"><i class="fas fa-arrow-right me-2"></i>Learn More</a>
          </div>
        </div>
      </div>

      <!-- Slide 3 — SEO / PPC -->
      <div class="swiper-slide hero-slide s3">
        <div class="slide-bg"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
          <div class="hero-badge"><i class="fas fa-search me-2"></i>SEO &amp; PPC</div>
          <h1 class="hero-h1">Own Google's<br><span class="hl">First Page. Every Day.</span></h1>
          <p class="hero-p">Technical SEO + high-intent PPC campaigns working together. Spend ₹1, earn ₹5. We optimise until the numbers don't lie.</p>
          <div class="d-flex flex-wrap justify-content-center hero-btns">
            <a href="contact.php" class="btn-hw"><i class="fas fa-chart-line me-2"></i>Boost My Rankings</a>
            <a href="service-seo.php" class="btn-ho ms-3"><i class="fas fa-arrow-right me-2"></i>Learn More</a>
          </div>
        </div>
      </div>

      <!-- Slide 4 — Content & Email -->
      <div class="swiper-slide hero-slide s4">
        <div class="slide-bg"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
          <div class="hero-badge"><i class="fas fa-envelope me-2"></i>Content &amp; Email Marketing</div>
          <h1 class="hero-h1">Nurture Leads<br><span class="hl">While You Sleep</span></h1>
          <p class="hero-p">Automated drip campaigns, authority blogs, and video scripts that deliver revenue 24/7 — without lifting a finger.</p>
          <div class="d-flex flex-wrap justify-content-center hero-btns">
            <a href="contact.php" class="btn-hw"><i class="fas fa-envelope me-2"></i>Start Automating</a>
            <a href="service-email.php" class="btn-ho ms-3"><i class="fas fa-arrow-right me-2"></i>Learn More</a>
          </div>
        </div>
      </div>

      <!-- Slide 5 — Web Dev -->
      <div class="swiper-slide hero-slide s5">
        <div class="slide-bg"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
          <div class="hero-badge"><i class="fas fa-code me-2"></i>Web Development</div>
          <h1 class="hero-h1">Your Website Is Your<br><span class="hl">24/7 Salesperson</span></h1>
          <p class="hero-p">Fast, mobile-first, SEO-optimised websites that convert visitors into leads. Built to rank, built to sell, built to scale.</p>
          <div class="d-flex flex-wrap justify-content-center hero-btns">
            <a href="contact.php" class="btn-hw"><i class="fas fa-laptop-code me-2"></i>Build My Website</a>
            <a href="service-webdev.php" class="btn-ho ms-3"><i class="fas fa-arrow-right me-2"></i>Learn More</a>
          </div>
        </div>
      </div>

    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</section>


<!-- ═══════════════════════════════ STATS STRIP ═══════════════════════════════ -->
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


<!-- ═══════════════════════════════ SERVICES OVERVIEW ═══════════════════════════════ -->
<section class="services-sec sec">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
      <h2 class="sec-title">Your Complete <span class="grad-text">Digital Marketing</span> Ecosystem</h2>
      <p class="sec-sub mx-auto mt-3">Why pay six different agencies when one strategic partner does it better — integrated, coordinated, and results-driven?</p>
    </div>
    <div class="row g-4">
      <?php foreach ($services as $i => $svc): ?>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="850" data-aos-once="true" data-aos-delay="<?= ($i % 3) * 80 ?>">
          <div class="svc-card">
            <div class="svc-icon"><i class="<?= $svc['icon'] ?>"></i></div>
            <h5><?= $svc['title'] ?></h5>
            <p><?= $svc['home_desc'] ?></p>
            <a href="<?= $svc['url'] ?>" class="svc-link">Explore Service <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="text-center mt-5" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
      <a href="services.php" class="btn-grad me-3">View All Services</a>
      <a href="portfolio.php" class="btn-outline-grad">See Our Work</a>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════ INTEGRATED ADVANTAGE ═══════════════════════════════ -->
<section class="integrated-sec sec">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-5" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
        <div class="venn-wrap">
          <div class="vc vc1"></div>
          <div class="vc vc2"></div>
          <div class="vc vc3"></div>
          <div class="venn-mid">
            <div class="big">6×</div>
            <p>Channels<br>Working as One</p>
          </div>
        </div>
      </div>
      <div class="col-lg-7" data-aos="fade-up" data-aos-duration="850" data-aos-once="true" data-aos-delay="100">
        <h2 class="sec-title text-white mb-2">The Magic Happens <span class="grad-text">in the Middle</span></h2>
        <p class="mb-4" style="color:rgba(255,255,255,.6);font-size:.97rem;line-height:1.75;">Competitors sell these services separately. We sell them integrated — where every channel amplifies the others and data flows freely between teams.</p>
        <div class="row g-3">
          <?php foreach ($adv_cards as $i => $adv): ?>
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="850" data-aos-once="true" data-aos-delay="<?= $i * 80 ?>">
              <div class="adv-card">
                <div class="ico"><?= $adv['ico'] ?></div>
                <h6><?= $adv['title'] ?></h6>
                <p><?= $adv['desc'] ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════ HOW IT WORKS ═══════════════════════════════ -->
<section class="steps-sec sec">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
      <h2 class="sec-title">From <span class="grad-text">"Lost"</span> to <span class="grad-text">"Leading"</span> in 4 Steps</h2>
      <p class="sec-sub mx-auto mt-3">Our proven process takes you from where you are to where you want to be — without the guesswork.</p>
    </div>
    <div class="row g-4">
      <?php foreach ($how_steps as $i => $step): ?>
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-duration="850" data-aos-once="true" data-aos-delay="<?= $i * 100 ?>">
          <div class="step-c">
            <div class="step-num"><?= $step['num'] ?></div>
            <h5><?= $step['title'] ?></h5>
            <p><?= $step['desc'] ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="text-center mt-5" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
      <a href="contact.php" class="btn-grad">Book Your Discovery Call <i class="fas fa-arrow-right ms-2"></i></a>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════ CASE STUDIES PREVIEW ═══════════════════════════════ -->
<section class="case-sec sec">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
      <h2 class="sec-title">Real Results. Real <span class="grad-text">Industries.</span> Real ROI.</h2>
      <p class="sec-sub mx-auto mt-3">See how we've helped businesses break through the noise and grow their revenue with integrated digital marketing.</p>
    </div>
    <div class="row g-4">
      <?php foreach ($case_studies as $i => $cs): ?>
        <div class="col-md-4" data-aos="fade-up" data-aos-duration="850" data-aos-once="true" data-aos-delay="<?= $i * 100 ?>">
          <div class="case-card">
            <div class="case-head">
              <div class="ind"><?= $cs['industry'] ?></div>
              <h5><?= $cs['title'] ?></h5>
              <div>
                <?php foreach ($cs['tags'] as $tag): ?>
                  <span class="badge-tag"><?= $tag ?></span>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="case-body">
              <?php foreach ($cs['results'] as $res): ?>
                <div class="res-item">
                  <div class="ri"><i class="<?= $res['icon'] ?>"></i></div>
                  <span><?= $res['text'] ?></span>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="text-center mt-5" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
      <a href="portfolio.php" class="btn-grad">View Full Portfolio <i class="fas fa-arrow-right ms-2"></i></a>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════ WHY HANVESH ═══════════════════════════════ -->
<section class="why-sec sec">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
      <h2 class="sec-title text-white">What Makes <span class="grad-text">Us Different?</span></h2>
      <p class="sec-sub mx-auto mt-3" style="color:rgba(255,255,255,.5);">We don't just run campaigns — we become your long-term growth partner.</p>
    </div>
    <div class="row g-4">
      <?php foreach ($why_cards as $i => $why): ?>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="850" data-aos-once="true" data-aos-delay="<?= $i * 100 ?>">
          <div class="why-card">
            <div class="why-ico"><i class="<?= $why['icon'] ?>"></i></div>
            <h5><?= $why['title'] ?></h5>
            <p><?= $why['desc'] ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="text-center mt-5" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
      <a href="about.php" class="btn-outline-grad">Meet the Team <i class="fas fa-arrow-right ms-2"></i></a>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════ BLOG PREVIEW ═══════════════════════════════ -->
<section class="blog-sec sec">
  <div class="container">
    <div class="d-flex justify-content-between align-items-end flex-wrap gap-3 mb-5">
      <div data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
        <h2 class="sec-title">Latest from the <span class="grad-text">Hanvesh Desk</span></h2>
        <p class="sec-sub mt-2">Actionable insights to grow your business online.</p>
      </div>
      <a href="blog.php" class="btn-outline-grad flex-shrink-0" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">Read All Articles</a>
    </div>
    <div class="row g-4">
      <?php foreach (array_slice($blog_posts, 0, 3) as $i => $post): ?>
        <div class="col-md-4" data-aos="fade-up" data-aos-duration="850" data-aos-once="true" data-aos-delay="<?= $i * 100 ?>">
          <div class="blog-card">
            <div class="blog-thumb-img">
              <img src="<?= $post['img'] ?>" alt="<?= htmlspecialchars($post['title']) ?>">
            </div>
            <div class="blog-body">
              <span class="blog-cat"><?= $post['cat'] ?></span>
              <h5><?= $post['title'] ?></h5>
              <p><?= $post['excerpt'] ?></p>
              <div class="blog-meta">
                <span><i class="fas fa-clock me-1"></i><?= $post['read'] ?></span>
                <span><i class="fas fa-calendar me-1"></i><?= $post['date'] ?></span>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php require_once 'components/footer.php'; ?>

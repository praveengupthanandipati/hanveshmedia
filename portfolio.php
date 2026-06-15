<?php
$pageTitle    = 'Portfolio | Hanvesh Media Solutions';
$pageDesc     = 'Explore our portfolio of successful digital marketing campaigns across e-commerce, healthcare, real estate, and B2B.';
$pageKeywords = 'digital marketing portfolio India, SEO case studies, PPC campaign results, social media marketing portfolio, marketing agency work India, digital marketing success stories';
$activePage   = 'portfolio';
$activeService = null;
$isInnerPage  = true;
$hasSwiper    = false;
$waMessage    = 'Hi%20Hanvesh%2C%20I%20need%20help%20with%20';

$portfolioFilterJs = <<<'JS'
document.querySelectorAll('.filter-btn').forEach(function(btn) {
  btn.addEventListener('click', function() {
    document.querySelectorAll('.filter-btn').forEach(function(b) { b.classList.remove('active'); });
    this.classList.add('active');
    var filter = this.dataset.filter;
    document.querySelectorAll('.p-grid-item').forEach(function(item) {
      if (filter === 'all' || item.dataset.cat === filter) {
        item.style.display = '';
      } else {
        item.style.display = 'none';
      }
    });
  });
});
JS;
$extraJs = $portfolioFilterJs;

require_once 'data/data.php';
require_once 'components/header.php';
?>

<!-- PAGE BANNER -->
<div class="page-banner" style="background-image:url('https://picsum.photos/seed/hms-port-banner/1920/700');" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
  <div class="banner-overlay"></div>
  <div class="banner-content container">
    <h1>Our Portfolio</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Portfolio</li>
      </ol>
    </nav>
  </div>
</div>


<!-- PORTFOLIO GRID -->
<section class="sec">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
      <h2 class="sec-title">Results That <span class="grad-text">Speak for Themselves</span></h2>
      <p class="sec-sub mx-auto mt-3">A selection of campaigns, websites, and growth projects we've delivered for clients across industries.</p>
    </div>

    <!-- Filter Buttons -->
    <div class="filter-wrap justify-content-center" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
      <button class="filter-btn active" data-filter="all">All Work</button>
      <button class="filter-btn" data-filter="smm">Social Media</button>
      <button class="filter-btn" data-filter="seo">SEO</button>
      <button class="filter-btn" data-filter="ppc">PPC / Ads</button>
      <button class="filter-btn" data-filter="webdev">Web Dev</button>
    </div>

    <!-- Portfolio Grid -->
    <div class="row g-4">
      <?php
      $portItems = [
        ['cat'=>'smm',    'title'=>'Fashion Brand — Instagram Growth',       'cat_label'=>'Social Media Marketing', 'img'=>'https://picsum.photos/seed/hms-port1/800/600'],
        ['cat'=>'seo',    'title'=>'Dental Clinic — #1 Local Rankings',      'cat_label'=>'SEO Optimization',       'img'=>'https://picsum.photos/seed/hms-port2/800/600'],
        ['cat'=>'webdev', 'title'=>'Real Estate — Lead Gen Website',         'cat_label'=>'Web Development',        'img'=>'https://picsum.photos/seed/hms-port3/800/600'],
        ['cat'=>'ppc',    'title'=>'SaaS — 5.2x ROAS Google Ads',            'cat_label'=>'PPC / Google Ads',       'img'=>'https://picsum.photos/seed/hms-port4/800/600'],
        ['cat'=>'smm',    'title'=>'Restaurant Chain — Social &amp; Reels',  'cat_label'=>'Social Media Marketing', 'img'=>'https://picsum.photos/seed/hms-port5/800/600'],
        ['cat'=>'seo',    'title'=>'E-Commerce — Organic Traffic 3x',        'cat_label'=>'SEO Optimization',       'img'=>'https://picsum.photos/seed/hms-port6/800/600'],
        ['cat'=>'webdev', 'title'=>'Beauty Brand — Shopify Store',           'cat_label'=>'Web Development',        'img'=>'https://picsum.photos/seed/hms-port7/800/600'],
        ['cat'=>'ppc',    'title'=>'Clinic — 300% More Appointments',        'cat_label'=>'PPC / Google Ads',       'img'=>'https://picsum.photos/seed/hms-port8/800/600'],
        ['cat'=>'smm',    'title'=>'B2B SaaS — LinkedIn Lead Gen',           'cat_label'=>'Social Media Marketing', 'img'=>'https://picsum.photos/seed/hms-port9/800/600'],
      ];
      $delays = [0, 80, 160, 0, 80, 160, 0, 80, 160];
      foreach ($portItems as $i => $p):
      ?>
        <div class="col-md-4 col-sm-6 p-grid-item" data-cat="<?= $p['cat'] ?>" data-aos="fade-up" data-aos-duration="850" data-aos-once="true" data-aos-delay="<?= $delays[$i] ?>">
          <a class="p-item" href="#">
            <img src="<?= $p['img'] ?>" alt="<?= htmlspecialchars($p['title']) ?>">
            <div class="p-overlay">
              <h5><?= $p['title'] ?></h5>
              <span class="p-cat"><?= $p['cat_label'] ?></span>
              <a class="p-link" href="#" aria-label="View Project"><i class="fas fa-external-link-alt"></i></a>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- CASE STUDIES -->
<section class="case-sec sec">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
      <h2 class="sec-title">Deep Dive: <span class="grad-text">Case Studies</span></h2>
      <p class="sec-sub mx-auto mt-3">The numbers behind our biggest wins — real data, real strategy, real results.</p>
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
  </div>
</section>


<!-- CTA -->
<section class="why-sec sec">
  <div class="container text-center">
    <div data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
      <h2 class="sec-title text-white mb-3">Want Results Like <span class="grad-text">These?</span></h2>
      <p class="sec-sub mx-auto mb-5" style="color:rgba(255,255,255,.6);">Book a free audit call and we'll show you exactly how we'd replicate these results for your business.</p>
      <a href="contact.php" class="btn-grad me-3"><i class="fas fa-calendar me-2"></i>Get Free Audit</a>
      <a href="services.php" class="btn-outline-grad">Explore Our Services</a>
    </div>
  </div>
</section>

<?php require_once 'components/footer.php'; ?>

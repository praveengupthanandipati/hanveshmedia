<?php
$pageTitle    = 'Blog & Insights | Hanvesh Media Solutions';
$pageDesc     = 'Digital marketing insights, tips, and strategies from the Hanvesh Media Solutions team to help you grow your business online.';
$pageKeywords = 'digital marketing blog India, SEO tips and strategies, PPC advertising guide, social media marketing tips, email marketing blog, content marketing insights, grow business online';
$activePage   = 'blog';
$activeService = null;
$isInnerPage  = true;
$hasSwiper    = false;
$waMessage    = 'Hi%20Hanvesh%2C%20I%20need%20help%20with%20';
$extraJs      = '';

require_once 'data/data.php';
require_once 'components/header.php';
?>

<!-- PAGE BANNER -->
<div class="page-banner" style="background-image:url('https://picsum.photos/seed/hms-blog-banner/1920/700');" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
  <div class="banner-overlay"></div>
  <div class="banner-content container">
    <h1>Blog &amp; Insights</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Blog</li>
      </ol>
    </nav>
  </div>
</div>


<!-- BLOG + SIDEBAR -->
<section class="sec">
  <div class="container">
    <div class="row g-5">

      <!-- Blog Post List -->
      <div class="col-lg-8">
        <?php foreach ($blog_posts as $post): ?>
          <div class="blog-list-card" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
            <div class="blog-list-img">
              <img src="<?= $post['img'] ?>" alt="<?= htmlspecialchars($post['title']) ?>">
            </div>
            <div class="blog-list-body">
              <span class="blog-cat"><?= $post['cat'] ?></span>
              <h4><?= $post['title'] ?></h4>
              <p><?= $post['excerpt'] ?></p>
              <div class="blog-list-meta">
                <span><i class="fas fa-clock me-1"></i><?= $post['read'] ?></span>
                <span><i class="fas fa-calendar me-1"></i><?= $post['date'] ?></span>
                <span><i class="fas fa-user me-1"></i><?= $post['author'] ?></span>
                <a href="#" class="bm-link">Read Article <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- Sidebar -->
      <div class="col-lg-4" data-aos="fade-up" data-aos-duration="850" data-aos-once="true" data-aos-delay="100">

        <!-- Search -->
        <div class="sidebar-widget">
          <h5 class="sw-title">Search</h5>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search articles...">
            <button class="btn" style="background:var(--grad);color:#fff;border:none;padding:0 16px;"><i class="fas fa-search"></i></button>
          </div>
        </div>

        <!-- Categories -->
        <div class="sidebar-widget">
          <h5 class="sw-title">Categories</h5>
          <ul class="cat-list">
            <?php
            $cats = [
              ['label'=>'Social Media Marketing', 'cnt'=>8],
              ['label'=>'SEO Optimization',        'cnt'=>6],
              ['label'=>'PPC / Google Ads',         'cnt'=>5],
              ['label'=>'Email Marketing',          'cnt'=>4],
              ['label'=>'Content Strategy',         'cnt'=>7],
              ['label'=>'Web Development',          'cnt'=>3],
            ];
            foreach ($cats as $cat): ?>
              <li><a href="#"><?= $cat['label'] ?> <span class="cnt"><?= $cat['cnt'] ?></span></a></li>
            <?php endforeach; ?>
          </ul>
        </div>

        <!-- Recent Posts -->
        <div class="sidebar-widget">
          <h5 class="sw-title">Recent Posts</h5>
          <?php foreach (array_slice($blog_posts, 0, 3) as $i => $rp): ?>
            <div class="recent-post">
              <img src="https://picsum.photos/seed/hms-rp<?= $i+1 ?>/100/80" alt="<?= htmlspecialchars($rp['title']) ?>">
              <div class="rpt">
                <a href="#"><h6><?= $rp['title'] ?></h6></a>
                <span><i class="fas fa-calendar me-1"></i><?= $rp['date'] ?></span>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <!-- Tags -->
        <div class="sidebar-widget">
          <h5 class="sw-title">Popular Tags</h5>
          <div class="tag-cloud">
            <?php foreach (['SEO','Google Ads','Instagram','Email','Content','ROAS','Lead Gen','Automation','Conversion','Strategy'] as $tag): ?>
              <a href="#"><?= $tag ?></a>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- CTA Widget -->
        <div class="sidebar-widget" style="background:var(--grad);border:none;">
          <h5 style="color:#fff;font-weight:800;margin-bottom:10px;">Free Growth Audit</h5>
          <p style="color:rgba(255,255,255,.85);font-size:.88rem;margin-bottom:16px;">Get a personalised digital marketing audit within 24 hours. No credit card required.</p>
          <a href="contact.php" class="btn d-block text-center" style="background:#fff;color:var(--pink);font-weight:700;border-radius:8px;padding:10px 20px;">
            Claim Free Audit <i class="fas fa-arrow-right ms-1"></i>
          </a>
        </div>

      </div><!-- /.col-lg-4 -->

    </div><!-- /.row -->
  </div>
</section>

<?php require_once 'components/footer.php'; ?>

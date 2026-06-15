<?php require_once __DIR__ . '/../data/data.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="description" content="<?= htmlspecialchars($pageDesc) ?>" />
  <meta name="keywords" content="<?= htmlspecialchars($pageKeywords ?? '') ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="author" content="Hanvesh Media Solutions" />
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <?php $canonicalUrl = rtrim($site['url'], '/') . '/' . basename($_SERVER['PHP_SELF']); ?>
  <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl) ?>" />
  <!-- Open Graph -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl) ?>" />
  <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>" />
  <meta property="og:description" content="<?= htmlspecialchars($pageDesc) ?>" />
  <meta property="og:site_name" content="Hanvesh Media Solutions" />
  <meta property="og:image" content="<?= htmlspecialchars($site['url']) ?>/assets/images/og-image.jpg" />
  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>" />
  <meta name="twitter:description" content="<?= htmlspecialchars($pageDesc) ?>" />
  <meta name="twitter:image" content="<?= htmlspecialchars($site['url']) ?>/assets/images/og-image.jpg" />

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="assets/images/fav.jpg" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

  <!-- Bootstrap 5.3 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />

  <!-- Font Awesome 6.5 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <!-- AOS 2.3.4 -->
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />

  <?php if (!empty($hasSwiper)): ?>
    <!-- Swiper 11 (home only) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <?php endif; ?>

  <!-- Site Styles -->
  <link rel="stylesheet" href="css/style.css" />
</head>
<body<?= !empty($isInnerPage) ? ' class="inner-page"' : '' ?>>

  <!-- ═══════════════════════════════ NAVBAR ═══════════════════════════════ -->
  <nav class="navbar navbar-expand-lg<?= !empty($isInnerPage) ? ' scrolled' : '' ?>" id="mainNav" data-aos="fade-down" data-aos-duration="850" data-aos-once="true">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="index.php">
        <img src="img/logo.png" alt="Hanvesh Media Solutions"
          onerror="this.outerHTML='<span class=\'text-logo-main\'><span>HANVESH</span><span class=\'tl-tag\'>MEDIA SOLUTIONS</span></span>'" />
      </a>

      <!-- Mobile toggle -->
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu" aria-label="Toggle menu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Desktop nav -->
      <div class="collapse navbar-collapse justify-content-end nav-desk" id="navbarNav">
        <ul class="navbar-nav align-items-center gap-1">

          <?php foreach ($nav_items as $item): ?>
            <?php
            $isActive = ($activePage === $item['key'])
              || (!empty($item['dropdown']) && ($activePage === 'services' || !empty($activeService)));
            ?>

            <?php if (!empty($item['dropdown'])): ?>
              <!-- SERVICES DROPDOWN -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle<?= $isActive ? ' active' : '' ?>"
                  href="<?= htmlspecialchars($item['url']) ?>"
                  role="button" id="servicesDropdown"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <?= htmlspecialchars($item['label']) ?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                  <?php foreach ($item['dropdown'] as $sub): ?>
                    <li>
                      <a class="dropdown-item<?= (!empty($activeService) && $activeService === $sub['key']) ? ' active' : '' ?>"
                        href="<?= htmlspecialchars($sub['url']) ?>">
                        <i class="<?= htmlspecialchars($sub['icon']) ?> me-2"></i><?= htmlspecialchars($sub['label']) ?>
                      </a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </li>

            <?php else: ?>
              <!-- REGULAR NAV ITEM -->
              <li class="nav-item">
                <a class="nav-link<?= $isActive ? ' active' : '' ?>" href="<?= htmlspecialchars($item['url']) ?>">
                  <?= htmlspecialchars($item['label']) ?>
                </a>
              </li>
            <?php endif; ?>

          <?php endforeach; ?>

          <li class="nav-item ms-2">
            <a class="btn btn-primary-grad btn-sm px-4" href="contact.php">Get Free Audit</a>
          </li>

        </ul>
      </div><!-- /.navbar-collapse -->

    </div><!-- /.container -->
  </nav>

  <!-- ═══════════════════════════════ MOBILE OFFCANVAS ═══════════════════════════════ -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="mobileMenuLabel">
        <span class="grad-text">Hanvesh</span> Media
      </h5>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="mobile-nav-list list-unstyled">

        <?php foreach ($mobile_nav_items as $mItem): ?>
          <?php
          $mKey    = $mItem['key'];
          $mActive = ($activePage === $mKey) || ($mKey === 'services' && !empty($activeService));
          ?>
          <li>
            <a href="<?= htmlspecialchars($mItem['url']) ?>" class="mobile-nav-link<?= $mActive ? ' active' : '' ?>">
              <?= htmlspecialchars($mItem['label']) ?>
            </a>
          </li>
        <?php endforeach; ?>

        <?php if (!empty($services_nav)): ?>
          <li class="mobile-services-group">
            <span class="mobile-services-label">Our Services</span>
            <ul class="list-unstyled ms-3">
              <?php foreach ($services_nav as $sub): ?>
                <li>
                  <a href="<?= htmlspecialchars($sub['url']) ?>" class="mobile-sub-link<?= (!empty($activeService) && $activeService === $sub['key']) ? ' active' : '' ?>">
                    <i class="<?= htmlspecialchars($sub['icon']) ?> me-2"></i><?= htmlspecialchars($sub['label']) ?>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          </li>
        <?php endif; ?>

      </ul>

      <div class="mt-4 d-grid gap-2">
        <a href="contact.php" class="btn btn-primary-grad">Get Free Audit</a>
        <a href="<?= htmlspecialchars($contact_info['whatsapp']) ?>" class="btn btn-outline-light" target="_blank" rel="noopener noreferrer">
          <i class="fab fa-whatsapp me-2"></i>WhatsApp Us
        </a>
      </div>
    </div>
  </div>
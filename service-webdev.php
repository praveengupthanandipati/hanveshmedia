<?php
$pageTitle    = 'Web Development Services | Hanvesh Media Solutions';
$pageDesc     = 'Fast, mobile-first, SEO-optimised websites that convert visitors into leads. Custom design, Core Web Vitals, CRO, WordPress, Shopify, and WooCommerce.';
$pageKeywords = 'web development services India, mobile-first website design, WordPress development India, Shopify development, WooCommerce website, SEO website design, website development agency India';
$activePage   = 'services';
$activeService = 'webdev';
$isInnerPage  = true;
$hasSwiper    = false;
$waMessage    = 'Hi%20Hanvesh%2C%20I%20need%20help%20with%20Web%20Development';
$extraJs      = '';

require_once 'data/data.php';

$sp = [
  'banner_img'   => 'https://images.unsplash.com/photo-1547658719-da2b51169166?w=1920&h=700&fit=crop&auto=format&q=80',
  'banner_title' => 'Web Development',
  'icon'         => 'fas fa-laptop-code',
  'intro_img'    => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=800&h=540&fit=crop&auto=format&q=80',
  'intro_h2'     => 'Your Website Is Your <span class="grad-text">24/7 Salesperson</span>',
  'intro_p1'     => 'Your website is often the first — and sometimes only — chance to make an impression on a potential customer. A slow, outdated, or confusing site doesn\'t just fail to convert; it actively sends customers to your competitors. Every second of load time costs you real revenue.',
  'intro_p2'     => 'We build fast, mobile-first websites engineered to rank on Google, convert visitors into leads, and scale with your business. From beautiful custom designs to high-performing WooCommerce stores, every site we build is a growth asset — not just a digital brochure.',
  'stats' => [
    ['num' => '80+',  'label' => 'Websites Designed &amp; Developed'],
    ['num' => '95+',  'label' => 'Avg PageSpeed Score Achieved'],
    ['num' => '100%', 'label' => 'Core Web Vitals Pass Rate'],
    ['num' => '45%',  'label' => 'Avg Conversion Rate Lift'],
  ],
  'included' => [
    ['icon' => 'fas fa-paint-brush', 'title' => 'Custom UI/UX Design',              'desc' => 'Pixel-perfect designs tailored to your brand — built in Figma, approved by you, then developed into fully responsive websites.'],
    ['icon' => 'fas fa-mobile-alt',  'title' => 'Mobile-First Development',         'desc' => '60%+ of your traffic is mobile. We design and develop for mobile first — every layout, element, and interaction optimised for small screens.'],
    ['icon' => 'fas fa-store',       'title' => 'E-Commerce &amp; CMS Integration', 'desc' => 'Shopify, WooCommerce, or WordPress — custom-built or theme-customised for your exact products, workflows, and business model.'],
    ['icon' => 'fas fa-bolt',        'title' => 'Core Web Vitals Optimisation',     'desc' => 'LCP under 2.5s, CLS near zero, FID under 100ms — Google\'s ranking signals nailed every time through image optimisation, caching, and code efficiency.'],
    ['icon' => 'fas fa-mouse-pointer','title' => 'Conversion Rate Optimisation',    'desc' => 'Strategic CTAs, social proof placement, trust signals, and UX flows designed to turn more of your existing traffic into leads and buyers.'],
    ['icon' => 'fas fa-shield-alt',  'title' => 'Security &amp; Maintenance',       'desc' => 'SSL certificates, regular updates, uptime monitoring, and ongoing maintenance so your site stays fast, secure, and always online.'],
  ],
  'process' => [
    ['num'=>'01','title'=>'Discovery &amp; Planning','desc'=>'We understand your goals, audience, and competitors. We create a site architecture and page-by-page plan before a single line of code is written.'],
    ['num'=>'02','title'=>'UI/UX Design',             'desc'=>'Full design mockups in Figma — desktop and mobile. You review and approve every page before development begins.'],
    ['num'=>'03','title'=>'Development',              'desc'=>'Clean, semantic HTML/CSS/JS or CMS-based development. We follow web standards, accessibility guidelines, and performance best practices.'],
    ['num'=>'04','title'=>'Content Integration',      'desc'=>'Your content, copy, images, and media are integrated and optimised. We write on-page SEO for all key pages as standard.'],
    ['num'=>'05','title'=>'Testing &amp; QA',         'desc'=>'Cross-browser and cross-device testing, form testing, speed testing, and Core Web Vitals audit before any site goes live.'],
    ['num'=>'06','title'=>'Launch &amp; Support',     'desc'=>'Managed launch with DNS configuration, redirect mapping, and Google Search Console submission. Ongoing support packages available.'],
  ],
  'faq_id' => 'webFaq',
  'faq' => [
    ['q'=>'How long does it take to build a website?',
     'a'=>'A standard business website takes 4–6 weeks from kickoff to launch. An e-commerce store with complex functionality typically takes 8–12 weeks. Custom web applications can take longer. We\'ll give you a precise timeline in your project proposal.'],
    ['q'=>'Which CMS/platform do you recommend?',
     'a'=>'For most business websites and blogs, WordPress is our recommendation — flexible, widely supported, and easy for you to manage. For e-commerce, Shopify is the best choice for most brands. WooCommerce is ideal for businesses that want e-commerce integrated into their existing WordPress site.'],
    ['q'=>'Will my website rank on Google?',
     'a'=>'We build every website with SEO foundations in place — fast load times, clean code structure, mobile-first design, schema markup, and on-page SEO for key pages. However, ranking competitively for your target keywords requires ongoing SEO work, which our SEO team can handle.'],
    ['q'=>'Will I be able to edit my own website?',
     'a'=>'Yes. All websites we build come with a CMS (typically WordPress) that allows you to edit content, add pages, and publish blog posts without any technical knowledge. We also provide training and documentation so your team can manage the site confidently.'],
    ['q'=>'Do you provide hosting?',
     'a'=>'We don\'t provide hosting directly, but we\'ll recommend, set up, and configure the right hosting solution for your site — typically premium managed WordPress hosting (like WP Engine or Kinsta) for optimal performance, security, and reliability.'],
  ],
  'related' => [
    ['url'=>'service-seo.php','icon'=>'fas fa-search',    'title'=>'SEO Optimization',     'desc'=>'A great website is the foundation; SEO brings the traffic. Together they\'re the most powerful long-term growth combination.'],
    ['url'=>'service-ppc.php','icon'=>'fas fa-ad',        'title'=>'PPC / Google Ads',     'desc'=>'High-converting landing pages make your ad spend more efficient. A well-built page can double your ROAS overnight.'],
    ['url'=>'service-content.php','icon'=>'fas fa-pen-nib','title'=>'Content Marketing',   'desc'=>'Your website needs content that converts. Our team writes copy that engages visitors and turns them into customers.'],
  ],
  'cta_title' => 'Ready to Build a Website That <span class="grad-text">Actually Converts?</span>',
  'cta_sub'   => 'Book a free website audit and we\'ll analyse your current site\'s speed, UX, and conversion potential — and show you what a new site could achieve.',
  'cta_btn'   => 'Get My Free Website Audit',
];

require_once 'components/header.php';
require_once 'components/service-page.php';
require_once 'components/footer.php';
?>

<?php
$pageTitle    = 'SEO Optimization Services | Hanvesh Media Solutions';
$pageDesc     = 'Technical SEO, local SEO, keyword strategy, and authority link building — sustainable Google rankings that drive organic traffic and qualified leads.';
$pageKeywords = 'SEO services India, search engine optimization, local SEO India, technical SEO audit, keyword ranking service, Google first page ranking, SEO agency India, link building';
$activePage   = 'services';
$activeService = 'seo';
$isInnerPage  = true;
$hasSwiper    = false;
$waMessage    = 'Hi%20Hanvesh%2C%20I%20need%20help%20with%20SEO';
$extraJs      = '';

require_once 'data/data.php';

$sp = [
  'banner_img'   => 'https://images.unsplash.com/photo-1432888498266-38ffec3eaf0a?w=1920&h=700&fit=crop&auto=format&q=80',
  'banner_title' => 'SEO Optimization',
  'icon'         => 'fas fa-search',
  'intro_img'    => 'https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?w=800&h=540&fit=crop&auto=format&q=80',
  'intro_h2'     => 'Get Found by Customers Who Are <span class="grad-text">Ready to Buy</span>',
  'intro_p1'     => 'Google receives 8.5 billion searches per day. Your customers are searching for exactly what you offer — right now. The difference between winning their business and losing it to a competitor often comes down to one thing: who ranks higher.',
  'intro_p2'     => 'We combine deep technical SEO, content strategy, and authority link building into a unified approach that improves your rankings sustainably — not through shortcuts that disappear with the next algorithm update.',
  'stats' => [
    ['num' => '200+', 'label' => 'First-Page Rankings Achieved'],
    ['num' => '180%', 'label' => 'Avg Organic Traffic Lift'],
    ['num' => '60+',  'label' => 'Domains Improved'],
    ['num' => '90d',  'label' => 'First Results Typically Visible'],
  ],
  'included' => [
    ['icon' => 'fas fa-microscope',    'title' => 'Technical SEO Audit &amp; Fixes',   'desc' => 'Site speed, Core Web Vitals, crawlability, structured data, canonicals — the technical foundation that makes rankings possible.'],
    ['icon' => 'fas fa-key',           'title' => 'Keyword Research &amp; Strategy',   'desc' => 'We identify high-intent, low-competition keywords that your customers search before buying — mapped to every stage of their journey.'],
    ['icon' => 'fas fa-edit',          'title' => 'On-Page Optimisation',              'desc' => 'Title tags, meta descriptions, header structure, internal linking, and content depth — every page optimised to rank and convert.'],
    ['icon' => 'fas fa-map-marker-alt','title' => 'Local SEO &amp; Google Maps',       'desc' => 'Dominate local search results, optimise your Google Business Profile, and show up when customers near you search for your services.'],
    ['icon' => 'fas fa-link',          'title' => 'Authority Link Building',           'desc' => 'Quality backlinks from relevant industry publications that boost your domain authority and push you above competitors.'],
    ['icon' => 'fas fa-tachometer-alt','title' => 'Core Web Vitals Optimisation',      'desc' => 'LCP, CLS, and FID scores optimised to pass Google\'s ranking signals — improving both rankings and user experience.'],
  ],
  'process' => [
    ['num'=>'01','title'=>'Deep Audit',           'desc'=>'We crawl your entire site and competitor landscape to identify every technical issue, content gap, and ranking opportunity.'],
    ['num'=>'02','title'=>'Keyword Mapping',      'desc'=>'High-intent keyword research mapped to every page of your site. We prioritise by traffic potential, commercial intent, and competition.'],
    ['num'=>'03','title'=>'Technical Fixes',      'desc'=>'All critical technical issues fixed in the first 30 days — site speed, crawl errors, canonical tags, schema, and mobile usability.'],
    ['num'=>'04','title'=>'Content Creation',     'desc'=>'SEO-optimised blog posts, landing pages, and service pages written by specialists with deep industry knowledge.'],
    ['num'=>'05','title'=>'Link Acquisition',     'desc'=>'White-hat outreach to earn backlinks from authoritative sites in your niche — building domain authority that compounds over time.'],
    ['num'=>'06','title'=>'Monitor &amp; Report', 'desc'=>'Monthly ranking reports, traffic analysis, and competitor tracking. We adjust strategy based on data, not guesswork.'],
  ],
  'faq_id' => 'seoFaq',
  'faq' => [
    ['q'=>'How long does SEO take to show results?',
     'a'=>'SEO is a long-term investment. Most clients see measurable ranking improvements within 60–90 days. Significant traffic growth typically builds over 6–12 months. However, technical fixes and local SEO optimisations can deliver faster wins — often within 30 days.'],
    ['q'=>'Will you guarantee first-page rankings?',
     'a'=>'No reputable SEO agency guarantees specific rankings — Google\'s algorithm is complex and always evolving. What we guarantee is a data-driven approach, transparent reporting, and consistent improvement. Our track record of 200+ first-page rankings speaks for itself.'],
    ['q'=>'Do you follow Google\'s guidelines?',
     'a'=>'100%. We only use white-hat SEO techniques that comply with Google\'s Webmaster Guidelines. We never use spammy link schemes, keyword stuffing, or any black-hat tactics that could result in a penalty.'],
    ['q'=>'Can you help with local SEO for my city?',
     'a'=>'Absolutely. Local SEO is one of our strongest specialties. We\'ve ranked local businesses #1 in highly competitive markets across India. We optimise your Google Business Profile, build local citations, and target location-specific keywords to get you found by nearby customers.'],
  ],
  'related' => [
    ['url'=>'service-content.php','icon'=>'fas fa-pen-nib',     'title'=>'Content Marketing','desc'=>'SEO and content are inseparable. Great content feeds your rankings and keeps your audience engaged.'],
    ['url'=>'service-webdev.php', 'icon'=>'fas fa-laptop-code', 'title'=>'Web Development',  'desc'=>'A fast, technically sound website is the foundation of every successful SEO campaign.'],
    ['url'=>'service-ppc.php',    'icon'=>'fas fa-ad',          'title'=>'PPC / Google Ads', 'desc'=>'While SEO builds long-term traffic, PPC captures immediate demand. Together they dominate search results.'],
  ],
  'cta_title' => 'Ready to Own <span class="grad-text">Google\'s First Page?</span>',
  'cta_sub'   => 'Book a free SEO audit and we\'ll show you exactly which keywords you should rank for and how to get there.',
  'cta_btn'   => 'Get My Free SEO Audit',
];

require_once 'components/header.php';
require_once 'components/service-page.php';
require_once 'components/footer.php';
?>

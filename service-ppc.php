<?php
$pageTitle    = 'PPC / Google Ads Services | Hanvesh Media Solutions';
$pageDesc     = 'High-intent Google Ads campaigns with 4–7x ROAS. Search, Display, Shopping, YouTube, and Remarketing campaigns managed by certified Google Ads specialists.';
$pageKeywords = 'Google Ads management India, PPC advertising services, pay per click India, Google Ads agency, ROAS optimization, search ads management, PPC campaigns India, remarketing';
$activePage   = 'services';
$activeService = 'ppc';
$isInnerPage  = true;
$hasSwiper    = false;
$waMessage    = 'Hi%20Hanvesh%2C%20I%20need%20help%20with%20PPC%20Google%20Ads';
$extraJs      = '';

require_once 'data/data.php';

$sp = [
  'banner_img'   => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=1920&h=700&fit=crop&auto=format&q=80',
  'banner_title' => 'PPC / Google Ads',
  'icon'         => 'fas fa-ad',
  'intro_img'    => 'https://images.unsplash.com/photo-1611532736597-de2d4265fba3?w=800&h=540&fit=crop&auto=format&q=80',
  'intro_h2'     => 'Spend ₹1, Make ₹5 — <span class="grad-text">Predictable Revenue from Day One</span>',
  'intro_p1'     => 'Google Ads gives you instant visibility in front of people actively searching for what you sell. When managed correctly, it\'s the most efficient paid acquisition channel available — delivering measurable ROI from the very first day your campaign goes live.',
  'intro_p2'     => 'Our certified Google Ads specialists manage every aspect of your campaigns — from keyword research and ad copy to landing page recommendations and daily bid optimisation — so you get maximum results from every rupee of ad spend.',
  'stats' => [
    ['num' => '5.2×',  'label' => 'Average ROAS Delivered'],
    ['num' => '₹2Cr+', 'label' => 'Annual Ad Spend Managed'],
    ['num' => '150+',  'label' => 'Campaigns Managed'],
    ['num' => '38%',   'label' => 'Avg CPL Reduction'],
  ],
  'included' => [
    ['icon' => 'fas fa-search-dollar','title' => 'Search Campaigns',               'desc' => 'High-intent keyword targeting that captures demand from customers actively searching for your products or services.'],
    ['icon' => 'fas fa-image',        'title' => 'Display &amp; YouTube Ads',      'desc' => 'Brand awareness and retargeting campaigns across Google\'s display network and YouTube with compelling visual creatives.'],
    ['icon' => 'fas fa-shopping-cart','title' => 'Shopping &amp; Performance Max', 'desc' => 'For e-commerce brands — Google Shopping campaigns that put your products in front of ready-to-buy customers at the moment of intent.'],
    ['icon' => 'fas fa-redo',         'title' => 'Remarketing Campaigns',          'desc' => 'Re-engage visitors who didn\'t convert the first time with targeted display, YouTube, and Gmail remarketing sequences.'],
    ['icon' => 'fas fa-file-alt',     'title' => 'Landing Page Optimisation',      'desc' => 'We audit and optimise your landing pages for conversion — ensuring the entire journey from click to lead is frictionless.'],
    ['icon' => 'fas fa-sliders-h',    'title' => 'Daily Bid Optimisation',         'desc' => 'We monitor and adjust bids, budgets, and targeting daily to squeeze the maximum value from every rupee of ad spend.'],
  ],
  'process' => [
    ['num'=>'01','title'=>'Account Audit',            'desc'=>'We audit your existing Google Ads account (or start fresh) to identify wasted spend, missed opportunities, and quick wins.'],
    ['num'=>'02','title'=>'Keyword &amp; Competitor Research','desc'=>'Deep keyword research combined with competitor ad analysis to build campaigns that outperform your market.'],
    ['num'=>'03','title'=>'Campaign Build',           'desc'=>'We build your campaign structure, write high-converting ad copy (A/B tested), and set up conversion tracking for every goal.'],
    ['num'=>'04','title'=>'Landing Page Review',      'desc'=>'We review your landing pages and provide actionable recommendations to maximise conversion rate from paid traffic.'],
    ['num'=>'05','title'=>'Launch &amp; Optimise',   'desc'=>'Campaigns launch with smart bidding strategies. We optimise daily in the first 2 weeks, then weekly as performance stabilises.'],
    ['num'=>'06','title'=>'Monthly ROAS Reports',     'desc'=>'Clear monthly reports showing spend, clicks, conversions, cost-per-lead, and ROAS. No jargon — just the numbers that matter.'],
  ],
  'faq_id' => 'ppcFaq',
  'faq' => [
    ['q'=>'How much should I budget for Google Ads?',
     'a'=>'For meaningful results, we recommend a minimum ad spend of ₹25,000–₹50,000/month. Our management fee is separate. The right budget depends on your industry, competition, and goals — we\'ll advise you on the optimal budget during your free audit.'],
    ['q'=>'How quickly will I see results from PPC?',
     'a'=>'PPC results are almost immediate. Once campaigns go live, you can start receiving clicks, leads, and sales within hours. Optimisation improves ROAS over the first 30–60 days as we gather performance data and refine targeting.'],
    ['q'=>'Do you manage both Google Ads and Meta Ads?',
     'a'=>'Yes. While we specialise in Google Ads (Search, Display, Shopping, YouTube), our SMM team manages Meta Ads (Facebook and Instagram) as part of our integrated service. Running both together allows powerful cross-channel retargeting.'],
    ['q'=>'What\'s the minimum contract period?',
     'a'=>'We work on a minimum 3-month engagement for PPC — this allows us to complete the setup, gather enough data for meaningful optimisation, and demonstrate consistent ROAS improvement. After 3 months, we move to a rolling monthly arrangement.'],
  ],
  'related' => [
    ['url'=>'service-seo.php',    'icon'=>'fas fa-search',      'title'=>'SEO Optimization', 'desc'=>'PPC dominates paid results; SEO dominates organic. Together they cover all of Google\'s first page.'],
    ['url'=>'service-webdev.php', 'icon'=>'fas fa-laptop-code', 'title'=>'Web Development',  'desc'=>'A high-converting landing page is the difference between a profitable campaign and a money-losing one.'],
    ['url'=>'service-smm.php',    'icon'=>'fab fa-instagram',   'title'=>'Social Media Marketing','desc'=>'Combine Google Ads intent targeting with Meta\'s audience targeting for complete paid acquisition coverage.'],
  ],
  'cta_title' => 'Ready to Get <span class="grad-text">5× ROAS?</span>',
  'cta_sub'   => 'Book a free Google Ads audit and we\'ll analyse your current campaigns (or set up new ones) and show you exactly where the opportunities are.',
  'cta_btn'   => 'Get My Free Ads Audit',
];

require_once 'components/header.php';
require_once 'components/service-page.php';
require_once 'components/footer.php';
?>

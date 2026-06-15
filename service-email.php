<?php
$pageTitle    = 'Email Marketing Services | Hanvesh Media Solutions';
$pageDesc     = 'Automated email sequences, drip campaigns, cart recovery, and segmentation that deliver ₹42 ROI per ₹1 spent. Turn leads into buyers on autopilot.';
$pageKeywords = 'email marketing services India, email automation agency, drip campaign setup, cart recovery emails, email marketing ROI, newsletter marketing India, email marketing agency';
$activePage   = 'services';
$activeService = 'email';
$isInnerPage  = true;
$hasSwiper    = false;
$waMessage    = 'Hi%20Hanvesh%2C%20I%20need%20help%20with%20Email%20Marketing';
$extraJs      = '';

require_once 'data/data.php';

$sp = [
  'banner_img'   => 'https://images.unsplash.com/photo-1596526131083-e8c633c948d2?w=1920&h=700&fit=crop&auto=format&q=80',
  'banner_title' => 'Email Marketing',
  'icon'         => 'fas fa-envelope-open-text',
  'intro_img'    => 'https://images.unsplash.com/photo-1563986768494-4dee2763ff3f?w=800&h=540&fit=crop&auto=format&q=80',
  'intro_h2'     => 'Nurture Leads &amp; Drive Sales <span class="grad-text">While You Sleep</span>',
  'intro_p1'     => 'Email marketing delivers ₹42 for every ₹1 spent — a higher ROI than any other digital channel. And unlike social media, you own your email list. No algorithm changes, no pay-to-play, no third-party dependency. Your list is your most valuable business asset.',
  'intro_p2'     => 'We design, write, and automate email sequences that guide your leads through every stage of the buying journey — from first touchpoint to loyal repeat customer. Personalised, timely, and always on-brand.',
  'stats' => [
    ['num' => '28%',  'label' => 'Avg Open Rate (vs 21% industry)'],
    ['num' => '₹38',  'label' => 'Avg ROI per ₹1 Spent'],
    ['num' => '1M+',  'label' => 'Emails Sent Monthly'],
    ['num' => '80+',  'label' => 'Automation Flows Built'],
  ],
  'included' => [
    ['icon' => 'fas fa-paper-plane',  'title' => 'Welcome &amp; Onboarding Sequences','desc' => 'First impressions matter. We build welcome sequences that introduce your brand, set expectations, and start the relationship strong.'],
    ['icon' => 'fas fa-route',        'title' => 'Drip Campaign Automation',          'desc' => 'Behaviour-triggered email sequences that deliver the right message at the right time — nurturing leads through the funnel 24/7.'],
    ['icon' => 'fas fa-shopping-bag', 'title' => 'Cart &amp; Browse Abandonment',     'desc' => 'Recover 20–30% of lost e-commerce sales with perfectly timed recovery emails that bring shoppers back to complete their purchase.'],
    ['icon' => 'fas fa-users-cog',    'title' => 'Segmentation &amp; Personalisation','desc' => 'Emails segmented by behaviour, purchase history, and preferences — delivering 3x higher open rates through true personalisation.'],
    ['icon' => 'fas fa-sync-alt',     'title' => 'Re-engagement Campaigns',           'desc' => 'Win back inactive subscribers with targeted re-engagement campaigns that reignite interest and clean your list for better deliverability.'],
    ['icon' => 'fas fa-flask',        'title' => 'A/B Testing &amp; Optimisation',    'desc' => 'Subject lines, CTAs, send times, and content — we test everything systematically so your email performance keeps improving every month.'],
  ],
  'process' => [
    ['num'=>'01','title'=>'List &amp; Platform Audit','desc'=>'We audit your existing list health, deliverability scores, and ESP setup — identifying issues that are hurting open rates before we send a single email.'],
    ['num'=>'02','title'=>'Strategy &amp; Segmentation','desc'=>'We map your audience into segments based on behaviour, demographics, and purchase history to ensure maximum relevance.'],
    ['num'=>'03','title'=>'Automation Build',       'desc'=>'Our team builds all automation flows — welcome, drip, abandoned cart, re-engagement — in your ESP with pixel-perfect design.'],
    ['num'=>'04','title'=>'Copywriting &amp; Design','desc'=>'Compelling email copy and on-brand design that drives opens, clicks, and conversions. Every email looks great on mobile and desktop.'],
    ['num'=>'05','title'=>'Testing &amp; Launch',   'desc'=>'Full inbox testing across 40+ email clients before any automation goes live. Then a gradual send warmup for new domains.'],
    ['num'=>'06','title'=>'Monthly Optimisation',   'desc'=>'Monthly review of open rates, CTRs, conversions, and list health. Continuous A/B testing keeps performance improving every cycle.'],
  ],
  'faq_id' => 'emailFaq',
  'faq' => [
    ['q'=>'Which email service providers do you work with?',
     'a'=>'We\'re platform-agnostic and work with all major ESPs including Mailchimp, Klaviyo, ActiveCampaign, HubSpot, ConvertKit, and Sendinblue. For e-commerce, we strongly recommend Klaviyo for its powerful segmentation and revenue tracking capabilities.'],
    ['q'=>'I have a small list. Is email marketing worth it?',
     'a'=>'Absolutely. A small, engaged list outperforms a large, unengaged one every time. We focus on quality over quantity — building your list with the right subscribers and nurturing them effectively. Even a list of 500 engaged contacts can drive significant revenue with the right automation.'],
    ['q'=>'How do you grow my email list?',
     'a'=>'List growth comes from multiple sources: website opt-in forms, lead magnets (free resources, discounts), social media promotions, and paid lead-gen campaigns. We audit your current list growth strategy and implement proven tactics to accelerate subscriber acquisition.'],
    ['q'=>'How do you avoid emails going to spam?',
     'a'=>'Deliverability is everything. We handle domain authentication (SPF, DKIM, DMARC), send warmup protocols for new lists, maintain clean subscriber hygiene, and monitor sender reputation scores to ensure your emails consistently land in the inbox, not the spam folder.'],
  ],
  'related' => [
    ['url'=>'service-smm.php',    'icon'=>'fab fa-instagram', 'title'=>'Social Media Marketing','desc'=>'Convert your social media followers into email subscribers and build an owned audience that you control.'],
    ['url'=>'service-content.php','icon'=>'fas fa-pen-nib',   'title'=>'Content Marketing',     'desc'=>'Great email content starts with great copywriting. Our content team ensures every email gets opened and clicked.'],
    ['url'=>'service-ppc.php',    'icon'=>'fas fa-ad',        'title'=>'PPC / Google Ads',      'desc'=>'Use paid ads to grow your email list fast. Then let automation turn those leads into revenue on autopilot.'],
  ],
  'cta_title' => 'Ready to Build Your <span class="grad-text">Revenue-Generating Machine?</span>',
  'cta_sub'   => 'Book a free email marketing audit and we\'ll analyse your current setup and show you exactly how to improve your open rates, click rates, and revenue.',
  'cta_btn'   => 'Get My Free Email Audit',
];

require_once 'components/header.php';
require_once 'components/service-page.php';
require_once 'components/footer.php';
?>

<?php
/**
 * Hanvesh Media Solutions — Central Data Store
 * All repeated / shared data lives here.
 */

// ═══════════════════════════════════════════════════════
//  SITE INFO
// ═══════════════════════════════════════════════════════
$site = [
    'name'    => 'Hanvesh Media Solutions',
    'tagline' => 'Data-Driven Growth. All rights reserved.',
    'year'    => '2025',
    'url'     => 'https://hanveshmediasolutions.com',
];

// ═══════════════════════════════════════════════════════
//  CONTACT INFO
// ═══════════════════════════════════════════════════════
$contact_info = [
    'phone'      => '+91 98856 74081',
    'phone_link' => 'tel:+919885674081',
    'email'      => 'contact@hanveshmediasolutions.com',
    'email_link' => 'mailto:contact@hanveshmediasolutions.com',
    'address'    => 'India (Serving Global)',
    'whatsapp'   => 'https://wa.me/919885674081',
];

// ═══════════════════════════════════════════════════════
//  SOCIAL LINKS
// ═══════════════════════════════════════════════════════
$social_links = [
    ['platform' => 'LinkedIn',  'icon' => 'fab fa-linkedin-in', 'url' => '#'],
    ['platform' => 'Instagram', 'icon' => 'fab fa-instagram',   'url' => '#'],
    ['platform' => 'Facebook',  'icon' => 'fab fa-facebook-f',  'url' => '#'],
    ['platform' => 'Twitter',   'icon' => 'fab fa-x-twitter',   'url' => '#'],
    ['platform' => 'WhatsApp',  'icon' => 'fab fa-whatsapp',    'url' => 'https://wa.me/919885674081'],
];

// ═══════════════════════════════════════════════════════
//  SERVICES (used in nav, footer, home cards, services page)
// ═══════════════════════════════════════════════════════
$services = [
    [
        'key'       => 'smm',
        'title'     => 'Social Media Marketing',
        'icon'      => 'fab fa-instagram',
        'url'       => 'service-smm.php',
        'home_desc' => 'Turn followers into customers. Organic &amp; paid strategies for Instagram, Facebook, and LinkedIn — community that drives real sales.',
        'image'     => 'https://images.unsplash.com/photo-1611162616305-c69b3fa7fbe0?w=800&h=550&fit=crop&auto=format&q=80',
        'desc'      => 'We build and manage brand presence across Instagram, Facebook, and LinkedIn with a full-funnel approach — from brand awareness to direct sales. Our campaigns blend organic content with paid ads for maximum reach and ROI.',
        'features'  => [
            ['title' => 'Content Creation &amp; Scheduling', 'desc' => 'Branded reels, carousels, and stories planned 4 weeks in advance — so you\'re never scrambling for content.'],
            ['title' => 'Paid Social Campaigns',             'desc' => 'Meta Ads with audience segmentation, creative testing, and daily budget optimisation for minimum cost per lead.'],
            ['title' => 'Community Management',              'desc' => 'We respond to comments and DMs within 2 hours, nurturing your audience into a loyal, buying community.'],
            ['title' => 'Monthly Analytics Reports',         'desc' => 'Real data on reach, engagement, clicks, and conversions — no vanity metric fluff, just what matters.'],
        ],
        'cta_text' => 'Start Growing on Social',
    ],
    [
        'key'       => 'seo',
        'title'     => 'SEO Optimization',
        'icon'      => 'fas fa-search',
        'url'       => 'service-seo.php',
        'home_desc' => 'Own Google\'s first page. Technical SEO, local SEO, and link-building strategies that deliver sustainable long-term organic growth.',
        'image'     => 'https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?w=800&h=550&fit=crop&auto=format&q=80',
        'desc'      => 'Search engine rankings are the most valuable long-term traffic source. We combine technical excellence, authoritative content, and white-hat link building to get you to the top — and keep you there.',
        'features'  => [
            ['title' => 'Technical SEO Audit &amp; Fixes', 'desc' => 'Site speed, Core Web Vitals, crawlability, structured data — the technical foundation that makes rankings possible.'],
            ['title' => 'Keyword Strategy',                'desc' => 'We identify high-intent, low-competition keywords that your customers actually search for before buying.'],
            ['title' => 'Local SEO &amp; Google Maps',    'desc' => 'Dominate local search results and show up when customers near you search for your services.'],
            ['title' => 'Authority Link Building',         'desc' => 'Quality backlinks from relevant industry publications that boost your domain authority sustainably.'],
        ],
        'cta_text' => 'Boost My Rankings',
    ],
    [
        'key'       => 'ppc',
        'title'     => 'PPC / Google Ads',
        'icon'      => 'fas fa-ad',
        'url'       => 'service-ppc.php',
        'home_desc' => 'Spend ₹1, make ₹5. High-intent keyword targeting, daily budget optimisation, and conversion-focused campaigns with measurable ROI.',
        'image'     => 'https://images.unsplash.com/photo-1611532736597-de2d4265fba3?w=800&h=550&fit=crop&auto=format&q=80',
        'desc'      => 'Pay-per-click done right is the fastest path to predictable revenue. Our certified Google Ads specialists build, test, and optimise campaigns that consistently deliver 4–7x ROAS.',
        'features'  => [
            ['title' => 'Search &amp; Display Campaigns', 'desc' => 'Capture demand from high-intent searchers at the exact moment they\'re ready to buy.'],
            ['title' => 'Shopping &amp; Performance Max', 'desc' => 'For e-commerce brands — Smart Shopping campaigns that put your products in front of ready-to-buy customers.'],
            ['title' => 'Remarketing Campaigns',          'desc' => 'Re-engage visitors who didn\'t convert the first time with targeted display and social retargeting.'],
            ['title' => 'Daily Bid Optimisation',         'desc' => 'We monitor and adjust bids daily to squeeze the most value from every rupee of ad spend.'],
        ],
        'cta_text' => 'Launch My Ads',
    ],
    [
        'key'       => 'email',
        'title'     => 'Email Marketing',
        'icon'      => 'fas fa-envelope-open-text',
        'url'       => 'service-email.php',
        'home_desc' => 'Nurture leads while you sleep. Automated drip campaigns, newsletters, and cart recovery sequences that convert prospects to buyers.',
        'image'     => 'https://images.unsplash.com/photo-1563986768494-4dee2763ff3f?w=800&h=550&fit=crop&auto=format&q=80',
        'desc'      => 'Email delivers ₹42 for every ₹1 spent — the highest ROI of any digital channel. We design, write, and automate email sequences that nurture leads into customers and turn customers into repeat buyers.',
        'features'  => [
            ['title' => 'Drip Campaign Automation',          'desc' => 'Welcome sequences, onboarding flows, and nurture campaigns that work 24/7 without manual effort.'],
            ['title' => 'Segmentation &amp; Personalisation', 'desc' => 'The right message to the right person at the right time — driving 3x higher open and click rates.'],
            ['title' => 'Cart &amp; Browse Abandonment',     'desc' => 'Recover lost sales automatically with timely, persuasive recovery emails for e-commerce brands.'],
            ['title' => 'A/B Testing &amp; Optimisation',    'desc' => 'Subject lines, CTAs, send times — we test everything so your email performance keeps improving month-on-month.'],
        ],
        'cta_text' => 'Start Automating',
    ],
    [
        'key'       => 'content',
        'title'     => 'Content Marketing',
        'icon'      => 'fas fa-pen-nib',
        'url'       => 'service-content.php',
        'home_desc' => 'Tell stories that sell. Blogs, whitepapers, and video scripts that build brand authority and attract organic traffic consistently.',
        'image'     => 'https://images.unsplash.com/photo-1455390582262-044cdead277a?w=800&h=550&fit=crop&auto=format&q=80',
        'desc'      => 'Great content is the fuel that powers every other channel. Our strategists, writers, and designers produce content that ranks on Google, resonates on social, and converts readers into buyers.',
        'features'  => [
            ['title' => 'SEO Blog Writing',               'desc' => 'Long-form, expert-level articles that rank for high-intent keywords and establish your brand as an authority.'],
            ['title' => 'Video Scripts &amp; Reels',      'desc' => 'Engaging short-form video content scripted for maximum retention and shareability across platforms.'],
            ['title' => 'Whitepapers &amp; Case Studies', 'desc' => 'Premium content assets that generate qualified B2B leads and demonstrate your expertise at scale.'],
            ['title' => 'Content Repurposing',            'desc' => 'One blog post becomes 10 social posts, 3 email newsletters, and a LinkedIn article — maximum leverage from every piece.'],
        ],
        'cta_text' => 'Build My Content Engine',
    ],
    [
        'key'       => 'webdev',
        'title'     => 'Web Development',
        'icon'      => 'fas fa-laptop-code',
        'url'       => 'service-webdev.php',
        'home_desc' => 'Your 24/7 salesperson. Fast, mobile-first, SEO-optimised websites that convert visitors into leads — designed to rank and built to sell.',
        'image'     => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=800&h=550&fit=crop&auto=format&q=80',
        'desc'      => 'Your website is your most valuable salesperson. We build fast, mobile-first websites that are engineered to rank on Google, convert visitors into leads, and scale with your business.',
        'features'  => [
            ['title' => 'Mobile-First Design',             'desc' => '60%+ of your traffic is mobile. We design for mobile first — every layout, every element, every interaction.'],
            ['title' => 'Core Web Vitals Optimisation',    'desc' => 'LCP under 2.5s, CLS near zero, FID under 100ms — Google\'s ranking factors, nailed every time.'],
            ['title' => 'Conversion Rate Optimisation',    'desc' => 'Strategic CTAs, trust signals, and user flows designed to turn more visitors into leads and buyers.'],
            ['title' => 'E-Commerce &amp; CMS Solutions',  'desc' => 'Shopify, WooCommerce, WordPress — custom-built or theme-customised for your exact business model.'],
        ],
        'cta_text' => 'Build My Website',
    ],
];

// ═══════════════════════════════════════════════════════
//  NAVIGATION
// ═══════════════════════════════════════════════════════
$services_nav = array_map(fn($s) => [
    'key'   => $s['key'],
    'label' => $s['title'],
    'url'   => $s['url'],
    'icon'  => $s['icon'],
], $services);

$nav_items = [
    ['label' => 'Home',      'url' => 'index.php',     'key' => 'home'],
    ['label' => 'About',     'url' => 'about.php',     'key' => 'about'],
    [
        'label'    => 'Services',
        'url'      => 'services.php',
        'key'      => 'services',
        'dropdown' => $services_nav,
    ],
    ['label' => 'Portfolio', 'url' => 'portfolio.php', 'key' => 'portfolio'],
    ['label' => 'Blog',      'url' => 'blog.php',      'key' => 'blog'],
];

$mobile_nav_items = [
    ['label' => 'Home',      'url' => 'index.php',     'key' => 'home'],
    ['label' => 'About',     'url' => 'about.php',     'key' => 'about'],
    ['label' => 'Services',  'url' => 'services.php',  'key' => 'services'],
    ['label' => 'Portfolio', 'url' => 'portfolio.php', 'key' => 'portfolio'],
    ['label' => 'Blog',      'url' => 'blog.php',      'key' => 'blog'],
    ['label' => 'Contact',   'url' => 'contact.php',   'key' => 'contact'],
];

// ═══════════════════════════════════════════════════════
//  FOOTER LINKS
// ═══════════════════════════════════════════════════════
$footer_quick_links = [
    ['label' => 'Home',      'url' => 'index.php'],
    ['label' => 'About Us',  'url' => 'about.php'],
    ['label' => 'Portfolio', 'url' => 'portfolio.php'],
    ['label' => 'Blog',      'url' => 'blog.php'],
    ['label' => 'Contact',   'url' => 'contact.php'],
];

$footer_services = array_map(fn($s) => ['label' => $s['title'], 'url' => $s['url']], $services);

// ═══════════════════════════════════════════════════════
//  HOME — STATS STRIP
// ═══════════════════════════════════════════════════════
$stats_strip = [
    ['num' => '50+',  'label' => 'Businesses Grown'],
    ['num' => '₹2Cr+','label' => 'Ad Spend Managed'],
    ['num' => '5.2x', 'label' => 'Average ROAS'],
    ['num' => '6',    'label' => 'Integrated Services'],
];

// ═══════════════════════════════════════════════════════
//  HOME — HOW IT WORKS STEPS
// ═══════════════════════════════════════════════════════
$how_steps = [
    ['num' => '1', 'title' => 'Discovery Call',          'desc' => '30-minute strategy session. We audit your current presence across all 6 channels and understand your business goals.'],
    ['num' => '2', 'title' => 'Custom Roadmap',          'desc' => 'No cookie-cutter plans. A tailored mix of services designed specifically for your industry, budget, and growth targets.'],
    ['num' => '3', 'title' => 'Execution &amp; Integration','desc' => 'Our team works. Developers build. Creators write. Analysts optimise. All coordinated, all integrated, all accountable.'],
    ['num' => '4', 'title' => 'Monthly Reports',         'desc' => 'Transparent data every month. See exactly where every rupee went and what it earned. Real numbers, real talk.'],
];

// ═══════════════════════════════════════════════════════
//  HOME — INTEGRATED ADVANTAGE CARDS
// ═══════════════════════════════════════════════════════
$adv_cards = [
    ['ico' => '🔗', 'title' => 'Data Sharing',       'desc' => 'Your Google Ads keywords inform our SEO strategy. Social engagement dictates Content topics in real time.'],
    ['ico' => '📊', 'title' => 'Unified Reporting',  'desc' => 'One dashboard. One login. Total ROI across all 6 channels — no juggling spreadsheets from different vendors.'],
    ['ico' => '⚡', 'title' => 'Faster Optimisation','desc' => 'If SEO dips, PPC picks up. If Email open rates drop, Social retargeting kicks in automatically.'],
    ['ico' => '💰', 'title' => 'Lower Cost Per Lead','desc' => 'Higher efficiency across channels means lower cost-per-lead and faster revenue growth — guaranteed.'],
];

// ═══════════════════════════════════════════════════════
//  HOME — WHY HANVESH CARDS
// ═══════════════════════════════════════════════════════
$why_cards = [
    ['icon' => 'fas fa-brain',    'title' => 'Strategy First',       'desc' => 'We don\'t "post and pray." Every campaign starts with deep research into your audience, competitors, and industry before a single rupee is spent.'],
    ['icon' => 'fas fa-link',     'title' => 'True Integration',     'desc' => 'Your SEO informs your Content. Your Content fuels your Email. Your Email supports your Ads. Everything is connected and amplified.'],
    ['icon' => 'fas fa-chart-bar','title' => 'Transparent Reporting','desc' => 'No vanity metrics. We report on leads, sales, and revenue. Real numbers, real talk — every single month, no hiding behind impressions.'],
    ['icon' => 'fas fa-headset',  'title' => 'Human Support',        'desc' => 'Call +91 98856 74081 and speak to a strategist who knows your business. No chatbots. No ticket queues. Humans who care.'],
];

// ═══════════════════════════════════════════════════════
//  HOME — CASE STUDIES PREVIEW
// ═══════════════════════════════════════════════════════
$case_studies = [
    [
        'industry' => 'E-Commerce',
        'title'    => 'Fashion E-Commerce Brand',
        'tags'     => ['SMM', 'PPC', 'Email'],
        'results'  => [
            ['icon' => 'fas fa-chart-line',    'text' => '150% increase in online sales'],
            ['icon' => 'fas fa-bullseye',       'text' => '5.2x ROAS from Google Ads'],
            ['icon' => 'fas fa-users',          'text' => '12,000 new email subscribers'],
            ['icon' => 'fas fa-calendar-alt',   'text' => 'Results achieved in 90 days'],
        ],
    ],
    [
        'industry' => 'Healthcare',
        'title'    => 'Local Dental Clinic',
        'tags'     => ['SEO', 'Content', 'Web Dev'],
        'results'  => [
            ['icon' => 'fas fa-trophy',         'text' => 'Ranked #1 for "dentist near me"'],
            ['icon' => 'fas fa-calendar-check', 'text' => '300% more appointment requests'],
            ['icon' => 'fas fa-bolt',           'text' => 'Website loads in 1.2 seconds'],
            ['icon' => 'fas fa-star',           'text' => '4.9★ Google rating maintained'],
        ],
    ],
    [
        'industry' => 'B2B / SaaS',
        'title'    => 'B2B SaaS Startup',
        'tags'     => ['Content', 'LinkedIn', 'Email'],
        'results'  => [
            ['icon' => 'fas fa-filter',         'text' => '100 qualified leads/month'],
            ['icon' => 'fas fa-envelope-open',  'text' => '40% open rate on nurture emails'],
            ['icon' => 'fas fa-newspaper',      'text' => 'Featured in 3 industry publications'],
            ['icon' => 'fas fa-handshake',      'text' => '22% demo-to-close conversion rate'],
        ],
    ],
];

// ═══════════════════════════════════════════════════════
//  BLOG POSTS (preview on home + full list on blog page)
// ═══════════════════════════════════════════════════════
$blog_posts = [
    [
        'slug'     => 'seo-vs-ppc',
        'cat'      => 'SEO vs PPC',
        'title'    => 'SEO vs. PPC: Which One Should You Invest In First?',
        'excerpt'  => 'Spoiler: Both. Here\'s exactly how the two channels complement each other to dominate search results, reduce your cost per lead, and build a long-term compounding growth engine.',
        'img'      => 'https://picsum.photos/seed/hms-blog1/900/500',
        'read'     => '5 min read',
        'date'     => 'June 12, 2025',
        'author'   => 'Hanvesh Reddy',
    ],
    [
        'slug'     => 'email-automations',
        'cat'      => 'Email Marketing',
        'title'    => '5 Email Automations That Generate Sales While You Sleep',
        'excerpt'  => 'Set up these 5 automation flows once and watch your revenue grow on autopilot every single day. From welcome sequences to cart recovery — these are the automations that separate growing brands.',
        'img'      => 'https://picsum.photos/seed/hms-blog2/900/500',
        'read'     => '7 min read',
        'date'     => 'May 28, 2025',
        'author'   => 'Priya Sharma',
    ],
    [
        'slug'     => 'content-repurposing',
        'cat'      => 'Content Strategy',
        'title'    => 'How to Turn One Blog Post into 10 Social Media Updates',
        'excerpt'  => 'Content repurposing is your unfair advantage. Learn the exact framework our team uses every week to multiply content output without multiplying effort or budget.',
        'img'      => 'https://picsum.photos/seed/hms-blog3/900/500',
        'read'     => '4 min read',
        'date'     => 'April 15, 2025',
        'author'   => 'Rahul Mehta',
    ],
    [
        'slug'     => 'local-seo-guide',
        'cat'      => 'Local SEO',
        'title'    => 'The Complete Local SEO Guide for Indian Small Businesses',
        'excerpt'  => 'Get found by customers in your city before your competitors even know you\'re competing. Step-by-step local SEO tactics tailored for Indian markets.',
        'img'      => 'https://picsum.photos/seed/hms-blog4/900/500',
        'read'     => '8 min read',
        'date'     => 'March 30, 2025',
        'author'   => 'Hanvesh Reddy',
    ],
    [
        'slug'     => 'google-ads-roas',
        'cat'      => 'PPC / Google Ads',
        'title'    => 'Why Your Google Ads Are Losing Money (And How to Fix It)',
        'excerpt'  => 'Most Google Ads accounts waste 40–60% of their budget on irrelevant clicks. Here are the exact settings our PPC team checks first when auditing any failing account.',
        'img'      => 'https://picsum.photos/seed/hms-blog5/900/500',
        'read'     => '6 min read',
        'date'     => 'March 10, 2025',
        'author'   => 'Aditya Kumar',
    ],
    [
        'slug'     => 'social-media-2025',
        'cat'      => 'Social Media',
        'title'    => 'Social Media Trends Dominating 2025 That Every Brand Needs to Know',
        'excerpt'  => 'Short-form video, AI-personalised feeds, and creator partnerships are reshaping how brands build audiences. Here\'s what\'s working right now and what to invest in next.',
        'img'      => 'https://picsum.photos/seed/hms-blog6/900/500',
        'read'     => '5 min read',
        'date'     => 'February 20, 2025',
        'author'   => 'Priya Sharma',
    ],
];

// ═══════════════════════════════════════════════════════
//  ABOUT — TEAM MEMBERS
// ═══════════════════════════════════════════════════════
$team = [
    [
        'name'   => 'Hanvesh Reddy',
        'role'   => 'Founder & CEO',
        'img'    => 'https://picsum.photos/seed/hms-team1/400/400',
        'bio'    => '8+ years in digital marketing. Ex-agency lead with expertise spanning SEO, PPC, and brand strategy for 50+ Indian businesses.',
        'socials'=> [
            ['icon' => 'fab fa-linkedin-in', 'url' => '#'],
            ['icon' => 'fab fa-instagram',   'url' => '#'],
        ],
    ],
    [
        'name'   => 'Priya Sharma',
        'role'   => 'Head of Content & Social',
        'img'    => 'https://picsum.photos/seed/hms-team2/400/400',
        'bio'    => '6 years creating content that converts. Former journalist turned content strategist with a track record in B2C brand storytelling.',
        'socials'=> [
            ['icon' => 'fab fa-linkedin-in', 'url' => '#'],
            ['icon' => 'fab fa-instagram',   'url' => '#'],
        ],
    ],
    [
        'name'   => 'Rahul Mehta',
        'role'   => 'Lead SEO Strategist',
        'img'    => 'https://picsum.photos/seed/hms-team3/400/400',
        'bio'    => 'Google-certified SEO specialist with 200+ first-page rankings across competitive niches. Data nerd, coffee enthusiast.',
        'socials'=> [
            ['icon' => 'fab fa-linkedin-in', 'url' => '#'],
            ['icon' => 'fab fa-twitter',     'url' => '#'],
        ],
    ],
    [
        'name'   => 'Aditya Kumar',
        'role'   => 'PPC Manager',
        'img'    => 'https://picsum.photos/seed/hms-team4/400/400',
        'bio'    => 'Certified Google Ads specialist managing ₹2Cr+ in annual ad spend. Obsessed with ROAS, conversion tracking and efficiency.',
        'socials'=> [
            ['icon' => 'fab fa-linkedin-in', 'url' => '#'],
            ['icon' => 'fab fa-instagram',   'url' => '#'],
        ],
    ],
];

// ═══════════════════════════════════════════════════════
//  ABOUT — CORE VALUES
// ═══════════════════════════════════════════════════════
$core_values = [
    ['icon' => 'fas fa-microscope',  'title' => 'Data Obsessed',     'desc' => 'Every decision is backed by data. We measure, test, and optimise — never relying on gut feel or industry guesswork.'],
    ['icon' => 'fas fa-handshake',   'title' => 'Client Partnership', 'desc' => 'We don\'t take clients — we take on partners. Your growth is our growth, and we act accordingly every single day.'],
    ['icon' => 'fas fa-shield-alt',  'title' => 'Radical Transparency','desc' => 'You see everything we see — ad spend, rankings, results. No fluffy reports, no hidden metrics, no spin.'],
    ['icon' => 'fas fa-infinity',    'title' => 'Continuous Improvement','desc' => 'Markets change. Algorithms update. We stay ahead — continuously testing, learning, and adapting your strategy.'],
    ['icon' => 'fas fa-puzzle-piece','title' => 'Integrated Thinking', 'desc' => 'We think in systems, not silos. Every channel we manage feeds intelligence into every other channel you use.'],
    ['icon' => 'fas fa-users',       'title' => 'People First',        'desc' => 'Behind every campaign is a human. We respect your customers\' time, attention, and intelligence in every touchpoint.'],
];

// ═══════════════════════════════════════════════════════
//  ABOUT — STATS
// ═══════════════════════════════════════════════════════
$about_stats = [
    ['num' => '50+',  'label' => 'Clients Served'],
    ['num' => '₹2Cr+','label' => 'Ad Spend Managed'],
    ['num' => '5.2x', 'label' => 'Average ROAS'],
    ['num' => '4',    'label' => 'Years in Business'],
];

// ═══════════════════════════════════════════════════════
//  PORTFOLIO ITEMS
// ═══════════════════════════════════════════════════════
$portfolio_items = [
    ['cat' => 'smm',     'title' => 'FashionForward Instagram Growth',   'client' => 'Fashion E-Commerce',    'img' => 'https://picsum.photos/seed/hms-p1/600/450',  'result' => '312% follower growth in 6 months'],
    ['cat' => 'seo',     'title' => 'DentalCare Local SEO Domination',   'client' => 'Healthcare',             'img' => 'https://picsum.photos/seed/hms-p2/600/450',  'result' => '#1 rank for 14 local keywords'],
    ['cat' => 'ppc',     'title' => 'E-Commerce Google Shopping Win',    'client' => 'Retail / E-Commerce',    'img' => 'https://picsum.photos/seed/hms-p3/600/450',  'result' => '5.2x ROAS sustained over 9 months'],
    ['cat' => 'content', 'title' => 'SaaS Content Authority Build',      'client' => 'B2B SaaS',               'img' => 'https://picsum.photos/seed/hms-p4/600/450',  'result' => '210% organic traffic lift'],
    ['cat' => 'webdev',  'title' => 'Real Estate Lead Gen Website',      'client' => 'Real Estate',            'img' => 'https://picsum.photos/seed/hms-p5/600/450',  'result' => '45% conversion rate lift'],
    ['cat' => 'email',   'title' => 'Cart Recovery Email Automation',    'client' => 'E-Commerce Brand',       'img' => 'https://picsum.photos/seed/hms-p6/600/450',  'result' => '23% cart recovery rate'],
    ['cat' => 'smm',     'title' => 'LinkedIn B2B Lead Generation',      'client' => 'Professional Services',  'img' => 'https://picsum.photos/seed/hms-p7/600/450',  'result' => '85 qualified leads in 30 days'],
    ['cat' => 'seo',     'title' => 'Multi-location Business SEO',       'client' => 'Restaurant Chain',       'img' => 'https://picsum.photos/seed/hms-p8/600/450',  'result' => 'Top 3 ranks across 8 locations'],
    ['cat' => 'ppc',     'title' => 'Education Institute PPC Campaign',  'client' => 'Education',              'img' => 'https://picsum.photos/seed/hms-p9/600/450',  'result' => '₹180 cost-per-admission'],
];

// ═══════════════════════════════════════════════════════
//  CONTACT — INFO CARDS
// ═══════════════════════════════════════════════════════
$contact_cards = [
    ['icon' => 'fas fa-phone',          'title' => 'Call Us',     'lines' => ['<a href="tel:+919885674081">+91 98856 74081</a>', 'Mon–Sat, 9 AM – 7 PM IST']],
    ['icon' => 'fas fa-envelope',       'title' => 'Email Us',    'lines' => ['<a href="mailto:contact@hanveshmediasolutions.com">contact@hanveshmediasolutions.com</a>']],
    ['icon' => 'fab fa-whatsapp',       'title' => 'WhatsApp',    'lines' => ['<a href="https://wa.me/919885674081" target="_blank" rel="noopener noreferrer">Chat with us instantly</a>', 'Usually replies in minutes']],
    ['icon' => 'fas fa-map-marker-alt', 'title' => 'Location',    'lines' => ['India', 'Serving clients globally']],
];

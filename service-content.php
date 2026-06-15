<?php
$pageTitle    = 'Content Marketing Services | Hanvesh Media Solutions';
$pageDesc     = 'SEO blogs, video scripts, whitepapers, case studies, and content repurposing that build brand authority and drive organic traffic consistently.';
$pageKeywords = 'content marketing services India, SEO blog writing agency, content strategy, video script writing, whitepaper writing, content marketing agency India, blog content creation';
$activePage   = 'services';
$activeService = 'content';
$isInnerPage  = true;
$hasSwiper    = false;
$waMessage    = 'Hi%20Hanvesh%2C%20I%20need%20help%20with%20Content%20Marketing';
$extraJs      = '';

require_once 'data/data.php';

$sp = [
  'banner_img'   => 'https://images.unsplash.com/photo-1499750310107-5fef28a66643?w=1920&h=700&fit=crop&auto=format&q=80',
  'banner_title' => 'Content Marketing',
  'icon'         => 'fas fa-pen-nib',
  'intro_img'    => 'https://images.unsplash.com/photo-1455390582262-044cdead277a?w=800&h=540&fit=crop&auto=format&q=80',
  'intro_h2'     => 'Tell Stories That <span class="grad-text">Build Authority &amp; Drive Sales</span>',
  'intro_p1'     => 'Content is the fuel that powers every other marketing channel. Great content ranks on Google, resonates on social media, nurtures leads through email, and converts visitors on your website. Without it, your other channels are running on empty.',
  'intro_p2'     => 'We create a cohesive content engine — from strategy to production to distribution — that establishes your brand as the go-to authority in your industry and consistently attracts your ideal customers.',
  'stats' => [
    ['num' => '500+',  'label' => 'Articles &amp; Assets Created'],
    ['num' => '210%',  'label' => 'Avg Traffic Lift from Content'],
    ['num' => '20+',   'label' => 'Industries &amp; Niches Served'],
    ['num' => '100K+', 'label' => 'Words Produced Monthly'],
  ],
  'included' => [
    ['icon' => 'fas fa-blog',      'title' => 'SEO Blog Writing',               'desc' => 'Long-form, expert-level articles optimised for search intent — ranking for high-traffic keywords and establishing your brand as an authority.'],
    ['icon' => 'fas fa-video',     'title' => 'Video Scripts &amp; Reels',      'desc' => 'Engaging scripts for YouTube videos, Instagram Reels, and TikTok — structured for maximum watch time, shares, and action.'],
    ['icon' => 'fas fa-file-alt',  'title' => 'Whitepapers &amp; Ebooks',       'desc' => 'Premium long-form content assets that generate qualified B2B leads, demonstrate deep expertise, and position you as a thought leader.'],
    ['icon' => 'fas fa-trophy',    'title' => 'Case Studies &amp; Testimonials','desc' => 'Compelling case studies that turn your client results into powerful social proof — the most persuasive content for converting prospects.'],
    ['icon' => 'fas fa-hashtag',   'title' => 'Social Media Copy',              'desc' => 'Platform-native captions, hooks, and copy for Instagram, LinkedIn, Facebook, and Twitter — written to stop the scroll and drive engagement.'],
    ['icon' => 'fas fa-recycle',   'title' => 'Content Repurposing',            'desc' => 'One blog post becomes 10 social posts, 3 email newsletters, 2 LinkedIn articles, and 1 YouTube script — maximum leverage from every piece.'],
  ],
  'process' => [
    ['num'=>'01','title'=>'Content Audit',             'desc'=>'We audit your existing content to identify what\'s working, what\'s missing, and the highest-impact opportunities to pursue first.'],
    ['num'=>'02','title'=>'Content Strategy',          'desc'=>'A 90-day editorial calendar aligned with your SEO goals, audience journey stages, and business objectives — no random content.'],
    ['num'=>'03','title'=>'Research &amp; Briefing',  'desc'=>'In-depth research into each topic: competitor content gaps, keyword data, expert sources, and audience search intent analysis.'],
    ['num'=>'04','title'=>'Expert Writing',            'desc'=>'Specialist writers with deep industry knowledge produce every piece — no generic, AI-spun content that damages your brand.'],
    ['num'=>'05','title'=>'SEO Optimisation',         'desc'=>'Every piece is optimised for target keywords, internal linking, header structure, and search intent before publication.'],
    ['num'=>'06','title'=>'Distribution &amp; Tracking','desc'=>'Content is promoted across appropriate channels and performance tracked. We double down on what works and refine what doesn\'t.'],
  ],
  'faq_id' => 'contentFaq',
  'faq' => [
    ['q'=>'How long before content starts ranking on Google?',
     'a'=>'New content typically takes 3–6 months to rank competitively for its target keywords. However, content targeting lower-competition keywords can rank faster. We start with a mix of quick-win and longer-term keyword targets to ensure early momentum alongside sustained growth.'],
    ['q'=>'Do you write content for any industry?',
     'a'=>'We\'ve produced content across 20+ industries including healthcare, finance, e-commerce, real estate, SaaS, education, and manufacturing. For technical or regulated industries, we work with subject matter experts and implement a rigorous client review process.'],
    ['q'=>'Will the content be original or AI-generated?',
     'a'=>'All our content is researched and written by human experts who specialise in your industry. We do not publish AI-generated content as your final deliverable. We may use AI tools to assist with research and ideation, but every piece is crafted, edited, and fact-checked by our team.'],
    ['q'=>'How many pieces of content do you produce each month?',
     'a'=>'Volume depends on your package and goals. Typical engagements range from 4 to 16 pieces per month across blog posts, social copy, email content, and supporting assets. We recommend quality over quantity — one excellent long-form piece outperforms 10 mediocre ones.'],
  ],
  'related' => [
    ['url'=>'service-seo.php',  'icon'=>'fas fa-search',    'title'=>'SEO Optimization',     'desc'=>'Content and SEO are inseparable. Every piece we write is engineered to rank — driving organic traffic that compounds over time.'],
    ['url'=>'service-smm.php',  'icon'=>'fab fa-instagram', 'title'=>'Social Media Marketing','desc'=>'Great content fuels your social media. We repurpose every piece into social-native formats to maximise reach and engagement.'],
    ['url'=>'service-email.php','icon'=>'fas fa-envelope',  'title'=>'Email Marketing',      'desc'=>'Your content becomes the foundation of your email newsletters — turning readers into subscribers into buyers.'],
  ],
  'cta_title' => 'Ready to Build a <span class="grad-text">Content Engine That Grows?</span>',
  'cta_sub'   => 'Book a free content audit and we\'ll analyse your current content, identify the biggest gaps, and map a strategy to dominate your niche.',
  'cta_btn'   => 'Get My Free Content Audit',
];

require_once 'components/header.php';
require_once 'components/service-page.php';
require_once 'components/footer.php';
?>

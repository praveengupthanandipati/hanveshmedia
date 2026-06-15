<?php
$pageTitle    = 'Social Media Marketing Services | Hanvesh Media Solutions';
$pageDesc     = 'Full-service social media marketing — branded content, Meta Ads, reels, community management and monthly analytics. Grow your brand on Instagram, Facebook & LinkedIn.';
$pageKeywords = 'social media marketing India, Instagram marketing agency, Facebook Ads management India, LinkedIn marketing services, social media management, Meta Ads agency India, SMM services';
$activePage   = 'services';
$activeService = 'smm';
$isInnerPage  = true;
$hasSwiper    = false;
$waMessage    = 'Hi%20Hanvesh%2C%20I%20need%20help%20with%20Social%20Media%20Marketing';
$extraJs      = '';

require_once 'data/data.php';

$sp = [
  'banner_img'   => 'https://images.unsplash.com/photo-1611162617474-5b21e879e113?w=1920&h=700&fit=crop&auto=format&q=80',
  'banner_title' => 'Social Media Marketing',
  'icon'         => 'fab fa-instagram',
  'intro_img'    => 'https://images.unsplash.com/photo-1611162616305-c69b3fa7fbe0?w=800&h=540&fit=crop&auto=format&q=80',
  'intro_h2'     => 'Build a Brand People <span class="grad-text">Follow, Trust &amp; Buy From</span>',
  'intro_p1'     => 'Social media is where your customers spend 2–3 hours every single day. The question is — are they spending it with your brand, or with your competitor? We build and manage your entire social presence so you\'re always in the feed, always top of mind, and always growing.',
  'intro_p2'     => 'Our approach blends organic storytelling with paid amplification — creating a full-funnel social strategy that moves people from strangers to loyal buyers. We manage Instagram, Facebook, and LinkedIn end-to-end, so you can focus on running your business.',
  'stats' => [
    ['num' => '5M+',  'label' => 'Organic Reach Generated'],
    ['num' => '40+',  'label' => 'Brands Actively Managed'],
    ['num' => '3.2×', 'label' => 'Avg Engagement Lift'],
    ['num' => '2 hrs','label' => 'Community Response SLA'],
  ],
  'included' => [
    ['icon' => 'fas fa-palette',    'title' => 'Brand Identity &amp; Visual Design', 'desc' => 'We create a consistent visual language — colour palettes, typography, templates — that makes your brand instantly recognisable in any feed.'],
    ['icon' => 'fas fa-calendar-alt','title' => 'Monthly Content Calendar',           'desc' => '30-day editorial calendar planned and approved 2 weeks in advance — so you always know what\'s going live.'],
    ['icon' => 'fas fa-film',        'title' => 'Reels &amp; Short-Form Video',       'desc' => 'Script, edit, and publish Reels optimised for maximum reach and saves — the #1 growth lever on Instagram in 2025.'],
    ['icon' => 'fab fa-meta',        'title' => 'Meta Ads Management',                'desc' => 'Audience research, creative testing, campaign builds, and daily budget optimisation across Facebook and Instagram paid placements.'],
    ['icon' => 'fas fa-comments',    'title' => 'Community Management',               'desc' => 'We respond to comments, DMs, and reviews within 2 hours — turning your audience into an engaged community that advocates for your brand.'],
    ['icon' => 'fas fa-chart-bar',   'title' => 'Monthly Analytics Report',           'desc' => 'Detailed monthly report covering reach, impressions, engagement rate, follower growth, ad spend ROI, and strategic recommendations.'],
  ],
  'process' => [
    ['num'=>'01','title'=>'Audit &amp; Strategy',       'desc'=>'We analyse your existing accounts, competitor landscape, and audience insights to build a data-backed 90-day strategy tailored to your goals.'],
    ['num'=>'02','title'=>'Content Creation',           'desc'=>'Our in-house designers and copywriters produce all creative assets — graphics, captions, hashtag sets, stories, and video scripts — to your brand standards.'],
    ['num'=>'03','title'=>'Client Approval',            'desc'=>'You review and approve all content before it goes live via a shared content calendar. Zero surprises — you always have the final say.'],
    ['num'=>'04','title'=>'Publishing &amp; Engagement','desc'=>'We schedule posts at peak engagement times, monitor all comments and DMs, and actively engage with your community to boost organic reach.'],
    ['num'=>'05','title'=>'Paid Ads Amplification',    'desc'=>'Best-performing organic posts get amplified with targeted paid spend. Our Meta Ads campaigns are optimised weekly to reduce cost-per-result.'],
    ['num'=>'06','title'=>'Report &amp; Refine',        'desc'=>'Monthly performance review with actionable insights. We use real data to continuously improve the strategy — not gut feel.'],
  ],
  'faq_id' => 'smmFaq',
  'faq' => [
    ['q'=>'How quickly will I see results from social media?',
     'a'=>'Organic engagement improvements typically show within 4–6 weeks. Follower growth and brand awareness build over 3–6 months. Paid ad results are visible within the first week — leads, website visits, and sales can start flowing from day one of your campaigns.'],
    ['q'=>'Which platforms do you manage?',
     'a'=>'We primarily manage Instagram, Facebook, and LinkedIn. We recommend focusing on 2–3 platforms where your target audience is most active rather than spreading thin across all channels. Our onboarding audit will identify which platforms are best for your specific business.'],
    ['q'=>'Do I need to provide photos and videos?',
     'a'=>'If you have brand photos and videos, great — we\'ll use them. If not, we handle everything: stock imagery, designed graphics, and branded templates that look completely custom. For product businesses, we recommend a monthly photo/video shoot to keep content fresh and authentic.'],
    ['q'=>'Is an ad budget included in the management fee?',
     'a'=>'No — our management fee covers strategy, content creation, and campaign management. The ad spend (paid to Meta directly) is separate. We recommend starting with ₹15,000–₹30,000/month ad budget for meaningful results.'],
    ['q'=>'How much involvement is required from my side?',
     'a'=>'Minimal. Typically 1–2 hours per month for a brief strategy review call and content approvals. We handle everything else. Most clients find the monthly check-in is actually something they look forward to — seeing the numbers go up!'],
  ],
  'related' => [
    ['url'=>'service-content.php','icon'=>'fas fa-pen-nib','title'=>'Content Marketing',  'desc'=>'Great social media needs great content. We produce blogs, scripts, and copy that feeds every channel.'],
    ['url'=>'service-ppc.php',    'icon'=>'fas fa-ad',     'title'=>'PPC / Google Ads',   'desc'=>'Combine social reach with Google intent-targeting for a complete paid acquisition strategy.'],
    ['url'=>'service-email.php',  'icon'=>'fas fa-envelope','title'=>'Email Marketing',   'desc'=>'Convert your social followers into email subscribers and nurture them into repeat buyers.'],
  ],
  'cta_title' => 'Ready to Dominate <span class="grad-text">Social Media?</span>',
  'cta_sub'   => 'Book a free 30-minute social media audit and get a personalised strategy for your brand — no commitment required.',
  'cta_btn'   => 'Get My Free Social Audit',
];

require_once 'components/header.php';
require_once 'components/service-page.php';
require_once 'components/footer.php';
?>

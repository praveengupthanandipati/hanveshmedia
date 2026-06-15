<?php
$pageTitle    = 'Contact Us | Hanvesh Media Solutions';
$pageDesc     = 'Get in touch with Hanvesh Media Solutions for a free digital marketing audit. Call +91 98856 74081 or email contact@hanveshmediasolutions.com.';
$pageKeywords = 'contact digital marketing agency India, free digital marketing audit, hire digital marketing agency, marketing consultation India, digital marketing agency contact, get free audit';
$activePage   = 'contact';
$activeService = null;
$isInnerPage  = true;
$hasSwiper    = false;
$waMessage    = 'Hi%20Hanvesh%2C%20I%20need%20help%20with%20digital%20marketing';

$contactFormJs = <<<'JS'
document.getElementById('contactForm').addEventListener('submit', function(e) {
  e.preventDefault();
  var btn = this.querySelector('.btn-submit');
  btn.innerHTML = '<i class="fas fa-check me-2"></i>Request Sent! We\'ll be in touch within 2 hours.';
  btn.style.background = 'linear-gradient(135deg,#28a745,#20c997)';
  var form = this;
  setTimeout(function() {
    btn.innerHTML = '<i class="fas fa-rocket me-2"></i>Send Growth Request — It\'s Free';
    btn.style.background = '';
    form.reset();
  }, 5000);
});
JS;
$extraJs = $contactFormJs;

require_once 'data/data.php';
require_once 'components/header.php';
?>

<!-- PAGE BANNER -->
<div class="page-banner" style="background-image:url('https://picsum.photos/seed/hms-contact-banner/1920/700');" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
  <div class="banner-overlay"></div>
  <div class="banner-content container">
    <h1>Get in Touch</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>
    </nav>
  </div>
</div>


<!-- CONTACT INFO CARDS -->
<section class="sec" style="background:var(--light);">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
      <h2 class="sec-title">We'd Love to <span class="grad-text">Hear From You</span></h2>
      <p class="sec-sub mx-auto mt-3">Whether you have a question, a project in mind, or just want to see if we're a good fit — reach out. We respond within 2 hours.</p>
    </div>
    <div class="row g-4">
      <?php
      $cCards = [
        ['icon'=>'fas fa-phone',          'title'=>'Call Us',    'lines'=>['<a href="'.$contact_info['phone_link'].'">'.$contact_info['phone'].'</a>','Mon–Sat, 9 AM – 7 PM IST']],
        ['icon'=>'fas fa-envelope',       'title'=>'Email Us',   'lines'=>['<a href="'.$contact_info['email_link'].'">'.$contact_info['email'].'</a>']],
        ['icon'=>'fab fa-whatsapp',       'title'=>'WhatsApp',   'lines'=>['<a href="'.$contact_info['whatsapp'].'?text=Hi%20Hanvesh%2C%20I%20need%20help%20with%20digital%20marketing" target="_blank" rel="noopener noreferrer">Chat with us instantly</a>','Usually replies in minutes']],
        ['icon'=>'fas fa-map-marker-alt', 'title'=>'Location',   'lines'=>['India','Serving clients globally']],
      ];
      foreach ($cCards as $i => $card): ?>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="850" data-aos-once="true" data-aos-delay="<?= $i * 80 ?>">
          <div class="cpc-card">
            <div class="cpc-ico"><i class="<?= $card['icon'] ?>"></i></div>
            <h5><?= $card['title'] ?></h5>
            <p><?= implode('<br>', $card['lines']) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- CONTACT FORM + INFO -->
<section class="contact-sec sec">
  <div class="container">
    <div class="row g-4 align-items-stretch">

      <!-- Form -->
      <div class="col-lg-7" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
        <div class="form-wrap">
          <h4 class="mb-1" style="font-weight:800;">Send Your Growth Request</h4>
          <p class="text-muted mb-4" style="font-size:.88rem;">Fill out the form and we'll analyse your digital presence and come back with a free growth roadmap within 24 hours.</p>
          <form id="contactForm" novalidate>
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Full Name *</label>
                <input type="text" class="form-control" placeholder="Rahul Sharma" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Business Email *</label>
                <input type="email" class="form-control" placeholder="contact@yourbusiness.com" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Phone Number *</label>
                <input type="tel" class="form-control" placeholder="+91 98856 74081" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Company / Business Name</label>
                <input type="text" class="form-control" placeholder="Your Business Pvt. Ltd.">
              </div>
              <div class="col-md-6">
                <label class="form-label">Monthly Budget Range</label>
                <select class="form-select">
                  <option value="" disabled selected>Select budget...</option>
                  <option>Under ₹25,000/month</option>
                  <option>₹25,000 – ₹50,000/month</option>
                  <option>₹50,000 – ₹1,00,000/month</option>
                  <option>₹1,00,000+ /month</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Primary Service Need</label>
                <select class="form-select">
                  <option value="" disabled selected>Select a service...</option>
                  <?php foreach ($services as $svc): ?>
                    <option><?= $svc['title'] ?></option>
                  <?php endforeach; ?>
                  <option>Full Package (All of the Above)</option>
                </select>
              </div>
              <div class="col-12">
                <label class="form-label">Tell Us Your Goal</label>
                <textarea class="form-control" rows="5" placeholder="Describe your business, current challenges, and what growth looks like for you over the next 6–12 months..."></textarea>
              </div>
              <div class="col-12">
                <button type="submit" class="btn-submit">
                  <i class="fas fa-rocket me-2"></i>Send Growth Request — It's Free
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <!-- Info Box -->
      <div class="col-lg-5" data-aos="fade-up" data-aos-duration="850" data-aos-once="true" data-aos-delay="100">
        <div class="info-box">
          <h4>Let's Talk Growth</h4>
          <p>We work with ambitious businesses across India who want a single, accountable partner for all their digital marketing needs. No long-term lock-ins. Just results.</p>
          <div class="c-detail mt-4">
            <div class="ci"><i class="fas fa-phone"></i></div>
            <div class="ct">
              <span class="cl">Call Us Directly</span>
              <a href="<?= $contact_info['phone_link'] ?>"><?= $contact_info['phone'] ?></a>
            </div>
          </div>
          <div class="c-detail">
            <div class="ci"><i class="fas fa-envelope"></i></div>
            <div class="ct">
              <span class="cl">Email Us</span>
              <a href="<?= $contact_info['email_link'] ?>"><?= $contact_info['email'] ?></a>
            </div>
          </div>
          <div class="c-detail">
            <div class="ci"><i class="fab fa-whatsapp"></i></div>
            <div class="ct">
              <span class="cl">WhatsApp</span>
              <a href="<?= $contact_info['whatsapp'] ?>?text=Hi%20Hanvesh%2C%20I%20need%20help%20with%20digital%20marketing" target="_blank" rel="noopener noreferrer">Start a conversation now</a>
            </div>
          </div>
          <div class="c-detail">
            <div class="ci"><i class="fas fa-clock"></i></div>
            <div class="ct">
              <span class="cl">Business Hours</span>
              <span style="font-weight:600;">Mon–Sat: 9 AM – 7 PM IST</span>
            </div>
          </div>
          <div class="trust-list mt-4">
            <div class="trust-item"><i class="fas fa-shield-alt"></i><span>We respect your privacy. Zero spam, guaranteed.</span></div>
            <div class="trust-item"><i class="fas fa-clock"></i><span>Response within 2 business hours.</span></div>
            <div class="trust-item"><i class="fas fa-gift"></i><span>100% free consultation. No credit card needed.</span></div>
            <div class="trust-item"><i class="fas fa-handshake"></i><span>No long-term contracts. Cancel anytime.</span></div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- MAP -->
<section class="sec" style="padding-top:0;">
  <div class="container" data-aos="fade-up" data-aos-duration="850" data-aos-once="true">
    <div class="map-wrap">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.269437703264!2d78.48667297580758!3d17.44537120111906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb91432e5f24d9%3A0x6fce7e64e52f4ffe!2sHyderabad%2C%20Telangana!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin"
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
        title="Hanvesh Media Solutions Location"></iframe>
    </div>
  </div>
</section>

<?php require_once 'components/footer.php'; ?>

<?php
$page_title = "Window Cleaner Marlborough | J E Robb Window Cleaning";
$page_description = "Window cleaner covering Marlborough and the surrounding villages. Careful, thorough work. Frames and sills cleaned every visit. 5-star rated, same-day reply, no contract.";
$page_canonical = "https://www.jerobb.co.uk/areas/marlborough";
include '../includes/header.php';

$v2_services = [
  [
    'img'     => '/assets/images/skylight-clear-blue.webp',
    'alt'     => 'Skylight cleaning service in Marlborough',
    'label'   => 'Window Cleaning',
    'desc'    => "I use a pure water fed pole system that reaches upstairs windows safely from the ground. Frames and sills cleaned every visit, not just the glass.",
    'imgpos'  => 'center 70%',
    'imgnote' => 'TODO: file is 1.16MB, still well over the README image budget (500KB for hero-sized images) - needs another compression pass.',
  ],
  [
    'img'     => '/assets/images/fascias-2.webp',
    'alt'     => 'Fascia cleaning service in Marlborough',
    'label'   => 'Fascia &amp; Soffit Cleaning',
    'desc'    => "I bring fascias, soffits and gutter lines back to white, usually alongside a window clean so there's no extra visit to arrange.",
    'imgpos'  => 'center 15%',
    'imgnote' => 'TODO: file is 3.2MB, barely smaller than the original .jpg - looks like a format conversion rather than a resize. Needs an actual resize/recompression pass.',
  ],
  [
    'img'     => '/assets/images/gutter-empty.webp',
    'imgnote' => 'TODO: replace with a clearer gutter-emptying action shot when available - current photo shows the vacuum unit and cleared debris rather than the gutter itself.',
    'alt'     => 'Gutter emptying service in Marlborough',
    'label'   => 'Gutter Emptying',
    'desc'    => "I clear leaves and moss from the gutter with a vacuum system, so rainwater runs off the roof the way it should.",
  ],
  [
    'img'     => '/assets/images/greenhouse-full.webp',
    'alt'     => 'Conservatory and greenhouse cleaning in Marlborough',
    'label'   => 'Conservatories and Greenhouses',
    'desc'    => "I clean glass roofs and panels inside and out, letting the light back in.",
    'imgnote' => 'TODO: source file is 4080x3072 (3.25MB!) - re-export around 1200px wide, it is far over the README image budget and was the slowest image to decode during testing.',
  ],
];
?>

<!-- LocalBusiness Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "J E Robb Window Cleaning - Marlborough",
  "description": "Window cleaning in Marlborough from a small, independent local business focused on careful, thorough work. Jack covers the town centre, the period houses along the High Street and back lanes, the Georgian sashes around the College, and the surrounding villages including Mildenhall, Manton, Preshute and Aldbourne.",
  "image": "<?= BUSINESS_IMAGE_URL ?>",
  "url": "https://www.jerobb.co.uk/areas/marlborough",
  "telephone": "+447442249440",
  "email": "windowcleaning@jerobb.co.uk",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Marlborough",
    "addressRegion": "Wiltshire",
    "addressCountry": "GB"
  },
  "areaServed": {
    "@type": "Place",
    "name": "Marlborough, Wiltshire"
  },
  "priceRange": "££",
  "openingHours": "Mo-Fr 08:00-18:00",
  "sameAs": ["<?= GOOGLE_MAPS_URL ?>"]
}
</script>

<!--
  Restyled to match the v2 design used on the homepage (index.php). All
  component styles are shared from style.css. Copy and area-specific
  facts unchanged from the original page.
-->

<!-- ============ HERO ============ -->
<section class="v2-hero" id="home">
  <div class="container">
    <nav class="v2-hero-breadcrumb" aria-label="breadcrumb">
      <a href="/">Home</a><span class="v2-hero-breadcrumb-sep" aria-hidden="true">/</span><span>Areas</span><span class="v2-hero-breadcrumb-sep" aria-hidden="true">/</span><span aria-current="page">Marlborough</span>
    </nav>
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <p class="v2-hero-eyebrow">Friendly Local Service &middot; Done Properly</p>
        <h1>Window Cleaner <br class="d-none d-md-block">in Marlborough</h1>
        <p class="v2-hero-desc">
          A small, independent local window cleaner covering Marlborough and the surrounding villages. Frames and sills cleaned every visit, awkward corners not skipped. I reply to every enquiry the same day.
        </p>
        <a href="#contact" class="btn btn-hero btn-lg">Get a Free Quote</a>

        <div class="v2-hero-credential">
          <img src="/assets/images/jack.webp" alt="Jack from J E Robb Window Cleaning - covering Marlborough" />
          <span><strong class="text-white">Jack Robb</strong> &middot; Owner &amp; Window Cleaner</span>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="v2-hero-img-wrap">
          <img src="/assets/images/before-after-hero-country.webp" alt="Window cleaning in Marlborough, Wiltshire" class="v2-hero-img" />
        </div>
        <p class="area-img-credit text-center">Marlborough, Wiltshire</p>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="v2-trust-card v2-reveal">
    <ul class="v2-trust-list">
      <li><i class="fas fa-star"></i><span>5-Star Rated on Google</span></li>
      <li><i class="fas fa-search"></i><span>Obsessive Attention to Detail</span></li>
      <li><i class="fas fa-clock"></i><span>No Rush Jobs</span></li>
      <li><i class="fas fa-user-check"></i><span>Same Person Every Time</span></li>
    </ul>
  </div>
</div>

<!-- ============ FEATURED QUOTE: early proof point ============ -->
<section class="v2-section-sm" id="quote-highlight" style="background: var(--v2-soft-blue);">
  <div class="container">
    <div class="v2-quote-featured v2-reveal">
      <span class="v2-quote-mark" aria-hidden="true">&ldquo;</span>
      <p class="v2-quote-featured-text">Jack was brilliant from start to finish. Really prompt response from the email enquiry, turned up when he said he would. He completed the job really thoroughly taking time to attend to the details. Really pleased with the result.</p>
      <p class="v2-quote-featured-author">Julianna Veares <span>&#11088;&#11088;&#11088;&#11088;&#11088;</span></p>
    </div>
  </div>
</section>

<div class="v2-divider" style="background: var(--v2-soft-blue);" aria-hidden="true">
  <svg viewBox="0 0 1440 40" preserveAspectRatio="none"><path d="M0,16 C360,40 1080,0 1440,18 L1440,40 L0,40 Z" fill="#003580"></path></svg>
</div>

<!-- ============ MEET JACK: It's the Details That Matter ============ -->
<section class="v2-section section-dark" id="about-jack">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-5">
        <div class="v2-jack-photo-wrap v2-reveal">
          <img src="/assets/images/jack_rectangle.webp" alt="Jack Robb - window cleaner covering Marlborough" class="v2-jack-photo" />
          <div class="v2-jack-tag">
            <span class="v2-jack-tag-num">150+</span>
            <span class="v2-jack-tag-label">Regular Customers</span>
          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="v2-reveal">
          <p class="v2-eyebrow">A Small Independent Business</p>
          <h2 class="v2-heading on-dark">It's the Details That Matter</h2>
          <p class="v2-lede on-dark mb-4">
            Frames and sills always cleaned, corners not skipped, the kind of careful work you'd do yourself if you had the time and the kit. That's the heart of how I run J E Robb Window Cleaning, across Swindon, the Cotswolds and the surrounding villages. Marlborough is part of my regular round.
          </p>
          <ul class="meet-jack-list">
            <li><i class="fas fa-search"></i><span>Obsessive about detail. Frames, sills and corners, the bits other cleaners miss.</span></li>
            <li><i class="fas fa-mug-hot"></i><span>Easy to have around. Friendly, polite and respectful of your home.</span></li>
            <li><i class="fas fa-smile"></i><span>Same person every time. I message you the day before, every time.</span></li>
            <li><i class="fas fa-shield-alt"></i><span>Reputation matters. Known locally for careful, thorough work.</span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="v2-divider" style="background: #004aad;" aria-hidden="true">
  <svg viewBox="0 0 1440 40" preserveAspectRatio="none"><path d="M0,24 C360,0 1080,40 1440,20 L1440,40 L0,40 Z" fill="var(--v2-soft-teal)"></path></svg>
</div>

<!-- ============ LOCAL KNOWLEDGE ============ -->
<section class="v2-section" id="local-knowledge" style="background: var(--v2-soft-teal);">
  <div class="container">
    <div class="text-center v2-section-head mx-auto mb-5 v2-reveal">
      <p class="v2-eyebrow on-light">Local Knowledge</p>
      <h2 class="v2-heading">Window Cleaning Across Marlborough</h2>
      <p class="v2-lede">From the High Street to the surrounding villages.</p>
    </div>
    <div class="v2-reveal">
      <p class="v2-lede mb-4">
        Marlborough has one of the widest high streets in the country and some of the most distinctive housing in Wiltshire to go with it. The streets running off the High Street are a mix of Georgian sashes, listed frontages, and older terraces, with the lanes around the College and St Peter's holding most of the period property. Out toward Manton, Preshute and the villages along the A4 you get a mix of cottages, farmhouses and newer family homes.
      </p>
      <p class="v2-lede mb-0">
        Two things make a difference to how I work in Marlborough. The first is the period property - older sashes and listed frontages don't take kindly to ladders against the brickwork or detergents on the masonry, so the pure water reach pole approach suits these properties well. The second is dust - the High Street and the A4 corridor pick up a lot of road grime, and the lanes out toward Mildenhall and Aldbourne can throw up plenty from the surrounding fields. Regular 4 or 8-weekly cleans keep on top of it. For three-storey properties the pole reaches the upper floors from the ground without ladders against the brickwork.
      </p>
    </div>
    <div class="text-center mt-5 v2-reveal">
      <a href="#contact" class="cta-text-link">Get a free quote in Marlborough <span class="cta-arrow">&rarr;</span></a>
    </div>
  </div>
</section>

<?php
$v2_services_heading = 'Window Cleaning Services in Marlborough';
$v2_services_style = 'background: var(--v2-soft-blue);';
include '../includes/v2-services.php';
?>

<!-- ============ FAQ Section - Marlborough specific questions ============ -->
<section class="v2-section-sm" id="faq">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="text-center v2-section-head mx-auto mb-4 v2-reveal">
          <p class="v2-eyebrow on-light">Questions</p>
          <h2 class="v2-heading" style="font-size: 1.9rem;">Common Questions</h2>
        </div>

        <div class="v2-reveal">
          <?php
          $area_name = 'Marlborough';
          $faq_local_q = 'Do you cover the villages around Marlborough too?';
          $faq_local_a = 'Yes. Marlborough is part of Jack\'s regular round and he covers the surrounding villages too, including Mildenhall, Manton, Preshute, Fyfield, Lockeridge, West Overton, Aldbourne and the Ogbournes.';
          include '../includes/area-faqs.php';
          ?>

          <!-- Marlborough-specific FAQ -->
          <div class="accordion mt-3" id="faqAccordionLocal">
            <div class="accordion-item border-0 mb-3 rounded-3 shadow-sm">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faqLocal1" aria-expanded="false" aria-controls="faqLocal1">
                  Do you cover the villages around Marlborough too?
                </button>
              </h3>
              <div id="faqLocal1" class="accordion-collapse collapse" data-bs-parent="#faqAccordionLocal">
                <div class="accordion-body text-muted">
                  Yes. Marlborough is part of my regular round and I cover the surrounding villages too, including Mildenhall, Manton, Preshute, Fyfield, Lockeridge, West Overton, Aldbourne and the Ogbournes. Drop me a message with your postcode and I'll let you know.
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- ============ TESTIMONIALS: why people keep me on ============ -->
<section class="v2-section" id="testimonials" style="background: var(--v2-soft-teal);">
  <div class="container">
    <div class="text-center v2-section-head mx-auto mb-5 v2-reveal">
      <p class="v2-eyebrow on-light">Reviews</p>
      <h2 class="v2-heading">Why People Keep Me On</h2>
      <p class="v2-lede">It's the small stuff that makes the difference.</p>
    </div>

    <div class="row g-4 justify-content-center v2-reveal">
      <div class="col-md-6 col-lg-5">
        <div class="v2-quote-card">
          <p>"Jack did a brilliant job cleaning our windows in an efficient tidy manner. He takes pride in his work and the window frames look cleaner than they have been for ages."</p>
          <span>- Alfred Western</span>
        </div>
      </div>
      <div class="col-md-6 col-lg-5">
        <div class="v2-quote-card">
          <p>"Jack cleans my 4 bed semi detached every 8 weeks and does a fantastic job. What I really like is his communication, messaging me the day before so I know to leave him access and close the windows."</p>
          <span>- Amanda Scarth</span>
        </div>
      </div>
    </div>

    <div class="text-center mt-5 v2-reveal">
      <a href="https://www.google.com/search?q=je+robb+window+cleaning#lrd=0x25478cddcb9565d3:0x9af176d9df19a689,1"
        target="_blank" rel="noopener" class="btn btn-outline-primary rounded-pill px-4 me-3">
        <i class="fab fa-google me-1"></i> Read all reviews on Google
      </a>
      <a href="#contact" class="cta-text-link">Get a Free Quote <span class="cta-arrow">&rarr;</span></a>
    </div>
  </div>
</section>

<?php
$area_name = 'Marlborough';
include '../includes/nearby-areas.php';
?>

<div class="v2-divider" style="background: var(--bg-section-light);" aria-hidden="true">
  <svg viewBox="0 0 1440 40" preserveAspectRatio="none"><path d="M0,16 C360,40 1080,0 1440,18 L1440,40 L0,40 Z" fill="#003580"></path></svg>
</div>

<!-- ============ CONTACT: final CTA ============ -->
<section class="v2-section section-dark" id="contact">
  <div class="container">
    <div class="text-center v2-section-head mx-auto mb-5 v2-reveal">
      <p class="v2-eyebrow">Get In Touch</p>
      <h2 class="v2-heading on-dark">Get a Free Quote in Marlborough</h2>
    </div>

    <!-- Primary CTA: WhatsApp -->
    <div class="row justify-content-center mb-5 v2-reveal">
      <div class="col-lg-6 text-center">
        <div class="whatsapp-cta-box p-4 p-md-5 rounded-4 shadow-sm">
          <div class="mb-3">
            <i class="fab fa-whatsapp" style="font-size: 3rem; color: #25D366;"></i>
          </div>
          <h3 class="mb-2">Message Me on WhatsApp</h3>
          <p class="text-muted mb-1">The quickest way to get your free quote.</p>
          <p class="text-muted small mb-4">I usually reply within a few hours</p>
          <a href="https://wa.me/447442249440?text=Hi%20Jack,%20I'd%20like%20a%20quote%20for%20window%20cleaning%20in%20Marlborough"
            target="_blank"
            rel="noopener"
            class="btn btn-lg px-5 py-3 fw-semibold text-white rounded-pill"
            style="background-color: #25D366; border-color: #25D366; font-size: 1.15rem;">
            <i class="fab fa-whatsapp me-2"></i>Start a Conversation
          </a>
        </div>
      </div>
    </div>

    <!-- Divider -->
    <div class="row justify-content-center mb-4">
      <div class="col-lg-6">
        <div class="d-flex align-items-center">
          <hr class="flex-grow-1" style="border-color: rgba(255,255,255,0.2);">
          <span class="px-3 small" style="color: rgba(255,255,255,0.5);">or send a message below</span>
          <hr class="flex-grow-1" style="border-color: rgba(255,255,255,0.2);">
        </div>
      </div>
    </div>

    <!-- Form -->
    <div class="row justify-content-center v2-reveal">
      <div class="col-lg-6">
        <form id="contactForm" class="contact-form">
          <input type="hidden" id="area" name="area" value="Marlborough" />
          <input type="hidden" id="email" name="email" value="" />
          <input type="hidden" id="message" name="message" value="Enquiry from Marlborough page" />
          <div class="mb-3">
            <label for="name" class="visually-hidden">Your Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required />
          </div>
          <div class="mb-3">
            <label for="address" class="visually-hidden">Your Address or Postcode</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Your Address or Postcode" required />
          </div>
          <div class="mb-3">
            <label for="phone" class="visually-hidden">Your Phone Number</label>
            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Your Phone Number" required />
          </div>
          <div class="mb-3">
            <label for="service" class="visually-hidden">Select Service</label>
            <select class="form-select" id="service" name="service" required>
              <option value="" selected disabled>Select Service</option>
              <option value="Regular Window Cleaning">Regular Window Cleaning</option>
              <option value="Fascia Cleaning">Fascia Cleaning</option>
              <option value="Gutter Emptying">Gutter Emptying</option>
              <option value="Commercial Cleaning">Commercial Cleaning</option>
              <option value="Multiple Services">Multiple Services</option>
            </select>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
          </div>
        </form>
      </div>
    </div>

    <!-- Phone & Email -->
    <div class="row justify-content-center mt-4">
      <div class="col-lg-6 text-center">
        <p class="small mb-0" style="color: rgba(255,255,255,0.6);">
          You can also reach me on <a href="tel:07442249440" class="text-white">07442 249440</a>
          or email <a href="mailto:windowcleaning@jerobb.co.uk" class="text-white">windowcleaning@jerobb.co.uk</a>
        </p>
      </div>
    </div>

  </div>
</section>

<?php include '../includes/footer.php'; ?>

<?php
$page_title = "Window Cleaner Cirencester | J E Robb Window Cleaning";
$page_description = "Window cleaner covering Cirencester. Friendly, careful and properly thorough. Frames and sills cleaned every visit. 5-star rated, free quote, no contract.";
$page_canonical = "https://www.jerobb.co.uk/areas/cirencester";
include '../includes/header.php';

$v2_services = [
  [
    'img'     => '/assets/images/skylight-clear-blue.webp',
    'alt'     => 'Skylight cleaning service in Cirencester',
    'label'   => 'Window Cleaning',
    'desc'    => "I use a pure water fed pole system that reaches upstairs windows safely from the ground. Frames and sills cleaned every visit, not just the glass.",
    'imgpos'  => 'center 70%',
    'imgnote' => 'TODO: file is 1.16MB, still well over the README image budget (500KB for hero-sized images) - needs another compression pass.',
  ],
  [
    'img'     => '/assets/images/fascias-2.webp',
    'alt'     => 'Fascia cleaning service in Cirencester',
    'label'   => 'Fascia &amp; Soffit Cleaning',
    'desc'    => "I bring fascias, soffits and gutter lines back to white, usually alongside a window clean so there's no extra visit to arrange.",
    'imgpos'  => 'center 15%',
    'imgnote' => 'TODO: file is 3.2MB, barely smaller than the original .jpg - looks like a format conversion rather than a resize. Needs an actual resize/recompression pass.',
  ],
  [
    'img'     => '/assets/images/gutter-empty.webp',
    'imgnote' => 'TODO: replace with a clearer gutter-emptying action shot when available - current photo shows the vacuum unit and cleared debris rather than the gutter itself.',
    'alt'     => 'Gutter emptying service in Cirencester',
    'label'   => 'Gutter Emptying',
    'desc'    => "I clear leaves and moss from the gutter with a vacuum system, so rainwater runs off the roof the way it should.",
  ],
  [
    'img'     => '/assets/images/greenhouse-full.webp',
    'alt'     => 'Conservatory and greenhouse cleaning in Cirencester',
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
  "name": "J E Robb Window Cleaning - Cirencester",
  "description": "Window cleaning in Cirencester from a small, independent local business focused on careful, thorough work. Jack covers the town centre, the older Cotswold stone streets and townhouses, the surrounding estates, and the villages on the lanes around the town.",
  "image": "<?= BUSINESS_IMAGE_URL ?>",
  "url": "https://www.jerobb.co.uk/areas/cirencester",
  "telephone": "+447442249440",
  "email": "windowcleaning@jerobb.co.uk",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Cirencester",
    "addressRegion": "Gloucestershire",
    "addressCountry": "GB"
  },
  "areaServed": {
    "@type": "Place",
    "name": "Cirencester, Gloucestershire"
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
      <a href="/">Home</a><span class="v2-hero-breadcrumb-sep" aria-hidden="true">/</span><span>Areas</span><span class="v2-hero-breadcrumb-sep" aria-hidden="true">/</span><span aria-current="page">Cirencester</span>
    </nav>
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <p class="v2-hero-eyebrow">Friendly Local Service &middot; Done Properly</p>
        <h1>Window Cleaner <br class="d-none d-md-block">in Cirencester</h1>
        <p class="v2-hero-desc">
          A small, independent business with a high attention to detail and a friendly, easy-going approach. Frames and sills cleaned every visit, awkward corners not skipped. Cirencester is part of my regular round.
        </p>
        <a href="#contact" class="btn btn-hero btn-lg">Get a Free Quote</a>

        <div class="v2-hero-credential">
          <img src="/assets/images/jack.webp" alt="Jack from J E Robb Window Cleaning - covering Cirencester" />
          <span><strong class="text-white">Jack Robb</strong> &middot; Owner &amp; Window Cleaner</span>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="v2-hero-img-wrap">
          <img src="/assets/images/fairford.webp" alt="Window cleaning near Cirencester, Gloucestershire" class="v2-hero-img" />
        </div>
        <p class="area-img-credit text-center">Cirencester, Gloucestershire</p>
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
      <p class="v2-quote-featured-text">Excellent job of cleaning inside and out. Crystal clear windows when he'd finished and lovely clean white windowsills and surrounds. I'd recommend Jack to anyone wanting their windows cleaned.</p>
      <p class="v2-quote-featured-author">Janet McHugh <span>&#11088;&#11088;&#11088;&#11088;&#11088;</span></p>
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
          <img src="/assets/images/jack_rectangle.webp" alt="Jack Robb - window cleaner covering Cirencester" class="v2-jack-photo" />
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
            Frames and sills always cleaned, corners not skipped, the kind of careful work you'd do yourself if you had the time and the kit. That's the heart of how I run J E Robb Window Cleaning, across Swindon, the Cotswolds and the surrounding villages. Cirencester is part of my regular round.
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
      <h2 class="v2-heading">Window Cleaning Across Cirencester</h2>
      <p class="v2-lede">From the town centre to the surrounding villages and lanes.</p>
    </div>
    <div class="v2-reveal">
      <p class="v2-lede mb-4">
        Cirencester is a proper Cotswold market town with a real mix of homes. Older Cotswold stone houses and terraces around the town centre and the lanes off the Market Place, period properties and townhouses through the older streets, plus a good amount of newer estates around the edges. There's also the surrounding villages and country properties on the lanes out toward the smaller hamlets. The pure water fed pole system suits this mix well, particularly for the older stone properties: no chemicals that could mark stonework or older paintwork, and most cleans are done from the ground without anything leaning against your home.
      </p>
      <p class="v2-lede mb-0">
        Cotswold stone catches the light beautifully but it also shows up dirty glass straight away, and the older frames and sills around town benefit from regular gentle cleaning rather than aggressive products. Frames and sills are cleaned as part of every visit, not just the glass. For the taller townhouses and three-storey properties, the water-fed pole reaches up to three storeys from the ground without ladders against the brickwork.
      </p>
    </div>
    <div class="row g-4 mt-2 v2-local-grid v2-reveal">
      <div class="col-sm-6">
        <img src="/assets/images/south-cerney.webp" alt="Cotswold stone property near Cirencester" loading="lazy" decoding="async" />
      </div>
      <div class="col-sm-6">
        <img src="/assets/images/south-cerney-the-landings.webp" alt="Residential property near Cirencester, Gloucestershire" loading="lazy" decoding="async" />
      </div>
    </div>
    <div class="text-center mt-5 v2-reveal">
      <a href="#contact" class="cta-text-link">Get a free quote in Cirencester <span class="cta-arrow">&rarr;</span></a>
    </div>
  </div>
</section>

<?php
$v2_services_heading = 'Window Cleaning Services in Cirencester';
$v2_services_style = 'background: var(--v2-soft-blue);';
include '../includes/v2-services.php';
?>

<!-- ============ FAQ Section - Cirencester specific questions ============ -->
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
          $area_name = 'Cirencester';
          $faq_local_q = 'Do you cover the villages around Cirencester too?';
          $faq_local_a = 'Yes. Cirencester is part of Jack\'s regular round, so he\'s in the area often. He covers properties on the lanes and in the smaller villages around the town as well.';
          include '../includes/area-faqs.php';
          ?>

          <!-- One Cirencester-specific FAQ added on top of the master set -->
          <div class="accordion mt-3" id="faqAccordionLocal">
            <div class="accordion-item border-0 mb-3 rounded-3 shadow-sm">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faqLocal1" aria-expanded="false" aria-controls="faqLocal1">
                  Do you cover the villages around Cirencester too?
                </button>
              </h3>
              <div id="faqLocal1" class="accordion-collapse collapse" data-bs-parent="#faqAccordionLocal">
                <div class="accordion-body text-muted">
                  Yes. Cirencester is part of my regular round, so I'm in the area often. I cover properties on the lanes and in the smaller villages around the town as well. Drop me a message with your postcode and I'll let you know.
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
          <p>"Jack does a fantastic job. What I really like is his communication, messaging me the day before so I know to leave him access and close the windows. Really glad I found him."</p>
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
// Nearby Areas section (shared include, auto-picks closest towns via areas-config.php)
$area_name = 'Cirencester';
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
      <h2 class="v2-heading on-dark">Get a Free Quote in Cirencester</h2>
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
          <a href="https://wa.me/447442249440?text=Hi%20Jack,%20I'd%20like%20a%20quote%20for%20window%20cleaning%20in%20Cirencester"
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
          <input type="hidden" id="area" name="area" value="Cirencester" />
          <input type="hidden" id="email" name="email" value="" />
          <input type="hidden" id="message" name="message" value="Enquiry from Cirencester page" />
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

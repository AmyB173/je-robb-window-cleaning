<?php
$page_title = "Window Cleaner Wroughton | Your Local Window Cleaner";
$page_description = "I live in Wroughton, so your window cleaner is also your neighbour. 5-star rated window cleaning, fascia and gutter work for homes across Wroughton and surrounding villages.";
$page_canonical = "https://www.jerobb.co.uk/areas/wroughton";
include '../includes/header.php';
?>

<!-- LocalBusiness Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "J E Robb Window Cleaning - Wroughton",
  "description": "Window cleaning in Wroughton from a local one-man business. Jack lives in the village and cleans for homes across Wroughton, Wichelstowe, Chiseldon and the surrounding lanes.",
  "image": "<?= BUSINESS_IMAGE_URL ?>",
  "url": "https://www.jerobb.co.uk/areas/wroughton",
  "telephone": "+447442249440",
  "email": "windowcleaning@jerobb.co.uk",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Wroughton",
    "addressRegion": "Wiltshire",
    "addressCountry": "GB"
  },
  "areaServed": {
    "@type": "Place",
    "name": "Wroughton, Wiltshire"
  },
  "priceRange": "££",
  "openingHours": "Mo-Fr 08:00-18:00",
  "sameAs": ["<?= GOOGLE_MAPS_URL ?>"]
}
</script>

<!-- Hero Section (modelled on index split hero) -->
<section id="home" class="hero-split">
  <div class="container">
    <div class="row align-items-center min-vh-hero">
      <!-- Text Side -->
      <div class="col-lg-6 hero-text-col py-5 mt-3 mt-lg-0">
        <p class="hero-eyebrow">Your Neighbour &middot; Your Window Cleaner</p>
        <h1 class="hero-h1-split">Window Cleaner <br class="d-none d-md-block">in Wroughton</h1>
        <p class="hero-desc-split">
          I live in Wroughton and already clean for many happy customers on my round. Reliable, with a high attention to detail and a friendly service.
        </p>
        <a href="#contact" class="btn btn-hero btn-lg hero-cta-split mt-2 mb-3">Get a Free Quote</a>

        <div class="d-flex align-items-center mb-3">
          <img src="/assets/images/jack.webp"
            alt="Jack from J E Robb Window Cleaning - based in Wroughton"
            class="hero-jack-thumb rounded-circle me-3" />
          <span style="color: rgba(255,255,255,0.85); font-size: 0.95rem;">
            <strong class="text-white">Jack Robb</strong> · I live in Wroughton
          </span>
        </div>

        <!-- Rotating Snippets - Wroughton uses Janet, Amanda, Sophie, Charlotte -->
        <div class="hero-snippet">
          <div class="snippet-carousel" id="snippetCarousel">
            <div class="snippet-slide active">
              <p class="snippet-text">"Crystal clear windows... 100% recommend" <span class="snippet-author">- Janet</span> <span class="snippet-stars">&#11088;&#11088;&#11088;&#11088;&#11088;</span></p>
            </div>
            <div class="snippet-slide">
              <p class="snippet-text">"Fantastic job. Great communication, every time" <span class="snippet-author">- Amanda</span> <span class="snippet-stars">&#11088;&#11088;&#11088;&#11088;&#11088;</span></p>
            </div>
            <div class="snippet-slide">
              <p class="snippet-text">"Professional and great value for money" <span class="snippet-author">- Sophie</span> <span class="snippet-stars">&#11088;&#11088;&#11088;&#11088;&#11088;</span></p>
            </div>
            <div class="snippet-slide">
              <p class="snippet-text">"Our windows are gleaming now!" <span class="snippet-author">- Charlotte</span> <span class="snippet-stars">&#11088;&#11088;&#11088;&#11088;&#11088;</span></p>
            </div>
          </div>
        </div>
        <a href="https://www.google.com/search?q=je+robb+window+cleaning#lrd=0x25478cddcb9565d3:0x9af176d9df19a689,1"
          target="_blank" rel="noopener"
          class="hero-google-link small mt-2 d-inline-block">
          Rated 5&#9733; on Google - Read our reviews
        </a>
      </div>
      <!-- Image Side -->
      <div class="col-lg-6 hero-image-col d-flex flex-column align-items-center justify-content-center mt-4 mt-lg-0 pb-5 pb-lg-0">
        <img src="/assets/images/clean-domestic-window.webp" alt="Window cleaning in Wroughton" class="hero-split-img img-fluid rounded-4" />
        <p class="area-img-credit">Wroughton, Wiltshire</p>
      </div>
    </div>
  </div>
</section>

<!-- Static Trust Bar - replaces scrolling ticker. Items chosen for SEO + conversion. -->
<div class="trust-static">
  <div class="container">
    <ul class="trust-static-list">
      <li><i class="fas fa-map-marker-alt"></i> I Live in Wroughton</li>
      <li><i class="fas fa-star"></i> 5-Star Rated on Google</li>
      <li><i class="fas fa-search"></i> Obsessive Attention to Detail</li>
      <li><i class="fas fa-user-check"></i> Same Person Every Time</li>
      <li><i class="fas fa-tint"></i> Pure Water, Streak-Free Finish</li>
    </ul>
  </div>
</div>

<style>
.service-card-overlay:hover .service-card-overlay-img {
  transform: none;
}
.feature-card:hover {
  transform: none;
  background: rgba(255, 255, 255, 0.15);
}
</style>

<!-- Early Testimonial - Janet (matches index style, leads with crystal clear quote) -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="testimonial-card p-4 p-md-5 rounded-4 shadow-sm text-center">
          <div class="mb-3"><span style="color: #ffd700; font-size: 1.2rem;">&#11088;&#11088;&#11088;&#11088;&#11088;</span></div>
          <p class="testimonial-card-text" style="font-size: 1.15rem;">"Excellent job of cleaning inside and out. <strong>Crystal clear windows when he'd finished and lovely clean white windowsills and surrounds.</strong> 100% recommend."</p>
          <p class="testimonial-card-author fw-semibold mb-0 mt-3">- Janet McHugh</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Meet Your Local Window Cleaner Section (green accent style from index) -->
<!-- This is the heart of the page: detail + friendly + lives here, woven together -->
<section id="about-jack" class="py-5 section-dark">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-11 col-lg-10">
        <div class="row align-items-center">
          <div class="col-md-4 mb-4 mb-md-0">
            <img src="/assets/images/jack_rectangle.webp" alt="Jack Robb - window cleaner who lives in Wroughton" class="img-fluid rounded-4 shadow" />
          </div>
          <div class="col-md-8">
            <div class="p-4">
              <p class="hero-eyebrow" style="color: #fff; opacity: 0.9;">Your Local Window Cleaner</p>
              <h2 class="section-title text-white mb-3">I Live Here Too</h2>
              <p style="color: rgba(255,255,255,0.95); font-size: 1.1rem; line-height: 1.7;">
                I live in Wroughton with my partner and dogs. So when I come to clean your windows, I'm not driving in from miles away.
              </p>
              <div class="row mt-4">
                <div class="col-sm-6 mb-3">
                  <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-search"></i></div>
                    <h3>Obsessive About Detail</h3>
                    <p>Frames, sills, corners, the bits other cleaners miss. I notice the things you'd notice yourself.</p>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-mug-hot"></i></div>
                    <h3>Easy to Have Around</h3>
                    <p>Friendly, polite, and respectful of your home. The kind of person you're happy to see at the door.</p>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h3>A Wroughton Local</h3>
                    <p>I know the village and my customers by name.</p>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
                    <h3>Reputation Matters Here</h3>
                    <p>I pride myself on doing an excellent, thorough job for my customers and am known locally for my attention to detail.</p>
                  </div>
                </div>
              </div>
              <div class="mt-3">
                <a href="#contact" class="btn btn-light btn-lg rounded-pill px-4 fw-semibold" style="color: #004aad;">Get a Free Quote</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Wroughton Properties / Local Knowledge Section -->
<section class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="text-center mb-4">
          <h2 class="section-title">Window Cleaning Across Wroughton</h2>
          <p class="section-subtitle">From the village core to the lanes out toward Barbury</p>
        </div>
        <p style="font-size: 1.05rem; line-height: 1.8; color: #444;">
          Wroughton's a real mix - older cottages and stone properties around the High Street and the church, terraced rows along Markham Road and the Square, the bigger 70s and 80s estates off Inverary Road and Overbrook, and the newer builds out toward Wharf Road. <!-- [JACK TO CONFIRM] adjust street names / estates if these aren't quite right --> Each one has its own quirks, and after years of working the village, I know them all.
        </p>
        <p style="font-size: 1.05rem; line-height: 1.8; color: #444;">
          The pure water fed pole system reaches first and second-floor windows from the ground without leaning ladders against your property most of the time. That matters more than people realise - older Wroughton homes often have softer paintwork and stonework that ladders can mark, and many of the newer estates have a lot of glass at first floor that's awkward to reach any other way. Frames and sills get cleaned as part of every visit, and there are mostly no chemicals or detergents involved - just purified water that dries without leaving any marks. A regular 8-weekly clean keeps on top of it before it has a chance to bake on.
        </p>
        <div class="text-center mt-4">
          <a href="#contact" class="btn btn-primary btn-lg">Get a free quote in Wroughton</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section - Wroughton specific questions -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h2 class="section-title text-center mb-4">Common Questions</h2>

        <div class="accordion" id="faqAccordion">
          <div class="accordion-item border-0 mb-3 rounded-3 shadow-sm">
            <h3 class="accordion-header">
              <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                Do you actually live in Wroughton?
              </button>
            </h3>
            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
              <div class="accordion-body text-muted">
                Yes. I live in Wroughton with my partner and dogs, so this is genuinely a local business. It also means new customers in the village slot in easily - I'm already nearby on cleaning days, and there's no faff with travel time getting passed on to you.
              </div>
            </div>
          </div>

          <div class="accordion-item border-0 mb-3 rounded-3 shadow-sm">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                Will my conservatory roof get cleaned too?
              </button>
            </h3>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body text-muted">
               Conservatory roofs can be included as a one-off clean or as part of the regular service depending on what you prefer. Just let me know and I can give you the price both including and excluding the conservatory roof.
              </div>
            </div>
          </div>

          <div class="accordion-item border-0 mb-3 rounded-3 shadow-sm">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                How much does window cleaning cost in Wroughton?
              </button>
            </h3>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body text-muted">
                Every property's different, so I quote based on the size of your home, number of windows, and access. There is no generalised pricing because each property is so different. Message me for a free quote and I'll get back to you in a few hours.
              </div>
            </div>
          </div>

          <div class="accordion-item border-0 mb-3 rounded-3 shadow-sm">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                What if I'm not happy with the clean?
              </button>
            </h3>
            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body text-muted">
                Let me know within 24 hours and I'll come straight back to sort it without question. In practice it almost never comes up, because I'm checking my own work as I go. But the guarantee's there, and given I live in the village, it's not exactly hard for me to pop round.
              </div>
            </div>
          </div>

          <div class="accordion-item border-0 mb-3 rounded-3 shadow-sm">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                Do you cover the lanes and farms outside the village?
              </button>
            </h3>
            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body text-muted">
                Yes, plenty of my customers are on the lanes out toward Hackpen, Barbury and the surrounding farms <!-- [JACK TO CONFIRM] -->. Rural properties pick up dust quickly from the surrounding fields, so regular cleans make a noticeable difference. Drop me a message with your postcode and I'll let you know.
              </div>
            </div>
          </div>

          <div class="accordion-item border-0 mb-3 rounded-3 shadow-sm">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                Do I need to be home when you clean?
              </button>
            </h3>
            <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body text-muted">
                Not usually. I message the day before so you know I'm coming, and as long as I can get to the windows (side gates open, cars moved if needed) I'll crack on while you're out and let you know when I'm done. Payment's handled online so no need for cash.
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- Services Section - dark gradient with photo overlay cards (matches index) -->
<section id="services" class="py-5 section-dark">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-5">
        <h2 class="section-title text-white">What I Clean in Wroughton</h2>
      </div>
    </div>
    <div class="row g-3">
      <div class="col-sm-6 col-lg-3">
        <div class="service-card-overlay">
          <img src="/assets/images/clean-domestic-window.webp" alt="Window cleaning Wroughton" class="service-card-overlay-img" />
          <div class="service-card-overlay-title">Window Cleaning</div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="service-card-overlay">
          <img src="/assets/images/clean-fascia-domestic.webp" alt="Fascia cleaning Wroughton" class="service-card-overlay-img" />
          <div class="service-card-overlay-title">Fascia &amp; Soffit Cleaning</div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="service-card-overlay">
          <img src="/assets/images/gutter-empty.webp" alt="Gutter emptying Wroughton" class="service-card-overlay-img" style="object-position: center 80%;" />
          <div class="service-card-overlay-title">Gutter Emptying</div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="service-card-overlay">
          <img src="/assets/images/greenhouse-full.webp" alt="Conservatory and greenhouse cleaning Wroughton" class="service-card-overlay-img" />
          <div class="service-card-overlay-title">Conservatories and Greenhouses</div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col text-center">
        <p class="text-light mb-3" style="opacity: 0.85;">Every home gets a personalised quote based on your property and what you need.</p>
        <a href="#contact" class="btn btn-outline-light btn-lg rounded-pill px-4">Get a Free Quote</a>
      </div>
    </div>
  </div>
</section>

<!-- Second Testimonial Block - Amit and Julianna for the detail/quality angle -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-4">
        <h2 class="section-title">Why People Keep Me On</h2>
        <p class="section-subtitle">It's the small stuff that makes the difference</p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5 mb-4">
        <div class="testimonial-card p-4 rounded-4 shadow-sm h-100">
          <div class="mb-2"><span style="color: #ffd700;">&#11088;&#11088;&#11088;&#11088;&#11088;</span></div>
          <p class="testimonial-card-text">"Punctual, professional, reasonably priced and the quality of your work really stood out. <strong>I appreciate your attention to detail and the care you took around the property.</strong>"</p>
          <p class="testimonial-card-author fw-semibold mb-0">- Amit Sawlani</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-5 mb-4">
        <div class="testimonial-card p-4 rounded-4 shadow-sm h-100">
          <div class="mb-2"><span style="color: #ffd700;">&#11088;&#11088;&#11088;&#11088;&#11088;</span></div>
          <p class="testimonial-card-text">"Jack was brilliant from start to finish. Really prompt response, turned up when he said he would. <strong>He completed the job really thoroughly taking time to attend to the details.</strong>"</p>
          <p class="testimonial-card-author fw-semibold mb-0">- Julianna Veares</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center mt-2">
        <a href="https://www.google.com/search?q=je+robb+window+cleaning#lrd=0x25478cddcb9565d3:0x9af176d9df19a689,1"
           target="_blank" rel="noopener" class="text-muted small">
          <i class="fab fa-google me-1"></i>Read all reviews on Google
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Nearby Areas -->
<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-4">
        <h2 class="section-title">Nearby Areas I Cover</h2>
        <p class="section-subtitle">Wroughton's home, but my round stretches across Swindon and the surrounding towns and villages.</p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-6 col-md-3 mb-3 text-center">
        <span class="btn btn-outline-secondary w-100" style="pointer-events:none;">Swindon</span>
      </div>
      <div class="col-6 col-md-3 mb-3 text-center">
        <a href="/areas/royal-wootton-bassett" class="btn btn-outline-primary w-100">Royal Wootton Bassett</a>
      </div>
      <div class="col-6 col-md-3 mb-3 text-center">
        <span class="btn btn-outline-secondary w-100" style="pointer-events:none;">Chiseldon</span>
      </div>
      <div class="col-6 col-md-3 mb-3 text-center">
        <span class="btn btn-outline-secondary w-100" style="pointer-events:none;">Highworth</span>
      </div>
      <div class="col-6 col-md-3 mb-3 text-center">
        <span class="btn btn-outline-secondary w-100" style="pointer-events:none;">Lydiard Millicent</span>
      </div>
      <div class="col-6 col-md-3 mb-3 text-center">
        <span class="btn btn-outline-secondary w-100" style="pointer-events:none;">Purton</span>
      </div>
    </div>
  </div>
</section>

<!-- Contact Section (matches index dark style) -->
<section id="contact" class="py-5 section-dark">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-4">
        <h2 class="section-title text-white">Get a Free Quote in Wroughton</h2>
        <p class="section-subtitle" style="color: rgba(255,255,255,0.6);">I typically reply within a few hours</p>
      </div>
    </div>

    <!-- Primary CTA: WhatsApp -->
    <div class="row justify-content-center mb-5">
      <div class="col-lg-6 text-center">
        <div class="whatsapp-cta-box p-4 p-md-5 rounded-4 shadow-sm">
          <div class="mb-3">
            <i class="fab fa-whatsapp" style="font-size: 3rem; color: #25D366;"></i>
          </div>
          <h3 class="mb-2">Message Me on WhatsApp</h3>
          <p class="text-muted mb-1">The quickest way to get your free quote.</p>
          <p class="text-muted small mb-4">No obligation, no hard sell</p>
          <a href="https://wa.me/447442249440?text=Hi%20Jack,%20I'd%20like%20a%20quote%20for%20window%20cleaning%20in%20Wroughton"
             target="_blank" rel="noopener"
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
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <form id="contactForm" class="contact-form">
          <input type="hidden" id="area" name="area" value="Wroughton" />
          <input type="hidden" id="email" name="email" value="" />
          <input type="hidden" id="message" name="message" value="Enquiry from Wroughton page" />
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

<!-- FAQ Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Does Jack actually live in Wroughton?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Jack lives in Wroughton with his partner and dogs, so this is genuinely a local business. New customers in the village slot in easily as he's already nearby on cleaning days."
      }
    },
    {
      "@type": "Question",
      "name": "Will my conservatory roof get cleaned too?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Conservatory roofs and greenhouses are part of what Jack does. The pure water pole reaches across the roof from the ground without anyone climbing on the glass. Just mention it when you get your quote."
      }
    },
    {
      "@type": "Question",
      "name": "How much does window cleaning cost in Wroughton?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Every property is different, so Jack quotes based on the size of your home, number of windows, and access. There is no generalised pricing because each property is so different. Message Jack for a free quote and he should get back to you in a few hours."
      }
    },
    {
      "@type": "Question",
      "name": "What if I'm not happy with the clean?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Let Jack know within 24 hours and he'll come back to sort it without question. As Jack lives in Wroughton, it's easy for him to return promptly."
      }
    },
    {
      "@type": "Question",
      "name": "Do you cover the lanes and farms outside Wroughton?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Jack has customers on the lanes around Wroughton including out toward Hackpen and Barbury, and the surrounding farms. Rural properties pick up dust quickly from the surrounding fields, so regular cleans make a noticeable difference."
      }
    },
    {
      "@type": "Question",
      "name": "Do I need to be home when Jack cleans?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Not usually. Jack messages the day before so you know he's coming. As long as he can access the windows, he'll clean while you're out and let you know when he's done. Payment is handled online."
      }
    }
  ]
}
</script>

<?php include '../includes/footer.php'; ?>
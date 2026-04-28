<?php
$page_title = "Window Cleaning Royal Wootton Bassett | J E Robb";
$page_description = "Jack at J E Robb Window Cleaning covers Royal Wootton Bassett regularly. 5-star rated, 150+ happy customers. Free quote, no contract.";
$page_canonical = "https://www.jerobb.co.uk/areas/royal-wootton-bassett";
include '../includes/header.php';
?>

<!-- LocalBusiness Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "J E Robb Window Cleaning - Royal Wootton Bassett",
  "description": "Window cleaning in Royal Wootton Bassett from a reliable one-man business. Jack covers homes across the town and surrounding areas, offering regular window cleans, fascia cleaning and gutter emptying.",
  "image": "<?= BUSINESS_IMAGE_URL ?>",
  "url": "https://www.jerobb.co.uk/areas/royal-wootton-bassett",
  "telephone": "+447442249440",
  "email": "windowcleaning@jerobb.co.uk",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Royal Wootton Bassett",
    "addressRegion": "Wiltshire",
    "addressCountry": "GB"
  },
  "areaServed": {
    "@type": "Place",
    "name": "Royal Wootton Bassett, Wiltshire"
  },
  "priceRange": "££",
  "openingHours": "Mo-Fr 08:00-18:00",
  "sameAs": ["<?= GOOGLE_MAPS_URL ?>"]
}
</script>

<!-- Breadcrumb -->
<nav aria-label="breadcrumb" class="area-breadcrumb">
  <div class="container">
    <ol class="breadcrumb mb-0 py-2 small">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item">Areas</li>
      <li class="breadcrumb-item active" aria-current="page">Royal Wootton Bassett</li>
    </ol>
  </div>
</nav>

<!-- Hero Section -->
<section id="home" class="hero-split">
  <div class="container">
    <div class="row align-items-center min-vh-hero">
      <!-- Text Side -->
      <div class="col-lg-6 hero-text-col py-5 mt-3 mt-lg-0">
        <p class="hero-eyebrow">5-Star Rated &middot; 150+ Happy Customers</p>
        <h1 class="hero-h1-split">Window Cleaner <br class="d-none d-md-block">in Royal Wootton Bassett</h1>
        <p class="hero-desc-split">
          Jack already cleans for customers around the town and is happy to take on new properties nearby. Reliable, thorough and friendly - with every Google review at five stars.
        </p>
        <a href="#contact" class="btn btn-hero btn-lg hero-cta-split mt-2 mb-3">Message Jack for a Free Quote</a>

        <div class="d-flex align-items-center mb-3">
          <img src="/assets/images/jack.webp"
            alt="Jack from J E Robb Window Cleaning"
            class="hero-jack-thumb rounded-circle me-3" />
          <span style="color: rgba(255,255,255,0.85); font-size: 0.95rem;">
            <strong class="text-white">Jack Robb</strong> · Owner &amp; Window Cleaner
          </span>
        </div>

        <div class="hero-snippet">
          <div class="snippet-carousel" id="snippetCarousel">
            <div class="snippet-slide active">
              <p class="snippet-text">"Reliable, thorough, efficient and friendly" <span class="snippet-author">- Anna</span> <span class="snippet-stars">&#11088;&#11088;&#11088;&#11088;&#11088;</span></p>
            </div>
            <div class="snippet-slide">
              <p class="snippet-text">"He takes pride in his work - cleaner than they've been for ages" <span class="snippet-author">- Alfred</span> <span class="snippet-stars">&#11088;&#11088;&#11088;&#11088;&#11088;</span></p>
            </div>
            <div class="snippet-slide">
              <p class="snippet-text">"Very glad I found him. Will use permanently" <span class="snippet-author">- Dan</span> <span class="snippet-stars">&#11088;&#11088;&#11088;&#11088;&#11088;</span></p>
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
        <img src="/assets/images/royal-wootton-basset.webp" alt="Royal Wootton Bassett, Wiltshire" class="hero-split-img img-fluid rounded-4" />
        <p class="area-img-credit">Photo: Wayland Smith, CC BY-SA 2.0, via Wikimedia Commons</p>
      </div>
    </div>
  </div>
</section>

<style>
.trust-static {
  background-color: #003580;
  padding: 16px 0;
  border-top: 1px solid rgba(255, 255, 255, 0.1);
}
.trust-static-list {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  gap: 1rem 2.5rem;
}
.trust-static-list li {
  color: rgba(255, 255, 255, 0.95);
  font-family: "League Spartan", sans-serif;
  font-size: 0.9rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  display: inline-flex;
  align-items: center;
  white-space: nowrap;
}
.trust-static-list li i {
  color: #FCC31A;
  margin-right: 0.5rem;
  font-size: 0.95rem;
}
@media (max-width: 768px) {
  .trust-static-list {
    gap: 0.75rem 1.5rem;
  }
  .trust-static-list li {
    font-size: 0.78rem;
  }
}
.service-card-overlay:hover .service-card-overlay-img {
  transform: none;
}
.feature-card:hover {
  transform: none;
  background: rgba(255, 255, 255, 0.15);
}
</style>

<!-- Static Trust Bar -->
<div class="trust-static">
  <div class="container">
    <ul class="trust-static-list">
      <li><i class="fas fa-star"></i> 5-Star Rated on Google</li>
      <li><i class="fas fa-map-marker-alt"></i> Regular Round in Royal Wootton Bassett</li>
      <li><i class="fas fa-search"></i> Obsessive Attention to Detail</li>
      <li><i class="fas fa-user-check"></i> Same Person Every Time</li>
      <li><i class="fas fa-tint"></i> Pure Water, Streak-Free Finish</li>
    </ul>
  </div>
</div>

<!-- Early Testimonial -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="testimonial-card p-4 p-md-5 rounded-4 shadow-sm text-center">
          <div class="mb-3"><span style="color: #ffd700; font-size: 1.2rem;">&#11088;&#11088;&#11088;&#11088;&#11088;</span></div>
          <p class="testimonial-card-text" style="font-size: 1.15rem;">"Jack has cleaned my parents' windows several times now and <strong>they are hugely impressed</strong>. Reliable, thorough and efficient, helpful and friendly. Highly recommend."</p>
          <p class="testimonial-card-author fw-semibold mb-0 mt-3">- Anna Cairns</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- About Jack Section -->
<section id="about-jack" class="py-5 section-dark">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-11 col-lg-10">
        <div class="row align-items-center">
          <div class="col-md-4 mb-4 mb-md-0">
            <img src="/assets/images/jack_rectangle.webp" alt="Jack Robb - J E Robb Window Cleaning" class="img-fluid rounded-4 shadow" />
          </div>
          <div class="col-md-8">
            <div class="p-4">
              <p class="hero-eyebrow" style="color: #fff; opacity: 0.9;">Regular Round · 5-Star Rated</p>
              <h2 class="section-title text-white mb-3">Your Window Cleaner in Royal Wootton Bassett</h2>
              <p style="color: rgba(255,255,255,0.95); font-size: 1.1rem; line-height: 1.7;">
                Jack runs J E Robb as a one-man business with 150+ regular customers across Swindon and the surrounding towns. Royal Wootton Bassett is part of his regular round, so new customers nearby slot in easily alongside his existing ones.
              </p>
              <div class="row mt-4">
                <div class="col-sm-6 mb-3">
                  <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-search"></i></div>
                    <h3>Obsessive About Detail</h3>
                    <p>Frames, sills, corners, the bits other cleaners miss. Jack notices the things you'd notice yourself.</p>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-user-check"></i></div>
                    <h3>Same Person Every Time</h3>
                    <p>Not a franchise. It's always Jack. He'll message you the day before every clean so you know when to expect him.</p>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-tint"></i></div>
                    <h3>Pure Water, No Chemicals</h3>
                    <p>Streak-free results with no detergents. Better for your windows, frames and the environment.</p>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
                    <h3>Satisfaction Guaranteed</h3>
                    <p>Not happy? Jack will come back and sort it, no fuss, no charge.</p>
                  </div>
                </div>
              </div>
              <div class="mt-3">
                <a href="#contact" class="btn btn-light btn-lg rounded-pill px-4 fw-semibold" style="color: #004aad;">Message Jack for a Free Quote</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Local Knowledge Section -->
<section class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="text-center mb-4">
          <h2 class="section-title">Window Cleaning Across Royal Wootton Bassett</h2>
          <p class="section-subtitle">From the High Street to the newer estates</p>
        </div>
        <p style="font-size: 1.05rem; line-height: 1.8; color: #444;">
          Royal Wootton Bassett has a real mix of properties - older stone and brick cottages along the High Street, terraced streets through the town centre, and larger modern estates off Coped Hall and around Templars Firs. Older sash windows and stone surrounds suit the gentle pure water clean Jack uses, with no chemicals that could mark paintwork or stonework. The newer estates often have first and second-floor glass that's awkward to reach any other way, which is where the water-fed pole system comes in - it reaches up to three storeys from the ground without ladders against your property.
        </p>
        <p style="font-size: 1.05rem; line-height: 1.8; color: #444;">
          Being a market town just off the M4, properties in Royal Wootton Bassett can pick up road dust quickly, especially on the main road side. An 8-weekly clean keeps on top of it before dirt has a chance to bake onto frames and seals. Frames and sills are cleaned as part of every visit - not just the glass.
        </p>
        <div class="text-center mt-4">
          <a href="#contact" class="btn btn-primary btn-lg">Get a free quote in Royal Wootton Bassett</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h2 class="section-title text-center mb-4">Common Questions</h2>

        <div class="accordion" id="faqAccordion">
          <div class="accordion-item border-0 mb-3 rounded-3 shadow-sm">
            <h3 class="accordion-header">
              <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                How much does window cleaning cost in Royal Wootton Bassett?
              </button>
            </h3>
            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
              <div class="accordion-body text-muted">
                Every property is different, so Jack gives a personalised quote based on the number of windows, the size of your home and access. There's no contract and no obligation - just message him for a quote.
              </div>
            </div>
          </div>

          <div class="accordion-item border-0 mb-3 rounded-3 shadow-sm">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                Does Jack already work in Royal Wootton Bassett?
              </button>
            </h3>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body text-muted">
                Yes. Royal Wootton Bassett is part of Jack's regular round, so he's in the area often. New customers nearby slot in alongside his existing ones without any fuss.
              </div>
            </div>
          </div>

          <div class="accordion-item border-0 mb-3 rounded-3 shadow-sm">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                How often should I get my windows cleaned?
              </button>
            </h3>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body text-muted">
                Most of Jack's customers go for an 8-weekly clean, which keeps on top of dirt building up on frames and seals. Happy to chat through what works best for your home.
              </div>
            </div>
          </div>

          <div class="accordion-item border-0 mb-3 rounded-3 shadow-sm">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                Do I need to be home when Jack cleans?
              </button>
            </h3>
            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body text-muted">
                Not usually. Jack messages you the day before so you know when he's coming. As long as he can get to the windows (side gates unlocked, cars moved if needed), he can clean while you're out and let you know when he's done. Payment is online so no need for cash.
              </div>
            </div>
          </div>

          <div class="accordion-item border-0 mb-3 rounded-3 shadow-sm">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                What if it rains after my windows are cleaned?
              </button>
            </h3>
            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body text-muted">
                Rain after a pure water clean is fine. There's no detergent or chemical residue on the glass, so rainwater just runs off without leaving marks. If something isn't right after a clean, Jack will come back and sort it.
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- Services Section -->
<section id="services" class="py-5 section-dark">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-5">
        <h2 class="section-title text-white">What Jack Cleans in Royal Wootton Bassett</h2>
      </div>
    </div>
    <div class="row g-3">
      <div class="col-sm-6 col-lg-3">
        <div class="service-card-overlay">
          <img src="/assets/images/clean-domestic-window.webp" alt="Window cleaning in Royal Wootton Bassett" class="service-card-overlay-img" />
          <div class="service-card-overlay-title">Window Cleaning</div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="service-card-overlay">
          <img src="/assets/images/clean-fascia-domestic.webp" alt="Fascia cleaning in Royal Wootton Bassett" class="service-card-overlay-img" />
          <div class="service-card-overlay-title">Fascia &amp; Soffit Cleaning</div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="service-card-overlay">
          <img src="/assets/images/gutter-empty.webp" alt="Gutter emptying in Royal Wootton Bassett" class="service-card-overlay-img" style="object-position: center 80%;" />
          <div class="service-card-overlay-title">Gutter Emptying</div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="service-card-overlay">
          <img src="/assets/images/greenhouse-full.webp" alt="Conservatory and greenhouse cleaning in Royal Wootton Bassett" class="service-card-overlay-img" />
          <div class="service-card-overlay-title">Conservatories and Greenhouses</div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col text-center">
        <p class="text-light mb-3" style="opacity: 0.85;">Every home gets a personalised quote based on your property and what you need.</p>
        <a href="#contact" class="btn btn-outline-light btn-lg rounded-pill px-4">Message Jack for a Free Quote</a>
      </div>
    </div>
  </div>
</section>

<!-- Second Testimonial Block -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-4">
        <h2 class="section-title">Why People Keep Jack On</h2>
        <p class="section-subtitle">It's the small stuff that makes the difference</p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5 mb-4">
        <div class="testimonial-card p-4 rounded-4 shadow-sm h-100">
          <div class="mb-2"><span style="color: #ffd700;">&#11088;&#11088;&#11088;&#11088;&#11088;</span></div>
          <p class="testimonial-card-text">"Brilliant job cleaning our windows in an efficient tidy manner. <strong>He takes pride in his work, the window frames look cleaner than they have been for ages.</strong>"</p>
          <p class="testimonial-card-author fw-semibold mb-0">- Alfred Western</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-5 mb-4">
        <div class="testimonial-card p-4 rounded-4 shadow-sm h-100">
          <div class="mb-2"><span style="color: #ffd700;">&#11088;&#11088;&#11088;&#11088;&#11088;</span></div>
          <p class="testimonial-card-text">"Punctual, professional, reasonably priced and the quality of your work really stood out. <strong>I appreciate your attention to detail and the care you took around the property.</strong>"</p>
          <p class="testimonial-card-author fw-semibold mb-0">- Amit Sawlani</p>
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
        <h2 class="section-title">Nearby Areas Jack Covers</h2>
        <p class="section-subtitle">Royal Wootton Bassett is part of Jack's round across Swindon and the surrounding towns and villages.</p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-6 col-md-3 mb-3 text-center">
        <a href="/areas/wroughton" class="btn btn-outline-primary w-100">Wroughton</a>
      </div>
      <div class="col-6 col-md-3 mb-3 text-center">
        <a href="/areas/swindon" class="btn btn-outline-primary w-100">Swindon</a>
      </div>
      <div class="col-6 col-md-3 mb-3 text-center">
        <a href="/areas/highworth" class="btn btn-outline-primary w-100">Highworth</a>
      </div>
      <div class="col-6 col-md-3 mb-3 text-center">
        <a href="/areas/purton" class="btn btn-outline-primary w-100">Purton</a>
      </div>
      <div class="col-6 col-md-3 mb-3 text-center">
        <a href="/areas/cricklade" class="btn btn-outline-primary w-100">Cricklade</a>
      </div>
      <div class="col-6 col-md-3 mb-3 text-center">
        <a href="/areas/lydiard-millicent" class="btn btn-outline-primary w-100">Lydiard Millicent</a>
      </div>
    </div>
  </div>
</section>

<!-- Contact -->
<section id="contact" class="py-5 section-dark">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-4">
        <h2 class="section-title text-white">Get a Free Quote in Royal Wootton Bassett</h2>
        <p class="section-subtitle" style="color: rgba(255,255,255,0.6);">Jack typically replies within a few hours</p>
      </div>
    </div>

    <!-- Primary CTA: WhatsApp -->
    <div class="row justify-content-center mb-5">
      <div class="col-lg-6 text-center">
        <div class="whatsapp-cta-box p-4 p-md-5 rounded-4 shadow-sm">
          <div class="mb-3">
            <i class="fab fa-whatsapp" style="font-size: 3rem; color: #25D366;"></i>
          </div>
          <h3 class="mb-2">Message Jack on WhatsApp</h3>
          <p class="text-muted mb-1">The quickest way to get your free quote.</p>
          <p class="text-muted small mb-4">No obligation, no hard sell</p>
          <a href="https://wa.me/447442249440?text=Hi%20Jack,%20I'd%20like%20a%20quote%20for%20window%20cleaning%20in%20Royal%20Wootton%20Bassett"
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
          <input type="hidden" id="area" name="area" value="Royal Wootton Bassett" />
          <input type="hidden" id="email" name="email" value="" />
          <input type="hidden" id="message" name="message" value="Enquiry from Royal Wootton Bassett page" />
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
          You can also reach Jack on <a href="tel:07442249440" class="text-white">07442 249440</a>
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
      "name": "How much does window cleaning cost in Royal Wootton Bassett?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Every property is different, so Jack gives a personalised quote based on the number of windows, the size of your home and access. There's no contract and no obligation."
      }
    },
    {
      "@type": "Question",
      "name": "Does Jack already work in Royal Wootton Bassett?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Royal Wootton Bassett is part of Jack's regular round, so he's in the area often. New customers nearby slot in alongside his existing ones."
      }
    },
    {
      "@type": "Question",
      "name": "How often should I get my windows cleaned?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Most of Jack's customers go for an 8-weekly clean, which keeps on top of dirt building up on frames and seals."
      }
    },
    {
      "@type": "Question",
      "name": "Do I need to be home when Jack cleans?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Not usually. Jack messages you the day before. As long as he can get to the windows, he can clean while you're out and let you know when he's done. Payment is online."
      }
    },
    {
      "@type": "Question",
      "name": "What if it rains after my windows are cleaned?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Rain after a pure water clean is fine. There's no detergent or chemical residue on the glass, so rainwater just runs off without leaving marks."
      }
    }
  ]
}
</script>

<?php include '../includes/footer.php'; ?>

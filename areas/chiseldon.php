<?php
$page_title = "Window Cleaner Chiseldon | J E Robb Window Cleaning";
$page_description = "Local window cleaner covering Chiseldon as part of my regular round from Wroughton. 5-star rated, 150+ happy customers. Free quote, no contract.";
$page_canonical = "https://www.jerobb.co.uk/areas/chiseldon";
include '../includes/header.php';
?>

<!-- LocalBusiness Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "J E Robb Window Cleaning - Chiseldon",
  "description": "Window cleaning in Chiseldon from a local one-man business. Jack lives just up the road in Wroughton and covers Chiseldon as part of his regular round, including the village core, the lanes out toward Hodson and Badbury, and the surrounding farms and countryside properties.",
  "image": "<?= BUSINESS_IMAGE_URL ?>",
  "url": "https://www.jerobb.co.uk/areas/chiseldon",
  "telephone": "+447442249440",
  "email": "windowcleaning@jerobb.co.uk",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Chiseldon",
    "addressRegion": "Wiltshire",
    "addressCountry": "GB"
  },
  "areaServed": {
    "@type": "Place",
    "name": "Chiseldon, Wiltshire"
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
      <li class="breadcrumb-item active" aria-current="page">Chiseldon</li>
    </ol>
  </div>
</nav>

<!-- Hero Section -->
<section id="home" class="hero-split">
  <div class="container">
    <div class="row align-items-center min-vh-hero">
      <!-- Text Side -->
      <div class="col-lg-6 hero-text-col py-5 mt-3 mt-lg-0">
        <p class="hero-eyebrow">Local &middot; Regular Round in Chiseldon</p>
        <h1 class="hero-h1-split">Window Cleaner <br class="d-none d-md-block">in Chiseldon</h1>
        <p class="hero-desc-split">
          I live just up the road in Wroughton, and Chiseldon is part of my regular round. Reliable, with a high attention to detail and a friendly service.
        </p>
        <a href="#contact" class="btn btn-hero btn-lg hero-cta-split mt-2 mb-3">Get a Free Quote</a>

        <div class="d-flex align-items-center mb-3">
          <img src="/assets/images/jack.webp"
            alt="Jack from J E Robb Window Cleaning - covering Chiseldon"
            class="hero-jack-thumb rounded-circle me-3" />
          <span style="color: rgba(255,255,255,0.85); font-size: 0.95rem;">
            <strong class="text-white">Jack Robb</strong> &middot; Owner &amp; Window Cleaner
          </span>
        </div>

        <div class="hero-snippet">
          <div class="snippet-carousel" id="snippetCarousel">
            <div class="snippet-slide active">
              <p class="snippet-text">"Reliable, thorough, efficient and friendly" <span class="snippet-author">- Anna</span> <span class="snippet-stars">&#11088;&#11088;&#11088;&#11088;&#11088;</span></p>
            </div>
            <div class="snippet-slide">
              <p class="snippet-text">"Crystal clear windows... 100% recommend" <span class="snippet-author">- Janet</span> <span class="snippet-stars">&#11088;&#11088;&#11088;&#11088;&#11088;</span></p>
            </div>
            <div class="snippet-slide">
              <p class="snippet-text">"Very glad I found him. Will use permanently" <span class="snippet-author">- Dan</span> <span class="snippet-stars">&#11088;&#11088;&#11088;&#11088;&#11088;</span></p>
            </div>
            <div class="snippet-slide">
              <p class="snippet-text">"Pride in his work, courteous and helpful" <span class="snippet-author">- Janice</span> <span class="snippet-stars">&#11088;&#11088;&#11088;&#11088;&#11088;</span></p>
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
        <img src="/assets/images/clean-domestic-window.webp" alt="Window cleaning in Chiseldon, Wiltshire" class="hero-split-img img-fluid rounded-4" />
        <p class="area-img-credit">Chiseldon, Wiltshire</p>
      </div>
    </div>
  </div>
</section>

<!-- Static Trust Bar -->
<div class="trust-static">
  <div class="container">
    <ul class="trust-static-list">
      <li><i class="fas fa-star"></i> 5-Star Rated on Google</li>
      <li><i class="fas fa-map-marker-alt"></i> Regular Round in Chiseldon</li>
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
            <img src="/assets/images/jack_rectangle.webp" alt="Jack Robb - window cleaner covering Chiseldon" class="img-fluid rounded-4 shadow" />
          </div>
          <div class="col-md-8">
            <div class="p-4">
              <p class="hero-eyebrow" style="color: #fff; opacity: 0.9;">Your Local Window Cleaner</p>
              <h2 class="section-title text-white mb-3">Just Up the Road in Wroughton</h2>
              <p style="color: rgba(255,255,255,0.95); font-size: 1.1rem; line-height: 1.7;">
                I run J E Robb as a one-man business with 150+ regular customers across Swindon and the surrounding villages. I live in Wroughton, so Chiseldon is part of my core round. New customers in the village slot in easily alongside my existing ones, with no travel faff getting passed on.
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
                    <div class="feature-icon"><i class="fas fa-user-check"></i></div>
                    <h3>Same Person Every Time</h3>
                    <p>Not a franchise. It's always me. I'll message you the day before every clean so you know when to expect me.</p>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-tint"></i></div>
                    <h3>Pure Water, No Chemicals</h3>
                    <p>Streak-free results with no detergents. Better for older paintwork, stonework and the environment.</p>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
                    <h3>Satisfaction Guaranteed</h3>
                    <p>Not happy? I'll come back and sort it, no fuss, no charge.</p>
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

<!-- Local Knowledge Section -->
<section class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="text-center mb-4">
          <h2 class="section-title">Window Cleaning Across Chiseldon</h2>
          <p class="section-subtitle">From the village core to the lanes out toward Hodson and Badbury</p>
        </div>
        <p style="font-size: 1.05rem; line-height: 1.8; color: #444;">
          Chiseldon has the feel of a proper Wiltshire village. Older stone and brick cottages around the church and the High Street, terraces and bungalows through the village centre, and the larger period homes and converted properties tucked along the back lanes. There's also a fair amount of newer infill alongside the older stock, plus the surrounding farms and countryside properties out toward Hodson, Badbury and the lanes that climb up onto the downs. The pure water fed pole system suits this mix well: no detergents or chemicals that could mark older paintwork or stonework, and most cleans are done from the ground without anything leaning against your home.
        </p>
        <p style="font-size: 1.05rem; line-height: 1.8; color: #444;">
          Being a countryside village, properties in Chiseldon pick up dust quickly from the surrounding lanes and fields, especially in summer when the tractors are out. Regular 8-weekly cleans keep on top of it before grime has a chance to bake onto frames and sills. Frames and sills are cleaned as part of every visit, not just the glass. For the larger properties with first and second-floor windows, the water-fed pole reaches up to three storeys from the ground without ladders against the brickwork.
        </p>
        <div class="row mt-4 g-3">
          <div class="col-sm-6">
            <img src="/assets/images/sn4-conservatory.webp"
                 alt="Conservatory window cleaning in Chiseldon, SN4"
                 class="img-fluid rounded-4 shadow-sm w-100" style="object-fit: cover; max-height: 260px;" />
          </div>
          <div class="col-sm-6">
            <img src="/assets/images/sn4-house-with-van.webp"
                 alt="Jack's van outside an SN4 property near Chiseldon"
                 class="img-fluid rounded-4 shadow-sm w-100" style="object-fit: cover; max-height: 260px;" />
          </div>
        </div>
        <div class="text-center mt-4">
          <a href="#contact" class="btn btn-primary btn-lg">Get a free quote in Chiseldon</a>
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

        <?php
        // Master FAQ set (shared across all area pages)
        $area_name = 'Chiseldon';
        include '../includes/area-faqs.php';
        ?>

        <!-- One Chiseldon-specific FAQ added on top of the master set -->
        <div class="accordion mt-3" id="faqAccordionLocal">
          <div class="accordion-item border-0 mb-3 rounded-3 shadow-sm">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faqLocal1" aria-expanded="false" aria-controls="faqLocal1">
                Do you cover the lanes and farms around Chiseldon too?
              </button>
            </h3>
            <div id="faqLocal1" class="accordion-collapse collapse" data-bs-parent="#faqAccordionLocal">
              <div class="accordion-body text-muted">
                Yes. I live just up the road in Wroughton and Chiseldon is part of my regular round, so I'm in the area often. Plenty of my customers are on the lanes around the village out toward Hodson, Badbury and the surrounding farms. Rural properties pick up dust quickly from the lanes and fields, so regular cleans make a noticeable difference. Drop me a message with your postcode and I'll let you know.
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- Schema for the unique Chiseldon-specific FAQ only -->
<!-- (Master FAQ schema is loaded inside includes/area-faqs.php) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Do you cover the lanes and farms around Chiseldon too?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Jack lives just up the road in Wroughton and Chiseldon is part of his regular round, so he's in the area often. Plenty of his customers are on the lanes around the village out toward Hodson, Badbury and the surrounding farms. Rural properties pick up dust quickly from the lanes and fields, so regular cleans make a noticeable difference."
      }
    }
  ]
}
</script>

<?php
// Services section (shared across all area pages)
$area_name = 'Chiseldon';
include '../includes/services.php';
?>

<!-- Second Testimonial Block -->
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

<?php
// Nearby Areas section (shared include, auto-picks closest towns via areas-config.php)
$area_name = 'Chiseldon';
include '../includes/nearby-areas.php';
?>

<!-- Contact -->
<section id="contact" class="py-5 section-dark">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-4">
        <h2 class="section-title text-white">Get a Free Quote in Chiseldon</h2>
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
          <p class="text-muted small mb-4">I usually reply within a few hours</p>
          <a href="https://wa.me/447442249440?text=Hi%20Jack,%20I'd%20like%20a%20quote%20for%20window%20cleaning%20in%20Chiseldon"
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
          <input type="hidden" id="area" name="area" value="Chiseldon" />
          <input type="hidden" id="email" name="email" value="" />
          <input type="hidden" id="message" name="message" value="Enquiry from Chiseldon page" />
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
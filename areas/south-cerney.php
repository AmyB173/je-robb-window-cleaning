<?php
$page_title = "Window Cleaner South Cerney | J E Robb Window Cleaning";
$page_description = "Window cleaner covering South Cerney and the Cotswold Water Park. Friendly, careful and properly thorough. Frames and sills cleaned every visit. 5-star rated, free quote, no contract.";
$page_canonical = "https://www.jerobb.co.uk/areas/south-cerney";
include '../includes/header.php';
?>

<!-- LocalBusiness Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "J E Robb Window Cleaning - South Cerney",
  "description": "Window cleaning in South Cerney from a small, independent local business focused on careful, thorough work. Jack covers the village itself, the stone cottages around the church and the lanes off the High Street, and the modern lakeside properties around the Cotswold Water Park.",
  "image": "<?= BUSINESS_IMAGE_URL ?>",
  "url": "https://www.jerobb.co.uk/areas/south-cerney",
  "telephone": "+447442249440",
  "email": "windowcleaning@jerobb.co.uk",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "South Cerney",
    "addressRegion": "Gloucestershire",
    "addressCountry": "GB"
  },
  "areaServed": {
    "@type": "Place",
    "name": "South Cerney, Gloucestershire"
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
      <li class="breadcrumb-item active" aria-current="page">South Cerney</li>
    </ol>
  </div>
</nav>

<!-- Hero Section -->
<section id="home" class="hero-split">
  <div class="container">
    <div class="row align-items-center min-vh-hero">
      <!-- Text Side -->
      <div class="col-lg-6 hero-text-col py-5 mt-3 mt-lg-0">
        <p class="hero-eyebrow">Friendly Local Service &middot; Done Properly</p>
        <h1 class="hero-h1-split">Window Cleaner <br class="d-none d-md-block">in South Cerney</h1>
        <p class="hero-desc-split">
          A small, independent business with a high attention to detail and a friendly, easy-going approach. Frames and sills cleaned every visit, awkward corners not skipped. South Cerney and the Cotswold Water Park are part of my regular round.
        </p>
        <a href="#contact" class="btn btn-hero btn-lg hero-cta-split mt-2 mb-3">Get a Free Quote</a>

        <div class="d-flex align-items-center mb-3">
          <img src="/assets/images/jack.webp"
            alt="Jack from J E Robb Window Cleaning - covering South Cerney"
            class="hero-jack-thumb rounded-circle me-3" />
          <span style="color: rgba(255,255,255,0.85); font-size: 0.95rem;">
            <strong class="text-white">Jack Robb</strong> &middot; Owner &amp; Window Cleaner
          </span>
        </div>

        <div class="hero-snippet">
          <div class="snippet-carousel" id="snippetCarousel">
            <div class="snippet-slide active">
              <p class="snippet-text">"Brilliant service and beautiful clean conservatory and windows" <span class="snippet-author">- Gill H.</span> <span class="snippet-stars">&#11088;&#11088;&#11088;&#11088;&#11088;</span></p>
            </div>
            <div class="snippet-slide">
              <p class="snippet-text">"Jack is very professional and did an amazing job on my greenhouse" <span class="snippet-author">- Lowri D.</span> <span class="snippet-stars">&#11088;&#11088;&#11088;&#11088;&#11088;</span></p>
            </div>
            <div class="snippet-slide">
              <p class="snippet-text">"Great communication and high standard of cleaning throughout. Would highly recommend." <span class="snippet-author">- Paul D.</span> <span class="snippet-stars">&#11088;&#11088;&#11088;&#11088;&#11088;</span></p>
            </div>
            <div class="snippet-slide">
              <p class="snippet-text">"Jack was friendly and professional, he did a great job on our windows" <span class="snippet-author">- Charlotte F.</span> <span class="snippet-stars">&#11088;&#11088;&#11088;&#11088;&#11088;</span></p>
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
        <img src="/assets/images/south-cerney.webp" alt="Window cleaning in South Cerney, Gloucestershire" class="hero-split-img img-fluid rounded-4" />
        <p class="area-img-credit">South Cerney, Gloucestershire</p>
      </div>
    </div>
  </div>
</section>

<!-- Static Trust Bar -->
<div class="trust-static">
  <div class="container">
    <ul class="trust-static-list">
      <li><i class="fas fa-star"></i> 5-Star Rated on Google</li>
      <li><i class="fas fa-search"></i> Obsessive Attention to Detail</li>
      <li><i class="fas fa-clock"></i> No Rush Jobs</li>
      <li><i class="fas fa-user-check"></i> Same Person Every Time</li>
      <li><i class="fas fa-eye"></i> Careful work, checked before I leave</li>
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
          <p class="testimonial-card-text" style="font-size: 1.15rem;">"Jack did an exceptional job cleaning our windows as well as <strong>the conservatory which hadn't been cleaned for a long time</strong>. Great experience, can only recommend him."</p>
          <p class="testimonial-card-author fw-semibold mb-0 mt-3">- wajji07</p>
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
            <img src="/assets/images/jack_rectangle.webp" alt="Jack Robb - window cleaner covering South Cerney" class="img-fluid rounded-4 shadow" />
          </div>
          <div class="col-md-8">
            <div class="p-4">
              <p class="hero-eyebrow" style="color: #fff; opacity: 0.9;">A Small Independent Business</p>
              <h2 class="section-title text-white mb-3">It's the Details That Matter</h2>
              <p style="color: rgba(255,255,255,0.95); font-size: 1.1rem; line-height: 1.7;">
                Frames and sills always cleaned, corners not skipped, the kind of careful work you'd do yourself if you had the time and the kit. That's the heart of how I run J E Robb Window Cleaning. It's a small, independent local business with 150+ regular customers across Swindon, the Cotswolds and the surrounding villages, and South Cerney is part of my regular round.
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
                    <div class="feature-icon"><i class="fas fa-smile"></i></div>
                    <h3>Same Person Every Time</h3>
                    <p>You'll always know who's coming. I message you the day before, every time.</p>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="feature-card">
                    <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
                    <h3>Reputation Matters</h3>
                    <p>Known locally for careful, thorough work. Word-of-mouth is how most customers find me.</p>
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
          <h2 class="section-title">Window Cleaning Across South Cerney</h2>
          <p class="section-subtitle">From the village core to the lakeside properties around the Cotswold Water Park</p>
        </div>
        <p style="font-size: 1.05rem; line-height: 1.8; color: #444;">
          South Cerney has two distinct sides to it, and the round here covers both. The village itself is the traditional Cotswold core with stone cottages around the church and along the lanes off the High Street, period homes tucked into the side streets, and a fair amount of newer infill. A short distance away, the Cotswold Water Park brings a completely different kind of property: modern lakeside houses and lodges built around the lakes, often with a lot of glass facing the water. Every property is different, so quotes are based on size, access and what you need cleaning rather than a flat rate.
        </p>
        <p style="font-size: 1.05rem; line-height: 1.8; color: #444;">
          Two things shape how I work here. The first is the windows themselves. The lakeside builds tend to have big picture windows and bifolds facing the water, which look spectacular when clean and show every smear when they're not. Frames and sills get cleaned as part of every visit, not just the glass. The second is the older stone in the village itself. Cotswold limestone and the lime mortar around it don't appreciate aggressive cleaning, so the pure water reach pole approach suits the village properties as well as the lakeside ones. For first cleans where a property has been left for a long time I'll use light cleaning products to shift heavier soil, but the regular round is pure water. For three-storey properties and the taller lakeside builds, the pole reaches the upper floors from the ground without ladders against the brickwork.
        </p>
        <div class="row mt-4 g-3">
          <div class="col-sm-6">
            <img src="/assets/images/south-cerney.webp"
                 alt="Stone cottage in South Cerney village, Gloucestershire"
                 class="img-fluid rounded-4 shadow-sm w-100" style="object-fit: cover; max-height: 260px;" />
          </div>
          <div class="col-sm-6">
            <img src="/assets/images/south-cerney-the-landings.webp"
                 alt="Lakeside property at the Cotswold Water Park, South Cerney"
                 class="img-fluid rounded-4 shadow-sm w-100" style="object-fit: cover; max-height: 260px;" />
          </div>
        </div>
        <div class="text-center mt-4">
          <a href="#contact" class="btn btn-primary btn-lg">Get a free quote in South Cerney</a>
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
        $area_name = 'South Cerney';
        $faq_local_q = 'Do you cover the Cotswold Water Park properties too?';
        $faq_local_a = 'Yes. The Water Park lakeside homes and lodges are part of Jack\'s regular round in South Cerney. The pure water reach pole suits these properties well, particularly the larger windows facing the lakes.';
        include '../includes/area-faqs.php';
        ?>

        <!-- South Cerney-specific FAQ -->
        <div class="accordion mt-3" id="faqAccordionLocal">
          <div class="accordion-item border-0 mb-3 rounded-3 shadow-sm">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faqLocal1" aria-expanded="false" aria-controls="faqLocal1">
                Do you cover the Cotswold Water Park properties too?
              </button>
            </h3>
            <div id="faqLocal1" class="accordion-collapse collapse" data-bs-parent="#faqAccordionLocal">
              <div class="accordion-body text-muted">
                Yes. The Water Park lakeside homes and lodges are part of my regular round in South Cerney. The pure water reach pole suits these properties well, particularly the larger windows facing the lakes. Drop me a message with your postcode and I'll let you know.
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>


<?php
$area_name = 'South Cerney';
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
          <p class="testimonial-card-text">"Absolutely amazing work and service from Jack. <strong>His communication before the job was great</strong> and he left my windows <strong>sparkling clean</strong>. Jack will definitely be cleaning my windows again."</p>
          <p class="testimonial-card-author fw-semibold mb-0">- Tendai J. Chikandiwa</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-5 mb-4">
        <div class="testimonial-card p-4 rounded-4 shadow-sm h-100">
          <div class="mb-2"><span style="color: #ffd700;">&#11088;&#11088;&#11088;&#11088;&#11088;</span></div>
          <p class="testimonial-card-text">"Just had my windows cleaned by Jack for the first time and I'm very impressed. <strong>He turned up exactly when he said he would</strong> and my windows are gleaming. Would definitely recommend him."</p>
          <p class="testimonial-card-author fw-semibold mb-0">- Debbie Medlin</p>
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
$area_name = 'South Cerney';
include '../includes/nearby-areas.php';
?>

<!-- Contact -->
<section id="contact" class="py-5 section-dark">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-4">
        <h2 class="section-title text-white">Get a Free Quote in South Cerney</h2>
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
          <a href="https://wa.me/447442249440?text=Hi%20Jack,%20I'd%20like%20a%20quote%20for%20window%20cleaning%20in%20South%20Cerney"
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
          <input type="hidden" id="area" name="area" value="South Cerney" />
          <input type="hidden" id="email" name="email" value="" />
          <input type="hidden" id="message" name="message" value="Enquiry from South Cerney page" />
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

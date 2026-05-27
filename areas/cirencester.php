<?php
$page_title = "Window Cleaner Cirencester | J E Robb Window Cleaning";
$page_description = "Window cleaner covering Cirencester. Friendly, careful and properly thorough. Frames and sills cleaned every visit. 5-star rated, free quote, no contract.";
$page_canonical = "https://www.jerobb.co.uk/areas/cirencester";
include '../includes/header.php';
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

<!-- Breadcrumb -->
<nav aria-label="breadcrumb" class="area-breadcrumb">
  <div class="container">
    <ol class="breadcrumb mb-0 py-2 small">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item">Areas</li>
      <li class="breadcrumb-item active" aria-current="page">Cirencester</li>
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
        <h1 class="hero-h1-split">Window Cleaner <br class="d-none d-md-block">in Cirencester</h1>
        <p class="hero-desc-split">
          A small, independent business with a high attention to detail and a friendly, easy-going approach. Frames and sills cleaned every visit, awkward corners not skipped. Cirencester is part of my regular round.
        </p>
        <a href="#contact" class="btn btn-hero btn-lg hero-cta-split mt-2 mb-3">Get a Free Quote</a>

        <div class="d-flex align-items-center mb-3">
          <img src="/assets/images/jack.webp"
            alt="Jack from J E Robb Window Cleaning - covering Cirencester"
            class="hero-jack-thumb rounded-circle me-3" />
          <span style="color: rgba(255,255,255,0.85); font-size: 0.95rem;">
            <strong class="text-white">Jack Robb</strong> &middot; Owner &amp; Window Cleaner
          </span>
        </div>

        <div class="hero-snippet">
          <div class="snippet-carousel" id="snippetCarousel">
            <div class="snippet-slide active">
              <p class="snippet-text">"Punctual, professional, and thorough" <span class="snippet-author">- Chibuikem</span> <span class="snippet-stars">&#11088;&#11088;&#11088;&#11088;&#11088;</span></p>
            </div>
            <div class="snippet-slide">
              <p class="snippet-text">"Friendly, reliable, my windows and window frames have never been so clean" <span class="snippet-author">- Elaine</span> <span class="snippet-stars">&#11088;&#11088;&#11088;&#11088;&#11088;</span></p>
            </div>
            <div class="snippet-slide">
              <p class="snippet-text">"Great service, always arrives when he says he will and does an excellent job" <span class="snippet-author">- Robyn</span> <span class="snippet-stars">&#11088;&#11088;&#11088;&#11088;&#11088;</span></p>
            </div>
            <div class="snippet-slide">
              <p class="snippet-text">"Communication is great, he's always polite and friendly" <span class="snippet-author">- Tamsin</span> <span class="snippet-stars">&#11088;&#11088;&#11088;&#11088;&#11088;</span></p>
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
        <img src="/assets/images/fairford.webp" alt="Window cleaning near Cirencester, Gloucestershire" class="hero-split-img img-fluid rounded-4" />
        <p class="area-img-credit">Cirencester, Gloucestershire</p>
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
          <p class="testimonial-card-text" style="font-size: 1.15rem;">"Excellent job of cleaning inside and out. Crystal clear windows when he'd finished and <strong>lovely clean white windowsills and surrounds</strong>. I'd recommend Jack to anyone wanting their windows cleaned."</p>
          <p class="testimonial-card-author fw-semibold mb-0 mt-3">- Janet McHugh</p>
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
            <img src="/assets/images/jack_rectangle.webp" alt="Jack Robb - window cleaner covering Cirencester" class="img-fluid rounded-4 shadow" />
          </div>
          <div class="col-md-8">
            <div class="p-4">
              <p class="hero-eyebrow" style="color: #fff; opacity: 0.9;">A Small Independent Business</p>
              <h2 class="section-title text-white mb-3">It's the Details That Matter</h2>
              <p style="color: rgba(255,255,255,0.95); font-size: 1.1rem; line-height: 1.7;">
                Frames and sills always cleaned, corners not skipped, the kind of careful work you'd do yourself if you had the time and the kit. That's the heart of how I run J E Robb Window Cleaning. It's a small, independent local business with 150+ regular customers across Swindon, the Cotswolds and the surrounding villages, and Cirencester is part of my regular round.
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
          <h2 class="section-title">Window Cleaning Across Cirencester</h2>
          <p class="section-subtitle">From the town centre to the surrounding villages and lanes</p>
        </div>
        <p style="font-size: 1.05rem; line-height: 1.8; color: #444;">
          Cirencester is a proper Cotswold market town with a real mix of homes. Older Cotswold stone houses and terraces around the town centre and the lanes off the Market Place, period properties and townhouses through the older streets, plus a good amount of newer estates around the edges. There's also the surrounding villages and country properties on the lanes out toward the smaller hamlets. The pure water fed pole system suits this mix well, particularly for the older stone properties: no chemicals that could mark stonework or older paintwork, and most cleans are done from the ground without anything leaning against your home.
        </p>
        <p style="font-size: 1.05rem; line-height: 1.8; color: #444;">
          Cotswold stone catches the light beautifully but it also shows up dirty glass straight away, and the older frames and sills around town benefit from regular gentle cleaning rather than aggressive products. Frames and sills are cleaned as part of every visit, not just the glass. For the taller townhouses and three-storey properties, the water-fed pole reaches up to three storeys from the ground without ladders against the brickwork.
        </p>
        <div class="row mt-4 g-3">
          <div class="col-sm-6">
            <img src="/assets/images/south-cerney.webp"
                 alt="Cotswold stone property near Cirencester"
                 class="img-fluid rounded-4 shadow-sm w-100" style="object-fit: cover; max-height: 260px;" />
          </div>
          <div class="col-sm-6">
            <img src="/assets/images/south-cerney-the-landings.webp"
                 alt="Residential property near Cirencester, Gloucestershire"
                 class="img-fluid rounded-4 shadow-sm w-100" style="object-fit: cover; max-height: 260px;" />
          </div>
        </div>
        <div class="text-center mt-4">
          <a href="#contact" class="btn btn-primary btn-lg">Get a free quote in Cirencester</a>
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
</section>


<?php
// Services section (shared across all area pages)
$area_name = 'Cirencester';
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
          <p class="testimonial-card-text">"Jack did a brilliant job cleaning our windows in an efficient tidy manner. He takes pride in his work and <strong>the window frames look cleaner than they have been for ages.</strong>"</p>
          <p class="testimonial-card-author fw-semibold mb-0">- Alfred Western</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-5 mb-4">
        <div class="testimonial-card p-4 rounded-4 shadow-sm h-100">
          <div class="mb-2"><span style="color: #ffd700;">&#11088;&#11088;&#11088;&#11088;&#11088;</span></div>
          <p class="testimonial-card-text">"Jack does a fantastic job. What I really like is his communication, <strong>messaging me the day before so I know to leave him access and close the windows.</strong> Really glad I found him."</p>
          <p class="testimonial-card-author fw-semibold mb-0">- Amanda Scarth</p>
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
$area_name = 'Cirencester';
include '../includes/nearby-areas.php';
?>

<!-- Contact -->
<section id="contact" class="py-5 section-dark">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-4">
        <h2 class="section-title text-white">Get a Free Quote in Cirencester</h2>
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
          <a href="https://wa.me/447442249440?text=Hi%20Jack,%20I'd%20like%20a%20quote%20for%20window%20cleaning%20in%20Cirencester"
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

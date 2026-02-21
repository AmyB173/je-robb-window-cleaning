<?php
/**
 * Area Landing Page Template
 * 
 * Required variables (set before including this file):
 * $area_name        - e.g. "Royal Wootton Bassett"
 * $area_slug        - e.g. "royal-wootton-bassett"
 * $area_county      - e.g. "Wiltshire"
 * $area_distance    - e.g. "5 miles from Swindon"
 * $area_description - 1-2 sentence intro about the area
 * $area_blurb       - Longer paragraph about Jack's service in this area
 * $nearby_areas     - Array of ['name' => '...', 'slug' => '...'] nearby towns
 */

$page_title = "Window Cleaning " . $area_name . " | " . $area_county;
$page_description = "Professional window cleaning in " . $area_name . ", " . $area_county . ". Local, reliable service from Jack — free quotes, fascia cleaning and gutter emptying available.";
$page_canonical = "https://www.jerobb.co.uk/areas/" . $area_slug . ".php";
include '../includes/header.php';
?>

    <!-- Area Hero -->
    <section class="hero" style="min-height: 50vh;">
      <div class="container">
        <div class="row align-items-center mt-5 pt-5">
          <div class="col-lg-8 mx-auto text-center mt-5 hero-content p-4">
            <h1>Window Cleaning in <?php echo htmlspecialchars($area_name); ?></h1>
            <h2><?php echo htmlspecialchars($area_description); ?></h2>
            <a href="#contact" class="btn btn-primary btn-lg mt-3">Get a Free Quote</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Area Content -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="section-title">Your Local Window Cleaner in <?php echo htmlspecialchars($area_name); ?></h2>
            <p class="lead mt-3"><?php echo htmlspecialchars($area_blurb); ?></p>
            <p>Based just <?php echo htmlspecialchars($area_distance); ?>, Jack offers regular domestic window cleaning, one-off cleans, fascia cleaning, and gutter emptying across <?php echo htmlspecialchars($area_name); ?> and the surrounding villages.</p>
            <p>As a sole trader, you'll always get Jack — not a different operative each time. He'll message you the day before your clean so you know when to expect him, and he takes pride in doing a thorough, careful job every visit.</p>
            <div class="text-center mt-4">
              <a href="#contact" class="btn btn-primary btn-lg">Book a free quote</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Services in this area -->
    <section class="py-5 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-4">
            <h2 class="section-title">Services Available in <?php echo htmlspecialchars($area_name); ?></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-4">
            <div class="service-card">
              <div class="icon-box"><i class="fas fa-tint"></i></div>
              <h3>Window Cleaning</h3>
              <p>Exterior and interior window cleaning using pure water technology — streak-free results every time.</p>
            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="service-card">
              <div class="icon-box"><i class="fas fa-home"></i></div>
              <h3>Fascia Cleaning</h3>
              <p>Restore the look of your property's fascias, soffits and gutters.</p>
            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="service-card">
              <div class="icon-box"><i class="fas fa-water"></i></div>
              <h3>Gutter Emptying</h3>
              <p>Prevent water damage with a thorough gutter clearing service.</p>
            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="service-card">
              <div class="icon-box"><i class="fas fa-building"></i></div>
              <h3>Commercial</h3>
              <p>Bespoke cleaning solutions for local businesses and offices.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Nearby Areas -->
    <?php if (!empty($nearby_areas)): ?>
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-4">
            <h2 class="section-title">Also Covering Nearby Areas</h2>
            <p class="section-subtitle">Jack covers <?php echo htmlspecialchars($area_name); ?> and the surrounding towns and villages.</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <?php foreach ($nearby_areas as $area): ?>
          <div class="col-6 col-md-3 mb-3 text-center">
            <a href="/areas/<?php echo htmlspecialchars($area['slug']); ?>.php" class="btn btn-outline-primary w-100">
              <?php echo htmlspecialchars($area['name']); ?>
            </a>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <!-- Contact / Quote Form -->
    <section id="contact" class="py-5 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <h2 class="section-title">Get a Free Quote in <?php echo htmlspecialchars($area_name); ?></h2>
            <p class="section-subtitle">I'll get back to you within 24 hours</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-4">
            <div class="contact-info">
              <h3>Get in Touch</h3>
              <p><i class="fas fa-phone"></i> <a href="tel:07442249440">07442 249440</a></p>
              <p><i class="fas fa-envelope"></i> <a href="mailto:jerobb.windowcleaning@gmail.com">jerobb.windowcleaning@gmail.com</a></p>
              <p><i class="fab fa-whatsapp"></i> <a href="https://wa.me/447442249440?text=Hi%20Jack,%20I'd%20like%20a%20quote%20for%20<?php echo urlencode($area_name); ?>" target="_blank" rel="noopener">Message on WhatsApp</a></p>
            </div>
          </div>
          <div class="col-lg-6">
            <form id="contactForm" class="contact-form">
              <div class="mb-3">
                <input type="text" class="form-control" id="name" placeholder="Your Name" required />
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" id="address" placeholder="Your Address" required />
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" id="email" placeholder="Your Email" required />
              </div>
              <div class="mb-3">
                <input type="tel" class="form-control" id="phone" placeholder="Your Phone Number" />
              </div>
              <div class="mb-3">
                <select class="form-select" id="service" required>
                  <option value="" selected disabled>Select Service</option>
                  <option value="Regular Window Cleaning">Regular Window Cleaning</option>
                  <option value="Fascia Cleaning">Fascia Cleaning</option>
                  <option value="Gutter Emptying">Gutter Emptying</option>
                  <option value="Commercial Cleaning">Commercial Cleaning</option>
                  <option value="Multiple Services">Multiple Services</option>
                </select>
              </div>
              <div class="mb-3">
                <textarea class="form-control" id="message" rows="4" placeholder="Your Message" required></textarea>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

<?php include '../includes/footer.php'; ?>

<?php
$page_title = 'Window Cleaning Tips & Advice | Swindon';
$page_description = 'Window cleaning tips, local guides and advice for homeowners in Swindon and surrounding areas from J E Robb Window Cleaning.';
$page_canonical = 'https://www.jerobb.co.uk/blog/';
include '../includes/header.php';

/**
 * Blog posts array. Add new posts here.
 * Each post needs: title, slug, date, excerpt, image (optional)
 */
$posts = [
    [
        'title'   => 'How Often Should You Have Your Windows Cleaned?',
        'slug'    => 'how-often-should-you-have-your-windows-cleaned',
        'date'    => '2025-02-01',
        'excerpt' => 'Most homeowners wonder how regularly they really need a professional window clean. The answer depends on your location, property type, and personal preference. Here\'s a simple guide.',
    ],
    [
        'title'   => 'Pure Water Window Cleaning: What Is It and Why Does It Work?',
        'slug'    => 'pure-water-window-cleaning-explained',
        'date'    => '2025-01-15',
        'excerpt' => 'You might have heard window cleaners talking about "pure water" systems. Here\'s what it actually means, how it keeps windows cleaner for longer, and why there are no chemicals going down the drain.',
    ],
    [
        'title'   => 'Why Choose a Local Independent Window Cleaner Over a Large Company?',
        'slug'    => 'local-independent-window-cleaner-vs-large-company',
        'date'    => '2025-01-05',
        'excerpt' => 'Big franchise operations might seem convenient, but there are some real advantages to working with a local sole trader: consistency, reliability, and a personal touch that larger firms struggle to offer.',
    ],
];
?>

<!-- Page Header -->
<div class="bg-light border-bottom" style="margin-top: 76px;">
  <div class="container py-4">
    <h1 class="section-title mb-1">Window Cleaning Tips &amp; Advice</h1>
    <p class="text-muted mb-0">Helpful guides for homeowners in Swindon &amp; surrounding areas, from Jack Robb</p>
  </div>
</div>

<!-- Blog Posts -->
<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-4">
        <h2 class="section-title">Latest Posts</h2>
      </div>
    </div>
    <div class="row">
      <?php foreach ($posts as $post): ?>
      <div class="col-md-4 mb-4">
        <div class="service-card h-100 d-flex flex-column">
          <h3><a href="/blog/<?php echo htmlspecialchars($post['slug']); ?>" class="text-decoration-none brand-blue"><?php echo htmlspecialchars($post['title']); ?></a></h3>
          <p class="text-muted small mb-2"><?php echo date('j F Y', strtotime($post['date'])); ?></p>
          <p class="flex-grow-1"><?php echo htmlspecialchars($post['excerpt']); ?></p>
          <a href="/blog/<?php echo htmlspecialchars($post['slug']); ?>" class="btn btn-primary mt-3">Read more</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5 section-dark">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-4">
        <h2 class="section-title text-white">Get a Free Quote</h2>
        <p class="section-subtitle" style="color: rgba(255,255,255,0.6);">I cover Swindon, Old Town, Wichelstowe, Highworth, Wroughton, Royal Wootton Bassett and more across Wiltshire</p>
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

          <a href="https://wa.me/447442249440?text=Hi%20Jack,%20I'd%20like%20a%20quote%20for%20window%20cleaning"
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
          <input type="hidden" id="email" name="email" value="" />
          <input type="hidden" id="message" name="message" value="Enquiry from blog index" />
          <div class="mb-3">
            <label for="name" class="visually-hidden">Your Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required />
          </div>
          <div class="mb-3">
            <label for="address" class="visually-hidden">Your Postcode</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Your Postcode" required />
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

<?php
$page_title = 'Window Cleaning Tips & Advice | Swindon';
$page_description = 'Window cleaning tips, local guides and advice for homeowners in Swindon and surrounding areas from JE Robb Window Cleaning.';
$page_canonical = 'https://www.jerobb.co.uk/blog/';
include '../includes/header.php';

/**
 * Blog posts array — add new posts here.
 * Each post needs: title, slug, date, excerpt, image (optional)
 */
$posts = [
    [
        'title'   => 'How Often Should You Have Your Windows Cleaned?',
        'slug'    => 'how-often-should-you-have-your-windows-cleaned',
        'date'    => '2025-02-01',
        'excerpt' => 'Most homeowners wonder how regularly they really need a professional window clean. The answer depends on your location, property type, and personal preference — here\'s a simple guide.',
    ],
    [
        'title'   => 'Pure Water Window Cleaning — What Is It and Why Does It Work?',
        'slug'    => 'pure-water-window-cleaning-explained',
        'date'    => '2025-01-15',
        'excerpt' => 'You might have heard window cleaners talking about "pure water" systems. Here\'s what it actually means, why it leaves windows streak-free, and why it\'s better for your home and the environment.',
    ],
    [
        'title'   => 'Why Choose a Local Independent Window Cleaner Over a Large Company?',
        'slug'    => 'local-independent-window-cleaner-vs-large-company',
        'date'    => '2025-01-05',
        'excerpt' => 'Big franchise operations might seem convenient, but there are some real advantages to working with a local sole trader — consistency, reliability, and a personal touch that larger firms struggle to offer.',
    ],
];
?>

    <!-- Blog Hero -->
    <section class="py-5 bg-brand-blue text-white" style="margin-top: 90px;">
      <div class="container text-center py-4">
        <h1 class="text-white">Window Cleaning Tips &amp; Advice</h1>
        <p class="lead">Helpful guides for homeowners in Swindon &amp; surrounding areas</p>
      </div>
    </section>

    <!-- Blog Posts -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <?php foreach ($posts as $post): ?>
          <div class="col-md-4 mb-4">
            <div class="service-card h-100 d-flex flex-column">
              <h3><a href="/blog/<?php echo htmlspecialchars($post['slug']); ?>.php" class="text-decoration-none brand-blue"><?php echo htmlspecialchars($post['title']); ?></a></h3>
              <p class="text-muted small mb-2"><?php echo date('j F Y', strtotime($post['date'])); ?></p>
              <p class="flex-grow-1"><?php echo htmlspecialchars($post['excerpt']); ?></p>
              <a href="/blog/<?php echo htmlspecialchars($post['slug']); ?>.php" class="btn btn-primary mt-3">Read more</a>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="py-5 bg-light">
      <div class="container text-center">
        <h2 class="section-title">Ready for sparkling clean windows?</h2>
        <p class="section-subtitle">Covering Swindon, Royal Wootton Bassett, Highworth, Wroughton and more.</p>
        <a href="/#contact" class="btn btn-primary btn-lg">Get a Free Quote</a>
      </div>
    </section>

<?php include '../includes/footer.php'; ?>

<?php
/**
 * SERVICES GRID INCLUDE
 *
 * Used across all /areas/[slug].php pages to render the services section.
 * Reduces duplication and makes adding/changing services a one-file edit.
 *
 * USAGE:
 *   $area_name = 'Old Town';   // set BEFORE the include
 *   include '../includes/services.php';
 */

// Fallback if $area_name wasn't set on the parent page
$area_name = isset($area_name) ? $area_name : 'your area';
$area_safe = htmlspecialchars($area_name);
?>

<section id="services" class="py-5 section-dark">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-5">
        <h2 class="section-title text-white">What I Clean in <?= $area_safe ?></h2>
      </div>
    </div>
    <div class="row g-3">
      <div class="col-sm-6 col-lg-3">
        <div class="service-card-overlay">
          <img src="/assets/images/clean-domestic-window.webp" alt="Window cleaning <?= $area_safe ?>" class="service-card-overlay-img" />
          <div class="service-card-overlay-title">Window Cleaning</div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="service-card-overlay">
          <img src="/assets/images/clean-fascia-domestic.webp" alt="Fascia cleaning <?= $area_safe ?>" class="service-card-overlay-img" />
          <div class="service-card-overlay-title">Fascia &amp; Soffit Cleaning</div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="service-card-overlay">
          <img src="/assets/images/gutter-empty.webp" alt="Gutter emptying <?= $area_safe ?>" class="service-card-overlay-img" style="object-position: center 80%;" />
          <div class="service-card-overlay-title">Gutter Emptying</div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="service-card-overlay">
          <img src="/assets/images/greenhouse-full.webp" alt="Conservatory and greenhouse cleaning <?= $area_safe ?>" class="service-card-overlay-img" />
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
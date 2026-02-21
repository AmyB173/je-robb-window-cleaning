<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo isset($page_title) ? htmlspecialchars($page_title) . ' | JE Robb Window Cleaning' : 'JE Robb | Professional Window Cleaning Swindon'; ?></title>
    <meta name="description" content="<?php echo isset($page_description) ? htmlspecialchars($page_description) : 'Trustworthy, local window cleaner offering regular window cleans, fascia cleaning and gutter emptying in Swindon and surrounding areas.'; ?>" />
    <?php if (isset($page_canonical)): ?>
    <link rel="canonical" href="<?php echo htmlspecialchars($page_canonical); ?>" />
    <?php endif; ?>
    <link rel="icon" type="image/x-icon" href="/assets/images/logo.png" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Font Awesome 6 (Free) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/style.css" />
  </head>

  <body>
    <!-- Navigation Bar (Sticky) -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top p-0">
      <div class="container">
        <div class="row d-flex flex-row">
          <div class="col d-flex flex-row align-items-center justify-content-center">
            <a class="navbar-brand title" href="/">
              <img src="/assets/images/logo.png" height="60" class="p-1" alt="JE Robb Window Cleaning logo" />
            </a>
            <p class="nav-text-responsive brand-blue text-center pt-2 mb-0 fw-bold" style="font-family:'League Spartan',sans-serif;">
              JE ROBB WINDOW CLEANING
            </p>
          </div>
        </div>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#pricing">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#about-me-section">About Jack</a>
            </li>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="areasDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Areas
              </a>
              <ul class="dropdown-menu" aria-labelledby="areasDropdown">
                <li><a class="dropdown-item" href="/areas/royal-wootton-bassett.php">Royal Wootton Bassett</a></li>
                <li><a class="dropdown-item" href="/areas/wroughton.php">Wroughton</a></li>
                <li><a class="dropdown-item" href="/areas/highworth.php">Highworth</a></li>
                <li><a class="dropdown-item" href="/areas/purton.php">Purton</a></li>
                <li><a class="dropdown-item" href="/areas/cricklade.php">Cricklade</a></li>
                <li><a class="dropdown-item" href="/areas/lydiard-millicent.php">Lydiard Millicent</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/blog/">Blog</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link btn btn-primary nav-cta" href="/#contact">Get a Quote</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
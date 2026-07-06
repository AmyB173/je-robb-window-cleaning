<?php
/**
 * V2 SERVICES SECTION INCLUDE
 *
 * Shared "alternating image + text" services section for pages using the
 * v2 redesign (homepage, and area pages once converted). Renders one
 * .v2-service-row per entry in $v2_services, alternating left/right.
 *
 * USAGE (set these BEFORE including):
 *   $v2_services         = [ ['img'=>'/assets/images/x.webp','alt'=>'...','label'=>'...','desc'=>'...'], ... ];
 *   $v2_services_heading = 'Window Cleaning Services in Wroughton';   // required
 *   $v2_services_eyebrow = 'What I Do';                               // optional, has default
 *   $v2_services_lede    = 'Every home gets a personalised quote...'; // optional, has default
 *   $v2_services_style   = 'background: var(--v2-soft-blue);';        // optional, has default
 *   include '../includes/v2-services.php';
 *
 * Each $v2_services entry also accepts optional 'imgpos' (CSS object-position)
 * and 'imgnote' (renders as an HTML comment above the image, for TODO flags).
 */

$v2_services_eyebrow = isset($v2_services_eyebrow) ? $v2_services_eyebrow : 'What I Do';
$v2_services_lede = isset($v2_services_lede) ? $v2_services_lede : 'Every home gets a personalised quote based on the property and what it needs.';
$v2_services_style = isset($v2_services_style) ? $v2_services_style : 'background: var(--bg-section-light);';
?>

<section class="v2-section" id="services" style="<?= htmlspecialchars($v2_services_style) ?>">
  <div class="container">
    <div class="text-center v2-section-head mx-auto mb-5 v2-reveal">
      <p class="v2-eyebrow on-light"><?= $v2_services_eyebrow ?></p>
      <h2 class="v2-heading"><?= $v2_services_heading ?></h2>
      <p class="v2-lede"><?= $v2_services_lede ?></p>
    </div>

    <?php foreach ($v2_services as $i => $s): ?>
      <div class="v2-service-row<?= $i % 2 === 1 ? ' is-reverse' : '' ?> v2-reveal">
        <div class="v2-service-image">
          <?php if (!empty($s['imgnote'])): ?><!-- <?= $s['imgnote'] ?> --><?php endif; ?>
          <img src="<?= $s['img'] ?>" alt="<?= $s['alt'] ?>" loading="lazy" decoding="async"<?= !empty($s['imgpos']) ? ' style="object-position: ' . htmlspecialchars($s['imgpos']) . ';"' : '' ?> />
        </div>
        <div class="v2-service-text">
          <span class="v2-service-num"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></span>
          <h3 class="v2-service-heading"><?= $s['label'] ?></h3>
          <p class="v2-service-desc"><?= $s['desc'] ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

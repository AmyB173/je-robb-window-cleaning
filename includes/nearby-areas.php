<?php
/**
 * NEARBY AREAS INCLUDE
 *
 * Renders the "Nearby Areas I Cover" section on area pages. Automatically
 * picks the closest 6 towns to the current page (using lat/lng from
 * areas-config.php) and renders them as links if they have their own area
 * page, or as greyed-out pills if not.
 *
 * Also renders a "can't see your area" CTA at the bottom directing
 * visitors to message Jack if their town isn't listed.
 *
 * USAGE:
 *   $area_name = 'Wroughton';   // current page area, must match a key in $ALL_AREAS
 *   include '../includes/nearby-areas.php';
 *
 * OPTIONAL:
 *   $nearby_count = 8;          // override default (6) if you want more pills
 *
 * NOTES:
 *   - $area_name must match a key in $ALL_AREAS exactly, or the include
 *     falls back to listing the closest towns to Wroughton (Jack's base).
 *   - The current page is always excluded from its own nearby list.
 */

// Pull in the config that lists every town and their coordinates
require_once __DIR__ . '/areas-config.php';

// Defaults
$area_name = isset($area_name) ? $area_name : 'your area';
$nearby_count = isset($nearby_count) ? (int) $nearby_count : 6;
$area_safe = htmlspecialchars($area_name);

// Find the current area's coordinates (fall back to Wroughton if unknown)
if (isset($ALL_AREAS[$area_name])) {
    $centre = $ALL_AREAS[$area_name];
} else {
    $centre = $ALL_AREAS['Wroughton'];
}

// Build a list of all towns (except the current one), separating pinned from regular
$candidates = [];
$pinned = [];
foreach ($ALL_AREAS as $town => $info) {
    if ($town === $area_name) {
        continue;
    }
    $entry = [
        'name'     => $town,
        'slug'     => isset($info['slug']) ? $info['slug'] : null,
        'distance' => _areas_haversine_miles($centre['lat'], $centre['lng'], $info['lat'], $info['lng']),
    ];
    if (!empty($info['pin'])) {
        $pinned[] = $entry;
    } else {
        $candidates[] = $entry;
    }
}
usort($candidates, function ($a, $b) {
    return $a['distance'] <=> $b['distance'];
});
// Pinned towns always appear first, then closest non-pinned towns fill the rest
$slots_for_nearby = max(0, $nearby_count - count($pinned));
$nearby = array_merge($pinned, array_slice($candidates, 0, $slots_for_nearby));
?>

<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-4">
        <h2 class="section-title">Nearby Areas I Cover</h2>
        <p class="section-subtitle"><?= $area_safe ?> is part of my round across Swindon and the surrounding towns and villages.</p>
      </div>
    </div>
    <div class="row justify-content-center">
      <?php foreach ($nearby as $town): ?>
        <?php $town_safe = htmlspecialchars($town['name']); ?>
        <div class="col-6 col-md-3 mb-3 text-center">
          <?php if ($town['slug']): ?>
            <a href="/areas/<?= htmlspecialchars($town['slug']) ?>" class="btn btn-outline-primary w-100"><?= $town_safe ?></a>
          <?php else: ?>
            <span class="btn btn-outline-secondary w-100" style="pointer-events:none;"><?= $town_safe ?></span>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Can't see your area? -->
    <div class="row justify-content-center mt-4">
      <div class="col-lg-8 text-center">
        <p class="mb-3" style="color: #555; font-size: 1rem;">
          Can't see your area? Get in touch with Jack. If you're in Swindon or Wiltshire, there's a good chance he covers it.
        </p>
        <a href="https://wa.me/447442249440?text=Hi%20Jack,%20I'd%20like%20to%20check%20if%20you%20cover%20my%20area%20for%20window%20cleaning"
           target="_blank" rel="noopener"
           class="btn btn-outline-primary rounded-pill px-4">
          <i class="fab fa-whatsapp me-1"></i>Message Jack to Check
        </a>
      </div>
    </div>
  </div>
</section>
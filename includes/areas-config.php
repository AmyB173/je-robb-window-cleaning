<?php
/**
 * AREAS CONFIG
 *
 * Single source of truth for towns Jack covers (or could plausibly cover).
 * Used by:
 *   - includes/nearby-areas.php (auto-pick closest towns per area page)
 *   - includes/header.php       (Areas dropdown nav)
 *   - index.php                 (homepage Areas section)
 *
 * USAGE:
 *
 * To add a new town that Jack covers:
 *   Add an entry to $ALL_AREAS with name, lat, lng, and (if it has its
 *   own page) a slug. That's it. Every area page that's within radius
 *   automatically picks it up. The homepage list updates automatically.
 *
 * To promote a town to having its own area page:
 *   Add the 'slug' key to its entry. It instantly becomes a link
 *   instead of a greyed pill on every page that lists it. The header
 *   dropdown picks it up automatically too.
 *
 * FORMAT:
 *   'Display Name' => [
 *       'lat'  => 51.524125,        // latitude
 *       'lng'  => -1.787932,        // longitude
 *       'slug' => 'wroughton',      // OPTIONAL - only if it has its own page
 *       'pin'  => true,             // OPTIONAL - always include in Nearby Areas regardless of distance
 *   ]
 *
 * REMEMBER:
 *   When you create a new area page, you also need to add the URL to
 *   sitemap.xml. The header nav and homepage Areas section will update
 *   themselves as long as you give the entry a 'slug'.
 */

$ALL_AREAS = [
    // Towns with their own area pages
    'Wroughton' => [
        'lat'  => 51.524125,
        'lng'  => -1.787932,
        'slug' => 'wroughton',
    ],
    'Old Town' => [
        'lat'  => 51.5513339,
        'lng'  => -1.7731746,
        'slug' => 'old-town',
    ],
    'Royal Wootton Bassett' => [
        'lat'  => 51.541395,
        'lng'  => -1.902318,
        'slug' => 'royal-wootton-bassett',
    ],
    'Chiseldon' => [
        'lat'  => 51.513001,
        'lng'  => -1.732646,
        'slug' => 'chiseldon',
    ],

    // Towns Jack covers but without their own page yet
    'Swindon' => [
        'lat' => 51.5615743,
        'lng' => -1.7853694,
        'pin' => true,
    ],
    'Stratton St Margaret' => [
        'lat' => 51.585053,
        'lng' => -1.753417,
    ],
    'Wanborough' => [
        'lat' => 51.5455291,
        'lng' => -1.7017162,
    ],
    'Highworth' => [
        'lat' => 51.6305761,
        'lng' => -1.7120315,
    ],
    'Cricklade' => [
        'lat' => 51.6380709,
        'lng' => -1.856351,
    ],
    'Purton' => [
        'lat' => 51.586264,
        'lng' => -1.8795659,
    ],
    'Lydiard Millicent' => [
        'lat' => 51.572372,
        'lng' => -1.862583,
    ],
    'Lyneham' => [
        'lat' => 51.514023,
        'lng' => -1.97945,
    ],
    'Aldbourne' => [
        'lat' => 51.479233,
        'lng' => -1.62053,
    ],
    'Marlborough' => [
        'lat' => 51.420073,
        'lng' => -1.727062,
    ],
    'Shrivenham' => [
        'lat' => 51.5976175,
        'lng' => -1.6582489,
    ],
    'Fairford' => [
        'lat' => 51.7075369,
        'lng' => -1.785135,
    ],
    'Lechlade' => [
        'lat' => 51.6997759,
        'lng' => -1.6914523,
    ],
];

/**
 * Returns areas that have their own page, sorted alphabetically by name.
 * Used by the header nav dropdown.
 *
 * Each item is ['name' => ..., 'slug' => ...]
 */
function get_areas_with_pages_alphabetical() {
    global $ALL_AREAS;
    $out = [];
    foreach ($ALL_AREAS as $name => $info) {
        if (!empty($info['slug'])) {
            $out[] = ['name' => $name, 'slug' => $info['slug']];
        }
    }
    usort($out, function ($a, $b) {
        return strcmp($a['name'], $b['name']);
    });
    return $out;
}

/**
 * Returns ALL areas sorted by distance from Swindon (Swindon first,
 * then nearest outward). Used by the homepage Areas section.
 *
 * Each item is ['name' => ..., 'slug' => ...] where slug is null if
 * the town doesn't have its own page.
 */
function get_all_areas_by_distance_from_swindon() {
    global $ALL_AREAS;
    $swindon = $ALL_AREAS['Swindon'];
    $out = [];
    foreach ($ALL_AREAS as $name => $info) {
        $distance = _areas_haversine_miles(
            $swindon['lat'], $swindon['lng'],
            $info['lat'], $info['lng']
        );
        $out[] = [
            'name'     => $name,
            'slug'     => isset($info['slug']) ? $info['slug'] : null,
            'distance' => $distance,
        ];
    }
    usort($out, function ($a, $b) {
        return $a['distance'] <=> $b['distance'];
    });
    return $out;
}

/**
 * Haversine formula - straight-line distance in miles between two lat/lng pairs.
 * Internal helper, also used by includes/nearby-areas.php.
 */
function _areas_haversine_miles($lat1, $lng1, $lat2, $lng2) {
    $earth_radius_miles = 3958.8;
    $lat1_rad = deg2rad($lat1);
    $lat2_rad = deg2rad($lat2);
    $dlat = deg2rad($lat2 - $lat1);
    $dlng = deg2rad($lng2 - $lng1);
    $a = sin($dlat / 2) ** 2 + cos($lat1_rad) * cos($lat2_rad) * sin($dlng / 2) ** 2;
    $c = 2 * asin(sqrt($a));
    return $earth_radius_miles * $c;
}
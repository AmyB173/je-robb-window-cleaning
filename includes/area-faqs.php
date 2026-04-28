<?php
/**
 * MASTER FAQ INCLUDE
 *
 * Used across all /areas/[slug].php pages so 80% of FAQ content is centrally
 * maintained and consistent. Reduces duplicate-content risk across area pages.
 *
 * USAGE:
 *   $area_name = 'Old Town';   // set BEFORE the include
 *   include '../includes/area-faqs.php';
 *
 * Each area page should add ONE town-specific FAQ as a 9th accordion item
 * AFTER this include, plus its own small JSON-LD schema for that one Q.
 */

// Fallback if $area_name wasn't set on the parent page
$area_name = isset($area_name) ? $area_name : 'your area';
$area_safe = htmlspecialchars($area_name);
?>

<div class="accordion" id="faqAccordion">

  <div class="accordion-item border-0 mb-3 rounded-3 shadow-sm">
    <h3 class="accordion-header">
      <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faqMaster1" aria-expanded="true" aria-controls="faqMaster1">
        How much does window cleaning cost?
      </button>
    </h3>
    <div id="faqMaster1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
      <div class="accordion-body text-muted">
        Every property is different, so I quote based on the size of your home, the number of windows and access. There's no generalised pricing because each property is so different. Message me with your address or postcode and I'll get back to you with a quote, usually within a few hours.
      </div>
    </div>
  </div>

  <div class="accordion-item border-0 mb-3 rounded-3 shadow-sm">
    <h3 class="accordion-header">
      <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faqMaster2" aria-expanded="false" aria-controls="faqMaster2">
        How often should I get my windows cleaned?
      </button>
    </h3>
    <div id="faqMaster2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
      <div class="accordion-body text-muted">
        Most of my customers go for an 8-weekly clean. That's the rhythm that keeps on top of dirt before it has a chance to bake onto frames and seals. Properties on busier roads or with overhanging trees can sometimes benefit from more frequent cleans - happy to chat through what works best for your home.
      </div>
    </div>
  </div>

  <div class="accordion-item border-0 mb-3 rounded-3 shadow-sm">
    <h3 class="accordion-header">
      <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faqMaster3" aria-expanded="false" aria-controls="faqMaster3">
        Do I need to be home when you clean?
      </button>
    </h3>
    <div id="faqMaster3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
      <div class="accordion-body text-muted">
        Not usually. I message the day before so you know I'm coming. As long as I can access the windows (side gates unlocked, cars moved if needed), I'll crack on while you're out and let you know when I'm done. Payment is handled online so there's no need for cash on the day.
      </div>
    </div>
  </div>

  <div class="accordion-item border-0 mb-3 rounded-3 shadow-sm">
    <h3 class="accordion-header">
      <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faqMaster4" aria-expanded="false" aria-controls="faqMaster4">
        What if it rains after my windows are cleaned?
      </button>
    </h3>
    <div id="faqMaster4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
      <div class="accordion-body text-muted">
        Rain after a pure water clean is fine. There's no detergent or chemical residue on the glass, so rainwater just runs off without leaving marks. And in the unlikely event you're not happy with anything after a clean, I'll come back and sort it at no extra charge.
      </div>
    </div>
  </div>

  <div class="accordion-item border-0 mb-3 rounded-3 shadow-sm">
    <h3 class="accordion-header">
      <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faqMaster5" aria-expanded="false" aria-controls="faqMaster5">
        What if I'm not happy with the clean?
      </button>
    </h3>
    <div id="faqMaster5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
      <div class="accordion-body text-muted">
        Let me know within 24 hours and I'll come back to sort it without question. In practice it almost never comes up, because I'm checking my own work as I go. But the guarantee's there.
      </div>
    </div>
  </div>

  <div class="accordion-item border-0 mb-3 rounded-3 shadow-sm">
    <h3 class="accordion-header">
      <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faqMaster6" aria-expanded="false" aria-controls="faqMaster6">
        How do I pay?
      </button>
    </h3>
    <div id="faqMaster6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
      <div class="accordion-body text-muted">
        After every clean I'll send you a payment link by WhatsApp, processed securely through Stripe. You can pay by card or Apple/Google Pay in a couple of taps. Payment is due within 48 hours of the clean - no need for cash on the day.
      </div>
    </div>
  </div>

  <div class="accordion-item border-0 mb-3 rounded-3 shadow-sm">
    <h3 class="accordion-header">
      <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faqMaster7" aria-expanded="false" aria-controls="faqMaster7">
        What's included in a window clean?
      </button>
    </h3>
    <div id="faqMaster7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
      <div class="accordion-body text-muted">
        Every clean includes the glass, frames and sills - not just the glass. I use a pure water fed pole system, which means streak-free results with no chemicals or detergents, and most windows can be reached from the ground without ladders against your property. Fascia cleaning, gutter emptying and conservatory roofs can be added as extras when you book your quote.
      </div>
    </div>
  </div>

  <div class="accordion-item border-0 mb-3 rounded-3 shadow-sm">
    <h3 class="accordion-header">
      <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faqMaster8" aria-expanded="false" aria-controls="faqMaster8">
        How do I get a quote?
      </button>
    </h3>
    <div id="faqMaster8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
      <div class="accordion-body text-muted">
        WhatsApp is the quickest - drop me a message with your address or postcode and a rough idea of what you'd like cleaning, and I'll come back to you with a price, usually within a few hours. There's no obligation and no hard sell. You can also use the contact form on this page or give me a ring on 07442 249440.
      </div>
    </div>
  </div>

</div>

<!-- FAQ Schema for the master FAQ set -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How much does window cleaning cost?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Every property is different, so Jack quotes based on the size of your home, the number of windows and access. There is no generalised pricing because each property is so different. Message Jack with your address or postcode and he'll get back to you with a quote, usually within a few hours."
      }
    },
    {
      "@type": "Question",
      "name": "How often should I get my windows cleaned?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Most of Jack's customers go for an 8-weekly clean. That rhythm keeps on top of dirt before it has a chance to bake onto frames and seals. Properties on busier roads or with overhanging trees can sometimes benefit from more frequent cleans."
      }
    },
    {
      "@type": "Question",
      "name": "Do I need to be home when Jack cleans?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Not usually. Jack messages the day before so you know he's coming. As long as he can access the windows, he'll clean while you're out and let you know when he's done. Payment is handled online so there's no need for cash on the day."
      }
    },
    {
      "@type": "Question",
      "name": "What if it rains after my windows are cleaned?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Rain after a pure water clean is fine. There is no detergent or chemical residue on the glass, so rainwater just runs off without leaving marks. And in the unlikely event you are not happy with anything after a clean, Jack will come back and sort it at no extra charge."
      }
    },
    {
      "@type": "Question",
      "name": "What if I'm not happy with the clean?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Let Jack know within 24 hours and he will come back to sort it without question. In practice it almost never comes up, because Jack is checking his own work as he goes. But the guarantee is there."
      }
    },
    {
      "@type": "Question",
      "name": "How do I pay?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "After every clean Jack sends a payment link by WhatsApp, processed securely through Stripe. You can pay by card or Apple/Google Pay in a couple of taps. Payment is due within 48 hours of the clean."
      }
    },
    {
      "@type": "Question",
      "name": "What's included in a window clean?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Every clean includes the glass, frames and sills - not just the glass. Jack uses a pure water fed pole system, which means streak-free results with no chemicals or detergents, and most windows can be reached from the ground without ladders against your property. Fascia cleaning, gutter emptying and conservatory roofs can be added as extras."
      }
    },
    {
      "@type": "Question",
      "name": "How do I get a quote?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "WhatsApp is the quickest - drop a message with your address or postcode and a rough idea of what you'd like cleaning, and Jack will come back to you with a price, usually within a few hours. There is no obligation. You can also use the contact form or call 07442 249440."
      }
    }
  ]
}
</script>
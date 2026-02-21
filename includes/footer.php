<!-- Footer -->
<footer class="footer py-4">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <p class="mb-1">&copy; <?php echo date('Y'); ?> JE Robb Window Cleaning. All rights reserved.</p>
        <p class="mb-0 small">Professional window cleaning in Swindon &amp; surrounding areas.</p>
      </div>
      <div class="col-md-6 text-end">
        <div class="footer-links">
          <a href="/privacy-policy.php">Privacy Policy</a>
          <a href="/terms.php">Terms of Service</a>
          <a href="/sitemap.xml">Sitemap</a>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Floating WhatsApp Button -->
<div class="whatsapp-float">
  <a
    href="https://wa.me/447442249440?text=Hi%20Jack,%20I'd%20like%20to%20enquire%20about%20a%20window%20cleaning%20quote"
    target="_blank"
    rel="noopener"
    class="whatsapp-float-button"
    aria-label="Chat on WhatsApp">
    <i class="fab fa-whatsapp"></i>
  </a>
</div>

<!-- Sticky Mobile CTA -->
<div class="sticky-cta d-md-none">
  <a href="https://wa.me/447442249440?text=Hi%20Jack,%20I'd%20like%20to%20enquire%20about%20a%20window%20cleaning%20quote"
    target="_blank" rel="noopener" class="sticky-cta-btn">
    <i class="fab fa-whatsapp me-2"></i>Message Jack for a Free Quote
  </a>
</div>

<!-- Bootstrap JS with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- EmailJS -->
<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

<!-- Custom JavaScript -->
<script>
  // Initialize EmailJS
  (function() {
    emailjs.init("XMeb_yDYsXLWCfRL5");
  })();

  // Contact form submission (only runs if form is on the page)
  const contactForm = document.getElementById("contactForm");
  if (contactForm) {
    contactForm.addEventListener("submit", function(event) {
      event.preventDefault();

      const templateParams = {
        name: document.getElementById("name").value,
        address: document.getElementById("address").value,
        email: document.getElementById("email").value,
        phone: document.getElementById("phone").value,
        service: document.getElementById("service").value,
        message: document.getElementById("message").value,
      };

      emailjs
        .send("service_eupgkay", "template_vo46vz7", templateParams)
        .then(
          function() {
            alert("Thank you! Your message has been sent.");
            contactForm.reset();
          },
          function(error) {
            console.log("Failed to send email:", error);
            alert("Sorry, there was an error sending your message. Please try again later.");
          }
        );
    });
  }

  // Smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function(e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute("href"));
      if (target) {
        window.scrollTo({
          top: target.offsetTop - 70,
          behavior: "smooth",
        });
      }
    });
  });

  // Navbar scroll effect
  window.addEventListener("scroll", function() {
    const navbar = document.querySelector(".navbar");
    if (window.scrollY > 50) {
      navbar.classList.add("navbar-scrolled");
    } else {
      navbar.classList.remove("navbar-scrolled");
    }
  });

  // Rotating testimonials (only runs if carousel is on the page)
  function rotateSlides(selector, interval) {
    const slides = document.querySelectorAll(selector);
    if (!slides.length) return;
    let current = 0;
    setInterval(() => {
      slides[current].classList.remove("active");
      current = (current + 1) % slides.length;
      slides[current].classList.add("active");
    }, interval);
  }

  document.addEventListener("DOMContentLoaded", function() {
    rotateSlides(".testimonial-slide", 6000);
    rotateSlides(".snippet-slide", 5000);
  });

  document.addEventListener("DOMContentLoaded", rotateTestimonials);
</script>

</body>

</html>
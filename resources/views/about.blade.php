@include('include.header', ['abact'=>'active'])
<main class="main">
  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container">
      <h1>ABOUT US</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="#">Home</a></li>
          <li class="current">ABOUT US</li>
        </ol>
      </nav>
    </div>
    </div><!-- End Page Title -->
    <!-- About Section -->
    <section id="about" class="about section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 align-items-center justify-content-between">
          <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
            <span class="about-meta">MORE ABOUT US</span>
            <h2 class="about-title">About ZAKM Services</h2>
            <p class="about-description">ZAKM Services redefines GST billing with its innovative and customizable software designed to empower businesses of all sizes. Built with simplicity and adaptability at its core, ZAKM offers a seamless experience to manage your billing, invoicing, and tax compliance effortlessly.
            </p>
            <div class="row feature-list-wrapper">
              {{-- <div class="col-md-6">
                <ul class="feature-list">
                  <li><i class="bi bi-check-circle-fill"></i> Lorem ipsum dolor sit amet</li>
                  <li><i class="bi bi-check-circle-fill"></i> Consectetur adipiscing elit</li>
                  <li><i class="bi bi-check-circle-fill"></i> Sed do eiusmod tempor</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="feature-list">
                  <li><i class="bi bi-check-circle-fill"></i> Incididunt ut labore et</li>
                  <li><i class="bi bi-check-circle-fill"></i> Dolore magna aliqua</li>
                  <li><i class="bi bi-check-circle-fill"></i> Ut enim ad minim veniam</li>
                </ul>
              </div> --}}
              <h2 class="about-title">Why Choose ZAKM?</h2>
              <p class="about-description">ZAKM Services redefines GST billing
                Editable Bills: Say goodbye to rigid systems—ZAKM allows you to update and modify bills instantly for error-free transactions.<br><br>
                Effortless Usability: No steep learning curves! ZAKM’s intuitive design ensures that even first-time users can navigate with ease.<br><br>
                Customizable to Your Needs: Tailor the software to align with your business workflow and specific requirements.
              </p>
            </div>
            <div class="info-wrapper">
              <div class="row gy-4">
                <div class="col-lg-8">
                  <div class="profile d-flex align-items-center gap-3">
                    <div>
                      <div class="contact-info d-flex align-items-center gap-2">
                        <i class="bi bi-telephone-fill"></i>
                        <div>
                          <p class="contact-label">Call us anytime</p>
                          <p class="contact-number">+91  9897061740</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
            <div class="image-wrapper">
              <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                <img src="assets/img/about-5.webp" alt="Business Meeting" class="img-fluid main-image rounded-4">
                <img src="assets/img/about-2.webp" alt="Team Discussion" class="img-fluid small-image rounded-4">
              </div>
              <div class="experience-badge floating">
                <h3>17+ <span>Years</span></h3>
                <p>of experience in IT industry</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /About Section -->
    {{-- <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->
        <div class="container">
          <div class="row g-5">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="Img">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
              </div><!-- End testimonial item -->
              <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="Img">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
                </div><!-- End testimonial item -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                  <div class="testimonial-item">
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="Img">
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                  </div><!-- End testimonial item -->
                  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="testimonial-item">
                      <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="Img">
                      <h3>Matt Brandon</h3>
                      <h4>Freelancer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                    </div>
                    </div><!-- End testimonial item -->
                  </div>
                </div>
                </section><!-- /Testimonials Section --> --}}
                <hr>
              </main>
              @include('include.footer')
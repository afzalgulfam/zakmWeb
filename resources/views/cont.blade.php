@include('include.header', ['coact'=>'active'])
<main class="main">
  <!-- Page Title -->
  {{-- <div class="page-title light-background">
    <div class="container">
      <h1>Pricing</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="#">Home</a></li>
          <li class="current">Pricing</li>
        </ol>
      </nav>
    </div>
  </div> --}}
  <!-- End Page Title -->
  <br><br><br><br>
  <!-- Call To Action 2 Section -->
  <section id="call-to-action-2" class="call-to-action-2 section dark-background">
    <div class="container">
      <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-xl-10">
          <div class="text-center">
            <h3>Call To Action</h3>
            <p>Revolutionize Your Billing Process Today! Effortless Management, Anywhere, Anytime. Power-Packed Features for Your Business Success!</p>
            <a class="cta-btn" id="mobileButton" href="tel:+91 99588 86745">Call To Action</a>
          </div>
        </div>
      </div>
    </div>
    </section><!-- /Call To Action 2 Section -->
    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Contact Us Today for Tailored Billing Software Pricing and Solutions!</p>
        </div><!-- End Section Title -->
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row g-4 g-lg-5">
            <div class="col-lg-5">
              <div class="info-box" data-aos="fade-up" data-aos-delay="200">
                <h3>Contact Info</h3>
                <p>Get in Touch for Detailed Pricing and Billing Software Assistance!</p>
                <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-box">
                    <i class="bi bi-geo-alt"></i>
                  </div>
                  <div class="content">
                    <h4>Our Location</h4>
                    <p>No 264 Street No-1 Right Side<br>
                      Building Khureji Khas, <br>
                    Krishna Nagar Delhi -110051</p>
                  </div>
                </div>
                <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                  <div class="icon-box">
                    <i class="bi bi-telephone"></i>
                  </div>
                  <div class="content">
                    <h4>Phone Number</h4>
                    <p>+91 9897061740</p>
                  </div>
                </div>
                <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                  <div class="icon-box">
                    <i class="bi bi-envelope"></i>
                  </div>
                  <div class="content">
                    <h4>Email Address</h4>
                    <!--<p>zakm.services@gmail.com</p>-->
                    <p>support@zakm.in</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
                <h3>Get In Touch</h3>
                <p>Get in Touch for Custom Billing Software Plans and Pricing!</p>
                <form method='post' action='admin/mail/msgsimplem'>
                  <div class="control-group">
                    <input type="text" class="form-control p-4" name="nam" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="control-group">
                    <input type="number" class="form-control p-4" name="mn" id="MobileNumber" placeholder="Your Mobile Number" required="required" data-validation-required-message="Please enter your Mobile Number" />
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="control-group">
                    <input type="email" class="form-control p-4" name="eml" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="control-group">
                    <textarea class="form-control p-4" rows="6" name="msg" id="Message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div>
                    <button class="btn btn-info py-3 px-5" type="submit" name="submit">Send Message</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        </section><!-- /Contact Section -->
      </main>
      @include('include.footer')
@include('include.header', ['pact'=>'active'])
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
  <!-- Pricing Section -->
  <section id="pricing" class="pricing section light-background pt-5">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Pricing</h2>
      <p>Affordable Billing Software: Powerful Features at a Price That Fits Your Budget!</p>
      </div><!-- End Section Title -->
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-4 justify-content-center">
          <!-- Basic Plan -->
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-card">
              <h3>Basic Plan</h3>
              <div class="price">
                {{-- <span class="currency">$</span> --}}
                <span class="amount">Free</span>
                {{-- <span class="period">/ month</span> --}}
              </div>
              <p class="description">Basic Plan: Essential Billing Features at an Unbeatable Price!</p>
              <a href="admin/mdata" class="btn btn-primary">
                Download Free
                {{-- <i class="bi bi-arrow-right"></i> --}}
              </a><br>
              <h4>Featured Included:</h4>
              <ul class="features-list">
                <li><i class="bi bi-check-circle-fill"></i>Create One Company</li>
                <li><i class="bi bi-check-circle-fill"></i>Manage Stock</li>
                <li><i class="bi bi-check-circle-fill"></i>Set Multiple price for items</li>
                <li><i class="bi bi-check-circle-fill"></i>Create Quotation</li>
                <li><i class="bi bi-check-circle-fill"></i>Last Price Reminder for Customer</li>
                <li><i class="bi bi-check-circle-fill"></i>Sales Summary (Profit & Loss)</li>
                <li><i class="bi bi-check-circle-fill"></i>Hide fileds that is not required</li>
                <li><i class="bi bi-check-circle-fill"></i>Sale Return</li>
                <li><i class="bi bi-check-circle-fill"></i>Generate GST report like GSTR-1, GSTR-3B</li>
                <li><i class="bi bi-check-circle-fill"></i>Print Multi size invoices</li>
                <li><i class="bi bi-check-circle-fill"></i>Custom invoice as per requirement</li>
                <li><i class="bi bi-check-circle-fill"></i>Manage Customer and Supplier data</li>
                <li><i class="bi bi-check-circle-fill"></i>Set Credit Limit for Customer</li>
                <li><i class="bi bi-check-circle-fill"></i>Customer/Supplier Ledger</li>
              </ul>
              {{-- <a href="">
                <center><span style="font-size: 14px;">Buy Key <i class="bi bi-arrow-right"></i></span></center>
              </a> --}}
            </div>
          </div>
          <!-- Standard Plan -->
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-card popular">
              <div class="popular-badge">Most Popular</div>
              <h3>Standard Plan</h3>
              <div class="price">
                <span class="currency">₹</span>
                <span class="amount">1999</span>
                <span class="period"><strike>4000</strike>/ Anum</span>
              </div>
              <p class="description"> Standard Plan: Advanced Billing Tools for Growing Businesses at a Great Value!</p>
              <a href="{{ url('admin/pdata.php') }}?plan=Standard" class="btn btn-light">
                Buy Key
                <i class="bi bi-arrow-right"></i>
              </a><br>
              <h4>Featured Included:</h4>
              <ul class="features-list">
                <li><i class="bi bi-check-circle-fill"></i>Create four Companies</li>
                <li><i class="bi bi-check-circle-fill"></i>Manage Stock</li>
                <li><i class="bi bi-check-circle-fill"></i>Set Multiple price for items</li>
                <li><i class="bi bi-check-circle-fill"></i>Create Quotation</li>
                <li><i class="bi bi-check-circle-fill"></i>Generate eWay Bill 15 Per month</li>
                <li><i class="bi bi-check-circle-fill"></i>Last Price Reminder for Customer</li>
                <li><i class="bi bi-check-circle-fill"></i>Sales Summary (Profit & Loss)</li>
                <li><i class="bi bi-check-circle-fill"></i>Hide fileds that is not required</li>
                <li><i class="bi bi-check-circle-fill"></i>Sale Return</li>
                <li><i class="bi bi-check-circle-fill"></i>Generate GST report like GSTR-1, GSTR-3B</li>
                <li><i class="bi bi-check-circle-fill"></i>Print Multi size invoices</li>
                <li><i class="bi bi-check-circle-fill"></i>Custom invoice as per requirement</li>
                <li><i class="bi bi-check-circle-fill"></i>Manage Customer and Supplier data</li>
                <li><i class="bi bi-check-circle-fill"></i>Set Credit Limit for Customer</li>
                <li><i class="bi bi-check-circle-fill"></i>Customer/Supplier Ledger</li>
              </ul>
            </div>
          </div>
          <!-- Premium Plan -->
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="pricing-card">
              <h3>Premium Plan</h3>
              <div class="price">
                <span class="currency">₹</span>
                <span class="amount">2499</span>
                <span class="period"><strike>5000</strike>/ Anum</span>
              </div>
              <p class="description"> Premium Plan: All-Inclusive Billing Solutions for Ultimate Efficiency and Growth!</p>
              <a href="{{ url('admin/pdata.php') }}?plan=Premium" class="btn btn-primary">
                Buy Key
                <i class="bi bi-arrow-right"></i>
              </a><br>
              <h4>Featured Included:</h4>
              <ul class="features-list">
                <li><i class="bi bi-check-circle-fill"></i>Create Six Companies</li>
                <li><i class="bi bi-check-circle-fill"></i>Manage Stock</li>
                <li><i class="bi bi-check-circle-fill"></i>Set Multiple price for items</li>
                <li><i class="bi bi-check-circle-fill"></i>Create Quotation</li>
                <li><i class="bi bi-check-circle-fill"></i>Generate eWay Bill 50 Per month</li>
                <li><i class="bi bi-check-circle-fill"></i>Last Price Reminder for Customer</li>
                <li><i class="bi bi-check-circle-fill"></i>Sales Summary (Profit & Loss)</li>
                <li><i class="bi bi-check-circle-fill"></i>Hide fileds that is not required</li>
                <li><i class="bi bi-check-circle-fill"></i>Sale Return</li>
                <li><i class="bi bi-check-circle-fill"></i>Generate GST report like GSTR-1, GSTR-3B</li>
                <li><i class="bi bi-check-circle-fill"></i>Print Multi size invoices</li>
                <li><i class="bi bi-check-circle-fill"></i>Custom invoice as per requirement</li>
                <li><i class="bi bi-check-circle-fill"></i>Manage Customer and Supplier data</li>
                <li><i class="bi bi-check-circle-fill"></i>Set Credit Limit for Customer</li>
                <li><i class="bi bi-check-circle-fill"></i>Customer/Supplier Ledger</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      </section><!-- /Pricing Section -->
    </main>
    @include('include.footer')
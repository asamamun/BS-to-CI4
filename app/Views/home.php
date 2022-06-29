<?= view('partial/header',['home'=>'active']) ?>
  <!-- carousel section -->
  <div class="pt-5 mt-5">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <!-- <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div> -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo base_url(); ?>/assets/images/carausel1.jfif" class="d-block w-100" height="300px" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <!-- <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p> -->
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url(); ?>/assets/images/carausel2.jpg" class="d-block w-100" height="300px" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <!-- <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p> -->
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url(); ?>/assets/images/carausel3.jpg" class="d-block w-100" height="300px" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <!-- <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p> -->
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url(); ?>/assets/images/carausel4.png" class="d-block w-100" height="300px" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <!-- <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p> -->
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url(); ?>/assets/images/carausel5.png" class="d-block w-100" height="300px" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <!-- <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p> -->
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <!-- Banner section -->
  <section id="home" class="banner_wrapper">
    <div class="container">
      <div class="row align-items-center flex-md-row-reverse">
        <div class="col-md-6">
          <img src="<?php echo base_url(); ?>/assets/images/hero_img.png" class="img-fluid" alt="Banner">
        </div>
        <div class="col-md-6 my-5 my-md-0 text-center text-md-start">
          <h1>Get More For <br />Your Money.</h1>
          <p>SEO means Search Engine Optimization and is the process used to optimize a website's technical configuration, content relevance and link popularity so its pages can become easily findable, more relevant and popular towards user search queries, and as a consequence, search engines rank them better.
          </p>
          <div class="mt-4">
            <a class="main-btn" href="#">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Banner section exit -->


  <!-- card section start -->
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card">
          <img src="<?php echo base_url(); ?>/assets/images/Card1.jfif" height="300px" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">SEO</h5>
            <p class="card-text">SEO works by optimizing your site for the search engine that you want to rank for,
              Google, Bing, Amazon or YouTube.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="<?php echo base_url(); ?>/assets/images/Card12.jfif" height="300px" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">SOCIAL MEDIA MARKETING</h5>
            <p class="card-text">The term social media marketing refers to the use of social media and social networks
              to market a company’s products and services.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="<?php echo base_url(); ?>/assets/images/Card3.jfif" height="300px" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">SEO AUDIT</h5>
            <p class="card-text">An SEO audit is the process of analyzing how well your web presence relates to best
              practices to market a company’s products.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="<?php echo base_url(); ?>/assets/images/Card4.jfif" height="300px" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">ON-PAGE SEO</h5>
            <p class="card-text">On-page SEO (or on-site SEO) is the practice of optimizing web pages for specific keywords in order to improve search visibility and traffic.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="<?php echo base_url(); ?>/assets/images/Card5.png" height="300px" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">OFF-PAGE SEO</h5>
            <p class="card-text">Off-page SEO" (also called "off-site SEO") refers to actions taken outside of your own website to impact your rankings within search engine results pages.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="<?php echo base_url(); ?>/assets/images/Card6.jfif" height="300px" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">SEO Analysis</h5>
            <p class="card-text">SEO analysis is the process of closely examining a website to gain a better understanding of how well the site has been optimized and improve.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="<?php echo base_url(); ?>/assets/images/Card7.png" height="300px" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">FACEBOOK BOOSTING</h5>
            <p class="card-text">Boosted posts are ads you create from posts on your Facebook Page. Boosting a post can help you get more messages, video views, leads or calls.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="<?php echo base_url(); ?>/assets/images/Card8.jfif" height="300px" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">FACEBOOK MARKETING</h5>
            <p class="card-text">Facebook's tools cater to the business that wants to form an authentic relationship with their audience. It allows marketers to create quality content.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="<?php echo base_url(); ?>/assets/images/Card9.jfif" height="300px" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">DIGITAL MARKETING</h5>
            <p class="card-text">Digital marketing, also called online marketing, is the promotion of brands to connect with potential customers using the internet.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- card section exit -->



  <?= $this->include("partial/footer"); ?>
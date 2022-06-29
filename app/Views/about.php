<?= view("partial/header",['about'=>'active']); ?>
<!-- About section -->
<section id="about" class="about_wrapper mt-5">
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-md-6 col-sm-12 mb-4 mb-md-0">
          <img src="<?php echo base_url() ?>/assets/images/about-img.png" class="img-fluid" alt="#">
        </div>
        <div class="col-md-6 col-sm-12 ps-md-5 text-center text-md-start">
          <h2>How do you get top <br class="">ranks in SEO?</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown..</p>
          <a href="#" class="main-btn">Read More</a>
        </div>

      </div>
    </div>

    <div class="container">
      <h2>Our Group Members</h2>
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="<?php echo base_url() ?>/assets/images/IMG_2747.JPG" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Moshin Ahmed</h5>
              <p class="card-text">Founder of SEO website. <br> Digital merketing extert.</p>
              <p class="card-text"><small class="text-muted"></small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Md Jahirul Islam</h5>
              <p class="card-text">Co-founder of SEO website.<br> Professional Web developer.</p>
              <p class="card-text"><small class="text-muted"></small></p>
            </div>
          </div>
          <div class="col-md-4">
            <img src="<?php echo base_url() ?>/assets/images/81274814_2351453008294028_2241043218416271360_n.jpg" class="img-fluid rounded-start" alt="...">
          </div>
        </div>
      </div>
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="<?php echo base_url() ?>/assets/images/56866311_1216409288510094_8627149624626380800_n.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Syed Zayed Hossine</h5>
              <p class="card-text">Junior Web developer</p>
              <p class="card-text"><small class="text-muted"></small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Shahadat Hossine</h5>
              <p class="card-text">SEO Expert</p>
              <p class="card-text"><small class="text-muted"></small></p>
            </div>
          </div>
          <div class="col-md-4">
            <img src="<?php echo base_url() ?>/assets/images/82599653_2188520544583687_4967792386982805504_n.jpg" class="img-fluid rounded-start" alt="...">
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- About section exit -->
<?= view("partial/footer"); ?>


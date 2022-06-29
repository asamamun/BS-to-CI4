<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SEO WEBSITE</title>

  <!-- FAVICON -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- Bootstrap 5 CDN Links -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- Custom File's Link -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">


</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="85">
    
  <!-- Navbar section -->
  <header class="header_wrapper">
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">
          <img src="<?php echo base_url(); ?>/assets/images/logo.png" class="img-fluid" alt="logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <!-- <span class="navbar-toggler-icon"></span> -->
          <i class="fas fa-stream navbar-toggler-icon"></i>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav menu-navbar-nav">
            <li class="nav-item">
              <!-- <a class="nav-link active" aria-current="page" href="index.html">Home</a> -->
              <?php $home = isset($home)?$home:''; echo anchor("/","Home",['class'=>"nav-link " .$home ]) ?>
            </li>
            <li class="nav-item">
              <!-- <a class="nav-link" href="about.html">About</a> -->
              <?php $about = isset($about)?$about:'' ; echo anchor("about","About",['class'=>"nav-link " .$about ]) ?>
            </li>
            <li class="nav-item">
              <!-- <a class="nav-link" href="services.html">Services</a> -->
              
              <?php $service = isset($service)?$service:'' ; echo anchor("service","Service",['class'=>"nav-link " .$service ]) ?>
            </li>
            <li class="nav-item">
              <!-- <a class="nav-link" href="blog.html">Blog</a> -->
              
              <?php $blog = isset($blog)?$blog:'' ; echo anchor("blog","Blog",['class'=>"nav-link " .$blog ]) ?>
            </li>
            <li class="nav-item">
              <!-- <a class="nav-link" href="contact.html">Contact</a> -->
              
              <?php $contact = isset($contact)?$contact:'' ; echo anchor("contact","Contact Us",['class'=>"nav-link " .$contact ]) ?>
            </li>
            <li class="nav-item">
              <a class="main-btn" href="#">Free Quote</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Navbar section exit -->


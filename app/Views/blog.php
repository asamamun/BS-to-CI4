<?= view('partial/header',['blog'=>'active']) ?>
<!-- Blog section -->
<section id="blog" class="blog_wrapper mt-5">
        <div class="newsletter_wrapper">
            <div class="container py-5">
                <div class="row align-items-center">
                    <div class="col-sm-12 text-center">
                        <h2 class="text-white mb-4">Have questions in mind? <br class="d-none d-lg-block">Let us help
                            you.</h2>
                        <form class="d-flex newsletter">
                            <input type="email" class="form-control" placeholder="Email Address">
                            <button type="submit" class="main-btn ms-3">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div> 
        </div>
        <div class="container">
            <div class="row py-5">
                <div class="col-sm-12 text-center">
                    <h2>Latest from our blog </h2>
                    <p class="w-75 mx-auto ">In this guide, we’re going to share the essential SEO ranking factors you
                        need to dominate search. By the end of this post, you’ll have a well-optimized site</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="card bg-white border-0 rounded-0">
                        <img src="<?php echo base_url() ?>/assets/images/Blog/blog-img-1.jpg" class="img-fluid mb-4">
                        <div class="card-body d-flex">
                            <div class="me-4">
                                <h3 class="mb-0 date">06</h3>
                                <p>SEP</p>
                            </div>
                            <div>
                                <h3><a href="#">Brilliant minds.</a></h3>
                                <p>Keywords play a major role in this formula. You want to include words people will
                                    search for throughout your content.</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="card bg-white border-0 rounded-0">
                        <img src="<?php echo base_url() ?>/assets/images/Blog/blog-img-2.jpg" class="img-fluid mb-4">
                        <div class="card-body d-flex">
                            <div class="me-4">
                                <h3 class="mb-0 date">06</h3>
                                <p>SEP</p>
                            </div>
                            <div>
                                <h3><a href="#">Brilliant minds.</a></h3>
                                <p>Keywords play a major role in this formula. You want to include words people will
                                    search for throughout your content.</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="card bg-white border-0 rounded-0">
                        <img src="<?php echo base_url() ?>/assets/images/Blog/blog-img-3.jpg" class="img-fluid mb-4">
                        <div class="card-body d-flex">
                            <div class="me-4">
                                <h3 class="mb-0 date">06</h3>
                                <p>SEP</p>
                            </div>
                            <div>
                                <h3><a href="#">Brilliant minds.</a></h3>
                                <p>Keywords play a major role in this formula. You want to include words people will
                                    search for throughout your content.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!-- Blog section exit -->
<?= $this->include("partial/footer"); ?>
<?= view('partial/header',['contact'=>'active']) ?>
<!-- Contact section -->
<section id="contact" class="contact_wrapper mt-5">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-sm-12 mb-5 mb-md-0">
                    <img src="<?php echo base_url() ?>/assets/images/contact.png" class="img-fluid">
                </div>
                <div class="col-md-6 col-sm-12 ps-md-5">
                    <h2>Get In Touch!</h2>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Your Name..." autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="name" placeholder="Your Email..." autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <input cols="40" rows="4" class="form-control" id="message" placeholder="Write a Message..." autocomplete="off">
                        </div>
                        <button type="submit" class="main-btn border-0 mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section> 
    <!-- contact section exit -->
<?= $this->include("partial/footer"); ?>
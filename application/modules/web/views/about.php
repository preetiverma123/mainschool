<section class="page-title-area bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12"><h1 class="page-title"><?php echo $this->lang->line('about us'); ?> <?php echo $settings->school_name; ?></h1></div>
        </div>
    </div>
</section>
<section class="messageContainer pd-b" id="message-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="go-heading go-lined">
          <h3 class="title-section1">MD's Message</h3>
        </div>
        
         <div class="row go-directors">
          <div class="col-md-4">
              <div class="go-box-wrap our-direct bg-light"> <img src="assets/images/team1.jpg" width="170px" height="203px" alt="director">
              <h4>Shri Vishwanath Kesarwani</h4>
            </div>
          </div>
          <div class="col-md-8">
            <div class="message-content">
              <h5>My Dear Students,</h5>
              <h5>Welcome to School.</h5> 
              <p>
                Education is the process of facilitating learning, or the acquisition of knowledge, skills, values, beliefs, and habits. Educational methods include storytelling, discussion, teaching, training, and directed research. Education frequently takes place under the guidance of educators and also learners may also educate themselves. Education can take place in formal or informal settings and any experience that has a formative effect on the way one thinks, feels, or acts may be considered educational.
              </p>
            </div>
           <!--  <div class="text-left btn_view pb-4"><a href="javascript:void(0);" class="btn btn-sm btn-lng btn-outline-dark">View More</a>
         </div> -->
          </div>
         </div>
      </div>
    </div>
  </div>
</section>
<section class="go-content-area pd-all about-content aboutus-wrap">
    <div class="container">
         <div class="row">
            <div class="col-lg-12"><h1><?php echo $this->lang->line('about us'); ?> <?php echo 'About '.$settings->school_name; ?></h1></div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <?php echo $about->page_description; ?>
               <!--  <div class="about_us_page">
                <div class="row">
                    <h3>Why Choose Us?</h3>
                    <div class="list-style">
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                          <ul>
                            <li>Years of Experience</li>
                            <li>Fully Insured</li>
                            <li>Cost Control Experts</li>
                            <li>100% Satisfaction Guarantee</li>
                          </ul>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                          <ul>
                            <li>Free Consultation</li>
                            <li>Satisfied Customers</li>
                            <li>Project Management</li>
                            <li>Affordable Pricing</li>
                          </ul>
                        </div>
                    </div>
                  </div>
              </div> -->
            </div>
            <div class="col-lg-6">
                <img class="img-fluid img-thumbnail" src="<?php echo UPLOAD_PATH; ?>/page/<?php echo $about->page_image; ?>" alt="">
            </div>      
        </div>
    </div>
</section>
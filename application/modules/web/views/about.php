<section class="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12"><h1 class="page-title"><?php echo $this->lang->line('about us'); ?> <?php echo $this->lang->line('school'); ?></h1></div>
        </div>
    </div>
</section>

<section class="content-area">
    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <?php echo $about->page_description; ?>
                <div class="about_us_page">
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
              </div>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid img-thumbnail" src="<?php echo UPLOAD_PATH; ?>/page/<?php echo $about->page_image; ?>" alt="">
            </div>      
        </div>
    </div>
</section>
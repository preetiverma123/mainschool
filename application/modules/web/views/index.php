<section id="slider_area" class="slider_area">
    <?php $slider_str = ''; foreach($sliders as $obj){ ?>
        <?php $slider_str .= '"assets/uploads/slider/'.$obj->image.'"'.','; ?>
    <?php } ?>
    <div id="demo-1" data-zs-src='[<?php echo rtrim($slider_str, ','); ?>]' data-zs-overlay="dots">
        <div class="demo-inner-content"></div>
    </div>
</section>
<section class="messageContainer padding-btm" id="message-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="go-heading go-lined">
          <h3 class="title-section1">MD's Message</h3>
        </div>
        
         <div class="row go-directors">
          <div class="col-md-4">
              <div class="go-box-wrap our-direct bg-light"> <img src="assets/images/team1.jpg" width="170px" height="203px" alt="director">
              <h4><?php echo $mdmessage->page_title; ?></h4>
            </div>
          </div>
          <div class="col-md-8">
            <div class="message-content">
              <p>
              <?php echo htmlspecialchars_decode(stripslashes($mdmessage->page_description)); ?>
              </p>
            </div>
            <div class="text-left btn_view pb-4"><a href="<?php echo site_url('about'); ?>" class="btn btn-sm btn-lng btn-outline-dark">View More</a>
         </div>
          </div>
         </div>
      </div>
    </div>
    <div class="message-principal">
      <div class="row">
        <div class="col-lg-12">
          <div class="go-heading go-lined">
            <h3 class="title-section1">MD's Message</h3>
          </div>
          
           <div class="row go-directors">
            <div class="col-md-8">
              <div class="message-content">
                <p>
                <?php echo htmlspecialchars_decode(stripslashes($mdmessage->page_description)); ?>
                </p>
              </div>
              <div class="text-left btn_view pb-4"><a href="<?php echo site_url('about'); ?>" class="btn btn-sm btn-lng btn-outline-dark">View More</a>
           </div>
            </div>
            <div class="col-md-4">
                <div class="go-box-wrap our-direct bg-light"> <img src="assets/images/team1.jpg" width="170px" height="203px" alt="director">
                <h4><?php echo $mdmessage->page_title; ?></h4>
              </div>
            </div>
            </div>
           </div>
        </div>
      </div>
  </div>
</section>
<section class="content-area about-content">
    <div class="container">
       <!--  <div class="row about-area">
            <div class="col-12">
                <div class="site-title">
                    <h3 class="title-section1"><?php echo $about->page_title; ?></h3>
                </div>
            </div>
            <div class="col-lg-6">
                <p class="aboutText"><?php echo $about->page_description; ?></p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid img-thumbnail" src="<?php echo UPLOAD_PATH; ?>/page/<?php echo $about->page_image; ?>" alt="">
            </div>
        </div> -->

        <?php if(isset($notices) && !empty($notices)){ ?>
        <div class="row text-center">
            <div class="col-lg-12">
                <div class="site-title">
                    <h3 class="title-section1"><?php echo $this->lang->line('notice'); ?></h3>
                </div>
            </div>

           <?php foreach($notices as $obj){ ?> 
            <div class="notice-single col-lg-4">                
                <div class="notice-title">
                    <h2><?php echo $obj->title; ?></h2>
                    <h3><i class="fa fa-calendar"></i>  <?php echo date('M j, Y', strtotime($obj->date)); ?> </h3>
                </div>
                <div>
                    <p><?php echo substr($obj->notice, 0,120); ?>...</p>
                </div>
                <div class="more-link"><a href="<?php echo site_url('notice-detail/'.$obj->id); ?>" class="btn-link"><?php echo $this->lang->line('read_more'); ?> <i class="fa fa-long-arrow-right"></i></a></div>
            </div>
           <?php } ?>                
        </div>
        <?php } ?>
        
    </div>
</section> 

 <?php if(isset($events) && !empty($events)){ ?>
    <section id="events" class="event-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="site-title">
                    <h3 class="title-section1"><?php echo $this->lang->line('event'); ?></h3>
                </div>
            </div>
        </div>
        <div class="service_container">
        <div class="row text-center justify-content-center">
            <?php foreach($events as $obj){ ?> 
                <div class="col-md-4 col-sm-6">
                    <div class="single-event-list">
                        <div class="event-img">
                            <a href="<?php echo site_url('event-detail/'.$obj->id); ?>"><img src="<?php echo UPLOAD_PATH; ?>/event/<?php echo $obj->image; ?>" alt=""></a>
                        </div>
                        <div class="event-content">
                            <div class="event-meta">
                                <div class="event-title"><?php echo $obj->title; ?></div>
                                <div class="event-for"><span><?php echo $this->lang->line('event_for'); ?></span>: <?php echo $obj->name ? $obj->name : $this->lang->line('all'); ?></div>
                                <div class="event-place"><span><?php echo $this->lang->line('event_place'); ?></span>: <?php echo $obj->event_place; ?></div>
                                <div class="event-date"><span><?php echo $this->lang->line('start_date'); ?></span>: <i class="far fa-clock"></i> <?php echo date('M j, Y', strtotime($obj->event_from)); ?></div>
                                <div class="event-date"><span><?php echo $this->lang->line('end_date'); ?></span>: <i class="far fa-clock"></i> <?php echo date('M j, Y', strtotime($obj->event_to)); ?></div>
                            </div>
                            <div class="more-link"><a href="<?php echo site_url('event-detail/'.$obj->id); ?>" class="btn-link"><?php echo $this->lang->line('read_more'); ?> <i class="fa fa-long-arrow-right"></i></a></div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        </div>
</section>

<?php } ?>
<!-- our team -->
<?php if (isset($teachers) && !empty($teachers)) { ?>
<section class="section_team md-padding">
    <div id="team" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-title">
                        <h3 class="title-section1">Our Teachers</h3>
                    </div>
                </div>
            </div>
       
    
            <div class="row">
             
                <?php foreach ($teachers as $key => $obj) { ?>
                  <?php if($key<3){ ?>
                <div class="col-sm-6 col-md-4">
                    <div class="team">
                        <div class="team-img">
                          <?php  if($obj->photo != ''){ ?>
                            <img class="img-responsive" src="<?php echo UPLOAD_PATH; ?>/teacher-photo/<?php echo $obj->photo; ?>" alt="">
                          <?php }else{ ?>
                            <img src="<?php echo IMG_URL; ?>/default-user.png" alt="" width="120" class="img-responsive"/> 
                          <?php } ?>
                            <div class="overlay">
                                <div class="team-social">
                                <?php if($obj->facebook_url){ ?>
                                <a target="_blank" href="<?php echo $obj->facebook_url; ?>"><i class="fa fa-facebook"></i></a>
                                <?php } ?>
                                <?php if($obj->linkedin_url){ ?>
                                <a target="_blank" href="<?php echo $obj->linkedin_url; ?>"><i class="fa fa-linkedin"></i></a>
                                <?php } ?>
                                <?php if($obj->google_plus_url){ ?>
                                <a target="_blank" href="<?php echo $obj->google_plus_url; ?>"><i class="fa fa-google-plus"></i></a>
                                <?php } ?>
                               <!--  <?php if($obj->instagram_url){ ?>
                                <li><a target="_blank" href="<?php echo $obj->instagram_url; ?>"><i class="fa fa-instagram"></i></a></li>
                                <?php } ?> -->
                                <!-- <?php if($obj->pinterest_url){ ?>
                                <li><a target="_blank" href="<?php echo $obj->pinterest_url; ?>"><i class="fa fa-pinterest-square"></i></a></li>
                                <?php } ?> -->
                                <?php if($obj->twitter_url){ ?>
                                <a target="_blank" href="<?php echo $obj->twitter_url; ?>"><i class="fa fa-twitter"></i></a>
                                <?php } ?>
                                <?php if($obj->youtube_url){ ?>
                                <a target="_blank" href="<?php echo $obj->youtube_url; ?>"><i class="fa fa-youtube"></i></a>
                                <?php } ?>
                                   <!--  <a  href="<?php echo $obj->facebook_url; ?>"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a> -->
                                </div>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3><?php echo $obj->name; ?></h3>
                            <span><?php echo $obj->responsibility; ?></span>
                        </div>
                    </div>
                </div>
            <?php } ?>
          <?php } ?>
       
            </div>
         
    </div>
</section>
<?php } ?>

<!-- our gallery -->
<!-- <section id="gallery" class="gallery-wrap">
        
        <div class="container"> 
            <div class="row">
                  <div class="col-12">
                      <div class="site-title">
                            <h3 class="title-section1">Our Gallery</h3>
                        </div>
                  </div>
              </div>       
          
            <div class="row">          
                <div class="col-md-12">
                 
                  <div class="controls text-center">
                    <a class="filter active btn btn-common" data-filter="all">
                      All 
                    </a>
                    <a class="filter btn btn-common" data-filter=".flats">
                      Teachers 
                    </a>
                    <a class="filter btn btn-common" data-filter=".plots">
                      Members
                    </a>
                    <a class="filter btn btn-common" data-filter=".house">
                      Students 
                    </a>
                  </div>
                  
                </div>

            <div id="portfolio" class="row wow fadeInDown" data-wow-delay="0.4s">
              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mix plots house">
                <div class="portfolio-item">
                  <div class="shot-item">
                    <img src="assets/images/team1.jpg" alt="projects"/>  
                    <div class="overlay">
                      <div class="icons">
                        <a class="lightbox preview" href="assets/images/team1.jpg">
                          <i class="icon-eye"></i>
                        </a>
                      </div>
                    </div>
                  </div>               
                </div>
              </div>
             
              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mix plots">
                <div class="portfolio-item">
                  <div class="shot-item">
                    <img src="assets/images/team1.jpg" alt="projects"/> 
                    <div class="overlay">
                      <div class="icons">
                        <a class="lightbox preview" href="assets/images/team1.jpg">
                          <i class="icon-eye"></i>
                        </a>
                      </div>
                    </div>
                  </div>               
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mix plots flats">
                <div class="portfolio-item">
                  <div class="shot-item">
                    <img src="assets/images/team2.jpg" alt="projects" /> 
                    <div class="overlay">
                      <div class="icons">
                        <a class="lightbox preview" href="assets/images/team2.jpg">
                          <i class="icon-eye"></i>
                        </a>
                      </div>
                    </div>
                  </div>               
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mix plots">
                <div class="portfolio-item">
                  <div class="shot-item">
                    <img src="assets/images/team3.jpg" alt="projects"/> 
                    <div class="overlay">
                      <div class="icons">
                        <a class="lightbox preview" href="assets/images/team3.jpg">
                          <i class="icon-eye"></i>
                        </a>
                      </div>
                    </div>
                  </div>               
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 mix flats">
                <div class="portfolio-item">
                  <div class="shot-item">
                    <img src="assets/images/team1.jpg" alt="projects"/>
                    <div class="overlay">
                      <div class="icons">
                        <a class="lightbox preview" href="assets/images/team1.jpg">
                          <i class="icon-eye"></i>
                        </a>
                      </div>
                    </div>
                  </div>               
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 plots">
                <div class="portfolio-item">
                  <div class="shot-item">
                    <img src="assets/images/team1.jpg" alt="projects"/>
                    <div class="overlay">
                      <div class="icons">
                        <a class="lightbox preview" href="assets/images/team1.jpg">
                          <i class="icon-eye"></i>
                        </a>
                      </div>
                    </div>
                  </div>               
                </div>
              </div>
            </div>
          </div>
        </div>
      
      </section> -->
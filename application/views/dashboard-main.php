
<?php $classes = get_classes(); ?>
<div class="row tile_count">
     <?php if(has_permission(VIEW, 'setting', 'setting') || has_permission(VIEW, 'setting', 'payment') || has_permission(VIEW, 'setting', 'sms')){ ?>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('setting'); ?>"><i class="fa fa-group"></i> <?php echo $this->lang->line('setting'); ?> </a>
         
        </div>
    </div>
     <?php } ?>

     <?php if(has_permission(VIEW, 'theme', 'theme')){ ?>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('theme'); ?>"><i class="fa fa-group"></i> <?php echo $this->lang->line('theme'); ?> </a>
         
        </div>
    </div>
     <?php } ?>

      <?php if(has_permission(VIEW, 'language', 'language')){ ?>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('language'); ?>"><i class="fa fa-group"></i><?php echo $this->lang->line('language'); ?> </a>
         
        </div>
    </div>
     <?php } ?>

    <?php if(has_permission(VIEW, 'administrator', 'year') || has_permission(VIEW, 'administrator', 'role') || has_permission(VIEW, 'administrator', 'permission') || has_permission(VIEW, 'administrator', 'user') || has_permission(EDIT, 'administrator', 'password') || has_permission(VIEW, 'administrator', 'backup')){ ?>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('Dashboard/customMenu?page_name=administrator'); ?>"><i class="fa fa-group"></i> <?php echo $this->lang->line('administrator'); ?></a>
         
        </div>
    </div>
     <?php } ?>

      <?php if(has_permission(VIEW, 'hrm', 'designation') || has_permission(VIEW, 'hrm', 'employee')){ ?>   
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('Dashboard/customMenu?page_name=human_resource'); ?>"><i class="fa fa-group"></i> <?php echo $this->lang->line('human_resource'); ?></a>
         
        </div>
    </div>
     <?php } ?>

     <?php if(has_permission(VIEW, 'teacher', 'teacher')){ ?>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('teacher'); ?>"><i class="fa fa-group"></i>  <?php echo $this->lang->line('teacher'); ?></a>
         
        </div>
    </div>
     <?php } ?>

     <?php if(has_permission(VIEW, 'academic', 'classes')){ ?>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('academic/classes/index'); ?>"><i class="fa fa-group"></i> <?php echo $this->lang->line('class'); ?></a>
         
        </div>
    </div>
     <?php } ?>

     <?php if(has_permission(VIEW, 'academic', 'section')){ ?> 
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('Dashboard/customMenu?page_name=section'); ?>"><i class="fa fa-group"></i> <?php echo $this->lang->line('section'); ?></a>
         
        </div>
    </div>
     <?php } ?>

     <?php if(has_permission(VIEW, 'academic', 'subject')){ ?>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('Dashboard/customMenu?page_name=subject'); ?>"><i class="fa fa-group"></i><?php echo $this->lang->line('subject'); ?></a>
         
        </div>
    </div>
     <?php } ?>

     <?php if(has_permission(VIEW, 'academic', 'syllabus')){ ?>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('Dashboard/customMenu?page_name=syllabus'); ?>"><i class="fa fa-group"></i> <?php echo $this->lang->line('syllabus'); ?></a>
         
        </div>
    </div>
     <?php } ?>

      <?php if(has_permission(VIEW, 'academic', 'routine')){ ?>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('Dashboard/customMenu?page_name=class_routine'); ?>"><i class="fa fa-group"></i> <?php echo $this->lang->line('class'); ?> <?php echo $this->lang->line('routine'); ?></a>
         
        </div>
    </div>
     <?php } ?>
    
    <?php if(has_permission(VIEW, 'guardian', 'guardian')){ ?> 
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <div class="stats-count-inner">
                <span class="count_top"><a href="<?php echo site_url('Dashboard/customMenu?page_name=guardian'); ?>"><i class="fa fa-group"></i> <?php echo $this->lang->line('guardian'); ?></a>
             
            </div>
        </div>
     <?php } ?>


   <?php if(has_permission(VIEW, 'student', 'student') || has_permission(ADD, 'student', 'student')){ ?>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('Dashboard/customMenu?page_name=student'); ?>"><i class="fa fa-group"></i> <?php echo $this->lang->line('student'); ?></a>
         
        </div>
    </div>
     <?php } ?>

     <?php if(has_permission(VIEW, 'attendance', 'student') || has_permission(VIEW, 'attendance', 'teacher') || has_permission(VIEW, 'attendance', 'employee')){ ?>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('Dashboard/customMenu?page_name=attendance'); ?>"><i class="fa fa-group"></i> <?php echo $this->lang->line('attendance'); ?></a>
         
        </div>
    </div>
     <?php } ?>

      <?php if(has_permission(VIEW, 'assignment', 'assignment')){ ?>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('Dashboard/customMenu?page_name=assignment'); ?>"><i class="fa fa-group"></i> <?php echo $this->lang->line('assignment'); ?> </a>
         
        </div>
    </div>
     <?php } ?>

     <?php if(has_permission(VIEW, 'exam', 'grade') || has_permission(VIEW, 'exam', 'exam') || has_permission(VIEW, 'exam', 'schedule') || has_permission(VIEW, 'exam', 'suggestion') || has_permission(VIEW, 'exam', 'attendance')){ ?> 
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('Dashboard/customMenu?page_name=exam'); ?>"><i class="fa fa-group"></i> <?php echo $this->lang->line('exam'); ?> </a>
         
        </div>
    </div>
     <?php } ?>

    <?php if(has_permission(VIEW, 'exam', 'schedule')){ ?>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('Dashboard/customMenu?page_name=exam_schedule'); ?>"><i class="fa fa-group"></i> <?php echo $this->lang->line('exam'); ?> <?php echo $this->lang->line('schedule'); ?></a>
         
        </div>
    </div>
     <?php } ?>

     <?php if(has_permission(VIEW, 'exam', 'suggestion')){ ?>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('Dashboard/customMenu?page_name=exam_suggestion'); ?>"><i class="fa fa-group"></i><?php echo $this->lang->line('exam'); ?> <?php echo $this->lang->line('suggestion'); ?></a>
         
        </div>
    </div>
     <?php } ?>

     <?php if(has_permission(VIEW, 'exam', 'attendance')){ ?>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('Dashboard/customMenu?page_name=attendance'); ?>"><i class="fa fa-group"></i><?php echo $this->lang->line('exam'); ?> <?php echo $this->lang->line('attendance'); ?></a>
         
        </div>
    </div>
     <?php } ?>

      <?php if(has_permission(VIEW, 'exam', 'mark') || has_permission(VIEW, 'exam', 'marksheet') || has_permission(VIEW, 'exam', 'result') || has_permission(VIEW, 'exam', 'sms') || has_permission(VIEW, 'exam', 'mail')){ ?> 
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('Dashboard/customMenu?page_name=exam_mark'); ?>"><i class="fa fa-group"></i> <?php echo $this->lang->line('exam_mark'); ?> </a>
         
        </div>
    </div>
     <?php } ?>

     <?php if(has_permission(VIEW, 'academic', 'promotion')){ ?>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('academic/promotion'); ?>"><i class="fa fa-group"></i> <?php echo $this->lang->line('promotion'); ?> </a>
         
        </div>
    </div>
     <?php } ?>

      <?php if(has_permission(VIEW, 'certificate', 'certificate') || has_permission(VIEW, 'certificate', 'type')){ ?>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('Dashboard/customMenu?page_name=certificate'); ?>"><i class="fa fa-group"></i><?php echo $this->lang->line('certificate'); ?></a>
         
        </div>
    </div>
     <?php } ?>

   <?php if(has_permission(VIEW, 'library', 'book') || has_permission(VIEW, 'library', 'member') || has_permission(VIEW, 'library', 'issue')){ ?> 
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('Dashboard/customMenu?page_name=library'); ?>"><i class="fa fa-group"></i> <?php echo $this->lang->line('library'); ?> </a>
         
        </div>
    </div>
     <?php } ?>

     <?php if(has_permission(VIEW, 'transport', 'vehicle') || has_permission(VIEW, 'transport', 'route') || has_permission(VIEW, 'transport', 'member')){ ?> 
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('Dashboard/customMenu?page_name=transport'); ?>"><i class="fa fa-group"></i>  <?php echo $this->lang->line('transport'); ?> </a>
         
        </div>
    </div>
     <?php } ?>

      <?php if(has_permission(VIEW, 'hostel', 'hostel') || has_permission(VIEW, 'hostel', 'room') || has_permission(VIEW, 'hostel', 'member')){ ?>  
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('Dashboard/customMenu?page_name=hostel'); ?>"><i class="fa fa-group"></i>  <?php echo $this->lang->line('hostel'); ?> </a>
         
        </div>
    </div>
     <?php } ?>


     <?php if(has_permission(VIEW, 'message', 'message')){ ?>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('message/inbox'); ?>"><i class="fa fa-group"></i> <?php echo $this->lang->line('message'); ?></a>
         
        </div>
    </div>
     <?php } ?>

      <?php if(has_permission(VIEW, 'message', 'mail') || has_permission(VIEW, 'message', 'text')){ ?>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('Dashboard/customMenu?page_name=mail_and_sms'); ?>"><i class="fa fa-group"></i><?php echo $this->lang->line('mail_and_sms'); ?> </a>
         
        </div>
    </div>
     <?php } ?>

      <?php if(has_permission(VIEW, 'announcement', 'notice') || has_permission(VIEW, 'announcement', 'news') || has_permission(VIEW, 'announcement', 'holiday')){ ?>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('Dashboard/customMenu?page_name=announcement'); ?>"><i class="fa fa-group"></i><?php echo $this->lang->line('announcement'); ?> </a>
         
        </div>
    </div>
     <?php } ?>

      <?php if(has_permission(VIEW, 'event', 'event')){ ?>   
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('event/index/'); ?>"><i class="fa fa-group"></i> <?php echo $this->lang->line('event'); ?> </a>
         
        </div>
    </div>
     <?php } ?>

     <?php if(has_permission(VIEW, 'payroll', 'grade') || has_permission(VIEW, 'payroll', 'payment')){ ?>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('Dashboard/customMenu?page_name=payroll'); ?>"><i class="fa fa-group"></i><?php echo $this->lang->line('payroll'); ?></a>
         
        </div>
    </div>
     <?php } ?>

       <?php if(has_permission(VIEW, 'accounting', 'invoice') || has_permission(VIEW, 'accounting', 'exphead') || has_permission(VIEW, 'accounting', 'expenditure') || has_permission(VIEW, 'accounting', 'incomehead') || has_permission(VIEW, 'accounting', 'income')){ ?> 
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('Dashboard/customMenu?page_name=accounting'); ?>"><i class="fa fa-group"></i> <?php echo $this->lang->line('accounting'); ?> </a>
         
        </div>
    </div>
     <?php } ?>

      <?php if(has_permission(VIEW, 'report', 'report')){ ?>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('Dashboard/customMenu?page_name=report'); ?>"><i class="fa fa-group"></i>  <?php echo $this->lang->line('report'); ?> </a>
         
        </div>
    </div>
     <?php } ?>

       <?php if(has_permission(VIEW, 'gallery', 'gallery') || has_permission(VIEW, 'gallery', 'image')){ ?>       
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('Dashboard/customMenu?page_name=media_gallery'); ?>"><i class="fa fa-group"></i><?php echo $this->lang->line('media_gallery'); ?>  </a>
         
        </div>
    </div>
     <?php } ?>

     <?php if(has_permission(VIEW, 'frontend', 'frontend') || has_permission(VIEW, 'frontend', 'slider')){ ?>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('Dashboard/customMenu?page_name=frontend'); ?>"><i class="fa fa-group"></i> <?php echo $this->lang->line('frontend'); ?> </a>
         
        </div>
    </div>
     <?php } ?>

         
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <div class="stats-count-inner">
            <span class="count_top"><a href="<?php echo site_url('Dashboard/customMenu?page_name=profile'); ?>"><i class="fa fa-group"></i> <?php echo $this->lang->line('profile'); ?> </a>
         
        </div>
    </div>


     

</div>
<div class="row">
    <div class="col-md-8 col-sm-8 col-xs-12">
        <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="x_panel tile overflow_hidden">
                <div class="x_title">
                    <h3 class="head-title"><?php echo $this->lang->line('calendar'); ?></h3>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>                                
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div id="calendar"></div>
                    <link rel='stylesheet' href='<?php echo VENDOR_URL; ?>fullcalendar/lib/cupertino/jquery-ui.min.css' />
                    <link rel='stylesheet' href='<?php echo VENDOR_URL; ?>fullcalendar/fullcalendar.css' />
                    <script type="text/javascript" src='<?php echo VENDOR_URL; ?>fullcalendar/lib/jquery-ui.min.js'></script>
                    <script type="text/javascript" src='<?php echo VENDOR_URL; ?>fullcalendar/lib/moment.min.js'></script>
                    <script type="text/javascript" src='<?php echo VENDOR_URL; ?>fullcalendar/fullcalendar.min.js'></script> 
                    <script type="text/javascript">
                        $(function () {
                            $('#calendar').fullCalendar({
                                header: {
                                    left: 'prev,next today',
                                    center: 'title',
                                    right: 'month,agendaWeek,agendaDay'
                                },
                                buttonText: {
                                    today: 'today',
                                    month: 'month',
                                    week: 'week',
                                    day: 'day'
                                },

                                //events and holidays
                                events: [
                                    <?php if(isset($events) && !empty($events)){ ?>
                                        <?php foreach($events as $obj){ ?>
                                        {
                                            title: "<?php echo $obj->title; ?>",
                                            start: '<?php echo date('Y-m-d', strtotime($obj->event_from)); ?>T<?php echo date('H:i:s', strtotime($obj->event_from)); ?>',
                                            end: '<?php echo date('Y-m-d', strtotime($obj->event_to)); ?>T<?php echo date('H:i:s', strtotime($obj->event_to)); ?>',
                                            backgroundColor: '<?php echo $theme->color_code; ?>', //red
                                            url: '<?php echo site_url('event/view/'.$obj->id); ?>', //red
                                            color: '#ffffff' //red
                                        },
                                        <?php } ?> 
                                    <?php } ?> 
                                    <?php if(isset($holidays) && !empty($holidays)){ ?>
                                        <?php foreach($holidays as $obj){ ?>
                                        {
                                            title: "<?php echo $obj->title; ?>",
                                            start: '<?php echo date('Y-m-d', strtotime($obj->date_from)); ?>T<?php echo date('H:i:s', strtotime($obj->date_from)); ?>',
                                            end: '<?php echo date('Y-m-d', strtotime($obj->date_to)); ?>T<?php echo date('H:i:s', strtotime($obj->date_to)); ?>',
                                            backgroundColor: '<?php echo $theme->color_code; ?>', //red
                                            url: '<?php echo site_url('announcement/holiday/view/'.$obj->id); ?>', //red
                                            color: '#ffffff' //red
                                        },
                                        <?php } ?> 
                                    <?php } ?>                                     
                                ]
                            });
                        });
                    </script>

                </div>                
            </div>          
        </div>          

      <!--   <div class="col-md-6 col-sm-4 col-xs-12">
            <div class="x_panel tile overflow_hidden">
                <div class="x_title">
                    <h4 class="head-title"><?php echo $this->lang->line('latest'); ?> <?php echo $this->lang->line('news'); ?></h4>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>                                
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <ul  class="list-unstyled msg_list">
                        <?php if(isset($news) && !empty($news)){ ?>
                            <?php foreach($news as $obj ){ ?>
                            <li>
                                <a href="<?php echo site_url('announcement/news/view/'.$obj->id); ?>">
                                    <span class="image">
                                    <?php  if($obj->image != ''){ ?>
                                            <img src="<?php echo UPLOAD_PATH; ?>/news/<?php echo $obj->image; ?>" alt="" width="70" /> 
                                            <?php }else{ ?>
                                            <img src="<?php echo IMG_URL; ?>default-user.png" alt="Profile Image" />
                                    <?php } ?>
                                    </span>
                                    <span>
                                        <span><?php echo $obj->title; ?></span>
                                        <span class="time"><?php echo get_nice_time($obj->created_at); ?></span>
                                    </span>
                                    <span class="message">
                                        <?php echo substr($obj->news, 0, 120); ?>
                                    </span>
                                </a>
                            </li>
                            <?php } ?>
                        <?php } ?> 
                    </ul>
                </div>
            </div>
        </div> -->
   <!--      <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel tile overflow_hidden">
                <div class="x_title">
                    <h4 class="head-title"><?php echo $this->lang->line('latest'); ?> <?php echo $this->lang->line('notice'); ?></h4>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>                                
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <ul  class="list-unstyled msg_list">
                        <?php if(isset($notices) && !empty($notices)){ ?>
                            <?php foreach($notices as $obj ){ ?>
                            <li>
                                <a href="<?php echo site_url('announcement/notice/view/'.$obj->id); ?>">
                                    <span class="image"><img src="<?php echo IMG_URL; ?>default-user.png" alt="Profile Image" /></span>
                                    <span>
                                        <span><?php echo $obj->title; ?></span>
                                        <span class="time"><?php echo get_nice_time($obj->created_at); ?></span>
                                    </span>
                                    <span class="message">
                                        <?php echo substr($obj->notice, 0, 120); ?>
                                    </span>
                                </a>
                            </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div> -->

    </div>

    <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel tile fixed_height_320 overflow_hidden">
                    <div class="x_title">
                        <h4 class="head-title"><?php echo $this->lang->line('student'); ?> <?php echo $this->lang->line('statistics'); ?></h4>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>                                
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <script type="text/javascript">

                            $(function () {
                                $('#student-stats').highcharts({
                                    chart: {
                                        type: 'pie',
                                        options3d: {
                                            enabled: true,
                                            alpha: 45,
                                            beta: 0
                                        }
                                    },
                                    title: {
                                        text: '<?php echo $this->lang->line('class'); ?> <?php echo $this->lang->line('statistics'); ?>'
                                    },
                                    tooltip: {
                                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                                    },
                                    plotOptions: {
                                        pie: {
                                            allowPointSelect: true,
                                            cursor: 'pointer',
                                            depth: 35,
                                            dataLabels: {
                                                enabled: true,
                                                format: '{point.name}'
                                            }
                                        }
                                    },
                                    series: [{
                                            type: 'pie',
                                            name: '<?php echo $this->lang->line('student'); ?>',
                                            data: [
                                                <?php if(isset($students) && !empty($students)){ ?>
                                                    <?php foreach($students as $obj){ ?>
                                                    ['<?php echo $this->lang->line('class'); ?> <?php echo $obj->class_name; ?>', <?php echo $obj->total_student; ?>],
                                                    <?php } ?>
                                                <?php } ?>                                                
                                            ]
                                        }],
                                    credits: {
                                        enabled: false
                                    }
                                });
                            });
                        </script>
                        <div id="student-stats" style=" width: 99%; vertical-align: top; height:250px; "></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel tile fixed_height_320">
                    <div class="x_title">
                        <h4 class="head-title"><?php echo $this->lang->line('message'); ?></h4>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>                                
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <script type="text/javascript">
                            $(function () {
                                $('#private-message').highcharts({
                                    chart: {
                                        type: 'column'
                                    },
                                    title: {
                                        text: ''
                                    },
                                    xAxis: {
                                        type: 'category'
                                    },
                                    yAxis: {
                                        title: {
                                            text: '<?php echo $this->lang->line('private_messaging'); ?>'
                                        }
                                    },
                                    legend: {
                                        enabled: false
                                    },
                                    plotOptions: {
                                        series: {
                                            borderWidth: 0,
                                            dataLabels: {
                                                enabled: true,
                                                format: '{point.y:.1f}%'
                                            }
                                        }
                                    },
                                    tooltip: {
                                        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                                        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
                                    },
                                    series: [{
                                            name: '<?php echo $this->lang->line('message'); ?>',
                                            colorByPoint: true,
                                            data: [{
                                                    name: '<?php echo $this->lang->line('new'); ?>',
                                                    y: <?php echo count($new); ?>,
                                                    drilldown: null
                                                },{
                                                    name: '<?php echo $this->lang->line('inbox'); ?>',
                                                    y: <?php echo count($inboxs); ?>,
                                                    drilldown: null
                                                },{
                                                    name: '<?php echo $this->lang->line('send'); ?>',
                                                    y: <?php echo count($sents); ?>,
                                                    drilldown: null
                                                }, {
                                                    name: '<?php echo $this->lang->line('draft'); ?>',
                                                    y: <?php echo count($drafts); ?>,
                                                    drilldown: null
                                                }, {
                                                    name: '<?php echo $this->lang->line('trash'); ?>',
                                                    y: <?php echo count($trashs); ?>,
                                                    drilldown: null
                                                }]
                                        }],
                                    credits: {
                                        enabled: false
                                    }
                                });
                            });
                        </script>
                        <div id="private-message" style=" width: 99%; vertical-align: top;height: 260px;"></div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h4 class="head-title"><?php echo $this->lang->line('user'); ?></h4>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <script type="text/javascript">

                            $(function () {
                                $('#system-users').highcharts({
                                    chart: {
                                        type: 'pie',
                                        options3d: {
                                            enabled: true,
                                            alpha: 45
                                        }
                                    },
                                    title: {
                                        text: ''
                                    },
                                    tooltip: {
                                        pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>'
                                    },
                                    subtitle: {
                                        text: ''
                                    },
                                    plotOptions: {
                                        pie: {
                                            allowPointSelect: true,
                                            innerSize: 100,
                                            depth: 30,
                                            dataLabels: {
                                                format: '<b>{point.name}</b>'
                                            }
                                        }
                                    },
                                    credits: {
                                        enabled: false
                                    },
                                    series: [{
                                            name: '<?php echo $this->lang->line('user'); ?>',
                                            data: [
                                                <?php if(isset($users) && !empty($users)){ ?>
                                                    <?php foreach($users as $obj){ ?>
                                                    ['<?php echo $obj->name; ?>', <?php echo $obj->total_user; ?>],
                                                    <?php } ?>
                                                <?php } ?>
                                            ]
                                        }]
                                });
                            });

                        </script>
                        <div id="system-users" style=" width: 100%; vertical-align: top; height:260px; "></div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>
<script src="<?php echo VENDOR_URL; ?>/chart/js/highcharts.js"></script>
<script src="<?php echo VENDOR_URL; ?>/chart/js/highcharts-3d.js"></script>
<script src="<?php echo VENDOR_URL; ?>/chart/js/modules/exporting.js"></script>
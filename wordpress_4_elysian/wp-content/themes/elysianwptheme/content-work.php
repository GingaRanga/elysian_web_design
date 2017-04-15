<?php

    // Custom Fields
    global $post;

    $email_href                 = get_post_meta($post->ID, 'email_href', true);
    $proposal_button            = get_post_meta($post->ID, 'proposal_button', true);
    $proposal_target            = get_post_meta($post->ID, 'proposal_target', true);

    // Work Section
    $work_section_title         = get_field('work_section_title');
    $work_section_desc          = get_field('work_section_description');

    $mobile_image_1             = get_field('mobile_image_1');
    $mobile_title_1             = get_field('mobile_title_1');
    $mobile_desc_1              = get_field('mobile_description_1');
    $mobile_image_2             = get_field('mobile_image_2');
    $mobile_title_2             = get_field('mobile_title_2');
    $mobile_desc_2              = get_field('mobile_description_2');
    $mobile_image_3             = get_field('mobile_image_3');
    $mobile_title_3             = get_field('mobile_title_3');
    $mobile_desc_3              = get_field('mobile_description_3');

    $work_image_1               = get_field('work_image_1');
    $work_1_title               = get_field('work_1_title');
    $work_1_desc                = get_field('work_1_description');
    $work_image_2               = get_field('work_image_2');
    $work_2_title               = get_field('work_2_title');
    $work_2_desc                = get_field('work_2_description');
    $work_image_3               = get_field('work_image_3');
    $work_3_title               = get_field('work_3_title');
    $work_3_desc                = get_field('work_3_description');

?>
       
<!-- OUR WORK SECTION ===================================================================================================================================================== -->
<section id="worksection">
    <div class="mobile visible-xs text-center">
        <article id="work-mobile">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <h2><?php echo $work_section_title; ?></h2>
                        <p class="lead"><?php echo $work_section_desc; ?></p>
                        <hr>
                    </div><!-- /.col-xs-12 text-center -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-xs-12 col-sm-7">

                        <!-- if user work image uploaded -->
                        <!-- if work image field is not empty. if statement different syntax -->
                        <?php if( !empty($mobile_image_1) ) : ?>

                            <!-- grabs url of image and alt from the acf array -->
                            <img class="img-responsive" src="<?php echo $mobile_image_1['url']; ?>" alt="<?php echo $mobile_image_1['alt']; ?>">

                        <?php endif; ?>

                    </div><!-- /.col-xs-12 col-sm-7 -->
                    <div class="col-xs-12 col-sm-5">
                        <h3><?php echo $mobile_title_1; ?></h3> 
                        <p><?php echo $mobile_desc_1; ?></p>
                        <a class="work-link" href="http://www.gigglesnshit.com/">Explore the site</a>
                    </div><!-- /.col-xs-12 col-sm-5 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </article><!-- /#work-mobile -->
        <article id="work2-mobile">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-7 visible-xs">

                        <!-- if user work image uploaded -->
                        <!-- if work image field is not empty. if statement different syntax -->
                        <?php if( !empty($mobile_image_1) ) : ?>

                            <!-- grabs url of image and alt from the acf array -->
                            <img class="img-responsive" src="<?php echo $mobile_image_2['url']; ?>" alt="<?php echo $mobile_image_2['alt']; ?>">

                        <?php endif; ?>

                    </div><!-- /.col-xs-12 col-sm-7 -->
                    <div class="col-xs-12 col-sm-5">
                        <h3><?php echo $mobile_title_2; ?></h3> 
                        <p><?php echo $mobile_desc_2; ?></p>
                        <a class="work-link" href="http://www.defaga.com/">Explore the site</a>
                    </div><!-- /.col-xs-12 col-sm-5 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </article><!-- /#work2-mobile -->
        <article id="work3-mobile">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-7">
                        <!-- if user work image uploaded -->
                        <!-- if work image field is not empty. if statement different syntax -->
                        <?php if( !empty($mobile_image_3) ) : ?>

                            <!-- grabs url of image and alt from the acf array -->
                            <img class="img-responsive" src="<?php echo $mobile_image_3['url']; ?>" alt="<?php echo $mobile_image_3['alt']; ?>">

                        <?php endif; ?>

                    </div><!-- /.col-xs-12 col-sm-7 -->
                    <div class="col-xs-12 col-sm-5">
                        <h3><?php echo $mobile_title_3; ?></h3> 
                        <p><?php echo $mobile_desc_3; ?></p>
                    </div><!-- /.col-xs-12 col-sm-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </article><!-- /#work3-mobile -->
    </div><!-- /.mobile visible-xs text-center -->

    <div class="desktop hidden-xs">
        <article id="work">
            <div class="container-fluid">
                <div class="row">
                    <div class="text-wrap col-sm-6 col-sm-offset-3">
                        <h2><?php echo $work_section_title; ?></h2>
                        <p class="lead"><?php echo $work_section_desc; ?></p>
                    </div><!-- /.text-wrap col-sm-6 col-sm-offset-3 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-sm-7">

                        <!-- if user work image uploaded -->
                        <!-- if work image field is not empty. if statement different syntax -->
                        <?php if( !empty($work_image_1) ) : ?>

                            <!-- grabs url of image and alt from the acf array -->
                            <img width="70%" class="img-responsive" src="<?php echo $work_image_1['url']; ?>" alt="<?php echo $work_image_1['alt']; ?>">

                        <?php endif; ?>

                    </div><!-- /.col-sm-7 -->
                    <div class="col-sm-5 description">
                        <h3><?php echo $work_1_title; ?></h3> 
                        <p><?php echo $work_1_desc; ?></p>
                        <a class="work-link" href="http://www.gigglesnshit.com/">Explore the site</a>
                    </div><!-- /.col-sm-5 description -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </article><!-- /#work -->
        <article id="work2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-7 visible-xs">
                        <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/responsive-gunclub.png" alt="gun club site on different screens">
                    </div><!-- /.col-sm-7 visible-xs -->
                    <div class="col-sm-5 description">
                        <h3><?php echo $work_2_title; ?></h3> 
                        <p><?php echo $work_2_desc; ?></p>
                        <a class="work-link" href="http://www.defaga.com/">Explore the site</a>
                    </div><!-- /.col-sm-5 description -->
                    <div class="col-sm-7 hidden-xs">

                        <!-- if user work image uploaded -->
                        <!-- if work image field is not empty. if statement different syntax -->
                        <?php if( !empty($work_image_1) ) : ?>

                            <img class="img-responsive right-block" src="<?php echo $work_image_2['url']; ?>" alt="<?php echo $work_image_2['alt']; ?>">

                        <?php endif; ?>

                    </div><!-- /.col-sm-7 hidden-xs -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </article><!-- /#work2 -->
        <article id="work3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-7">

                        <!-- if user work image uploaded -->
                        <!-- if work image field is not empty. if statement different syntax -->
                        <?php if( !empty($work_image_1) ) : ?>

                            <img width="70%" class="img-responsive" src="<?php echo $work_image_3['url']; ?>" alt="<?php echo $work_image_3['alt']; ?>">

                        <?php endif; ?>

                    </div><!-- /.col-sm-7 -->
                    <div class="col-sm-5 description">
                        <h3><?php echo $work_3_title; ?></h3> 
                        <p><?php echo $work_3_desc; ?></p>
                        <a class="work-link" href="http://www.soontobesobey.com/">Explore the site</a>
                    </div><!-- /.col-sm-5 description -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </article><!-- /#work3 -->
    </div><!-- /.desktop hidden-xs -->
</section><!-- /#worksection -->
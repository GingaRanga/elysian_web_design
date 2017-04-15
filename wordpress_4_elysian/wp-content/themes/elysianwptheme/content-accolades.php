<?php

    // Custom Fields
    global $post;

    $email_href                 = get_post_meta($post->ID, 'email_href', true);
    $proposal_button            = get_post_meta($post->ID, 'proposal_button', true);
    $proposal_target            = get_post_meta($post->ID, 'proposal_target', true);

    // Accolades Section
    $accolades_image            = get_field('accolades_image');
    $accolades_title            = get_field('accolades_title');
    $accolades_body             = get_field('accolades_body');

?>
       
<!-- ACCOLADES SECTION ==================================================================================================================================================== -->
<section id="accolades">
    <div class="container">
        <div class="row">

            <!-- if user accolades image uploaded -->
            <!-- if work image field is not empty. if statement different syntax -->
            <?php if( !empty($accolades_image) ) : ?>

                <img class="img-responsive" src="<?php echo $accolades_image['url']; ?>" alt="<?php echo $accolades_image['alt']; ?>">

            <?php endif; ?>

            <div class="col-xs-12 visible-xs text-center">
                <h2><?php echo $accolades_title; ?></h2>
                <p class="lead"><?php echo $accolades_body; ?></p>
                <hr>
            </div><!-- /.col-xs-12 visible-xs text-center -->
            <div class="text-wrap col-sm-6 col-sm-offset-3 hidden-xs">
                <h2><?php echo $accolades_title; ?></h2>
                <p class="lead"><?php echo $accolades_body; ?></p>
            </div><!-- /.text-wrap col-sm-6 col-sm-offset-3 hidden-xs -->
        </div><!-- /.row -->
        <div class="mobile visible-xs text-center">
            <div class="row">

                <!-- create new loop and access custom post type for services using wordpress fxn -->
                <!-- create var called loop and store a WP array for custom post type (CPT) services offered, ordered by id and ascending -->
                <?php $loop = new WP_Query( array( 'post_type' => 'accolades', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>

                <!-- check to see if loop has posts and access posts from CPT. Same for all CPT -->
                <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

                    <!-- no acf used below it is all native WP using CPT -->
                    <div class="col-xs-12">
                        <!-- check if there is a post thumbnail img or feature image. this grabs the feature img if there is one below. add an else statement to the if to display image if none uploaded -->
                        <img class="img-responsive img-circle center-block" src="<?php if( has_post_thumbnail() ){ the_post_thumbnail_url(); } ?>">
                        <blockquote>
                            <!-- CPT content in content editor -->
                            <p><?php the_content(); ?></p>
                            <!-- CPT title -->
                            <small><?php the_title(); ?></small>
                        </blockquote>
                        <hr>
                    </div><!-- /.col-xs-12 -->

                <!-- close the while loop -->
                <?php endwhile; wp_reset_query(); ?>

            </div><!-- /.row -->
        </div><!-- /.mobile visible-xs text-center -->

        <div class="desktop hidden-xs">
            <div class="row">

                <!-- create new loop and access custom post type for services using wordpress fxn -->
                <!-- create var called loop and store a WP array for custom post type (CPT) services offered, ordered by id and ascending -->
                <?php $loop = new WP_Query( array( 'post_type' => 'accolades', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>

                <!-- check to see if loop has posts and access posts from CPT. Same for all CPT -->
                <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

                    <!-- no acf used below it is all native WP using CPT -->
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-sm-3">
                                <!-- check if there is a post thumbnail img or feature image. this grabs the feature img if there is one below. add an else statement to the if to display image if none uploaded -->
                                <img class="img-responsive img-circle" src="<?php if( has_post_thumbnail() ){ the_post_thumbnail_url(); } ?>">
                            </div><!-- /.col-sm-3 -->
                            <div class="col-sm-9">
                                <blockquote>
                                <!-- CPT content in content editor -->
                                    <p><?php the_content(); ?></p>
                                    <!-- CPT title -->
                                    <small><?php the_title(); ?></small>
                                </blockquote>
                            </div><!-- /.col-sm-9 -->
                        </div><!-- /.row -->
                    </div><!-- /.col-sm-4 -->

                <!-- close the while loop -->
                <?php endwhile; wp_reset_query(); ?>

            </div><!-- /.row -->
        </div><!-- /.desktop hidden-xs -->
    </div><!-- /.container -->
</section><!-- /#accolades -->
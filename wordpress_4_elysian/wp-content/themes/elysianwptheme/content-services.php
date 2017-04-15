<?php 

    // Custom Fields
    global $post;

    $email_href                 = get_post_meta($post->ID, 'email_href', true);
    $proposal_button            = get_post_meta($post->ID, 'proposal_button', true);
    $proposal_target            = get_post_meta($post->ID, 'proposal_target', true);

    // Services Section
    $services_offered_title     = get_field('services_offered_title'); 
    $services_offered_header    = get_field('services_offered_header');

?>

<!-- SERVICES SECTION ===================================================================================================================================================== -->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 visible-xs">
                <h2><?php echo $services_offered_title; ?></h2>
                <p class="lead"><?php echo $services_offered_header; ?></p>
                <hr>
            </div><!-- /.col-xs-12 visible-xs -->
            <div class="text-wrap col-sm-6 col-sm-offset-3 hidden-xs">
                <h2><?php echo $services_offered_title; ?></h2>
                <p class="lead"><?php echo $services_offered_header; ?></p>
            </div><!-- /.text-wrap col-sm-6 col-sm-offset-3 hidden-xs -->
        </div><!-- /.row -->
        <div class="row">

            <!-- create new loop and access custom post type for services using wordpress fxn -->
            <!-- create var called loop and store a WP array for custom post type (CPT) services offered, ordered by id and ascending -->
            <?php $loop = new WP_Query( array( 'post_type' => 'services_offered', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>

            <!-- check to see if loop has posts and access posts from CPT. Same for all CPT -->
            <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

                <!-- below the icon is a acf so use built in wp fxn the_field and grab the acf name. Don't need to grab anything from acf for title because it is built into each of the services CPT and do the same for description which is pulled from acf -->
                <!-- there are some advanced custom fields (ACF) put into CPT for ex. found in the_field fxns below whereas the_title does not have an ACF because it is built into each of the services CPT -->
                <!-- use the_field instead of the get_field because it displays value of specified fields and is the same as using echo get_field() whereas get_field is more global and would not actually display the icons without more info. Essentiallt the_field echos the info and get_field you would need to add more parameters in order to echo the data -->
                <div class="col-sm-4 col-xs-12 service-opt">
                    <i class="<?php the_field('services_offered_icon'); ?>" aria-hidden="true"></i>
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_field('services_section_description'); ?></p>
                </div><!-- /.col-sm-4 col-xs-12 service-opt -->

            <!-- close the while loop -->
            <?php endwhile; wp_reset_query(); ?>

        </div><!-- /.row -->
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="<?php echo $proposal_target; ?>"><?php echo $proposal_button; ?></button>
    </div><!-- /.container -->
</section><!-- /#services -->
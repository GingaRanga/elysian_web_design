<?php

    // Custom Fields
    global $post;

    $email_href                 = get_post_meta($post->ID, 'email_href', true);
    $proposal_button            = get_post_meta($post->ID, 'proposal_button', true);
    $proposal_target            = get_post_meta($post->ID, 'proposal_target', true);

    // Contact Section
    $contact_header             = get_field('contact_header');

?>
       
<!-- CONTACT SECTION ====================================================================================================================================================== -->
<section id="contact" class="text-center">
    <div class="container">
        <div class="row">
            <div class="text-wrap col-sm-6 col-sm-offset-3">
                <h2><?php echo $contact_header; ?></h2>
            </div><!-- /.text-wrap col-sm-6 col-sm-offset-3 -->
            <div class="col-sm-12">
                <span><i class="fa fa-comments fa-4x" aria-hidden="true"></i></span><br>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="<?php echo $proposal_target; ?>"><?php echo $proposal_button; ?></button>
            </div><!-- /.col-sm-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /#contact -->    
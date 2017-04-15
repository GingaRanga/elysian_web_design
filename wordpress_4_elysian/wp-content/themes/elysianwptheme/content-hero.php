<?php

    // Custom Fields
    global $post;
    
    $email_href                 = get_post_meta($post->ID, 'email_href', true);
    $proposal_button            = get_post_meta($post->ID, 'proposal_button', true);
    $proposal_target            = get_post_meta($post->ID, 'proposal_target', true); 

?>

<!-- HERO SECTION ========================================================================================================================================================= -->
<section id="hero">
    <div id="hero-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <!-- make heading dynamic using bloginfo fxn with the argument name. Name can then be changed under general settings title on the wp dashboard -->
                    <h1><?php bloginfo('name'); ?></h1>
                    <small class="text-muted">by Evan Marshall</small>
                    <!-- make paragraph dynamic using bloginfo fxn with the argument description. Name can then be changed under general settings tagline on the wp dashboard -->
                    <p class="lead"><?php bloginfo('description'); ?></p>

                    <ul id="menu" class="mfb-component--br mfb-zoomin" data-mfb-toggle="hover">
                        <li class="mfb-component__wrap">
                            <!-- the main menu button -->
                            <a data-mfb-label="Let's get in touch&#33;" class="mfb-component__button--main">
                                <!-- the main button icon visibile by default -->
                                <i class="mfb-component__main-icon--resting material-icons">add</i>
                                <!-- the main button icon visibile when the user is hovering/interacting with the menu -->
                                <i class="mfb-component__main-icon--active material-icons">clear</i>
                            </a>
                            <ul class="mfb-component__list">
                            <!-- a child button, repeat as many times as needed -->
                                <li>
                                    <a href="#" type="button" data-toggle="modal" data-target="<?php echo $proposal_target; ?>" data-mfb-label="Request a proposal" class="mfb-component__button--child">
                                        <i class="mfb-component__child-icon material-icons">assignment</i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $email_href; ?>" target="_top" data-mfb-label="Send us an email" class="mfb-component__button--child">
                                        <i class="mfb-component__child-icon material-icons">email</i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#page-top" data-mfb-label="Back to top of page" class="mfb-component__button--child">
                                        <i class="mfb-component__child-icon material-icons">keyboard_arrow_up</i>
                                    </a>
                                </li>
                            </ul><!-- /.mfb-component__list -->
                        </li><!-- /.mfb-component__wrap -->
                    </ul><!-- /#menu -->

                </div><!-- /.col-sm-5 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.hero-wrap -->
</section><!-- /.hero -->
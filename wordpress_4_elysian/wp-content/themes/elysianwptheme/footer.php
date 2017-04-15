<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package elysian_wp_theme
 */

?>

    

<?php wp_footer(); ?>
        
<!-- FOOTER SECTION ======================================================================================================================================================= -->
        <footer id="social" class="navbar-inverse" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bar2-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand visible-xs" href="#page-top">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-blk.svg" width="70" height="70" alt="Elysian Web Design Logo">
                    </a>
                </div><!-- /.navbar-header -->
                       
                <a class="navbar-brand hidden-xs navbar-right" href="#page-top">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/banner-logo-2.svg" width="200" height="70" alt="Elysian Web Design Logo">
                </a>        
                          
                <!-- php for wordpress nav menu fxn -->
                <?php
                    wp_nav_menu( array(
                        // location found in fxn file of theme
                        'theme_location'    => 'footer',
                        // html5 tag for nav
                        'container'         => 'nav', 
                        // class of container
                        'container_class'   => 'navbar-collapse collapse bar2-collapse',
                        // menu class
                        'menu_class'        => 'nav navbar-nav navbar-left'
                        /* now need to set the menu in the wp dashboard */
                    ));
                ?>
                        
            </div><!-- /.container-fluid -->
        </footer><!-- /#social -->
        <div id="social-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <p>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>.</p>
                    </div><!-- /.col-xs-12 col-sm-6 -->
                    <div class="col-xs-12 col-sm-6 text-center">
                        <!-- Facebook -->
                        <a href="https://www.facebook.com/sharer/sharer.php?u=http://www.elysianwebdesign.com/" title="Share on Facebook" target="_blank" class="btn btn-facebook"><i class="fa fa-lg fa-facebook"></i></a>
                        <!-- Twitter -->
                        <a href="http://twitter.com/home?status=Need%20a%20website%3F%20Check%20out%3A%20http://www.elysianwebdesign.com/" title="Share on Twitter" target="_blank" class="btn btn-twitter"><i class="fa fa-lg fa-twitter"></i></a>
                        <!-- Email -->
                        <a href="mailto:webdesignelysian@gmail.com?Subject=&#91;%20Company%20Name%20&#93;%20Has%20a%20message%20for%20Elysian%20Web%20Design&#33;&body=Please%20enter%20company%20name%20in%20email%20subject%20as%20well%20as%20your%20contact%20details%20and%20we%20will%20get%20back%20to%20you%20as%20soon%20as%20we%20can%20&#58;&#41;" target="_top" title="General Email" class="btn btn-email"><i class="fa fa-lg fa-envelope"></i></a>
                        <!-- LinkedIn -->
                        <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://www.elysianwebdesign.com&media=http://www.elysianwebdesign.com/img/facebook-mobile.png&title=Elysian%20Web%20Design&summary=Need%20a%20website%3F%20Check%20out%3A%20http://www.elysianwebdesign.com/" title="Share on LinkedIn" target="_blank" class="btn btn-linkedin"><i class="fa fa-lg fa-linkedin"></i></a>
                    </div><!-- /.col-xs-12 col-sm-6 text-center -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- #social-wrap -->
        
<!-- PROPOSAL MODAL ======================================================================================================================================================= -->
        <div class="modal modal-full fade modal-top" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Request for Proposal</h4>
                        <hr>
                        <p>In order for Elysian to determine if we can provide you with the best solution&#44; please fill out as much detail as you can. If you have a general inquiry please email me at&#58; <a href="mailto:webdesignelysian@gmail.com?Subject=&#91;%20Company%20Name%20&#93;%20Has%20a%20message%20for%20Elysian%20Web%20Design&#33;&body=Please%20enter%20company%20name%20in%20email%20subject%20as%20well%20as%20your%20contact%20details%20and%20we%20will%20get%20back%20to%20you%20as%20soon%20as%20we%20can%20&#58;&#41;" target="_top">webdesignelysian@gmail.com</a></p>
                    </div><!-- /.modal-header -->
                    <div class="modal-body">
                        
                        <?php echo do_shortcode('[contact-form-7 id="59" title="Request Proposal Form"]'); ?>
                        
                    </div><!-- /.modal-body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                    </div><!-- /.modal-footer -->
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog modal-lg -->
        </div><!-- /#myModal1 -->

<!-- PAGE SCRIPTS ========================================================================================================================================================= -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha256-U5ZEeKfGNOja007MMD3YBI0A3OSZOQbeG6z2f2Y0hu8=" crossorigin="anonymous"></script>
        <!-- Material FAB JS -->
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/mfb.min.js"></script>
        <!-- Custom JS -->
        <script src="<?php bloginfo('template_directory'); ?>/assets/js/app.js"></script>

    </body>
</html>

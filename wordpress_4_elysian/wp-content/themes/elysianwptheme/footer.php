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
        
        <!-- FOOTER SECTION ================================================================================================================= -->
        <footer id="social" class="navbar-inverse" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bar2-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div><!-- /.navbar-header -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bar2-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="#services">Services</a></li>
                        <li><a href="#work">Portfolio</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#social">Social</a></li>
                    </ul>
                    <div class="nav navbar-nav navbar-right">
                        <a class="navbar-brand hidden-xs" href="/">
                            <img src="img/banner-logo-2.svg" width="200" height="70" alt="Elysian Web Design Logo">
                        </a>
                        <a class="navbar-brand visible-xs" href="/">
                            <img src="img/logo-blk.svg" width="70" height="70" alt="Elysian Web Design Logo">
                        </a>
                    </div>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </footer>
        <div id="social-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <p>&copy; ELYSIAN WEB DESIGN 2017. All Rights Reserved.</p>
                    </div><!-- /.col-sm-6 -->
                    <div class="col-xs-12 col-sm-6 text-center">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=http://www.elysianwebdesign.com/" title="Share on Facebook" target="_blank" class="btn btn-facebook"><i class="fa fa-lg fa-facebook"></i></a>
                        <a href="http://twitter.com/home?status=Need%20a%20website%3F%20Check%20out%3A%20http://www.elysianwebdesign.com/" title="Share on Twitter" target="_blank" class="btn btn-twitter"><i class="fa fa-lg fa-twitter"></i></a>
                        <a href="mailto:webdesignelysian@gmail.com?Subject=&#91;%20Company%20Name%20&#93;%20Has%20a%20message%20for%20Elysian%20Web%20Design&#33;&body=Please%20enter%20company%20name%20in%20email%20subject%20as%20well%20as%20your%20contact%20details%20and%20we%20will%20get%20back%20to%20you%20as%20soon%20as%20we%20can%20&#58;&#41;" target="_top" title="General Email" class="btn btn-email"><i class="fa fa-lg fa-envelope"></i></a>
                        <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://www.elysianwebdesign.com&media=http://www.elysianwebdesign.com/img/facebook-mobile.png&title=Elysian%20Web%20Design&summary=Need%20a%20website%3F%20Check%20out%3A%20http://www.elysianwebdesign.com/" title="Share on LinkedIn" target="_blank" class="btn btn-linkedin"><i class="fa fa-lg fa-linkedin"></i></a>
                    </div><!-- /.col-sm-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- #social-wrap -->
        
        <!-- PROPOSAL MODAL ================================================================================================================= -->
        <div class="modal modal-full fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Request for Proposal</h4>
                        <hr>
                        <p>In order for Elysian to determine if we can provide you with the best solution&#44; please fill out as much detail as you can. If you have a general inquiry please email me at&#58; <a href="mailto:webdesignelysian@gmail.com?Subject=&#91;%20Company%20Name%20&#93;%20Has%20a%20message%20for%20Elysian%20Web%20Design&#33;&body=Please%20enter%20company%20name%20in%20email%20subject%20as%20well%20as%20your%20contact%20details%20and%20we%20will%20get%20back%20to%20you%20as%20soon%20as%20we%20can%20&#58;&#41;" target="_top">webdesignelysian@gmail.com</a></p>
                    </div><!-- /.modal-header -->
                    <div class="modal-body">
                        <form>
                            <fieldset>
                                <legend>Company / Personal Info</legend>
                                <div class="form-group form-group-lg">
                                    <label for="formName">Full name</label>
                                    <input type="text" class="form-control" id="formName" placeholder="Jane Doe">
                                </div><!-- /.form-group -->
                                <div class="form-group form-group-lg">
                                    <label for="formCompany">Company name</label>
                                    <input type="text" class="form-control" id="formCompany" placeholder="Jane Doe Ltd">
                                </div><!-- /.form-group -->
                                <div class="form-group form-group-lg">
                                    <label for="formTitle">Your position</label>
                                    <input type="text" class="form-control" id="formTitle" placeholder="CTO, manager, president, etc.">
                                </div><!-- /.form-group -->
                                <div class="form-group form-group-lg">
                                    <label for="formEmail">Email address</label>
                                    <input type="email" class="form-control" id="formEmail" placeholder="email@example.com">
                                </div><!-- /.form-group -->
                                <div class="form-group form-group-lg">
                                    <label for="formPhone">Phone number</label>
                                    <input type="tel" class="form-control" id="formPhone" placeholder="XXX-XXX-XXXX">
                                </div><!-- /.form-group -->
                                <div class="form-group form-group-lg">
                                    <label for="formURL">Website</label>
                                    <input type="url" class="form-control" id="formURL" placeholder="www.example.com">
                                </div><!-- /.form-group -->
                                <hr>
                                <legend>Project Info</legend>
                                <div class="form-group form-group-lg">
                                    <label for="formScope">Project scope</label>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">Full website build
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">Website revision
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">Consultation
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">WordPress website
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="formScope">&Aacute; la Carte Services</label>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">Responsive website
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">Pagespeed optimization
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">Search engine optimization
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">Brand &#45; logo design
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">Analytics &amp; competitive analysis
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">Social media marketing
                                        </label>
                                    </div>
                                    <label for="formOther">Other</label>
                                    <textarea class="form-control" id="formOther" rows="3" placeholder="Please state anything specific you would like to request for your webpage..."></textarea>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="formBudget">Your budget</label>
                                    <select class="form-control">
                                        <option value="1000"><&#36;1K</option>
                                        <option value="2000">&#36;1K &#45; &#36;2K</option>
                                        <option value="3000">&#36;2K &#45; &#36;3K</option>
                                        <option value="4000">&#36;3K &#45; &#36;4K</option>
                                        <option value="10000">>&#36;4K</option>
                                        <option>no budget set</option>
                                    </select>
                                </div>
                                <div class="form-group form-group-lg">
                                    <label for="formText">Project specifics</label>
                                    <textarea class="form-control" id="formText" rows="3" placeholder="Please state specific to your project, such as: timeline, goal of the project, do you want to manage future updates or not, a bit about your company..."></textarea>
                                </div><!-- /.form-group -->
                                <div class="form-group form-group-lg">
                                    <label for="formRef">How did you hear about Elysian&#63;</label>
                                    <textarea class="form-control" id="formRef" rows="3" placeholder="Please state how you heard about Elysian Web Design, be it: Google search, friend referral, etc..."></textarea>
                                </div><!-- /.form-group -->
                            </fieldset>
                        </form>
                    </div><!-- /.modal-body -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div><!-- /.modal-footer -->
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- PAGE SCRIPTS =================================================================================================================== -->
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

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <meta name="description" content="">
        <meta name="author" content="Evan Marshall">
        <link rel="icon" href="">
        <meta name="description" content="A small web design company specializing in modern, responsive, and fast webpages.">
        <meta name="keywords" content="website, webpage, design, bootstrap, wordpress, responsive, business, code, pagespeed, social, analytics, custom, web design company, nova scotia, canada">
        <title>Elysian Web Design &#124; Beautiful Creations</title>
        
        <!-- FACEBOOK GRAPH DATA ============================================================================================================ -->
        <meta property="og:url" content="http://www.elysianwebdesign.com" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Main Business Page" />
        <meta property="og:description" content="A small web design company specializing in modern, responsive, and fast webpages." />
        <meta property="og:image" content="http://www.elysianwebdesign.com/img/facebook-mobile.jpg" />
        <meta property="fb:app_id" content="970981369664540"/>
        <meta property="og:site_name" content="Elysian Web Design"/>
    
        <!-- TWITTER SHARE CARD - also uses open graph data ================================================================================= -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@elysianwdesign" />
        <meta name="twitter:creator" content="@elysianwdesign" /> 
        
        <!-- Modernizr JS - for MFB touchscreen devices -->
        <script src="js/modernizr.touch.js"></script>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <!-- Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- FontAwesome CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
        <!-- Main CSS including Bootstrap -->
        <link href="css/app.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body id="page-top">
      
        <!-- Figure out how to do banner above nav which disappears on scroll
        <header>
            <div class="container-fluid">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam eos placeat nemo explicabo et velit iusto, dolores debitis eum laboriosam rem nostrum itaque inventore optio, natus deleniti illum repellendus architecto!</div>
        </header>
        -->
       
        <!-- NAV ============================================================================================================================ -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand hidden-xs" href="/">
                        <img src="img/banner-logo-2.svg" width="200" height="70" alt="Elysian Web Design Logo">
                    </a>
                    <a class="navbar-brand visible-xs" href="/">
                        <img src="img/logo-blk.svg" width="70" height="70" alt="Elysian Web Design Logo">
                    </a>
                </div><!-- /.navbar-header -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#services">Services</a></li>
                        <li><a href="#work">Portfolio</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#social">Social</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        
        <!-- HERO SECTION =================================================================================================================== -->
        <section id="hero">
            <div id="hero-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <h1 style="margin-bottom:0;">Elysian Web Design</h1>
                            <small class="text-muted">by Evan Marshall</small>
                            <p class="lead">Based in the humble Annapolis valley&#44; Elysian adds a personal touch to your website design&#44; which puts it a step above the rest</p>
                            <!-- <a href="#"><i class="fa fa-4x fa-circle" aria-hidden="true"></i></a> -->

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
                                            <a href="#" type="button" data-toggle="modal" data-target="#myModal1" data-mfb-label="Request a proposal" class="mfb-component__button--child">
                                                <i class="mfb-component__child-icon material-icons">assignment</i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="mailto:webdesignelysian@gmail.com?Subject=&#91;%20Company%20Name%20&#93;%20Has%20a%20message%20for%20Elysian%20Web%20Design&#33;&body=Please%20enter%20company%20name%20in%20email%20subject%20as%20well%20as%20your%20contact%20details%20and%20we%20will%20get%20back%20to%20you%20as%20soon%20as%20we%20can%20&#58;&#41;" target="_top" data-mfb-label="Send us an email" class="mfb-component__button--child">
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

                        </div><!-- /#hero-text -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.wrap -->
        </section>
        
        <!-- SERVICES SECTION =============================================================================================================== -->
        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="text-wrap col-sm-6 col-sm-offset-3">
                        <h2>Services Offered</h2>
                        <p class="lead">All the latest technologies to get your website noticed&#46; Elysian will work with you to get the solution you need&#33;</p>
                    </div><!-- /.text-wrap -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-sm-12 col-md-4 service-opt">
                        <i class="fa fa-code fa-3x" aria-hidden="true"></i>
                        <h3>Custom Site or Revisions</h3>
                        <p>Have an idea for a logo&#44; blog&#44; or an e&#45;commerce website&#63; Or do you have an existing website which just isn&#39;t doing it for you&#63; Whether you need something as simple as a checkout cart on your online shop or a new fully designed website&#44; Elysian Web Design has got you covered&#33;</p>
                    </div>
                    <div class="col-sm-12 col-md-4 service-opt">
                        <i class="fa fa-mobile fa-3x" aria-hidden="true"></i>
                        <h3>Responsive Websites</h3>
                        <p>Cell phones&#44; tablets&#44; phablets&#44; desktops&#44; and laptops&#46; This day and age we are viewing websites on many different screen sizes&#46; Don't make your viewer&#39;s have to pinch&#45;to&#45;zoom&#44; tap buttons furiously&#44; or even worse&#59; leave your website&#46; I can make your website responsive&#46;</p>
                    </div>
                    <div class="col-sm-12 col-md-4 service-opt">
                        <i class="fa fa-wordpress fa-3x" aria-hidden="true"></i>
                        <h3>Custom WordPress</h3>
                        <p>Do you plan on having access to your website files as well as easily making minor edits to your site on your own&#63; Or do you just want your site&#39;s driving force to be managed by the world&#39;s top and most secure content management systems &#40;CMS&#41; around&#63; I can get you setup on WordPress for your&#44; self maintained blog&#44; or I can build you a fully customized website of your choice on WordPress&#39; amazingly reliable platform&#46;</p>
                    </div> 
                    <div class="col-sm-12 col-md-4 service-opt">
                        <i class="fa fa-bar-chart fa-3x" aria-hidden="true"></i>
                        <h3>Analytics &amp; Business Analysis</h3>
                        <p>What is the point of having a beautiful website with lots of traffic&#44; but not knowing who or what type of client is driving said traffic&#63; Even more&#44; why wouldn&#39;t you want to know what is and what isn&#39;t working for your competition&#63; With Elysian&#39;s business solutions&#44; you will not only be in the known with similar companies&#44; but you will also know the specifics of who is viewing your website&#46; Wouldn&#39;t it be nice to know what parts of your site your viewers are clicking the most or what age the majority of viewers are&#63;</p>
                    </div>
                    <div class="col-sm-12 col-md-4 service-opt">
                        <i class="fa fa-facebook fa-3x" aria-hidden="true"></i>
                        <h3>Social Media Marketing</h3>
                        <p>If your websites doesn&#39;t have a presence on social media&#44; you are missing out on a <span class="uppercase">huge</span> opportunity&#33; My experience working with the top social media application program interfaces &#40;API&#41; will allow your website to be as integrated as you need&#46; As advanced as displaying your Facebook newsfeed on the site or a simple link&#45;to&#45;post on Twitter&#44; Elysian can make it happen&#33;</p>
                    </div>   
                    <div class="col-sm-12 col-md-4 service-opt">
                        <i class="fa fa-search-plus fa-3x" aria-hidden="true"></i>
                        <h3>SEO &amp; Pagespeed</h3>
                        <p>There is nothing worse than clicking on a link to a local coffee shop and waiting for five minutes for the site to load&#46; Yes&#44; we are in the age of&#44; "two seconds is way too long&#33;" and so are your clients&#44; There is quite a bit that goes on&#44; "behind the scenes" to make those great sites load in an instant&#44; and I can make it happen&#46; Perhaps&#44; just as important as speed&#44; is making sure your website is found in a presentable manner on the worlds top search engines &#40;i&#46;e&#46; Google&#41;&#46; I will make sure your site is easily found as well as looking good when your viewers try to find you&#46;</p>
                    </div>
                </div>
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal1">Let&#39;s Chat</button>
            </div>
        </section>
        
        <!-- OUR WORK SECTION =============================================================================================================== -->
        <article id="work">
            <div class="container-fluid">
                <div class="row">
                    <div class="text-wrap col-sm-6 col-sm-offset-3">
                        <h2>Current Work</h2>
                        <p class="lead">Sleek and modern design with a business work&#45;horse under the hood&#46;</p>
                    </div><!-- /.text-wrap -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-sm-7">
                        <img class="img-responsive" src="img/responsive-blog.png" alt="blog site on different screens">
                    </div><!-- /.col-md-7 -->
                    <div class="col-sm-5 description">
                        <h2>Google AMP Blog Website</h2> 
                        <p>A personal blog page which has achieved upwards of 2000 viewers per post and utilizes Google&#39;s Accelerated Mobile Pages principles&#46;</p>
                        <a class="work-link" href="http://www.gigglesnshit.com/">Explore the site</a>
                    </div><!-- /.col-md-5 -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </article>
        <article id="work2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-7 visible-xs">
                        <img class="img-responsive" src="img/responsive-gunclub.png" alt="gun club site on different screens">
                    </div><!-- /.col-md-7 -->
                    <div class="col-sm-5 description">
                        <h2>Single Page Gun Club Website</h2> 
                        <p>A single page gun club website which helped increase club membership to its highest in the first year of site launch&#46;</p>
                        <a class="work-link" href="http://www.defaga.com/">Explore the site</a>
                    </div><!-- /.col-md-5 -->
                    <div class="col-sm-7 hidden-xs">
                        <img class="img-responsive" src="img/responsive-gunclub.png" alt="gun club site on different screens">
                    </div><!-- /.col-md-7 -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </article>
        <article id="work3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-7">
                        <img class="img-responsive" src="img/responsive-wedding.png" alt="wedding site on different screens">
                    </div><!-- /.col-md-7 -->
                    <div class="col-sm-5 description">
                        <h2>Dynamic Wedding Website</h2> 
                        <p>A dynamic wedding website which made it easy for the couple&#39;s families to access all of the information they needed whilst having an easy to use user interface &#40;UI&#41;&#46;</p>
                        <a class="work-link" href="http://www.soontobesobey.com/">Explore the site</a>
                    </div><!-- /.col-md-5 -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </article>
        
        <!-- ACCOLADES SECTION ============================================================================================================== -->
        <section id="accolades">
            <div class="container">
                <div class="row">
                    <div class="text-wrap col-sm-6 col-sm-offset-3">
                        <h2>What people are saying</h2>
                        <p class="lead">Just a few of Elysian&#39;s great clients could&#39;t help but express their love!</p>
                    </div><!-- /.text-wrap -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-sm-3">
                                <img class="img-responsive img-circle" src="img/sean.jpg" alt="wedding website client">
                            </div><!-- /.col-sm-3 -->
                            <div class="col-sm-9">
                                <blockquote>
                                    <p>"Evan was very quick and we were never waiting on him. If we had a timeline I wanted something to be ready for, he always met it. If there was ever something we disliked or wanted changed, he was so awesome at listening to our concerns, validating them and in a few instances, giving us better ideas than we had ourselves. Evan is so good at what he does and we would highly recommend him for anyone who has professional website development needs."</p>
                                    <small>Sean Sobey <cite title="Intermediate Process Engineer">Intermediate Process Engineer at ABM</cite></small>
                                </blockquote>
                            </div><!-- /.col-sm-9 -->
                        </div><!-- /.row -->
                    </div><!-- /.col-sm-12 col-md-4 -->
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-sm-3">
                                <img class="img-responsive img-circle" src="img/dave.jpg" alt="defaga gun club website client">
                            </div><!-- /.col-sm-3 -->
                            <div class="col-sm-9">
                                <blockquote>
                                    <p>"Elysian Web Design created a very informative and attractive website for our Gun Club&#46; Evan easily understood our desire to be more visible and built us a professional website&#46; Traffic on our site continues to increase and our Club Membership continues to grow&#44; reaching an all time high last year&#46; Evan is very easy to work with and I would recommend his services&#46;"</p>
                                    <small>David Handspiker <cite title="Field Service Rep">Field Service Rep at Roche Diagnostics</cite></small>
                                </blockquote>
                            </div><!-- /.col-sm-9 -->
                        </div><!-- /.row -->
                    </div><!-- /.col-sm-12 col-md-4 -->
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-sm-3">
                                <img class="img-responsive img-circle" src="img/tabitha.jpg" alt="wedding website client">
                            </div><!-- /.col-sm-3 -->
                            <div class="col-sm-9">
                                <blockquote>
                                    <p>"Evan not only created a beautiful looking website, but an easy to navigate, fun and interactive one that went above and beyond. He was so detail oriented. He made it SO easy for our guests to navigate the site and learn everything there was to know about our wedding such as accomodations, information on the venue and how to get to it and other special information that is just to too hard to put on every invitation but things that we needed our guests to know. Thanks Evan for being such an important part to our special day!!"</p>
                                    <small>Tabitha Wells <cite title="Registered Nurse">Registered Nurse at IWK Health Centre</cite></small>
                                </blockquote>
                            </div><!-- /.col-sm-9 -->
                        </div><!-- /.row -->
                    </div><!-- /.col-sm-12 col-md-4 -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section><!-- /#accolades -->
        
        <!-- CONTACT SECTION ================================================================================================================ -->
        <section id="contact" class="text-center">
            <div class="container">
                <div class="row">
                    <div class="text-wrap col-sm-6 col-sm-offset-3">
                        <h2>Let&#39;s talk about how we can get your business noticed</h2>
                    </div><!-- /.text-wrap col-sm-6 col-sm-offset-3 -->
                    <div class="row">
                        <div class="col-sm-12">
                            <span><i class="fa fa-comments fa-4x" aria-hidden="true"></i></span><br>
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Let&#39;s Chat</button>
                        </div><!-- /.col-sm-12 col-md-4 -->
                    </div><!-- /.row -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
        
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
                        <ul class="nav">
                            <li>
                                <a>&copy; ELYSIAN WEB DESIGN 2017. All Rights Reserved.</a>
                            </li>
                        </ul>
                    </div><!-- /.col-sm-6 -->
                    <div class="col-xs-12 col-sm-4 col-sm-offset-2 text-center">
                        <ul class="nav nav-pills">
                            <li>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=http://www.elysianwebdesign.com/" title="Share on Facebook" target="_blank" class="btn btn-facebook"><i class="fa fa-lg fa-facebook social-link"></i></a>
                            </li>
                            <li>
                                <a href="http://twitter.com/home?status=Need%20a%20website%3F%20Check%20out%3A%20http://www.elysianwebdesign.com/" title="Share on Twitter" target="_blank" class="btn btn-twitter"><i class="fa fa-lg fa-twitter social-link"></i></a>
                            </li>
                            <li>
                                <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://www.elysianwebdesign.com&media=http://www.elysianwebdesign.com/img/facebook-mobile.png&title=Elysian%20Web%20Design&summary=Need%20a%20website%3F%20Check%20out%3A%20http://www.elysianwebdesign.com/" title="Share on LinkedIn" target="_blank" class="btn btn-linkedin"><i class="fa fa-lg fa-linkedin social-link"></i></a>
                            </li>
                        </ul>
                    </div><!-- /.col-sm-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- #social-wrap -->
        
        <!-- PROPOSAL MODAL ================================================================================================================= -->
        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Message us</h4>
                    </div><!-- /.modal-header -->
                    <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem itaque nam velit culpa provident, harum voluptatem delectus nihil maxime suscipit eius sed deserunt nemo quos officiis dicta ut libero commodi.</p>
                        <form>
                            <div class="form-group form-group-lg">
                                <label for="formName">Full name</label>
                                <input type="text" class="form-control" id="formName" placeholder="Jane Doe">
                            </div><!-- /.form-group -->
                            <div class="form-group form-group-lg">
                                <label for="formCompany">Company Name</label>
                                <input type="text" class="form-control" id="formCompany" placeholder="Jane Doe Ltd">
                            </div><!-- /.form-group -->
                            <div class="form-group form-group-lg">
                                <label for="formEmail">Email address</label>
                                <input type="email" class="form-control" id="formEmail" placeholder="email@example.com">
                            </div><!-- /.form-group -->
                            <div class="form-group form-group-lg">
                                <label for="formText">Project specifics</label>
                                <textarea class="form-control" id="formText" rows="3" placeholder="Enter project specifics here..."></textarea>
                            </div><!-- /.form-group -->
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div><!-- /.modal-footer -->
                        </form>
                    </div><!-- /.modal-body -->
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- PAGE SCRIPTS =================================================================================================================== -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha256-U5ZEeKfGNOja007MMD3YBI0A3OSZOQbeG6z2f2Y0hu8=" crossorigin="anonymous"></script>
        <!-- Material FAB JS -->
        <script src="js/mfb.min.js"></script>
        <!-- Custom JS -->
        <script src="js/app.js"></script>
        
    </body>
</html>
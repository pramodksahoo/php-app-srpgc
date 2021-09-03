<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"       content="width=device-width, initial-scale=1.0">
        <meta name="author" content="<?php echo $seoData['meta_author']; ?>">
        <meta name="description" content="<?php echo $seoData['meta_description']; ?>">
        <link rel="icon" type="image/jpg" href="<?php echo $favicon_img; ?>" sizes="54x54">
        <title><?php echo $seoData['title']; ?></title>
        <link href="<?php echo $client_path; ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $client_path; ?>css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo $client_path; ?>css/normalize.css" rel="stylesheet">
        <link href="<?php echo $client_path; ?>css/imagehover.min.css" rel="stylesheet">
        <link href="<?php echo $client_path; ?>css/owl.carousel.min.css" rel="stylesheet">
        <link href="<?php echo $client_path; ?>css/owl.transitions.css" rel="stylesheet">
        <link href="<?php echo $client_path; ?>css/magnific-popup.css" rel="stylesheet">
        <link href="<?php echo $client_path; ?>css/style.css" rel="stylesheet">
        <link href="<?php echo $client_path; ?>css/responsive.css" rel="stylesheet">
        <link href="<?php echo $client_path; ?>css/animate.min.css" rel="stylesheet">
        <script src='https://www.google.com/recaptcha/api.js'></script>        <!--Start of Tawk.to Script-->        <script type="text/javascript">            var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date(); (function () {                var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0]; s1.async = true; s1.src = 'https://embed.tawk.to/5a437701f4461b0b4ef8ad09/default'; s1.charset = 'UTF-8'; s1.setAttribute('crossorigin', '*'); s0.parentNode.insertBefore(s1, s0); })();</script>        <!--End of Tawk.to Script-->    
    </head>
    <body>
        <div id="preloader"></div>
        <div class="top-bar">
            <div class="container">
                <div class="tphone">                    <i class="fa fa-volume-control-phone"></i> <?php echo $contactno1; ?>                </div>
                <div class="tmail">                    <i class="fa fa-paper-plane"></i>                     <a href="mailto:<?php echo $emailadd1; ?>"><?php echo $emailadd1; ?></a>                </div>
                <div class="tsocial">                    <a href="<?php echo $fb_page; ?>" target="_blank"><i class="fa fa-facebook"></i></a>                    <a href="<?php echo $twitter_page; ?>" target="_blank"><i class="fa fa-twitter"></i></a>                    <a href="<?php echo $linkin_page; ?>" target="_blank"><i class="fa fa-linkedin"></i></a>                    <a href="<?php echo $gplus_page; ?>" target="_blank"><i class="fa fa-google-plus"></i></a>                    <a href="<?php echo $youtube; ?>" target="_blank"><i class="fa fa-youtube"></i></a>                                        </div>
            </div>
        </div>
        <div class="menu-holder clearfix">
            <div class="menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mainmenu">
                                <div class="navbar navbar-nobg">
                                    <div class="navbar-header">                                        <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo $client_path; ?>img/srplogo.png" alt="SRP Global Consultants"></a>                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">                                            <span class="sr-only">Toggle navigation</span>                                            <span class="icon-bar"></span>                                            <span class="icon-bar"></span>                                            <span class="icon-bar"></span>                                        </button>                                    </div>
                                    <div class="navbar-collapse collapse">
                                        <nav>
                                            <ul class="nav navbar-nav navbar-right">
                                                <li class="<?php if ($currentUrl == "home") echo "active"; ?>">                                                    <a href="<?php echo base_url(); ?>">HOME</a>                                                </li>
                                                <li class="<?php if ($currentUrl == "aboutus") echo "active"; ?>">                                                    <a href="<?php echo base_url(); ?>aboutus">ABOUT US</a>                                                </li>
                                                <li class="<?php if ($currentUrl == "services") echo "active"; ?>">                                                    <a href="<?php echo base_url(); ?>services">SERVICES</a>                                                </li>
                                                <li class="<?php if ($currentUrl == "portfolio") echo "active"; ?>">                                                    <a href="<?php echo base_url(); ?>portfolio">PORTFOLIO</a>                                                </li>
                                                <li>                                                    <a href="<?php echo $blog; ?>" target="_blank">BLOG</a>                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-toggle" data-toggle="dropdown">UTILITIES<b class="caret"></b></a>                                                    
                                                    <ul class="dropdown-menu">
                                                        <li><a href="http://www.incometaxindia.gov.in/Pages/tax-calculators.aspx?lang=eng" target="_blank">INCOME TAX CALCULATOR</a></li>
                                                        <li><a href="http://www.mca.gov.in/mcafoportal/enquireFeePreLogin.do" target="_blank">MCA FEES CALCULATOR</a></li>
                                                    </ul>
                                                </li>
                                                <li class="<?php if ($currentUrl == "contactus") echo "active"; ?>">                                                    <a href="<?php echo base_url(); ?>contactus">CONTACT US</a>                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
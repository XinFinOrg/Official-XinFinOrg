<?php include('custom_function.php') ?>
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <meta name="description" content="<?= $desc?>" />
        <meta name="author" content="xinfin.org" />
        <meta name="google-site-verification" content="Cyc2Me8vkC1-nEbDuDD4XGU1nBAPkIOkCDGSjWp8Zus" />

        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url() ; ?>/assets/images/favicon/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url() ; ?>/assets/images/favicon/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ; ?>/assets/images/favicon/favicon-16x16.png" />
        <link rel="manifest" href="<?php echo base_url() ; ?>/assets/images/favicon/site.webmanifest" />

        <title><?= $title; ?></title>

        <!-- CSS -->
        <link rel="stylesheet" media="screen" href="<?php echo base_url() ; ?>/assets/css/bootstrap.css" />
        <link rel="stylesheet" media="screen" href="<?php echo base_url() ; ?>/assets/css/metismenu.css" />
        <link rel="stylesheet" media="screen" href="<?php echo base_url() ; ?>/assets/css/custom.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

        <!-- JS -->
        <script src="<?php echo base_url() ; ?>/assets/js/jquery-1.12.4.min.js"></script>
        <script src="<?php echo base_url() ; ?>/assets/js/popper.min.js"></script>
        <script src="<?php echo base_url() ; ?>/assets/js/bootstrap.js"></script>
        <script src="<?php echo base_url() ; ?>/assets/js/jquery.counterup.min.js"></script>
        <script src="<?php echo base_url() ; ?>/assets/js/jquery.waypoints.min.js"></script>
        <script src="<?php echo base_url() ; ?>/assets/js/metismenu.js"></script>
        <script src="<?php echo base_url() ; ?>/assets/js/progresscircle.js"></script>
        <script src="<?php echo base_url() ; ?>/assets/js/custom.js"></script>

        <!-- Theme Switcher 
	    <script src="<?php echo base_url() ; ?>/assets/js/switcher/js.cookie.js"></script>
        <script src="<?php echo base_url() ; ?>/assets/js/switcher/jquery.style.switcher.js"></script>
        
    </head>
    <body>
        
  		<!--<div class="preloader-wrap">
            <div class="loader">
              <div class="trackbar">
                <div class="loadbar"></div>
              </div>
              <div class="glow"></div>
            </div>
  		</div>-->

        <!-- SCROLL TO TOP -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>

        <!-- ============= HEADER ============= -->
        <header class="autohide header-wrapper sticky-header">
            <div class="news-bar">
                <p>
                    XDC Network will be at Future Blockchain Summit - October 15-18, 2023.
                    <a href="https://www.futureblockchainsummit.com/" target="_blank" class="news-bar-button">
                        JOIN US
                        <svg class="w-6 h-6 icon ml-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </p>

                <span class="closeNews"><i class="fas fa-close"></i></span>
            </div>

            <nav class="navbar">
                <!--<div class="navbar-content d-flex">-->
                <div class="navbar-content">
                    <div class="container d-flex align-items-center justify-content-between">
                        <div class="logo-wrapper">
                            <a class="navbar-brand" href="https://xinfin.org/">
                                <img src="<?php echo base_url() ; ?>/assets/images/xdc-network-logo-white.svg" class="logo-white img-responsive" width="150" />
                                <img src="<?php echo base_url() ; ?>/assets/images/xdc-network-logo.svg" class="logo-dark img-responsive" width="150" />
                            </a>
                        </div>
                        <div class="menu-wrapper d-flex flex-column">
                            <!--<div class="main-menu d-flex align-items-center justify-content-between">-->
                            <div class="main-menu">
                                <div class="main-menu-left d-flex align-items-center">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                Developers <span class="icon"><i class="fas fa-chevron-down"></i></span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li><a href="https://docs.xdc.community/" target="_blank">Documentation</a></li>
                                                <li><a href="https://docs.xdc.community/" target="_blank">Developer Portal</a></li>
                                                <li><a href="https://xdc.dev" target="_blank">Developers Forum</a></li>
                                                <li><a href="https://github.com/XinFinorg" target="_blank">GitHub</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="ecosystem-dapps">Ecosystem dApps</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Community <span class="icon"><i class="fas fa-chevron-down"></i></span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li><a href="developers-ecosystem-partners">Developers Ecosystem Partners</a></li>
                                                <li><a href="join-community">Join Community</a></li>
                                                <li><a href="community-bounty">Community Bounty</a></li>
                                                <li><a href="https://howto.xinfin.org/media/articles/" target="_blank">Media</a></li>
                                                <li><a href="events">Events</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Tools <span class="icon"><i class="fas fa-chevron-down"></i></span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li><a href="https://explorer.xinfin.network" target="_blank">XDC Explorer</a></li>
                                                <li><a href="https://stats1.xinfin.network" target="_blank">XDC Network Status</a></li>
                                                <li><a href="https://faucet.apothem.network" target="_blank">XDC Faucet</a></li>
                                                <li><a href="https://remix.xinfin.network" target="_blank">XDC Network Remix</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a class="cta themeSwitcher ps-0">
                                                <!--themeSwitcher Start-->
                                                <div class="themeSwitcher">
                                                    <button id="theme-toggle" class="btn btn-link btn-sm small" type="button">
                                                        <span class="d-block-light">
                                                            <svg
                                                                stroke="currentColor"
                                                                fill="currentColor"
                                                                stroke-width="0"
                                                                viewBox="0 0 24 24"
                                                                focusable="false"
                                                                class="chakra-icon css-13otjrl"
                                                                height="1.5em"
                                                                width="1.5em"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path fill="none" d="M0 0h24v24H0z"></path>
                                                                <path d="M10 2c-1.82 0-3.53.5-5 1.35C7.99 5.08 10 8.3 10 12s-2.01 6.92-5 8.65C6.47 21.5 8.18 22 10 22c5.52 0 10-4.48 10-10S15.52 2 10 2z"></path>
                                                            </svg>
                                                        </span>
                                                        <span class="d-block-dark">
                                                            <svg
                                                                stroke="currentColor"
                                                                fill="currentColor"
                                                                stroke-width="0"
                                                                viewBox="0 0 24 24"
                                                                focusable="false"
                                                                class="chakra-icon css-13otjrl"
                                                                height="1.5em"
                                                                width="1.5em"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path fill="none" d="M0 0h24v24H0z"></path>
                                                                <path
                                                                    d="M6.76 4.84l-1.8-1.79-1.41 1.41 1.79 1.79 1.42-1.41zM4 10.5H1v2h3v-2zm9-9.95h-2V3.5h2V.55zm7.45 3.91l-1.41-1.41-1.79 1.79 1.41 1.41 1.79-1.79zm-3.21 13.7l1.79 1.8 1.41-1.41-1.8-1.79-1.4 1.4zM20 10.5v2h3v-2h-3zm-8-5c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm-1 16.95h2V19.5h-2v2.95zm-7.45-3.91l1.41 1.41 1.79-1.8-1.41-1.41-1.79 1.8z"
                                                                ></path>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </div>
                                                <!--themeSwitcher End-->
                                            </a>
                                        </li>

                                        <li>
                                            <a href="ecosystem-dapps" class="cta"><button class="btn-blue">#BuildOnXDC</button></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div id="hamburger">
                            <span><i class="fas fa-bars"></i></span>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Mobile Nav -->
            <div class="mobile-nav-one-wrapper">
                <div class="row">
                    <div class="mobile-nav-wrap">
                        <div class="mobile-nav">
                            <button type="button" class="close-nav">
                                <i class="far fa-times-circle"></i>
                            </button>
                            <nav class="sidebar-nav">
                                <ul class="metismenu" id="mobile-menu">
                                    <li>
                                        <a href="#" class="has-arrow">Developers</a>
                                        <ul class="sub-menu">
                                            <li><a href="https://docs.xdc.community/" target="_blank">Documentation</a></li>
                                            <li><a href="https://docs.xdc.community/" target="_blank">Developer Portal</a></li>
                                            <li><a href="https://xdc.dev" target="_blank">Developers Forum</a></li>
                                            <li><a href="https://github.com/XinFinorg" target="_blank">GitHub</a></li>
                                        </ul>
                                    </li>
                                    <a href="ecosystem-dapps">Ecosystem dApps</a>
                                    <li>
                                        <a href="#" class="has-arrow">Community</a>
                                        <ul class="sub-menu">
                                            <li><a href="developers-ecosystem-partners">Developers Ecosystem Partners</a></li>
                                            <li><a href="join-community">Join Community</a></li>
                                            <li><a href="community-bounty">Community Bounty</a></li>
                                            <li><a href="https://howto.xinfin.org/media/articles/" target="_blank">Media</a></li>
                                            <li><a href="events">Events</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="has-arrow">Tools</a>
                                        <ul class="sub-menu">
                                            <li><a href="https://explorer.xinfin.network" target="_blank">XDC Explorer</a></li>
                                            <li><a href="https://stats1.xinfin.network" target="_blank">XDC Network Status</a></li>
                                            <li><a href="https://faucet.apothem.network" target="_blank">XDC Faucet</a></li>
                                            <li><a href="https://remix.xinfin.network" target="_blank">XDC Network Remix</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <!--<nav class="sidebar-nav mt-auto">-->
                            <nav class="sidebar-nav">
                                <ul class="metismenu" id="mobile-menu">
                                    <li>
                                        <a class="cta themeSwitcher ps-0">
                                            <!--themeSwitcher Start-->
                                            <div class="themeSwitcher">
                                                <button id="theme-toggle-mob" class="btn btn-link btn-sm small" type="button">
                                                    <span class="d-block-light">
                                                        <svg
                                                            stroke="currentColor"
                                                            fill="currentColor"
                                                            stroke-width="0"
                                                            viewBox="0 0 24 24"
                                                            focusable="false"
                                                            class="chakra-icon css-13otjrl"
                                                            height="1.5em"
                                                            width="1.5em"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                                            <path d="M10 2c-1.82 0-3.53.5-5 1.35C7.99 5.08 10 8.3 10 12s-2.01 6.92-5 8.65C6.47 21.5 8.18 22 10 22c5.52 0 10-4.48 10-10S15.52 2 10 2z"></path>
                                                        </svg>
                                                    </span>
                                                    <span class="d-block-dark">
                                                        <svg
                                                            stroke="currentColor"
                                                            fill="currentColor"
                                                            stroke-width="0"
                                                            viewBox="0 0 24 24"
                                                            focusable="false"
                                                            class="chakra-icon css-13otjrl"
                                                            height="1.5em"
                                                            width="1.5em"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                                            <path
                                                                d="M6.76 4.84l-1.8-1.79-1.41 1.41 1.79 1.79 1.42-1.41zM4 10.5H1v2h3v-2zm9-9.95h-2V3.5h2V.55zm7.45 3.91l-1.41-1.41-1.79 1.79 1.41 1.41 1.79-1.79zm-3.21 13.7l1.79 1.8 1.41-1.41-1.8-1.79-1.4 1.4zM20 10.5v2h3v-2h-3zm-8-5c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm-1 16.95h2V19.5h-2v2.95zm-7.45-3.91l1.41 1.41 1.79-1.8-1.41-1.41-1.79 1.8z"
                                                            ></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </div>
                                            <!--themeSwitcher End-->
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="cta"><button class="btn-blue">#BuildOnXDC</button></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
        </header>
    </head>
</html>
<?php include('custom_function.php') ?>
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="description" content="<?= $desc?>">
        <meta name="author" content="xinfin.org">
        <meta name="google-site-verification" content="Cyc2Me8vkC1-nEbDuDD4XGU1nBAPkIOkCDGSjWp8Zus" />
        <link rel="icon" href="<?php echo base_url() ; ?>/assets/images/favicon.ico">
        <title>
            <?= $title; ?>
        </title>
        
        
        <!-- CSS -->
        <link rel="stylesheet" media="screen" href="<?php echo base_url() ; ?>/assets/bootstrap-5/css/bootstrap.css">
        <link rel="stylesheet" media="screen" href="<?php echo base_url() ; ?>/assets/bootstrap-5/css/metismenu.css">
        <link rel="stylesheet" media="screen" href="<?php echo base_url() ; ?>/assets/bootstrap-5/css/custom.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        
        <!-- JS -->
        <script src="<?php echo base_url() ; ?>/assets/bootstrap-5/js/jquery-1.12.4.min.js"></script>
        <!--<script src="<?php echo base_url() ; ?>/assets/bootstrap-5/js/popper.min.js"></script>-->
        <script src="<?php echo base_url() ; ?>/assets/bootstrap-5/js/bootstrap.js"></script>
        <!--<script src="<?php echo base_url() ; ?>/assets/bootstrap-5/js/jquery.counterup.min.js"></script>-->
        <script src="<?php echo base_url() ; ?>/assets/bootstrap-5/js/metismenu.js"></script>
        <script src="<?php echo base_url() ; ?>/assets/bootstrap-5/js/progresscircle.js"></script>
        <script src="<?php echo base_url() ; ?>/assets/bootstrap-5/js/custom.js"></script>
        
        
    </head>
    <body>
        <!-- SCROLL TO TOP -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- ============= HEADER ============= -->
        <header class="header-wrapper sticky-header">
            <nav class="navbar">
                <!--<div class="navbar-content d-flex">-->
                <div class="navbar-content">
                    <div class="container d-flex align-items-center justify-content-between">
                        <div class="logo-wrapper">
                            <a class="navbar-brand" href="#">
                                <img src="<?php echo base_url() ; ?>/assets/images/xinfin-logo-white.png" class="logo-white img-responsive" width="60">
                                <img src="<?php echo base_url() ; ?>/assets/images/xinfin-logo-dark.png" class="logo-dark img-responsive" width="60">
                            </a>
                        </div>
                        <div class="menu-wrapper d-flex flex-column">
                            <!--<div class="main-menu d-flex align-items-center justify-content-between">-->
                            <div class="main-menu">
                                <div class="main-menu-left d-flex align-items-center">
                                    <ul>
                                        <li>
                                            <a href="#">Developers <span class="icon"><i class="fas fa-chevron-down"></i></span></a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Documentation</a></li>
                                                <li><a href="https://howto.xinfin.org" target="_blank">Developer Portal</a></li>
                                                <li><a href="https://xdc.dev" target="_blank">Developers Forum</a></li>
                                                <li><a href="#">Bug Bounty</a></li>
                                                <li><a href="https://github.com/XinFinorg" target="_blank">GitHub</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="ecosystem-dapps">Ecosystem dApps</a>
                                        </li>
                                        <li>
                                            <a href="#">Community <span class="icon"><i class="fas fa-chevron-down"></i></span></a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Ecosystem Partners</a></li>
                                                <li><a href="#">Join Community</a></li>
                                                <li><a href="#">Apply for Funding</a></li>
                                                <li><a href="#">Media</a></li>
                                            </ul>
                                        </li>
    
                                        <li>
                                            <a href="#">Tools <span class="icon"><i class="fas fa-chevron-down"></i></span></a>
                                            <ul class="sub-menu">
                                                <li><a href="https://explorer.xinfin.network" target="_blank">Explorer</a></li>
                                                <li><a href="https://stats1.xinfin.network" target="_blank">Network Status</a></li>
                                                <li><a href="https://faucet.apothem.network" target="_blank">XDC Faucet</a></li>
                                                <li><a href="https://remix.xinfin.network" target="_blank">XDC Network Remix</a></li> 
                                                <li><a href="https://chrome.google.com/webstore/detail/xdcpay/bocpokimicclpaiekenaeelehdjllofo" target="_blank">XDCPay</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#" class="cta"><button class="btn-blue">#BuiltOnXDC</button></a></li>
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
                                        	<li><a href="#">Documentation</a></li>
                                            <li><a href="https://howto.xinfin.org" target="_blank">Developer Portal</a></li>
                                            <li><a href="https://xdc.dev" target="_blank">Developers Forum</a></li>
                                            <li><a href="#">Bug Bounty</a></li>
                                            <li><a href="https://github.com/XinFinorg" target="_blank">GitHub</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Ecosystem DApps</a></li>
                                    <li>
                                        <a href="#" class="has-arrow">Community</a>
                                        <ul class="sub-menu">
                                        	<li><a href="#">Ecosystem Partners</a></li>
                                            <li><a href="#">Join Community</a></li>
                                            <li><a href="#">Apply for Funding</a></li>
                                            <li><a href="#">Media</a></li>
                                    	</ul>
                                    </li>
                                    <li>
                                        <a href="#" class="has-arrow">Tools</a>
                                        <ul class="sub-menu">
                                        	<li><a href="https://explorer.xinfin.network" target="_blank">Explorer</a></li>
                                            <li><a href="https://stats1.xinfin.network" target="_blank">Network Status</a></li>
                                            <li><a href="https://faucet.apothem.network" target="_blank">XDC Faucet</a></li>
                                            <li><a href="https://remix.xinfin.network" target="_blank">XDC Network Remix</a></li> 
                                            <li><a href="https://chrome.google.com/webstore/detail/xdcpay/bocpokimicclpaiekenaeelehdjllofo" target="_blank">XDCPay</a></li>
                                    	</ul>
                                    </li>
                                    <li><a href="#" class="cta"><button class="btn-blue">#BuiltOnXDC</button></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>
        </header>
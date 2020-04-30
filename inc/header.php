<?php include('custom_function.php') ?>

<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="<?= $desc?>">
  <meta name="author" content="">
  <meta name="google-site-verification" content="Cyc2Me8vkC1-nEbDuDD4XGU1nBAPkIOkCDGSjWp8Zus" />
  <link rel="icon" href="assets/images/favicon.ico">
  <title>
    <?= $title; ?>
  </title>

  <!-- Bootstrap CSS -->
  <!-- Local bootstrap CSS & JS -->
  <link rel="stylesheet" media="screen" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" media="screen" href="assets/css/style.css">
  <!-- <link rel="stylesheet" media="screen" href="assets/css/style.scss"> -->
  <link href="assets/css/pagination.css" rel="stylesheet">
  <link href="assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/css/animate.css" rel="stylesheet">

  <style>
    #back-to-top {
      position: fixed;
      bottom: 40px;
      left: 40px;
      z-index: 9999;
      width: 40px;
      height: 40px;
      text-align: center;
      line-height: 38px;
      background-image: linear-gradient(to right, #25aae1, #2bbbad);
      color: #FFFFFF;
      cursor: pointer;
      border: 0;
      border-radius: 50px;
      text-decoration: none;
      transition: opacity 0.2s ease-out;
      opacity: 0;
    }
    #back-to-top:hover {
      background: #25aae1;
    }
    #back-to-top.show {
      opacity: 1;
    }
    nav ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    nav ul li {
      display: block;
      position: relative;
    }
    /* This hides the dropdowns */
    nav li ul {
      display: none;
    }
    nav ul li a {
      display: block;
      padding: 0.4em 1em;
      text-decoration: none;
      white-space: nowrap;
      color: #fff;
    }
    nav ul li a:hover {
      text-decoration: none;
      background-color: #fff0;
    }
    /* Display the dropdown */
    nav li:hover>ul {
      display: block;
      position: absolute;
      font-size: 11px;
      line-height: 12px;
      list-style-type: square;
      margin-top: -20px;
      margin-left: 15px;
    }
    nav li:hover li {
      float: none;
    }
    nav li:hover a {
      background: #04192787;
    }
    nav li:hover li a:hover {
      background: #04192787;
      color: #42ffef;
    }
    .main-navigation li ul li {
      border-top: 0;
    }
    /* Displays second level dropdowns to the right of the first level dropdown */
    nav ul ul ul {
      left: 100%;
      top: 0;
    }
    /* Simple clearfix */
    nav ul:before,
    nav ul:after {
      content: " ";
      /* 1 */
      display: table;
      /* 2 */
    }
    nav ul:after {
      clear: both;
    }
    @media (max-width: 1024px) {
      nav li:hover>ul {
        position: relative;
      }
    }
    /*.navbar>.container .navbar-brand,
    .navbar>.container-fluid .navbar-brand {
      margin-left: 150px;
      margin-right: 50px;
    }*/
	/*.navbar>.container {max-width:1000px;}*/
  </style>

  <script src="assets/js/jquery.js"></script>
 
  <script src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    $(window).on("scroll", function () {
      var top_offset = $(window).scrollTop();
      if (top_offset >= 100) {
        $('.navbar-fixed-top').addClass('sticky');
      } else {
        $('.navbar-fixed-top').removeClass('sticky');
      }
      //console.log(top_offset);
    });
  </script>
  <!--  <script type="text/javascript">
  $(document).ready(function() {
    $("#header a[href*=#]").click(function(event){     
        //event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 400);
    });
	// document ready  
	});
	</script>   -->

</head>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112909645-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-112909645-1');
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<body>


  <div class="preloader-wrap">
    <!-- <div class="percentage" id="precent"></div> -->
    <div class="loader">
      <div class="trackbar">
        <div class="loadbar"></div>
      </div>
      <div class="glow"></div>
    </div>
  </div>
  <!-- <div class='progress' id="progress_div">
    <div class='bar' id='bar1'></div>
    <div class='percent' id='percent1'></div>
  </div> 
 
  <input type="hidden" id="progress_width" value="0"> -->

  <div class="wrap">
    <header id="header" class="header-fixed">
      <nav class="navbar navbar-inverse navbar-fixed-top navbar-expand-md navbar-light bg-light">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="https://xinfin.org/">
              <img src="assets/images/logo-white.png" class="logo-white img-responsive" width="60">
              <img src="assets/images/logo-dark.png" class="logo-sticky img-responsive " width="60">
            </a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarNavDropdown" aria-expanded="false"
              aria-controls="#navbarNavDropdown">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
      
          </div>
          <!--<div class="collapse navbar-collapse" id="navbarNavDropdown" style="float:left">-->
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="main-menu cf nav navbar-nav navbar-right">
              <li class="nav-item">
                <a href="index">Home</a>
              </li>
              <!--<li class="nav-item"><a href="works.php">How it works</a></li> -->
              <li class="nav-item">
                <a href="http://xinfin.network/" target="_blank">XDC Network</a>
              </li>
              <li class="nav-item">
                <a href="xdc-utility">XDC/XDCE Utility</a>
              </li>
              <li class="nav-item">
                <a href="https://howto.xinfin.org/">Developer Portal</a>
              </li>              
              <li class="nav-item">
                <a href="resources">Resource</a>
              </li>
              <li class="nav-item">
                <a href="https://howto.xinfin.org/" target="_blank">Get Started</a>
              </li>
              
              <!--<li>
                <div class="m-dropdown">
                  <div class="e-button open">
                    <img src="assets/images/toggle-button.png" alt="Toggle" class="img-responsive">
                    <div class="e-burger">
                      <span></span>
                      <span></span>
                      <span></span>
                      <span></span>
                    </div>
                  </div>
                  <ul class="e-list">
                    <li>
                    	<a href="about.php">About us</a>
                    </li>
                    <li>
                    	<a href="xdc-xdce.php">XDC/XDCE</a>
                    </li>
                    <li>
                    	<a href="documentation.php">Documentation</a>
                    </li>
                    <li>
                    	<a href="contactus.php">CONTACT US</a>
                    </li>
                  </ul>
                </div>
              </li>-->


            </ul>
          </div>
        </div>
      </nav>
    </header>
    <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
    <script>
      if ($('#back-to-top').length) {
        var scrollTrigger = 100, // px
          backToTop = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
              $('#back-to-top').addClass('show');
            } else {
              $('#back-to-top').removeClass('show');
            }
          };
        backToTop();
        $(window).on('scroll', function () {
          backToTop();
        });
        $('#back-to-top').on('click', function (e) {
          e.preventDefault();
          $('html,body').animate({
            scrollTop: 0
          }, 700);

        });
      }
    </script>

    <script>$(".e-list").slideUp(function () {
        $(".e-button").removeClass("open");
      });
      $(".e-button").on("click", function () {
        if ($(this).hasClass("open")) {
          $(".e-list").slideUp(function () {
            $(".e-button").removeClass("open");
          });
        } else {
          $(this).addClass("open");
          setTimeout(function () {
            $(".e-list").stop().slideDown();
          }, 50);
        }
      });</script>

    <!-- <script>
jQuery(document).ready(function($) {  
// site preloader -- also uncomment the div in the header and the css style for #preloader
$(window).load(function(){
  $('#preloader').fadeOut('slow',function(){$(this).remove();});
});
});
</script> -->

    <!-- For page preloader -->
    <!-- <script>
document.onreadystatechange = function(e)
{
  if(document.readyState=="interactive")
  {
    var all = document.getElementsByTagName("*");
    for (var i=0, max=all.length; i < max; i++) 
    {
      set_ele(all[i]);
    }
  }
}
function check_element(ele)
{
  var all = document.getElementsByTagName("*");
  var totalele=all.length;
  var per_inc=100/all.length;
  if($(ele).on())
  {
    var prog_width=per_inc+Number(document.getElementById("progress_width").value);
    document.getElementById("progress_width").value=prog_width;
    $("#bar1").animate({width:prog_width+"%"},10,function(){
      if(document.getElementById("bar1").style.width=="100%")
      {
        $(".progress").fadeOut("slow");
      }     
    });
  }
  else  
  {
    set_ele(ele);
  }
}
function set_ele(set_element)
{
  check_element(set_element);
}
</script> -->

    <script>
      var width = 100,
        perfData = window.performance.timing, // The PerformanceTiming interface represents timing-related performance information for the given page.
        EstimatedTime = -(perfData.loadEventEnd - perfData.navigationStart),
        time = parseInt((EstimatedTime / 1000) % 60) * 100;
      // Loadbar Animation
      $(".loadbar").animate({
        width: width + "%"
      }, time);
      // Loadbar Glow Animation
      $(".glow").animate({
        width: width + "%"
      }, time);
      // Percentage Increment Animation
      var PercentageID = $("#precent"),
        start = 0,
        end = 100,
        durataion = time;
      animateValue(PercentageID, start, end, durataion);
      function animateValue(id, start, end, duration) {
        var range = end - start,
          current = start,
          increment = end > start ? 1 : -1,
          stepTime = Math.abs(Math.floor(duration / range)),
          obj = $(id);
        var timer = setInterval(function () {
          current += increment;
          $(obj).text(current + "%");
          //obj.innerHTML = current;
          if (current == end) {
            clearInterval(timer);
          }
        }, stepTime);
      }
      // Fading Out Loadbar on Finised
      setTimeout(function () {
        $('.preloader-wrap').fadeOut(300);
      }, time);
    </script>

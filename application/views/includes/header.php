<!DOCTYPE html>
<html lang="en">


<head>
    <!--Meta tags-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Change Title and Meta tags-->
    <title>ICO</title>
    
    <!-- Favicon -->
    <link rel="icon" href="images/icon.png">
    <!-- Plugins CSS -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/'); ?>css/plugins.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/'); ?>css/roadmap.css">
     <!-- Our Min CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel='stylesheet' type="text/css" href='<?php echo base_url('assets/'); ?>css/styles.css'/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/'); ?>css/color/style10.css" id="colors">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js" type="text/javascript"></script>
    <![endif]-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
       
</head>

<body>


<!-- Start Nav Section -->
<nav id="main-nav" class="nav-down">

    <div id="nav-color" class="gradient-color"></div>

    <div class="nav-wrapper">

        <!-- Add your Logo and Name here -->
        <a class="brand-logo design-font waves-effect waves-light no-bg" data-scroll-nav="0" href="<?php echo base_url(); ?>">
            <img class="responsive-img logo" src="<?php echo base_url('assets/'); ?>images/logo.svg" alt="">
            <p class="title-link">
                <span>B</span><span>I</span><span>T</span><span>O</span><span>N</span><span>E</span>
            </p>
        </a>

        <!-- Main Menu Hamburger Icon for Mobile And Screen Width less than 993px -->
        <a href="#" data-activates="mobile-demo" class="button-collapse">

            <div class="very_small_hamburger" id="hamburger-menu">
                <svg viewBox="0 0 800 600">
                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" class="top"></path>
                    <path d="M300,320 L540,320" class="middle"></path>
                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" class="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                </svg>
            </div>

        </a>

        <!-- Main Menu Content -->
        <ul class="right hide-on-med-and-down">

           <li>
                <a class="waves-effect waves-light no-bg" data-scroll-nav="0" href="<?php echo base_url(); ?>">Home</a>
            </li>

            <li>
                <a class="waves-effect waves-light" data-scroll-nav="1" href="javascript:void(0);">Vision</a>
            </li>

            <li>
                <a class="waves-effect "  href="<?php echo base_url('assets/bitcoin_white_paper.pdf'); ?>" target='_blank'>White paper</a>
            </li>
             <li>
                <a class="waves-effect waves-light" data-scroll-nav="4" href="javascript:void(0);">Road Map</a>
            </li>
            <li>
                <a class="waves-effect waves-light" data-scroll-nav="3" href="javascript:void(0);">ICO Crowdsale</a>
            </li>

            

           

           <!--  <li>
                <a class="dropdown-button waves-effect waves-light active" href="#!" data-activates="news-dropdown">
                    ICO
                    <i class="fa fa-chevron-down"></i>
                </a>
            </li> -->
            <li>
                <a class="waves-effect waves-light" data-scroll-nav="3" href="javascript:void(0);">Token Info</a>
            </li>
            <li>
                <a class="waves-effect waves-light" data-scroll-nav="6" href="javascript:void(0);">FAQ</a>
            </li>
            <li>
                <a class="btn btn-primary" href='<?php echo base_url('login'); ?>'>Login</a>
            </li>
            <li>
                <a class="waves-effect waves-light">1 BOC = $<span style="font-size: 14px;">0.60<span></a>
            </li>


            <li>
                <!--Main Menu Social Icons-->
                <div class="fixed-action-btn click-to-toggle active">

                    <a class="btn-floating btn-large waves-effect waves-light grey darken-4">
                        <div class="ham-cont">
                        <div class="very_small_hamburger open" id="social-hamburger">
                            <svg viewBox="0 0 800 600">
                                <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" class="top"></path>
                                <path d="M300,320 L540,320" class="middle"></path>
                                <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" class="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                            </svg>
                        </div>
                     </div>
                    </a>

                    <ul>

                        <!-- Facebook Link -->
                        <li>
                            <a class="btn-floating waves-effect waves-light blue" href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>

                        <!-- Twitter Link -->
                        <li>
                            <a class="btn-floating waves-effect waves-light light-blue lighten-2" href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>

                        <!-- Instagram Link -->
                        <li>
                            <a class="btn-floating waves-effect waves-light amber darken-3" href="#">
                                <i class="fa fa-telegram"></i>
                            </a>
                        </li>

                        <!-- Youtube Link -->
                        <li>
                            <a class="btn-floating waves-effect waves-light red" href="#">
                                <i class="fa fa-youtube"></i>
                            </a>
                        </li>

                    </ul>

                </div>

            </li>

        </ul>

       <!--Main Menu News Drop Down Content-->
        <ul id="news-dropdown" class="dropdown-content">

            <li>
                <a class="waves-effect waves-light" data-scroll-nav="4" href="javascript:void(0);">Info</a>
            </li>

            <li class="divider"></li>

            <li>
                <a class="waves-effect waves-light" href="javascript:void(0);">Buy BOC</a>
            </li>

            

        </ul>

        <!--Side Nav for Mobile And Screen Width less than 993px-->
        <ul class="side-nav" id="mobile-demo">

            <!--Side Nav Add Logo and Name here-->
            <li>
                <a class="waves-effect waves-light home  no-bg" data-scroll-nav="0" href="<?php echo base_url(); ?>">
                    <img class="responsive-img logo" src="images/logo.svg" alt="Logo image"><br>
                    <p class="title-link">
                       <span>B</span><span>I</span><span>T</span><span>O</span><span>N</span><span>E</span>
                    </p>
                </a>
            </li>

           <li>
                <a class="waves-effect waves-light no-bg" data-scroll-nav="0" href="<?php echo base_url(); ?>">Home</a>
            </li>

            <li>
                <a class="waves-effect waves-light" data-scroll-nav="1" href="javascript:void(0);">Term</a>
            </li>

            <li>
                <a class="waves-effect waves-light" data-scroll-nav="2" href="javascript:void(0);">Status</a>
            </li>

            <li>
                <a class="waves-effect waves-light" data-scroll-nav="3" href="javascript:void(0);">Token Info</a>
            </li>

           

            <li>

                <ul class="collapsible" data-collapsible="accordion">

                    <li>

                        <a class="collapsible-header waves-effect waves no-bg" href="javascript:void(0);">
                            Ico
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>

                        </a>

                        <div class="collapsible-body">

                            <a class="waves-effect waves-light no-bg" data-scroll-nav="4" href="javascript:void(0);">Info</a>
                            <a class="waves-effect waves-light no-bg" href="javascript:void(0);">Buy BOC</a>
                            

                        </div>

                    </li>

                </ul>

            </li>
            <li>
                <a class="waves-effect waves-light" data-scroll-nav="5" href="javascript:void(0);">How To</a>
            </li>


            <!--Side Nav Social Icons-->
            <li class="social">

                <!-- Facebook Link -->
                <a href="#">
                    <i class="fa fa-facebook waves-effect waves-circle waves-light blue"></i>
                </a>

                <!-- Twitter Link -->
                <a href="#">
                    <i class="fa fa-twitter waves-effect waves-circle waves-light light-blue lighten-2"></i>
                </a>

                <!-- Instagram Link -->
                <a href="#">
                    <i class="fa fa-telegram waves-effect waves-circle waves-light amber darken-3"></i>
                </a>

                <!-- Youtube Link -->
                <a href="#">
                    <i class="fa fa-youtube waves-effect waves-circle waves-light red"></i>
                </a>

            </li>

        </ul>

    </div>

</nav>
<!-- End Nav Section-->

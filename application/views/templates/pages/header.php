<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="<?php echo base_url('assets'); ?>/js/ie-emulation-modes-warning.js"></script>
    <!-- Font-Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- custom -->
    <link href="<?php echo base_url('assets'); ?>/css/custom.css" rel="stylesheet">
    <!-- hover -->
    <link href="<?php echo base_url('assets'); ?>/css/hover.css" rel="stylesheet">
    <!-- animations -->
    <link href="<?php echo base_url('assets'); ?>/css/animations.css" rel="stylesheet">
    <!-- animations for IE9 -->
    <link href='<?php echo base_url('assets'); ?>/css/animations-ie-fix.css' rel='stylesheet'>

    <title>EVOLVE - MindBodySoul</title>
    <link rel="icon" href="<?php echo base_url('assets'); ?>/img/logo.png" sizes="32x32">
    <link rel="icon" href="<?php echo base_url('assets'); ?>/img/logo.png" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets'); ?>/img/logo.png">
  </head>
  <?php  ?>
  <body>
    <section id="pages">
    <?php
        $var = $this->uri->segment(2);
        switch ($var) {
            case 'ourpersonalisedtraining':
              $bg_img = "/mg/bg-2.jpg";
              break;
            case 'fitnessclasses':
              $bg_img = "/img/bg/bg-1.jpg";
              break;
            case 'swimming':
              $bg_img = "/img/bg/bg-3.jpg";
              break;
            case 'nutrition':
              $bg_img = "/img/bg/bg-4.jpg";
              break;
            case 'biomechanics':
              $bg_img = "/img/bg/bg-7.jpg";
              break;
            case 'accessbar':
              $bg_img = "/img/bg-9.jpg";
              break;
            case 'thaimassage':
              $bg_img = "/img/bg-9.jpg";
              break;
            case 'ayurveda':
              $bg_img = "/img/bg-14.jpg";
              break;
            case 'pranichealing':
              $bg_img = "/img/bg-15.jpg";
              break;
            case 'thetahealing':
              $bg_img = "/img/bg-16.jpg";
              break;
            case 'soundtherapy':
              $bg_img = "/img/bg-10.jpg";
              break;
            case 'cosmicmassage':
              $bg_img = "/img/bg-11.jpg";
              break;
            case 'corporatewellness':
              $bg_img = "/img/bg-12.jpg";
              break;
            case 'ourapproach':
              $bg_img = "/img/bg/bg-13.jpg";
              break;
            case 'ourteam':
              $bg_img = "/img/bg/bg-6.jpg";
              break;
            case 'events':
              $bg_img = "/img/bg/bg-14.jpg";
              break;
            case 'timetable':
              $bg_img = "/img/bg/bg-5.jpg";
              break;
            case 'mindfulness':
              $bg_img = "/img/bg-9.jpg";
              break;
            case 'ourvenues':
              $bg_img = "/img/bg-12.jpg";
              break;
            default:
                # code...
                break;
        }
    ?>
    <div class="parallax-window1" data-parallax="scroll" data-image-src="<?php echo base_url('assets').$bg_img; ?>">
      <header>
        <nav class="navbar navbar-expand-sm">
          <div class="container nopads">
            <div class="col-sm-2 d-flex flex-row">
              <a class="navbar-brand" href="http://w3bapps.online/PROJECTS/evolve5/home"><img src="<?php echo base_url('assets'); ?>/img/logo.png" class="img-fluid"></a>
            </div>
            <div class="col-sm-10 d-flex flex-column-reverse">
              <div class="collapse navbar-collapse ml-auto" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="<?php echo site_url('home') ?>">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Services <i class="fa fa-angle-down"></i></a>
                    <ul>
                      <li><i class="ico-mind"></i><a href="<?php echo site_url('services/mind') ?>">Mind</a></li>
                      <li><i class="ico-body"></i><a href="<?php echo site_url('services/body') ?>">Body</a></li>
                      <li><i class="ico-soul"></i><a href="<?php echo site_url('services/soul') ?>">Soul</a></li>
                    </ul>
                    <!-- <ul>
                      <li><i class="ico-pt"></i><a href="<?php echo site_url('services/ourpersonalisedtraining') ?>">Our Personalised Training</a></li>
                      <li><i class="ico-fc"></i><a href="<?php echo site_url('services/fitnessclasses') ?>">Fitness Classes</a></li>
                      <li><i class="ico-sw"></i><a href="<?php echo site_url('services/swimming') ?>">Swimming</a></li>
                      <li><i class="ico-nu"></i><a href="<?php echo site_url('services/nutrition') ?>">Nutrition</a></li>
                      <li><i class="ico-bi"></i><a href="<?php echo site_url('services/biomechanics') ?>">Biomechanics</a></li>
                      <li><i class="ico-hw"></i><a href="<?php echo site_url('services/mindfulness') ?>">Mindfulness</a>
                        <ul>
                          <li><i class="ico-ab"></i><a href="<?php echo site_url('services/accessbar') ?>">Access Bars</a></li>
                          <li><i class="ico-th"></i><a href="<?php echo site_url('services/thetahealing') ?>">Theta Healing</a></li>
                          <li><i class="ico-st"></i><a href="<?php echo site_url('services/soundtherapy') ?>">Sound Therapy</a></li>
                          <li><i class="ico-cs"></i><a href="<?php echo site_url('services/cosmicmassage') ?>">Cosmic Massage</a></li>
                          <li><i class="ico-tm"></i><a href="<?php echo site_url('services/thaimassage') ?>">Thai Massage</a> </li>
                          <li><i class="ico-av"></i><a href="<?php echo site_url('services/ayurveda') ?>">Ayurveda</a> </li>
                          <li><i class="ico-ph"></i><a href="<?php echo site_url('services/pranichealing') ?>">Pranic Healing</a> </li>
                        </ul>
                      </li>
                      <li><i class="ico-cw"></i><a href="<?php echo site_url('services/corporatewellness') ?>">Corporate Wellness</a>
                    </ul> -->
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('page/timetable') ?>">Timetable</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('page/ourteam') ?>">Our Team</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('page/events') ?>">Events</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About Us <i class="fa fa-angle-down"></i></a>
                    <ul>
                      <li><a href="<?php echo site_url('page/ourvenues') ?>">Our Venues</a></li> 
                      <li><a href="<?php echo site_url('page/ourapproach') ?>">Our Approach</a></li> 
                      <li><a href="#" data-toggle="modal" data-target="#ModalContactUs">Contact Us</a></li>
                    </ul>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="" data-toggle="modal" data-target="#ModalFreeTrial">Free Trial</a>
                  </li> -->
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </header>

        
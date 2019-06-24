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
    <link href="<?php echo base_url('assets'); ?>/css/home.css" rel="stylesheet">
    <!-- hover -->
    <link href="<?php echo base_url('assets'); ?>/css/hover.css" rel="stylesheet">
    <!-- animations -->
    <link href="<?php echo base_url('assets'); ?>/css/animations.css" rel="stylesheet">
    <!-- animations for IE9 -->
    <link href='<?php echo base_url('assets'); ?>/css/animations-ie-fix.css' rel='stylesheet'>

    <title>EVOLVE - MindBodySoul</title>
    <link rel="icon" href="<?php echo base_url('assets'); ?>img/logo.png" sizes="32x32">
    <link rel="icon" href="<?php echo base_url('assets'); ?>img/logo.png" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets'); ?>img/logo.png">
  </head>
  <body>
    <video autoplay="" loop="" id="bgvideo">
      <source type="video/mp4" src="<?php echo base_url('assets'); ?>/video/EvolveWebsite2.mp4">
    </video>
    <header>
      <nav class="navbar navbar-expand-sm">
        <div class="container nopads">
          <div class="col-sm-2 d-flex flex-row">
            <a class="navbar-brand" href="<?php echo base_url('home'); ?>"><img src="<?php echo base_url('assets'); ?>/img/logo.png" class="img-fluid"></a>
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
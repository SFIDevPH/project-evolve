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
  <?php 
     $bg = $this->uri->segment(2);

     switch ($this->uri->segment(2)) {
       case 'mind':
         $bg = "bg-mind";
         break;
       case 'body':
         $bg = "bg-body";
         break;
       case 'soul':
         $bg = "bg-soul";
         break;
       
       default:
         $bg = "";
         break;
     }
  ?>
  <body>
  <section id="pages">
    <div class="parallax-window1" data-parallax="scroll" data-image-src="<?php echo base_url('assets/img/bg-15.jpg'); ?>">
      <div class="services-menu <?php echo $bg; ?>">
        <div class="container">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8 d-flex align-items-center justify-content-end">
              <ul>
                <li><a href="<?php echo site_url('home') ?>">Home</a></li>
                <li><a href="<?php echo site_url('services/mind') ?>">Services</a>
                  <ul>
                    <li><a href="#">link</a></li>
                    <li><a href="#">link</a></li>
                    <li><a href="#">link</a></li>
                    <li><a href="#">link</a></li>
                    <li><a href="#">link</a></li>
                  </ul>
                </li>
                <li><a href="<?php echo site_url('page/timetable') ?>">Timetable</a></li>
                <li><a href="<?php echo site_url('page/ourteam') ?>">Our Team</a></li>
                <li><a href="<?php echo site_url('page/events') ?>">Events</a></li>
                <li><a href="<?php echo site_url('page/ourvenues') ?>">About Us</a></li>
              </ul>
            </div>
          </div>        
        </div>

        
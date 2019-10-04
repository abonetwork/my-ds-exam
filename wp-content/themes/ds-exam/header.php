<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="<?php language_attributes();?>">
  <!--<![endif]-->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css"
    />
    <?php wp_head()?>
    

    
  </head>
  <body>
    <!--[if lt IE 7]>
      <p class="browsehappy">
        You are using an <strong>outdated</strong> browser. Please
        <a href="#">upgrade your browser</a> to improve your experience.
      </p>
    <![endif]-->

    <nav class="container-fluid nav">
      <div class="container cf">
        <div class="brand">
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/crazydemo-logo.png"/></a>
        </div>
        <i class="fa fa-bars nav-toggle"></i>
        <ul>
          <li>
            <a href="#call" class="sm-link"
              ><i class="fa fa-phone "></i>+1234 5657</a
            >
          </li>
          <li>
            <a href="#email" class="sm-link"
              ><i class="fa fa-envelope-o"></i>mail@crazydomains.com</a
            >
          </li>
          <li>
            <div class="btn book-now ">
              <i class="fa fa-paper-plane-o"></i> BOOK NOW
            </div>
          </li>
        </ul>
      </div>
    </nav>
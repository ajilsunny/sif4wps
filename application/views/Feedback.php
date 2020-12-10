<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Generate SIF files for WPS upload easily - sif4wps.com</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">

<link rel="icon" href="<?php echo base_url() ?>assets/images/favicon.png" type="image/x-icon">

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bower_components/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
</head>
<body class="fix-menu">
<nav class="navbar navbar-expand-lg navbar-light navbar-default navbar-fixed-top" role="navigation">
<div class="container">
<a class="navbar-brand page-scroll" href="<?php echo site_url('') ?>"><img class="img-fluid pl-4" src="<?php echo base_url() ?>assets/images/blacklogo.png" alt="Theme-Logo" width="150px"/></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
</ul>
<ul class="navbar-nav my-2 my-lg-0">
<li class="nav-item">
<a class="nav-link page-scroll" href="<?php echo site_url('') ?>"><b>Home</b></a>
</li>
<li class="nav-item">
<a class="nav-link page-scroll" href="<?php echo site_url('SIF') ?>"><b>Create SIF Without Login</b></a>
</li>
<li class="nav-item">
<a class="nav-link page-scroll" href="<?php echo site_url('Sign-In') ?>"><b>Sign Up/Sign In</b></a>
</li>
</ul>
</div>
</div>
</nav>
<div class="theme-loader">
<div class="ball-scale">
<div class='contain'>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
<div class="ring"><div class="frame"></div></div>
</div>
</div>
</div>

<section class="login-block">

<div class="container">

<div class="row">
<div class="col-sm-12">

<form class="md-float-material form-material" action="<?php echo site_url('Feedback-Data') ?>" method="post">
<div class="auth-box card">
<div class="card-block" style="margin-top: 20px">
<div class="row m-b-20">
<div class="col-md-12">
<h3 class="text-center">Tell Us</h3>
</div>
</div>
<div class="form-group form-primary">
<input type="text" name="name" class="form-control" required="" placeholder="Name">
<span class="form-bar"></span>
</div>
<div class="form-group form-primary">
<input type="text" name="email" class="form-control"  placeholder="Email(optional)">
<span class="form-bar"></span>
</div>
<div class="form-group form-primary">
<textarea class="form-control" name="Feedback" placeholder="Feedback" rows="5" required=""></textarea>
 <span class="form-bar"></span>
</div>

<div class="form-row">
    <div class="g-recaptcha" data-sitekey="6LeZefMZAAAAAPYrpMK42BIaJn8kGHpRg8gg_v-C"></div>
  </div>
  <p class="text-danger"></p>
<div class="row m-t-30">
<div class="col-md-12">
<button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Post</button>
</div>
</div>
</div>
</div>
</form>

</div>

</div>

</div>

</section>


<script src='https://www.google.com/recaptcha/api.js'></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/modernizr/js/css-scrollbars.js"></script>

<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/common-pages.js"></script>
<script>
  $('form').on('submit', function(e) {
  if(grecaptcha.getResponse() == "") {
    e.preventDefault();
    $('.text-danger').html('Check the captcha.')
    $('.text-danger').fadeIn(10).fadeOut(4000)
    return false;
  } 
});
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>

</html>
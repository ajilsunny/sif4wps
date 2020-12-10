<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Generate SIF files for WPS upload easily - sif4wps.com</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="#">
<meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
<meta name="author" content="#">

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

<div class="container-fluid">
<div class="row">
<div class="col-sm-12">
<form class="md-float-material form-material signupform" action="<?php echo site_url('Register') ?>" method="post">
<!--
<div class="text-center">
<img src="<?php echo base_url() ?>assets/images/logo.png" alt="logo.png" width="150px">
</div>
-->
<div class="auth-box card">
<div class="card-block">
<div class="row m-b-20">
<div class="col-md-12">
<h5 class="text-center txt-primary">Sign Up to save your details</h5>
</div>
</div>
<?php 
    $value='';
    $comapny=$this->session->userdata('comapny'); 
    if(isset($comapny))
    {
        $value=$comapny;
        $this->session->unset_userdata('comapny'); 
    }
?>
<div class="form-group form-primary">
<input type="text" name="companynamesignup" class="form-control" required="" value="<?php echo  $value ?>" placeholder="Company Name *">
<span class="form-bar"></span>
</div>
<div class="form-group form-primary">
<input type="email" name="usernamesignup" class="form-control" required="" placeholder="Email *">
<?php 
    $reg_msg=$this->session->userdata('reg_msg'); 
    if(isset($reg_msg))
    {
        echo '<label style="color:red">'.$reg_msg.'</label>';
        $this->session->unset_userdata('reg_msg'); 
    }
?>
<span class="form-bar"></span>
</div>
<div class="row">
<div class="col-sm-6">
 <div class="form-group form-primary">
<input type="password" name="passwordsignup" id="passwordsignup" class="form-control" required="" placeholder="Password">
<span class="form-bar"></span>
</div>
</div>
<div class="col-sm-6">
<div class="form-group form-primary">
<input type="password" name="passwordsignup_confirm" id="passwordsignup_confirm" class="form-control" required="" placeholder="Confirm Password">
<span class="form-bar pass_msg"></span>
</div>
</div>
</div>

<div class="row m-t-30">
<div class="col-md-12">
<button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign Up</button>
</div>
</div>
<hr />
<div class="row">
<div class="col-md-12 ">
<p class="text-inverse text-left m-b-0">Already have a username? Please<a class="pull-right" href="<?php echo site_url('Sign-In') ?>"><b class="f-w-600"> Sign In</b></a>.</p>
</div>
</div>
</div>
</div>
</form>
</div>

</div>

</div>

</section>


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
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script>
	$('.signupform').submit(function (){
      var password=$('#passwordsignup').val()
      var password_confirm=$('#passwordsignup_confirm').val()
      if(password!=password_confirm)
      {
            $('.pass_msg').html('Password Missmatch')
            $('.pass_msg').css('color','red')
            $('.pass_msg').fadeIn(10).fadeOut(3500)
            return false;
      }
    });
</script>
</body>
</html>

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
<!--
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
-->
<section class="login-block">

<div class="container">

<div class="row">
<div class="col-sm-12">

<form class="md-float-material form-material" action="<?php echo site_url('Login') ?>" method="post">
<!--
<div class="text-center">
<img src="<?php echo base_url() ?>assets/images/logo.png" alt="logo.png" width="150px">
</div>
-->
<div class="auth-box card">
<div class="card-block">

<div class="row m-b-20">
<div class="col-md-12">
<h5 class="text-center">Sign In to your account</h5>
</div>
</div>

<div class="form-group form-primary">
<input type="text" name="username" class="form-control" required="" placeholder="Email">
<span class="form-bar"></span>
</div>
<div class="form-group form-primary">
<input type="password" name="password" class="form-control" required="" placeholder="Password">
 <span class="form-bar"></span>
</div>
<?php 
    $reg_log_msg=$this->session->userdata('reg_log_msg');
    if(isset($reg_log_msg))
    {
        echo '<p style="color:green">'.$reg_log_msg.'</p>';
        $this->session->unset_userdata('reg_log_msg');
    }
    $log_msg=$this->session->userdata('logmsg');
    if (isset($log_msg)) 
    {
        echo '<p style="color:red">'.$log_msg.'</p>';
        $this->session->unset_userdata('logmsg');
    }
?>
<div class="row m-t-25 text-left">
<div class="col-12">
<!-- <div class="checkbox-fade fade-in-primary d-">
<label>
<input type="checkbox" value="">
<span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
<span class="text-inverse">Remember me</span>
</label>
</div> -->
<div class="forgot-phone text-right f-right">
<a href="#" class="text-right f-w-600" data-toggle="modal" data-target="#modal-12"> Forgot Password?</a>
</div>
</div>
</div>
<div class="row m-t-30">
<div class="col-md-12">
<button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Sign In</button>
</div>
</div>
<hr />
<div class="row">
<div class="col-md-12 ">
<p class="text-inverse text-left m-b-0">To save your details, please<a class="pull-right" href="<?php echo site_url('Sign-Up') ?>"><b class="f-w-600"> Sign Up</b></a>.</p>
</div>
</div>
</div>
</div>
</form>

</div>

</div>

</div>

<!-- Forgot Password Modal -->
    <div class="modal fade mt-5 pt-5" id="modal-12" tabindex="-1" role="dialog" aria-labelledby="modal-12">
      <div class="modal-dialog modal-dialog-centered modal-min" role="document">
        <div class="modal-content">
          <div class="modal-body text-center">
            <i class="flaticon-secure-shield d-block"></i>
            <h4>Forgot Password?</h4>
            <p>Enter your email to recover your password</p>
            <form class="forgotform" method="post">
              <p class="forgotmsg"></p>
              <div class="ms-form-group has-icon">
                <input type="email" placeholder="Email Address" id="forgotpassword" class="form-control" name="forgotpassword" required>
              </div>
              <button type="submit" class="btn btn-primary mt-3">Reset Password</button>
            </form>
          </div>
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

$('.forgotform').submit(function (){
    var val=$('#forgotpassword').val()
    $.ajax({
      url:"<?php echo site_url('Email-Check') ?>",
      type: "POST",
      data:{val:val},
      success:function(result)
      {
        if(result==0)
        {
          $('.forgotmsg').html('Mail id not registered..!')
          $('.forgotmsg').css('color','red')
          $('.forgotmsg').css('font-size','14px')
          $('.forgotmsg').fadeIn(100).fadeOut(5000)
        }
        else
        {
          $('#forgotpassword').val('')
          $('.forgotmsg').html('Check your mail and reset your password...')
          $('.forgotmsg').css('color','green')
          $('.forgotmsg').css('font-size','14px')
          $('.forgotmsg').fadeIn(10)
          $.ajax({
            url:"<?php echo site_url('Forgot-Password') ?>",
            type: "POST",
            data:{val:val},
            success:function(result)
            {
              // alert(result)
            }
          });
        }
      }
    });
    return false;
  })




</script>
</body>

</html>
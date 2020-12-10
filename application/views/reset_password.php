<?php $CI=&get_instance(); ?>
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

<section class="login-block">

<div class="container">

<div class="row">
<div class="col-sm-12">

<form class="md-float-material form-material resetform" method="post">

<div class="text-center">
<img src="<?php echo base_url() ?>assets/images/logo.png" alt="logo.png" width="150px">
</div>

<div class="auth-box card">
<div class="card-block">

<div class="row m-b-20">
<div class="col-md-12">
<h5 class="text-center">Reset Password</h5>
<p class="text-center">Please enter your new password to continue</p>
</div>
</div>

<div class="form-group form-primary">
<input type="password" name="password" id="password1" class="form-control" required="" placeholder="Password">
<span class="form-bar"></span>
</div>
<div class="form-group form-primary">
<input type="password" name="cpassword" id="password2" class="form-control" required="" placeholder="Confirm Password">
<input type="hidden" name="id"  value="<?php echo $value ?>">
 <span class="form-bar"></span>
</div>
<p class="ermsg"></p>
<div class="row m-t-30">
<div class="col-md-12">
<button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Reset</button>
</div>
</div>
<hr />
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

      $('.resetform').submit(function (event){
      event.preventDefault();
      var data=new FormData(this)

      var password1=$('#password1').val()
      var password2=$('#password2').val()
      if(password1==password2)
      {
        $('#password1').val('')
        $('#password2').val('')
        $('.ermsg').html('Password Changed successfuly...')
        $('.ermsg').css('color','green')
        $.ajax({
          url:"<?php echo site_url('Change-password') ?>",
          type: "POST",
          data:data,
          contentType:false,
          cache:false,
          processData:false,
          success:function(result)
          {
            var delay = 1500;
            var timeoutID = setTimeout(function() {
                window.location.href = '<?php echo site_url('Sign-In') ?>';
            }, delay);
          }
        });
      }
      else
      {
        $('.ermsg').html('Mismatch password')
        $('.ermsg').css('color','red')
        $('.ermsg').fadeIn(100).fadeOut(4500)
      }
      return false;
    })

</script>
</body>

</html>
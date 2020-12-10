<?php 
$CI=&get_instance();
$session_check=$CI->session_check();
if ($session_check==0) {
 ?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>SIF4WPS</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="#">
<meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
<meta name="author" content="#">

<link rel="icon" href="<?php echo base_url() ?>assets/images/favicon.png" type="image/x-icon">

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bower_components/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pages/advance-elements/css/bootstrap-datetimepicker.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bower_components/bootstrap-daterangepicker/css/daterangepicker.css" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bower_components/datedropper/css/datedropper.min.css" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/icon/feather/css/feather.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/jquery.mCustomScrollbar.css">

</head>
<body>

<div class="theme-loader">
<div class="ball-scale">
<div class='contain'>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
<div class="ring">
<div class="frame"></div>
</div>
</div>
</div>
</div>

<div id="pcoded" class="pcoded">
	<div class="pcoded-overlay-box"></div>
	<div class="pcoded-container navbar-wrapper">

	<?php include('include/nav_bar.php') ?>


		<div class="pcoded-main-container">
			<div class="pcoded-wrapper">

			<?php include('include/menu_bar.php') ?>

				<div class="pcoded-content">
					<div class="pcoded-inner-content">
						<div class="main-body">
							<div class="page-wrapper">

								<div class="page-header">
									<div class="row align-items-end">
										<div class="col-lg-8">
											<div class="page-header-title">
												<div class="d-inline">
													<h4>Company Profile</h4>
												</div>
											</div>
										</div>
										<div class="col-lg-4">
											<div class="page-header-breadcrumb">
												<ul class="breadcrumb-title">
													<li class="breadcrumb-item">
														<a href="index.html"> <i class="feather icon-home"></i> </a>
													</li>
													<li class="breadcrumb-item"><a href="#!">Company Profile</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>


								<div class="page-body">

									<div class="row">
										<div class="col-lg-12">

											<div class="tab-content">

												<div class="tab-pane active" id="personal" role="tabpanel">

													<div class="card">
														<div class="card-header">
															<h5 class="card-header-text">About Company</h5>
															<button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
																<i class="icofont icofont-edit"></i>
															</button>
														</div>
												<?php foreach ($details as $value) {?>
												<div class="card-block">
												<div class="view-info">
												<div class="row">
												<div class="col-lg-12">
												<div class="general-info">
												<div class="row">
												<div class="col-lg-12 col-xl-6">
												<div class="table-responsive">
												<table class="table m-0">
												<tbody>
												<tr>
												<th scope="row">Company Name</th>
												<td><?php echo $value->company_name ?></td>
												</tr>
												<tr>
												<th scope="row">Employer Unique Id</th>
												<td><?php echo $value->WPS_employer_id ?></td>
												</tr>
												<tr>
												<th scope="row">Address</th>
												 <td><?php echo $value->address ?></td>
												</tr>
												<tr>
												<th scope="row">Phone</th>
												<td><?php echo $value->phone ?></td>
												</tr>
												<tr>
												<th scope="row">Mobile</th>
												<td><?php echo $value->mobile ?></td>
												</tr>
												</tbody>
												</table>
												</div>
												</div>

												<div class="col-lg-12 col-xl-6">
												<div class="table-responsive">
												<table class="table">
												<tbody>
												<!-- <tr>
												<th scope="row">Email</th>
												<td><?php echo $value->email_id ?></td>
												</tr> -->
												<tr>
												<th scope="row">Website</th>
												<td><?php echo $value->website ?></td>
												</tr>
												<tr>
												<th scope="row">Contact Person</th>
												<td><?php echo $value->contact_person ?></td>
												</tr>
												<tr>
												<th scope="row">Email</th>
												<td><?php echo $value->username ?></td>
												</tr>
												 <tr>
												<th scope="row" ></th>
												<td class="text-right"><a href=""  data-toggle="modal" data-target="#passwordModal">Reset Password</a></td>
												</tr>
												</tbody>
												</table>
												</div>
												</div>

												</div>

												</div>

												</div>

												</div>

												</div>

					<div class="edit-info">
					<div class="row">
					<div class="col-lg-12">
					<div class="general-info">
					<div class="row">
					<div class="col-lg-6">
					<form class="editformsubmit" action="<?php echo site_url('Update-Profile') ?>" method="post">
					<table class="table">
					<tbody>
					<tr>
					<td>
					<div class="input-group">
					<span class="input-group-addon"><i class="icofont icofont-businessman"></i></span>
					<input type="text" class="form-control" name="company_name" placeholder="Company Name" value="<?php echo $value->company_name ?>" required="">
					</div>
					</td>
					</tr>
					<tr>
					<td>
					<div class="input-group">
					<span class="input-group-addon"><i class="icofont icofont-user"></i></span>
					<input type="text" class="form-control" name="WPS_employer_id" placeholder="WPS Employer Id" value="<?php echo $value->WPS_employer_id ?>" required="">
					</div>
					</td>
					</tr>
					<tr>
					<td>
					<div class="input-group">
					<span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
					 <input type="text" class="form-control" name="address" value="<?php echo $value->address ?>" placeholder="Address">
					</div>
					</td>
					</tr>
					<tr>
					<td>
					<div class="input-group">
					<span class="input-group-addon"><i class="icofont icofont-phone"></i></span>
					<input type="text" class="form-control" name="phone" value="<?php echo $value->phone ?>" placeholder="Phone Number">
					</div>
					</td>
					</tr>
					<tr>
					<td>
					<div class="input-group">
					<span class="input-group-addon"><i class="icofont icofont-mobile-phone"></i></span>
					<input type="text" class="form-control" name="mobile" value="<?php echo $value->mobile ?>" placeholder="Mobile Number">
					</div>
					</td>
					</tr>
					</tbody>
					</table>
					</div>

					<div class="col-lg-6">
					<table class="table">
					<tbody>
					<!-- <tr>
					<td>
					<div class="input-group">
					<span class="input-group-addon"><i class="icofont icofont-email"></i></span>
					<input type="text" class="form-control" name="email" value="<?php echo $value->email_id ?>" placeholder="Email">
					</div>
					</td>
					</tr> -->
					<tr>
					<td>
					<div class="input-group">
					<span class="input-group-addon"><i class="icofont icofont-earth"></i></span>
					<input type="text" class="form-control" name="website" value="<?php echo $value->website ?>" placeholder="website">
					</div>
					</td>
					</tr>

					 <tr>
					<td>
					<div class="input-group">
					<span class="input-group-addon"><i class="icofont icofont-users"></i></span>
					<input type="text" class="form-control" name="contact_person" value="<?php echo $value->contact_person ?>" placeholder="Contact Person">
					</div>
					</td>
					</tr>
					<tr>
					<td>
					<div class="input-group">
					<span class="input-group-addon"><i class="icofont icofont-email"></i></span>
					<input type="text" class="form-control" value="<?php echo $value->username ?>" placeholder="Username" readonly="">
					</div>
					</td>
					</tr>
					</tbody>
					</table>
					</div>
					</div>
					<div class="text-center">
					<input type="submit" id="savebtn" class="btn btn-primary waves-effect waves-light m-r-20" value="Save">
					<a href="#!" id="edit-cancel" class="btn btn-default waves-effect">Cancel</a>
					</div>
					</div>
					</form>
					</div>
					<?php } ?>
					</div>

					</div>

					</div>

					</div>

					</div>




 
</div>
</div>
</div>

</div>
</div>
</div>

</div>
</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade bd-example-modal-sm" id="passwordModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content mt-80">
            <div class="modal-header">
              <h5 class="modal-title">Change Password</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form class="passwordform" method="post">
            <div class="modal-body">
              <p>Old Password</p>
              <input type="password"class="form-control oldpass" required>
              <p class="mt-3">New Password</p>
              <input type="password"class="form-control newpass" required>
              <p class="mt-3">Confirm Password</p>
              <input type="password"class="form-control confirmpass" required>
              <p class="msgerr"></p>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary applycode">Change</button>
            </div>
          </form>
          </div>
        </div>
      </div>

<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/modernizr/js/css-scrollbars.js"></script>

<script type="text/javascript" src="<?php echo base_url() ?>assets/pages/advance-elements/moment-with-locales.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/pages/advance-elements/bootstrap-datetimepicker.min.js"></script>

<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/bootstrap-daterangepicker/js/daterangepicker.js"></script>

<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/datedropper/js/datedropper.min.js"></script>

<script src="<?php echo base_url() ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
<script src="<?php echo base_url() ?>assets/pages/user-profile.js"></script>
<script src="<?php echo base_url() ?>assets/js/pcoded.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vartical-layout.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

<script type="text/javascript" src="<?php echo base_url() ?>assets/js/script.js"></script>

<script>
	  $('.passwordform').submit(function (){
	    var oldpass=$('.oldpass').val()
	    var newpass=$('.newpass').val()
	    var confirmpass=$('.confirmpass').val()
	    if(oldpass!=''&&newpass!=''&&confirmpass!='')
	    {
	      if(newpass!=confirmpass)
	      {
	        $('.msgerr').html('Password Missmatch')
	        $('.msgerr').css('color','red')
	        $('.msgerr').fadeIn(100).fadeOut(3500)
	      }
	      else
	      {
	        $.ajax({
	          url:"<?php echo site_url('Password-Check') ?>",
	          type: "POST",
	          data:{oldpass:oldpass,newpass:newpass},
	          success:function(result)
	          {
	            if(result==1)
	            {
	              $('.oldpass').val('')
	              $('.newpass').val('')
	              $('.confirmpass').val('')
	              $('.msgerr').html('Password changed successfully')
	              $('.msgerr').css('color','green')
	              $('.msgerr').fadeIn(100).fadeOut(3500)
	              setTimeout(function (){
	                $('#passwordModal').modal('hide')
	              },4000);
	            }
	            else {
	              $('.oldpass').val('')
	              $('.msgerr').html('Old password incorrect')
	              $('.msgerr').css('color','red')
	              $('.msgerr').fadeIn(100).fadeOut(3500)
	            }
	          }
	        });
	      }
	    }
	    else {
	      $('.msgerr').html('Fill all fields')
	      $('.msgerr').css('color','red')
	      $('.msgerr').fadeIn(100).fadeOut(3500)
	    }
	    return false;
	  })

	
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>
</html>
<?php
}
else
{
  redirect('','reload');
}
?>
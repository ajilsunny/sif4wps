<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<title>Generate SIF files for WPS upload easily - sif4wps.com</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="keywords" content="">

<link rel="icon" href="<?php echo base_url() ?>assets/images/favicon.png" type="image/x-icon">

<link href="<?php echo base_url() ?>assets/landing/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" href="<?php echo base_url() ?>assets/landing/css/animate.css">

<link rel="stylesheet" href="<?php echo base_url() ?>assets/landing/css/owl.carousel.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/landing/css/owl.theme.css">

<link rel="stylesheet" href="<?php echo base_url() ?>assets/landing/css/magnific-popup.css">

<link rel="stylesheet" href="<?php echo base_url() ?>assets/landing/css/animsition.min.css">

<link rel="stylesheet" href="<?php echo base_url() ?>assets/landing/css/ionicons.min.css">

<link href="<?php echo base_url() ?>assets/landing/css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div class="wrapper animsition" data-animsition-in-class="fade-in" data-animsition-in-duration="1000" data-animsition-out-class="fade-out" data-animsition-out-duration="1000">
<div class="container">
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
<a class="nav-link page-scroll" href="<?php echo site_url('') ?>">Home</a>
</li>
<li class="nav-item">
<a title="No login required." class="nav-link page-scroll" href="<?php echo site_url('SIF') ?>">Create SIF</a>
</li>
<li class="nav-item">
<a title="Sign up to save data for later."class="nav-link page-scroll" href="<?php echo site_url('Sign-In') ?>">Sign Up / Sign In</a>
</li>
</ul>
</div>
</div>
</nav>
</div>
<div class="main" id="main">

<div class="hero-section app-hero">
<div class="container">
<div class="hero-content app-hero-content text-center" style="padding-top: 80px">
</div>
</div>
</div>
<div class="services-section text-center" id="services">

<div class="container">
<div class="row  justify-content-md-center">
<div class="col-md-8">
<div class="services-content" style="padding-top: 20px;padding-bottom: 0px;">
<h1 class="wow fadeInUp" data-wow-delay="0s">Create SIF File</h1>
</div>
</div>
<div class="col-md-12 text-center">
<div class="services">
<form action="<?php echo site_url('Guest-SIF-Create') ?>" method="post">
<div class="row">
	<div class="col-md-4">
		<label>Employer Name</label>
		<input type="text" class="form-control" name="Employee_Name" required="">
	</div>
	<div class="col-md-4">
		<label>Employer Unique ID</label>
		<input type="text" class="form-control" name="WPS_Employee_ID" required="">
	</div>
	<div class="col-md-4">
		<label>Routing Code of the Employers Bank</label>
		<input type="text" class="form-control" name="cbuaecode" required="">
	</div>
	<div class="col-md-4">
		<label>Year</label>
		<select class="form-control form-control-inverse" name="year" id="year" required="">
			<option value="">Select Year</option>
			<?php 
			$year=date('Y');
			$end=$year-10;
			for ($i=$year; $i >=$end ; $i--) { 
				echo '<option value="'.$i.'">'.$i.'</option>';
			}
			 ?>
		</select>
	</div>
	<div class="col-md-4">
		<label>Month</label>
		<select class="form-control form-control-inverse" name="month" id="month" required="">
				<option value="">Select Month</option>
				<option value="1">January</option>
				<option value="2">February</option>
				<option value="3">March</option>
				<option value="4">April</option>
				<option value="5">May</option>
				<option value="6">June</option>
				<option value="7">July</option>
				<option value="8">August</option>
				<option value="9">September</option>
				<option value="10">October</option>
				<option value="11">November</option>
				<option value="12">December</option>
			</select>
	</div>
	<div class="col-md-4">
		<label>Documentary Field (e.g. For RAKBANK)</label>
		<input type="text" class="form-control" name="documentary" required="">
	</div>
</div>
<div class="col-md-12 mt-4 p-0 tablesif">
	<table>
		<tr>
			<th>
				<label style="padding: 5px 5px;font-weight: bold">Employee ID</label>
			</th>
			<th>
				<label style="padding: 5px 5px;font-weight: bold">Routing Code</label>
			</th>
			<th>
				<label style="padding: 5px 5px;font-weight: bold">Employee Account</label>
			</th>
			<th>
				<label style="padding: 5px 5px;font-weight: bold">Salary Fixed</label>
			</th>
			<th>
				<label style="padding: 5px 5px;font-weight: bold">Salary Variable</label>
			</th>
			<th>
				<label style="padding: 5px 5px;font-weight: bold">Leave Days</label>
			</th>
			<th><button type="button" class="btn btn-primary add">+</button></th>
		</tr>
		<tbody class="tbbody">
			<tr class="rowtbl1">
				<th>
					<input type="text" name="LRA_emp_id[]" class="form-control" placeholder="Employee ID" required="" pattern="[a-zA-Z0-9]+" maxlength="14">
				</th>
				<th>
					<input type="text" name="agent_routing_code[]" class="form-control" placeholder="Routing code" pattern="[0-9]+" required="" maxlength="9">
				</th>
				<th style="width:25%">
					<input type="text" name="emp_acc_no[]" class="form-control" placeholder="Employee account" required="" maxlength="23">
				</th>
				<th>
					<input type="text" name="fixed_salary[]" class="form-control" placeholder="Salary fixed" required="" min="0">
				</th>
				<th>
					<input type="text" name="variable_salary[]" class="form-control" placeholder="Salary Variable" required="" value="0" min="0">
				</th>
				<th style="width:8%">
					<input type="text" name="no_of_leaves[]" class="form-control" placeholder="Days" required="" value="0" min="0">
				</th>
				<th><button type="button" class="btn btn-primary" onclick="remove(1)">-</button></th>
			</tr>
		</tbody>
	</table>
</div>
<div class="col-md-12">
	<button type="button" class="btn btn-info" id="clrbtn">Clear</button>
	<button type="submit" class="btn btn-success">Download SIF File</button>
</div>
</form>
</div>
</div>
</div>

<a id="back-top" class="back-to-top page-scroll" href="#main">
<i class="ion-ios-arrow-thin-up"></i>
</a>

</div>

</div>


<script type="text/javascript" src="<?php echo base_url() ?>assets/landing/js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/landing/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/landing/js/plugins.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/landing/js/menu.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/landing/js/custom.js"></script>
<script>
	$('#clrbtn').click(function (){
		$('.form-control').val('')
	})
	function remove(val)
	{
		var rowCount = $('table tr').length;
		if(rowCount>2)
		{
			$('.rowtbl'+val).remove()
		}
		else
		{
			$('table tr th input').val('')
		}
		
	}
	$('.add').click(function (){
		var num=Math.floor(Math.random()*(999-100+1)+100);
		var html='<tr class="rowtbl'+num+'">'+
			'<th><input type="text" name="LRA_emp_id[]" class="form-control" placeholder="Employee ID" required="" pattern="[a-zA-Z0-9]+" maxlength="14"></th>'+
			'<th><input type="text" name="agent_routing_code[]" class="form-control" placeholder="Routing code" pattern="[0-9]+" required="" maxlength="9"></th>'+
			'<th style="width:25%"><input type="text" name="emp_acc_no[]" class="form-control" placeholder="Employee account" required="" maxlength="23"></th>'+
			'<th><input type="text" name="fixed_salary[]" class="form-control" placeholder="Salary Fixed"" required="" min="0"></th>'+
			'<th><input type="text" name="variable_salary[]" class="form-control" placeholder="Salary Variable" required="" value="0" min="0"></th>'+
			'<th style="width:8%"><input type="text" name="no_of_leaves[]" class="form-control" placeholder="Days" required="" value="0" min="0"></th>'+
			'<th><button type="button" class="btn btn-primary" onclick="remove('+num+')">-</button></th>'+
		'</tr>';
		$('.tbbody').append(html);
	})
</script>
</body>

<!-- Mirrored from colorlib.com//polygon/adminty/files/extra-pages/landingpage/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Nov 2020 04:37:57 GMT -->
</html>

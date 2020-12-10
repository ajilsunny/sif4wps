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
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bower_components/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/icon/themify-icons/themify-icons.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/icon/icofont/css/icofont.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/icon/feather/css/feather.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pages/data-table/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
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
							<h4>Log View</h4>
							</div>
							</div>
							</div>
							<div class="col-lg-4">
							<div class="page-header-breadcrumb">
							<ul class="breadcrumb-title">
							<li class="breadcrumb-item">
							<a href="index.html"> <i class="feather icon-home"></i> </a>
							</li>
							<li class="breadcrumb-item"><a href="#!">Log View</a>
							</li>
							</ul>
							</div>
							</div>
							</div>
							</div>


							<div class="page-body">
							<div class="row">
							<div class="col-sm-12">
							<div class="card">
							<div class="card-block">
							<div class="dt-responsive table-responsive">
							<table id="simpletable" class="table table-striped table-bordered nowrap">
							<thead>
							<tr>
							<th>Date</th>
							<th>Bank Name</th>
							<th>Download</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($details as $value) { ?>
							<tr>
							<td><?php echo date('d-m-Y H:i',strtotime($value->timestamp)) ?></td>
							<td><?php echo $value->bank_name ?></td>
							<td><a href="<?php echo base_url('assets/documents/').$value->file_name ?>" download="<?php echo $value->file_name ?>"><?php echo $value->file_name ?></a></td>
							</tr>
							<?php } ?>
							</tbody>
							</table>
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

<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/bower_components/chart.js/js/Chart.js"></script>
<script src="<?php echo base_url() ?>assets/pages/widget/amchart/amcharts.js"></script>
<script src="<?php echo base_url() ?>assets/pages/widget/amchart/serial.js"></script>
<script src="<?php echo base_url() ?>assets/pages/widget/amchart/light.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/SmoothScroll.js"></script>
<script src="<?php echo base_url() ?>assets/js/pcoded.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vartical-layout.min.js"></script>
<!-- <script type="text/javascript" src="<?php echo base_url() ?>assets/pages/dashboard/custom-dashboard.js"></script> -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/script.min.js"></script>

<script src="<?php echo base_url() ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script>
	
	$( '#simpletable' ).DataTable({ order: [[0, 'desc']] })
	$('.dataTables_filter').addClass('text-right');

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
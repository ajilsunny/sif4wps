<?php 
$CI=&get_instance();
$session_check=$CI->session_check();
if ($session_check==0) {
 ?>
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
							<h4>Salary Entries</h4>
							</div>
							</div>
							</div>
							<div class="col-lg-4">
							<div class="page-header-breadcrumb">
							<ul class="breadcrumb-title">
							<li class="breadcrumb-item">
							<a href="index.html"> <i class="feather icon-home"></i> </a>
							</li>
							<li class="breadcrumb-item"><a href="#!">Salary Entry</a>
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
							<div class="card-header text-right row">
								<div class="col-md-2 offset-md-7">
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
								<div class="col-md-2">
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
									<p class="searchmsg"></p>
								</div>
								<div class="col-md-1">
									<button class="btn btn-primary" id="searchbtn" type="button"><i class="ti-import"></i></button>
								</div>
								<div class="col-md-3 offset-md-7 mt-2">
									<a href="Download-Salary-Excel" style="display: none;" class="btn btn-info mr-2 excel-download">Download Excel Format</a>
								</div>
								<div class="col-md-2 mt-2">
									<button class="btn btn-danger excel-upload" style="display: none;" data-toggle="modal" data-target=".bd-example-modal-sm">Upload Excel Format</button>
								</div>
							</div>
							<div class="card-block">
							<div class="dt-responsive table-responsive">
							<form action="<?php echo site_url('Add-Salary-Details') ?>" method="post">
							<table id="simpletable" class="table table-striped table-bordered nowrap">
							<thead>
							<tr>
							<th>Employee</th>
							<th>End Date</th>
							<th>Days</th>
							<th>Salary Fixed</th>
							<th>Salary Variable</th>
							<th>Leave Days</th>
							<th>Created Date</th>
							<!-- <th>Action</th> -->
							</tr>
							</thead>
							<tbody>
							</tbody>
							</table>
							</div>
							<div class="col-md-12 row text-right savediv" style="margin-top:30px;display:none">
								<div class="col-md-6"></div>
								<div class="col-md-6 text-right">
									<button type="submit" class="btn btn-success">Save Salary Entries</button>
								</div>
								</form>
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
<div class="modal fade bd-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Upload Excel Format</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="add_salary_form" method="post" enctype="multipart/form-data">
      	<div class="col-md-12 mt-3">
      		<label>Select Excel format</label>
      		<input type="file" class="form-control addform" name="file" required="" accept=".xls,.xlsx,.csv">
      		<p id="addxlview"></p>
      	</div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary modalbtn">Save</button>
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
	$('#searchbtn').click(function	(){
		var year=$('#year').val()
		var month=$('#month').val()
		if(year!='' && month!='')
		{
			$('.accountdiv').hide()
			$.ajax({
		        url:"<?php echo site_url('Salary-Search') ?>",
		        type: "POST",
		        data:{year:year,month:month},
		        success:function(result)
		        {
		        	// alert(result)
		          $('tbody').html(result)
		          $('.savediv').show()
		          $('.excel-download').show()
		          $('.excel-upload').show()
		        }
		      });
		}
		else
		{
			$('.searchmsg').html('Select all fields')
			$('.searchmsg').css('color','red')
			$('.searchmsg').fadeIn(100).fadeOut(3500)
		}
		
		
	})

	$('.add_salary_form').submit(function(event){
		event.preventDefault();
      	var data=new FormData(this)
      	$('#file').val('');
      	$.ajax({
      	 url:"<?php echo site_url("excel-import-salary"); ?>",
       	method:"POST",
       	data:data,
       	contentType:false,
       	cache:false,
       	processData:false,
       	success:function(result){
       		$('.addform').val('')
         	$('#addxlview').html('Data Imported successfully');
         	$('#addxlview').css('color','green')
         	$('#addxlview').fadeIn(1000).fadeOut(3500);

         	setTimeout(function(){
		        location.reload()
		    }, 4000);
       	}
      });
	})

	$( '#simpletable' ).DataTable({ order: [[6, 'desc']] })
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
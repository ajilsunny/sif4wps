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
							<div class="page-wrapper pt-0">
							 
							<div class="page-body ">
							<div class="row">
							<div class="col-sm-12 mt-0">
								<div class="col-md-12 text-right mb-3">
									<a class="btn btn-success" href="<?php echo site_url('View-Log') ?>">View Log</a>
								</div>
							<div class="card" style="min-height: 560px">
							<div class="card-header row">
								
								<div class="col-md-3">
									<h4><b>Create SIF</b></h4>
								</div>
								<div class="col-md-2 offset-md-4">
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
							</div>
							<form id="creatsifform" action="<?php echo site_url('SIF-Create') ?>" method="post">
							<div class="card-block">
							<div class="dt-responsive table-responsive">
								<table id="simpletable" class="table table-striped table-bordered nowrap">
									<thead>
										<tr>
										<th><input type="checkbox" id="allcheck" > Select</th>
										<th>Sl.No</th>
										<th>Employee</th>
										<!-- <th>Last Date</th> -->
										<!-- <th>No. of Dates</th> -->
										<th>Fixed Salary</th>
										<!-- <th>Variable Salary Component</th> -->
										<!-- <th>No. of leaves</th> -->
										<th>Created Date</th>
										
										</tr>
										</thead>
									<tbody></tbody>
								</table>
							</div>
							</div>
							<div class="col-md-12 row accountdiv" style="margin-top:100px;display: none">
								<div class="col-md-2">
									<select class="form-control form-control-inverse" name="bank" id="bank" required="">
										<option value="">Select Bank</option>
										<?php 
										foreach ($bank as $key) 
										{
											echo '<option value="'.$key->bank_id.'">'.$key->bank_name.'</option>';
										}
										 ?>
									</select>
								</div>
								<div class="col-md-4"></div>
								<div class="col-md-6 text-right">
									<button type="submit" class="btn btn-success">Create SIF</button>
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
	$('#allcheck').change(function(){
      if($('#allcheck').prop("checked") == true)
      {
        $('input[name="check[]"').prop('checked', true);
      }
      else {
        $('input[name="check[]"]').prop('checked', false);
      }
    });
	$('#creatsifform').submit(function (){
		checked = $("input[type=checkbox]:checked").length;
		if(!checked) {
        alert("You must check at least one checkbox.");
        return false;
      }

	})
	$('#searchbtn').click(function	(){
		var year=$('#year').val()
		var month=$('#month').val()
		if(year!='' && month!='')
		{
			$('.accountdiv').hide()
			$.ajax({
		        url:"<?php echo site_url('SIF-Search') ?>",
		        type: "POST",
		        data:{year:year,month:month},
		        success:function(result)
		        {
		        	var r=JSON.parse(result)
		          $('tbody').html(r.html)
		          if(r.count>0)
		          {
		          	$('.accountdiv').show()
		          }

		          
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
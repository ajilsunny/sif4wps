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
							<h4>Employees</h4>
							</div>
							</div>
							</div>
							<div class="col-lg-4">
							<div class="page-header-breadcrumb">
							<ul class="breadcrumb-title">
							<li class="breadcrumb-item">
							<a href="index.html"> <i class="feather icon-home"></i> </a>
							</li>
							<li class="breadcrumb-item"><a href="#!">Employees</a>
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
							<div class="card-header row">
								<div class="col-md-6 row">
									<div class="col-md-8">
										<form method="post" name="frmExcelImport" id="import_form" enctype="multipart/form-data">
										<input type="file" class="form-control" placeholder="Import Excel" id="file" name="file" accept=".xls,.xlsx,.csv" required="">
										<p id="addxlview" class="text-success"></p>
										
									</div>
									<div class="col-md-4">
										<button type="submit" class="btn btn-info">Import</button>
										</form>
									</div>
									<p id="addxlviewduplicate" class="text-danger"></p>
									<div class="col-md-12">
								        Excel File Format Eg: <a href="<?php echo base_url('assets/Employee.xlsx'); ?>" class="pull-right btn-link">Download Sample file</a>
								      </div>
								</div>
								<div class="col-md-6 text-right">
									<button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add Employee</button>
								</div>
							
							</div>
							<div class="card-block">
							<div class="dt-responsive table-responsive">
							<table id="simpletable" class="table table-striped table-bordered nowrap">
							<thead>
							<tr>
							<th>Employee Name</th>
							<th>Employee Unique ID</th>
							<th>Routing Code of the Agent</th>
							<th>Employee Account With Agent</th>
							<th>Salary</th>
							<th>Action</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($details as $value) { ?>
							<tr class="bankview<?php echo $value->emp_id ?>">
							<td><?php echo $value->emp_name ?></td>
							<td><?php echo $value->LRA_emp_id ?></td>
							<td><?php echo $value->agent_routing_code ?></td>
							<td><?php echo $value->emp_account_no ?></td>
							<td><?php echo $value->salary ?></td>
							<td>
								<button class="btn-info" onclick="editemp(<?php echo $value->emp_id ?>)"><i class="icofont icofont-edit-alt"></i></button>
								<button class="btn-danger" onclick="deleteemp(<?php echo $value->emp_id ?>)"><i class="icofont icofont-ui-delete"></i></button>
							</td>
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
<div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="add_emp_form" method="post">
      <div class="modal-body row">
      	<div class="col-md-6">
      		<label>Employee Name *</label>
      		<input type="text" name="emp_name" id="emp_name" class="form-control addform" required="">
      	</div>
      	<div class="col-md-6">
      		<label>Employee Unique ID *</label>
      	<input type="text" name="lra_emp_id" id="lra_emp_id" class="form-control addform" pattern="[a-zA-Z0-9]+" maxlength="14">
      	</div>
      	<div class="col-md-6 mt-3">
      		<label>Routing Code of the Agent *</label>
      		<input type="text" name="agent_routing_code" id="agent_routing_code" class="form-control addform" pattern="[0-9]+" required="" maxlength="9">
      	</div>
      	<div class="col-md-6 mt-3">
      		<label>Employee Account With Agent *</label>
      		<input type="text" name="emp_acc_no" id="emp_acc_no" class="form-control addform" maxlength="23">
      		<p class="accmsg"></p>
      	</div>
      	<div class="col-md-6 mt-3">
      		<label>Salary *</label>
      		<input type="text" class="form-control addform" id="salary" name="salary" required="" min="0">
      	</div>
      	<input type="hidden" name="emp_id" class="form-control addform" id="emp_id" value="">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary modalbtn">Add Employee</button>
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
	$('#import_form').on('submit', function(event){
      event.preventDefault();
      var data=new FormData(this)
      $('#file').val('');
      $.ajax({
       url:"<?php echo site_url("excel-import"); ?>",
       method:"POST",
       data:data,
       contentType:false,
       cache:false,
       processData:false,
       success:function(result){

       	var r=JSON.parse(result)
       	if(r.count>0)
       	{
       		$('#addxlviewduplicate').html(r.duplicate+" employee IDs are duplicated")
       	}
         $('#addxlview').html('Data Imported successfully');
         $('#addxlview').fadeIn(1000).fadeOut(3500);
         $('tbody').html(r.view)
       }
      });
     });
	function editemp(val) {
		$.ajax({
	        url:"<?php echo site_url('Edit-Emp-Details') ?>",
	        type: "POST",
	        data:{val:val},
	        success:function(result)
	        {
	          var r=JSON.parse(result)
	          $('#exampleModalLongTitle').html('Edit Employee Account')
	          $('#emp_name').val(r[0].emp_name)
	          $('#lra_emp_id').val(r[0].LRA_emp_id)
	          $('#agent_routing_code').val(r[0].agent_routing_code)
	          $('#emp_acc_no').val(r[0].emp_account_no)
	          $('#salary').val(r[0].salary)
	          $('#emp_id').val(r[0].emp_id)
	          $('.modalbtn').html('Update Employee')
	          $('.bd-example-modal-lg').modal('show')
	        }
	      });
	}
	function deleteemp(val) 
	{
		if(confirm('Are you sure delete employee?'))
		{
			$.ajax({
	        url:"<?php echo site_url('Delete-Emp-Details') ?>",
	        type: "POST",
	        data:{val:val},
	        success:function(result)
	        {
	          $('tbody').html(result)
	        }
	      });
		}
	}
	$('#emp_acc_no').change(function (){
		var val=$('#emp_acc_no').val()
		$.ajax({
	        url:"<?php echo site_url('acc-Emp-check') ?>",
	        type: "POST",
	        data:{val:val},
	        success:function(result)
	        {
	          	if(result==1)
	        	{
	        		$('#emp_acc_no').val('')
		          	$('.accmsg').html('Already Existing')
		          	$('.accmsg').css('color','red')
		          	$('.accmsg').fadeIn(100).fadeOut(3500)
	        	}
	        }
	      });
	})
	$('.add_emp_form').submit(function (event){
		  event.preventDefault();
	      var data=new FormData(this)
	      $('.addform').val('')
	      $('.close').click();

	      var val=$('#emp_acc_no').val()
			$.ajax({
		        url:"<?php echo site_url('acc-Emp-check') ?>",
		        type: "POST",
		        data:{val:val},
		        success:function(result)
		        {
		        	if(result==1)
		        	{
		        		$('#emp_acc_no').val('')
			          	$('.accmsg').html('Already Existing')
			          	$('.accmsg').css('color','red')
			          	$('.accmsg').fadeIn(100).fadeOut(3500)
		        	}
		        	else
		        	{
		        		$.ajax({
					        url:"<?php echo site_url('Add-Employee-Details') ?>",
					        type: "POST",
					        data:data,
					        contentType:false,
					        cache:false,
					        processData:false,
					        success:function(result)
					        {
					          $('tbody').html(result)
					          $('#exampleModalLongTitle').html('Add Employee')
					          $('.modalbtn').html('Add Employee')
					        }
					      });
		        	}
		          
		        }
		      });

      return false;
	})
	$( '#simpletable' ).DataTable()
	$('.dataTables_filter').addClass('text-right');

	$("#myModal").on("hidden.bs.modal", function () {
		  $('.addform').val('')
		});	

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
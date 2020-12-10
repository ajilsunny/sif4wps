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
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<link rel="icon" href="<?php echo base_url() ?>assets/images/favicon.png" type="image/x-icon">

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
							<h4>Bank Accounts</h4>
							</div>
							</div>
							</div>
							<div class="col-lg-4">
							<div class="page-header-breadcrumb">
							<ul class="breadcrumb-title">
							<li class="breadcrumb-item">
							<a href="index.html"> <i class="feather icon-home"></i> </a>
							</li>
							<li class="breadcrumb-item"><a href="#!">Bank Accounts</a>
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
							<div class="card-header text-right">
							<button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add Bank Account</button>
							</div>
							<div class="card-block">
							<div class="dt-responsive table-responsive">
							<table id="simpletable" class="table table-striped table-bordered nowrap">
							<thead>
							<tr>
							<th>Bank Name</th>
							<!-- <th>Branch</th> -->
							<!-- <th>Account No.</th> -->
							<th>Routing Code Of The Employers Bank</th>
							<th>Documentary Field (e.g. For RAKBANK)</th>
							<th>Action</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($details as $value) { ?>
							<tr class="bankview<?php echo $value->bank_id ?>">
							<td><?php echo $value->bank_name ?></td>
							<!-- <td><?php echo $value->branch ?></td> -->
							<!-- <td><?php echo $value->account_number ?></td> -->
							<td><?php echo $value->cbuae_routing_code ?></td>
							<td><?php echo $value->ifsc_code ?></td> 
							<td>
								<button class="btn-info" onclick="editbank(<?php echo $value->bank_id ?>)"><i class="icofont icofont-edit-alt"></i></button>
								<button class="btn-danger" onclick="deletebank(<?php echo $value->bank_id ?>)"><i class="icofont icofont-ui-delete"></i></button>
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
        <h5 class="modal-title" id="exampleModalLongTitle">Add Bank Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="add_bank_form" method="post">
      <div class="modal-body row">
      	<div class="col-md-6">
      		<label>Bank Name *</label>
      		<input type="text" name="bankname" id="bankname" class="form-control addform" required="">
      	</div>
      	<div class="col-md-6">
      		<label>Routing Code Of The Employers Bank *</label>
      		<input type="text" class="form-control addform" id="cbuae" name="cbuae" required="">
      	</div>
      	<!-- <div class="col-md-6">
      		<label>Branch</label>
      		<input type="text" name="branch" id="branch" class="form-control">
      	</div> -->
      	<!-- <div class="col-md-6 mt-3">
      		<label>Account Number</label>
      		<input type="text" name="accno" id="accno" class="form-control">
      	</div> -->
      	<div class="col-md-6 mt-3">
      		<label>Documentary Field (e.g. For RAKBANK)</label>
      		<input type="text" name="ifsc" id="ifsc" class="form-control addform" required="">
      	</div>
      	<input type="hidden" name="bank_id" class="form-contro addform" id="bank_id" value="">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary modalbtn">Add Account</button>
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
	function editbank(val) {
		$.ajax({
	        url:"<?php echo site_url('Edit-Bank-Details') ?>",
	        type: "POST",
	        data:{val:val},
	        success:function(result)
	        {
	          var r=JSON.parse(result)
	          $('#exampleModalLongTitle').html('Edit Bank Account')
	          $('#bankname').val(r[0].bank_name)
	          $('#branch').val(r[0].branch)
	          $('#accno').val(r[0].account_number)
	          $('#ifsc').val(r[0].ifsc_code)
	          $('#cbuae').val(r[0].cbuae_routing_code)
	          $('#bank_id').val(r[0].bank_id)
	          $('.modalbtn').html('Update Bank')
	          $('.bd-example-modal-lg').modal('show')
	        }
	      });
	}
	function deletebank(val) 
	{
		if(confirm('Are you sure delete bank?'))
		{
			$.ajax({
	        url:"<?php echo site_url('Delete-Bank-Details') ?>",
	        type: "POST",
	        data:{val:val},
	        success:function(result)
	        {
	          $('tbody').html(result)
	        }
	      });
		}
	}
	$('.add_bank_form').submit(function (event){
		  event.preventDefault();
	      var data=new FormData(this)
	      $('.addform').val('')
	      $('.close').click();
	      $.ajax({
	        url:"<?php echo site_url('Add-Bank-Details') ?>",
	        type: "POST",
	        data:data,
	        contentType:false,
	        cache:false,
	        processData:false,
	        success:function(result)
	        {
	          $('tbody').html(result)
	          $('#exampleModalLongTitle').html('Add Bank Account')
	          $('.modalbtn').html('Add Bank')
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
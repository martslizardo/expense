<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
	<head>
		<base href="<?php echo base_url();?>" />
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Expense</title>
		<!-- <script src="assets/js/jquery.js"></script> -->
		<link rel="stylesheet" type="text/css" href="assets/css/flavored-reset-and-normalize.css" >
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" >
		<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" >
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/styles.css" >
		<script>
			var base_url = window.location.origin+"/expense/";
		</script>
		<?php $segment = $this->uri->segment(2); 
			if($segment == 'classification') { ?>
				<script src="assets/js/classification.js">
				</script>
				<script>fetch_classify();</script>
			<?php }elseif($segment == 'request'){ ?>
				<script src="assets/js/request.js">
				</script>
				<script>
					fetch_request();	
				</script>
			<?php }elseif($segment == 'reimbursement'){ ?>
				<script src="assets/js/reimbursement.js">
				</script>
				<script>
					fetch_reimbursement();	
				</script>
			<?php } ?>

			<script>
				$(document).ready(function(){
					$(".exp-tbl").DataTable();
				})
			</script>
	</head>
	<body>
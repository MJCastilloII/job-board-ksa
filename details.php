<!DOCTYPE html>
<html>
<style>
	.panel {
    margin-bottom: 10px;
    border: 0;
}
	body{
		background: linear-gradient(to left, #019bf5, #acc9f7)
	}
</style>
<head>
	<title>Job Board</title>
	<!-- RESPONSIVE TAG -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="./lib/bootstrap/css/bootstrap.min.css">
</head>
<body>
	<!-- Start HTML Here -->
	<div id="main">
		
		<?php

			require_once("db.php");
        	$query = "SELECT * FROM jobs WHERE id =". $_GET['id'];
        	$result = mysqli_query($db,$query);
        	if(mysqli_num_rows($result) == 1){
        		$job = mysqli_fetch_assoc($result);
        	}
		?>
	<div class="row">
		<div class="col-12 col-md-6">
			<br><br>
			<h1>Job Description</h1>
			<br>
			<li><?php echo $job['description']; ?></li>
		</div>

			<div class="col-12 col-md-6">
				<br><br><br>
				Title: <b><?php echo $job['title']; ?></b><br>
				Company Name: <b><?php echo $job['company_name']; ?></b><br>
				Work Location: <b><?php echo $job['location']; ?></b><br>
				<button type="btn" class="btn btn-dark">Apply Now</button>
			</div>
		</div>
			

	</div>
	<!-- END HTML Here -->
	<!-- Jquery Plugin -->
	<script type="text/javascript" src="./lib/jquery/jquery.min.js"></script>
	<!-- Bootstrap Plugin -->
	<script type="text/javascript" src="./lib/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
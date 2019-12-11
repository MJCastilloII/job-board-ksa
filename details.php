<!DOCTYPE html>
<html>
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
        	$query = "SELECT * FROM jobs WHERE id =" . $_GET['id'];
        	$result = mysqli_query($db,$query);
        	if(mysqli_num_rows($result) == 1){
        		$job = mysqli_fetch_assoc($result);
        	}
		?>
		<div class="row">
			<div class="col-12 col-md-6">
				<h1>Job Description</h1><br>
				<ul>
				<li>Candidate must possess at least High School Diploma</li>
				<li>Required language(s):&nbsp;English, Filipino</li>
				<li>No work experience required.</li>
				<li>Required Skill(s): Marketing Skills</li>
				<li>self-driven, competent and dynamic person</li>
				<li>Result oriented &amp; with advance selling &amp; negotiation skills</li>
				<li>Must have a Driver's Lisence at least Non-Pro Restriction 1 &amp; 2</li>
				<li>Applicant must be residing within the area or willing to be assigned in the said area.</li>
			</ul>
			</div>
			<div class="col-12 col-md-6">
				<br><br><br>
				Title: <b>Business Developer Representative</b><br>
				Company Name: <b>ZESTO CORPORATION</b><br>
				Work Location: <b>ANTIPOLO</b><br>
				<button type="btn" class="btn btn-dark">Apply Now</button>
			</div>
		</div>

		<div class="col-12 col-md-6">
				<h1>Job Description</h1><br>
				<ul>
				<li>Candidate must possess at least High School Diploma</li>
				<li>Required language(s):&nbsp;English, Filipino</li>
				<li>No work experience required.</li>
				<li>Required Skill(s): Marketing Skills</li>
				<li>self-driven, competent and dynamic person</li>
				<li>Result oriented &amp; with advance selling &amp; negotiation skills</li>
				<li>Must have a Driver's Lisence at least Non-Pro Restriction 1 &amp; 2</li>
				<li>Applicant must be residing within the area or willing to be assigned in the said area.</li>
			</ul>
			</div>
			<div class="col-12 col-md-6">
				<br><br><br>
				Title: <b><?php echo $job['title']; ?></b><br>
				Company Name: <b>Tech Mahindra Ltd.</b><br>
				Work Location: <b>Eastwood City</b><br>
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
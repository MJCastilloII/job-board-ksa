<?php
	require_once('./db.php');
	$postStatus = "";
	if($_POST){
		if(isset($_POST["post"]) && $_POST["post"] == "post"){
			$title = mysqli_real_escape_string($db, $_POST["title"]);
			$company_name = mysqli_real_escape_string($db, $_POST["company_name"]);
			$description = mysqli_real_escape_string($db, $_POST["description"]);
			$location = mysqli_real_escape_string($db, $_POST["location"]);

			$query = "INSERT INTO jobs (employer,title,company_name,description,location)
						VALUES(1,'$title','$company_name','$description','$location')";
			$result = mysqli_query($db,$query);
			if($result){
				$postStatus = "success";
			}else{
				$postStatus = "failed";
			}
		}
	}
?>

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
	<?php include_once("./nav.php") ?>
	<!-- Start HTML Here -->
	<div class="d-flex flex-column align-items-center mt-2" id="main">
		<h2>Post a Job</h2>
		<form class="container form" method="POST">
			Title: <input class="form-control" type="text" name="title" placeholder="Job Title" required><br>
			Company Name: <input class="form-control" type="text" name="company_name" placeholder="Your Company"required><br>
			Job Description: <textarea class="form-control" rows="5" name="description" placeholder="What this job needs" required></textarea><br>
			Location: <input class="form-control" type="text" name="location" placeholder="Where your company is located" required><br>
			<input class="btn btn-success" type="submit" name="post" value="post">
		</form>
	</div>
	<!-- END HTML Here -->
	<!-- Jquery Plugin -->
	<script type="text/javascript" src="./lib/jquery/jquery.min.js"></script>
	<!-- Bootstrap Plugin -->
	<script type="text/javascript" src="./lib/bootstrap/js/bootstrap.min.js"></script>
	<!-- Sweet Alert Plugin -->
	<script src="./lib/sweetalert2/sweetalert.min.js"></script>
	<!-- CUSTOM JS -->
	<script>
		var postStatus = "<?php echo $postStatus; ?>";
		if(postStatus == "success"){
			Swal.fire({
				icon: 'success',
				title: 'Success!',
				text: 'You have successfully posted the job',
			});
		}else if(postStatus == "failed"){
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Something went wrong!'
			});
		}
	</script>
</body>
</html>
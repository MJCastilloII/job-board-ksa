<!DOCTYPE html>
<html>
<head>
	<title>Job Board</title>
	<!-- RESPONSIVE TAG -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="./lib/bootstrap/css/bootstrap.min.css">
	<style>
	.panel-body{
		padding: 5px;
	}
	.h2{
		margin-top: 0;
		margin-bottom: 10px;
		color: #1c3f94;
	}
	p {
	  font-family: "Times New Roman", Times, serif;
	}
	</style>
</head>
<body>
	<!-- Start HTML Here -->
	<div id="main">

 <section class="site-section">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2">Job Listed</h2>
          </div>
        </div>

        <?php 
        	require_once("db.php");
        	$query = "SELECT * FROM jobs";
        	$result = mysqli_query($db,$query);
        	while($row = mysqli_fetch_assoc($result)){
				echo "<div class='mb-5'>
			          <div class='row align-items-start job-item border-bottom pb-3 mb-3 pt-3'>
			            <div class='col-md-2'>
			              <a href='job-single.html'></a>
			            </div>
			            <div class='col-md-4'>
			              <h2><a href='job-single.html'>".$row["title"]."</a> </h2>
			             <strong>".$row["company_name"]."</strong>
			            </div>
			            <div class='col-md-3 text-left'>
			              <span class='meta'>".$row["location"]."</span>
			            </div>
			            <div class='col-md-3 text-md-right'>
			              <button type='btn btn-info'><a href='details.php?id=".$row["id"]."'>See More Details</button></a>
			            </div>
			          </div>";
        	}
        ?>
         

        <div class="row pagination-wrap">

          <div class="col-md-6 text-center text-md-left">
            <div class="custom-pagination ml-auto">
              <a href="#" class="prev">Previous</a>
              <div class="d-inline-block">
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
              </div>
              <a href="#" class="next">Next</a>
            </div>
          </div>
        </div>

      </div>
    </section>

	</div>
	<!-- END HTML Here -->
	<!-- Jquery Plugin -->
	<script type="text/javascript" src="./lib/jquery/jquery.min.js"></script>
	<!-- Bootstrap Plugin -->
	<script type="text/javascript" src="./lib/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
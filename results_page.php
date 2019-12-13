<!DOCTYPE html>
<html>
<head>
	<title>Job Board</title>
	<!-- RESPONSIVE TAG -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="./lib/bootstrap/css/bootstrap.min.css">
	<style>
	body{
		background: linear-gradient(to left, #019bf5, #acc9f7)
	}
	figure {
	    border: thin #c0c0c0 solid;
	    display: flex;
	    flex-flow: column;
	    padding: 5px;
	    max-width: 120px;
	    margin: auto;
	}
	.panel-body{
		padding: 15px;
	}
	p {
	  font-family: "Times New Roman", Times, serif;
	}
	.padding-bottom-60 {
	    padding-bottom: 60px;
	}
	</style>
</head>
<body>
	<!-- Start HTML Here -->
	<div id="main">

 <section class="site-section">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-md-4 text-center">
            <h2 class="section-title mb-2"><strong>All Jobs</h2></strong>
          </div>
        </div>
 		
        
        <?php 
        	require_once("db.php");
        	$query = "SELECT * FROM jobs";
        	$result = mysqli_query($db,$query);
        	while($row = mysqli_fetch_assoc($result)){
				echo "<span><div class='col-mb-3'>
			          <div class='row align-items-center job-item border-bottom pb-3 mb-3 pt-3'>
			            <div class='col-md-2'>
			              <a href='job-single.html'></a>
			            </div>
			            <div class='col-md-3 text-md-left'>
			              <h2>".$row["title"]."</a> </h2>
			             ".$row["company_name"]."
			            </div>
			            <div class='col-md-3 text-left'>
			              <span class='meta'>".$row["location"]."</span>
			            </div>
			            <div class='col-md-3 text-md-left'>
			             <button type='btn' class='btn btn-warning'><a href='details.php?id=".$row["id"]."'><font color='black'>See More Details</button></a></font>
			            </div>
			          </div>";
        	}
        ?>

        <div class="row pagination-wrap">

          <div class="col-6 text-center text-md-left">
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
    </section>
    <br>
    <div class="container-fluid bg-2 text-center"><center><strong><h2>Top Employers</strong></center></div>
 	<br><br>
 	<div class="row">
 		<figure><img src="./assets/img/metro-logo.jpg" width="100px" height="100px"></figure>
 		<figure><img src="./assets/img/startek-logo.jpg" width="100px" height="100px"></figure>
        <figure><img src="./assets/img/sm-logo.jpg" width="100px" height="100px" ></figure>
        <figure><img src="./assets/img/meralco-logo.jpg" width="100px" height="100px"></figure>
        <figure><img src="./assets/img/optum-logo.jpg" width="100px" height="100px"></figure>
        <figure><img src="./assets/img/citiglobal-logo.jpg" width="100px" height="100px"></figure>
        <figure><img src="./assets/img/metrobank-logo.jpg" width="100px" height="100px"></figure>

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
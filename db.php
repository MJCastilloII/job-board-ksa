<?php
	
	$db = mysqli_connect('localhost','root','','job-board');

	if(!$db){
		die("Failed to connect to database");
	}

?>
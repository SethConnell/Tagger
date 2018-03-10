<?php

require("initialize.php");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Cool Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>View Your Data</title>
	<style>
	body {
		width: 100%;
		height: 100%;
		margin-top: 0px;
	}
	input[type="text"] {
	    width: 100%;
	    border-radius: 25px;
	    background-color: #f3f3f3;
	    border: none;
	    height: 50px;
	    font-size: 20px;
	    text-indent: 10px;
	    margin-bottom: 10px;
	}
	#search {
		margin: auto;
		width: 450px;
		height: 30px;
	}

	h1 {
		color: #30c07b;
		text-align: center;
		font-family: 'Arba', Arial;
		margin-top: 0px;
	}

	header {
		width: 100%;
		margin-top: 0px;
		padding: 30px;
		padding-bottom: 75px;

	}

	button {
		margin: auto;
		width: 150px;
		height: 35px;
	}
	button {
		display: inline-flex;
   		align-items: center;
   		display: flex;
	  	align-items: center;
	  	justify-content: center;
	  	font-family: Arial;
	  	background-color: #30c07b;
	  	border-radius: 15px;
	  	margin: auto;
	  	margin-bottom: 15px;
	  	color: white; 
	  	height: 35px; 
	  	width: 100px;
	}
	button:hover {
		background-color: #1d774c;
	}

	.results {
		width: 50%;
		margin: auto;
	}

	.title {
		color: #30c07b;
		font-size: 30px;
		color: blue;
		font-family: 'Arba', Arial;
	}
	.tag {
		color: white;
		background-color: #30c07b;
		padding: 3px;
		margin: 5px;
		border-radius: 5px;
		font-size: 12px;
		font-family: 'Arba', Arial;
	}

	.row {
		margin-top: 10px;
		width: 100%;
	}
	</style>
</head>

<body>
	<header>
	<form action="ViewFiles.php" method="post">
	<div id = "search">
	<input type="text" name="query" placeholder = "Tagname"><br>
	<button type = "submit">Filter</button>
	</div>
	</form>
	
	</header>
	<br>
	<br>
	<br>

	<div class = "results">
			<table class="table">
	  <thead>
	    <tr>
	      <th>Title</th>
	      <th>Tags</th>
	    </tr>
	  </thead>
	  <tbody>
	   <?php
	   		if (!empty($_POST["query"])) {
	   			searchTag($_POST["query"]);
	   		}
	   		else {
	   			getAllData();
	   		}
	   ?>
	  </tbody>
	</table>
	</div>
</body>

</html>
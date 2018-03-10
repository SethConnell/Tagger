<?php
	require("initialize.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Data</title>
<!-- Cool Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
	body {
		width: 100%;
		height: 100%;
	}
	.container {
		width: 390px;
		margin: auto;
		border-radius: 5px;
		padding: 15px;
		text-align: center;
	}
	h1 {
		text-align: center;
	}
	input {
		margin-bottom: 15px;
	}

	input[type="text"] {
	    width: 100%;
	    border-radius: 25px;
	    background-color: #f3f3f3;
	    border: none;
	    height: 50px;
	    font-size: 20px;
	    text-indent: 10px;
	}
	textarea[type="text"] {
	    width: 100%;
	    border-radius: 25px;
	    background-color: #f3f3f3;
	    border: none;
	    height: 400px;
	    font-size: 20px;
	    padding-left: 10px;
	    resize: none;
	    border: none;
	    border: 0px;
	    overflow: auto;
	    -webkit-box-shadow: none;
	    -moz-box-shadow: none;
	    box-shadow: none;
	}

	.button {
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
	.button:hover {
		background-color: #1d774c;
	}
	.spanstyle {
		background-color: #30c07b; 
		border-radius: 8px; 
		padding: 5px;
		margin-top: 10px;
		margin-left: 5px;
		margin-right: 5px;
		display: inline-block;
		color: white;
	}
</style>

</head>

<body>
	<h1>Add Some Data!</h1>
	<div class = "container">
	<form action="FileUploaded.php" method="post">
		<input type="text" name="title" placeholder = "Title">
		<h3>Current tags:</h3><span class = "tags"><span class = "spanstyle">(No Tags)</span></span>
		<br>
		<input id = "tags" type="text" name="tags" placeholder = "Tags" style = "width: 75%; margin: auto; margin-bottom: 10px; margin-top: 10px;">
		<input type = "hidden" name = "truetags" id = "truetags">
		<br>
		<div class = "button" id = "tagger" style = "color: white; height: 35px; width: 100px;">Add Tag</div>
		<br>
		<textarea type="text" name="content" placeholder = "Content..." class = "content"></textarea>
		<br>
		<input class = "button" type="submit" style = "margin: auto">
	</form>
	<script src = "simplescript.js"></script>
	</div>
</body>

</html>
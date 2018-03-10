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
	
	<title>Title of the document</title>
	<style>
	
	  h1 {
	  position: absolute;
	  margin: auto;
	  top: 0;
	  right: 0;
	  bottom: 0;
	  left: 0;
	  width: 400px;
	  height: 100px;
	  border-radius: 3px;
	  text-decoration: underline;
      text-decoration-color: #30c07b;
	}
	</style>

</head>

<body>
	<div class = "container">
		<?php
		require("initialize.php");

		if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['truetags'])) {
			$database->insert("data", array(
				"title" => $_POST['title'],
				"content" => nl2br($_POST['content']),
				"tags" => $_POST['truetags']
			));	
			echo "<h1>Upload successful!</h1>";
		}
		else {
			echo "<h1>You broke it!</h1>";
		}
		?>
	</div>
</body>

</html>

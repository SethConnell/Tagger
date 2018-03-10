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
	width: 500px;
	margin: auto;
	margin-top: 30px;
}
h1 {
	text-align: center;
	text-decoration: underline;
	text-decoration-color: #30c07b;
}

* {
	font-family: 'Arba', Arial;
	color: #666666;
}
</style>
</head>

<body>
	<div class = "container">
	<?php
		if (!empty($_GET["id"])) {
			getDataWithID($_GET["id"]);
		}
		else {
			echo "crap";
		}
	?>
	</div>
</body>
<?php
	// If you installed via composer, just use this code to requrie autoloader on the top of your projects.
	require 'vendor/autoload.php';
	 
	// Using Medoo namespace
	use Medoo\Medoo;

	$database = new Medoo([
	// required
	'database_type' => 'mysql',
	'database_name' => '', 				// Add database name here.
	'server' => '', 					// Add server name here.
	'username' => '', 					// Add username here.
	'password' => '' 					// Add password here.
	]);


	$database->query("CREATE TABLE IF NOT EXISTS data (
					id MEDIUMINT NOT NULL AUTO_INCREMENT,
					title text NOT NULL,
					content text,
					tags text,
					PRIMARY KEY (id)
					) ENGINE NDB;");

	// This is a temporary line. Please remove later.
	// echo var_dump( $database->error() );

	

	function cleantext($text){
		$string = $text;
		$pattern = "/[^0-9a-zA-Z_\s(*,.;:\-\(\)!@\$\?\')\-\+\=\/]/";
		return preg_replace($pattern, '', $string);
	}

	
	function getAllData(){
		global $database;
		$re = '/{.*?}/';
		$data = $database->select("data", [
			"title",
			"tags",
			"id"
		]);
		foreach($data as $d) {
			$stringy = "";
			preg_match_all($re, $d["tags"], $tags, PREG_SET_ORDER, 0);
			for ($a = 0; $a < count($tags); $a++) {
		        if (1 == 1) {
		        	$stringy = $stringy . "<span class = 'tag'>" . cleantext($tags[$a][0]) . "</span>";

		        }
		    }
		    $tags = $stringy;
		    echo "<tr><span class = 'title'><td>" . "<a href = 'ReadFile.php?id=" . $d['id'] . "'>" . $d["title"] . "</a>" . "</span></td><td>" . $tags . "</td>" . "</tr>";
		}
	}

	function searchTag($query){
		global $database;
		$re = '/{.*?}/';
		$data = $database->select("data",["title", "tags", "id"], [
			"tags[~]" => "$query"
		]);
		foreach($data as $d) {
			$stringy = "";
			
			preg_match_all($re, $d["tags"], $tags, PREG_SET_ORDER, 0);
			for ($a = 0; $a < count($tags); $a++) {
		        if (1 == 1) {
		        	$stringy = $stringy . "<span class = 'tag'>" . cleantext($tags[$a][0]) . "</span>";
		        }
		    }

			$tags = $stringy;
			echo "<tr><span class = 'title'><td>" . "<a href = 'ReadFile.php?id=" . $d['id'] . "'>" . $d["title"] . "</a>" . "</span></td><td>" . $tags . "</td>" . "</tr>";
		}
	} 

	function getDataWithId($id) {
		global $database;
		$re = '/{.*?}/';
		$data = $database->select("data", ["content","title",], ["id" => "$id"]);
		foreach($data as $d) {
			echo "<h1>" . $d["title"] . "</h1>";
			echo "<br>";
			echo "<p>" . $d["content"] . "</p>";
		}
	};

?>

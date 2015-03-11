<?php
	session_start();
	echo ('Cookie :');
	print_r($_COOKIE);
?>
<!DOCTYPE html>
<html>
<head>
	<title>page4_1.php, link databases</title>

	<style>
		h3 {
			color: blue;
		}
 	</style>

 	<script type="text/javascript">
 		function showTime() {
 			document.getElementById('zoneTime').innerHTML = Date();
 		}
 		function fieldEmpty() {
 			var a=document.forms["brandForm"]["brandtb"].value;
 			var b=document.forms["brandForm"]["nametb"].value;
 			if (a==null || a=="", b==null || b=="") {
 			document.getElementById('zoneTime').innerHTML = "Enter Stuff in the field";
 				return false;
 			}
 		}
 	</script>

</head>

<body>

<h3>page4_1.php, link databases</h3>

<?php include('menu1.php'); ?>

<p>
<form action="" type="GET">
	<input type="checkbox" name="couleurcb" value="bleu">bleu</input>
	<input type="checkbox" name="couleurcb" value="rouge">rouge</input>
	<input type="checkbox" name="couleurcb" value="violet">violet</input>

	<input type="submit" value="choose color" />

</form>
</p>

<p>
	<form action="" methode="GET" name="brandForm" onsubmit="return fieldEmpty()">
		<input type="textbox" name="brandtb" placeholder="type a brand" id="a" />
		<input type="textbox" name="nametb" placeholder="type your name" id="b" />
		<input type="submit" value="search" />
	</form>
</p>

<p>
	<input type="submit" value="show time" onclick="showTime()"/>
	<span id='zoneTime'>Time will display here</span>
</p>

<?php

	$user = 'root';
	$password = 'root';
	$host = 'localhost';
	$port = 3306;
	$database = 'CAR';

	$couleurcb = $_GET['couleurcb'];
	$brandtb = $_GET['brandtb'];
	$nametb = $_GET['nametb'];

	$link = mysqli_connect($host, $user, $password, $database) or die("Error" . mysqli_error($link));

	$query = "SELECT * from VOITURE where color = '".$couleurcb."'" or die("Error in the query to the db" . mysqli_error($link));

	$result = $link->query($query);

	while($row = mysqli_fetch_array($result)) {
		echo $row["id"] . " ";
		echo $row["brand"] . " ";
		echo $row["color"] . "<br />";
	}

	$query = "SELECT * from VOITURE where brand = '".$brandtb."'" or die("Error in the query to the db" . mysqli_error($link));
	$result = $link->query($query);

	if(isset($nametb)) {
		echo("Hi ".$nametb.", you like those car: <br />");
	}

	while($row = mysqli_fetch_array($result)) {
		echo $row["id"] . " ";
		echo $row["brand"] . " ";
		echo $row["color"] . "<br />";
	}

?>

</body>
</html>
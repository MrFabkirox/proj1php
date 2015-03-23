<!DOCTYPE html>
<html>
<head>
	<title>page5_1.php, insert</title>

	<style>
 	</style>

 	<script type="text/javascript">
 	</script>

</head>

<body>

<?php include('menu1.php'); ?>

<h3>Insert</h3>

<p>
	To insert a new car:
<form action="" methode="GET">
	<input type="text" name="brandin">
	<input type="text" name="yearin">
	<input type="text" name="colorin">
	<input type="submit">
</form>
</p>

<p>
	To delete a car:
<form action="" methode="GET">
	<input type="text" name="rowin">
	<input type="submit">
</form>
</p>

<?php

$brandin = $_GET['brandin'];
$yearin = $_GET['yearin'];
$colorin = $_GET['colorin'];
$rowin = $_GET['rowin'];

try {
	$db = new PDO('mysql:host=localhost;dbname=CAR','root', 'root');
}catch(PDOexception $e) {
	echo "une erreur est survenue lors de la connection";
}

//$insert = $db->exec("UPDATE VOITURE SET color='purple' where id=2");
$insert = $db->exec("INSERT INTO VOITURE(brand, year, color) VALUES ('$brandin', '$yearin', '$colorin')");

$delete = $db->exec("DELETE FROM VOITURE WHERE id='$rowin'");


$query = $db->query("SELECT * FROM VOITURE");

while($vago = $query->fetch()) {
	echo $vago['id']." ".$vago['brand']." ".$vago['year']." ".$vago['color']."<br />";
}


?>

</body>
</html>


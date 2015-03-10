<h3>page3_1</h3>

<?php include("menu1.php");?>

<a href='/proj1/page2.php'>page 2</a><br />

parameter :

<?php

	if (isset($_GET['name'])) {
		echo 'name is :' .$_GET['name']. ' tx';	
	} else {
		echo 'no name';
	}

?>
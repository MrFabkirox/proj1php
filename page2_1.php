
<h3>page2_1</h3>

<?php include("menu1.php");?>

<p>
	Go to page 2 with :

	<ul style = "list-style-type: none;">
		<li><a href="/proj1/page3_1.php?name=name&firstname=firstname">parametre</a></li>
		<li><a href="/proj1/page3_1.php">no parametre</a></li>
	</ul>

	<form action="" type="GET">
		<input type="text" placeholder="Some text" name="tosend"></input>
		<input type="submit" value="Send to this page">
	</form>

</p>

<?php
	
	echo "Value of the form: ".$_GET['tosend'];

?>
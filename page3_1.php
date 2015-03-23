<html>
<head>
	<title>page4_1.php, link databases</title>

	<style>
		h3 {
			color: blue;
		}
 	</style>

 	<script type="text/javascript">
 		setTimeout("document.bgColor='#6ECFFF'", 130)
 		setTimeout("document.bgColor='#75D1FF'", 160)
 		setTimeout("document.bgColor='#7DD4FF'", 190)
 		setTimeout("document.bgColor='#85D6FF'", 220)
 		setTimeout("document.bgColor='#8CD9FF'", 250)
 		setTimeout("document.bgColor='#94DBFF'", 280)
 		setTimeout("document.bgColor='#9CDEFF'", 310)
 		setTimeout("document.bgColor='#A3E0FF'", 340)
 		setTimeout("document.bgColor='#ABE3FF'", 370)
 		setTimeout("document.bgColor='#B2E6FF'", 400)
 		setTimeout("document.bgColor='#BAE8FF'", 430)
 		setTimeout("document.bgColor='#C2EBFF'", 460)
 		setTimeout("document.bgColor='#C9EDFF'", 490)
 		setTimeout("document.bgColor='#D1F0FF'", 520)
 		setTimeout("document.bgColor='#D9F2FF'", 550)
 		setTimeout("document.bgColor='#E0F5FF'", 580)
 		setTimeout("document.bgColor='#E8F7FF'", 610)
 		setTimeout("document.bgColor='#F0FAFF'", 640)
 		setTimeout("document.bgColor='#F7FCFF'", 670)
 		setTimeout("document.bgColor='#FFFFFF'", 700)

 		setTimeout("document.count.count1.value = '3'", 1000);
 		setTimeout("document.count.count1.value = '2'", 2000);
 		setTimeout("document.count.count1.value = '1'", 3000);
 		setTimeout("document.count.count1.value = ''", 4000);

 		function copyStuff() {
 			var x = document.getElementsByTagName("p")[0];
 			var c = x.childNodes[0].nodeValue;
 			document.getElementById('toCopy').innerHTML = c;
 		}
 		
 	</script>

</head>

<body>

<h3>page3_1</h3>

<?php include("menu1.php");?>


Enter parameter name in the url to try my awsome isset: <br />

<?php

	if (isset($_GET['name'])) {
		echo 'name is :' .$_GET['name']. ' !';	
	} else {
		echo 'no name';
	}

?>

<form name="count">
	<input type="text" name="count1"></input>
	<button type="button" onclick="copyStuff()">Copy stuff</button>
</form>

<p>
	Il etait une fois...
</p>

<p id="toCopy">
</p>
<!DOCTYPE html>
<html>
<head>
	<title>Quote generator</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style type="text/css">
	@font-face {
    font-family: helveticalight;
    src: url(font/helvetica.ttf);
	}
	@font-face {
    font-family: opensans;
    src: url(font/opensans.ttf);
	}
	#hel{
		font-family: helveticalight;
	}
	#osans {
		font-family: opensans;
	}
	#scroll
	{
		overflow-y:auto;
	}
	</style>
</head>
<?php
	session_start();
	$_SESSION['color'] = $_POST['color'];
	$_SESSION['fontcolor']=$_POST['fontcolor'];
	print_r($_SESSION);
?>
<body>
<!--<h2> Welcome to Quote generator </h2>
<h3>Enter the title and text </h3>-->
<?php
 include 'menu.php';
?>
			 <div class="indexdiv" id="scroll">
			 
			 <p>Select Font!</p>

			<form action = "selectbackground.php" method = "POST">
			<p>Title Font </p>
 		   	<input type="radio" name="titlefont" value = "helvetica" required="required" checked /><label id="hel">Helvetica Light</label><br>
           	<br><input type = "radio" name = "titlefont" value = "opensans" required = "required" ><label id="osans">Open Sans Light</label><br>

           	<p>Body Font </p>
           	<input type="radio" name="bodfont" value = "helvetica" required="required" checked /><label id="hel">Helvetica Light</label><br>
           	<br><input type = "radio" name = "bodfont" value = "opensans" required = "required" ><label id="osans">Open Sans Light</label><br>

           <input type="submit" value="Done!"/>

           </form>

       	</div>
</html>
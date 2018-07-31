<!DOCTYPE html>
<html>

<head>
	<title>Quote generator</title>
			<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
	input[type=button], input[type=submit], input[type=reset] {
    background-color: blue;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 10px 10px;
    cursor: pointer;
    border-radius: 0px;
    font-size: 18px;
    font-family: monospace;
    height: 200px;
    width: 270px;
    border-radius: 50px;
    text-shadow: 3px 3px 15px black;
    box-shadow: 3px 3px 50px black

}


</style>
</head>
<?php
	session_start();
	print_r($_SESSION);
	//$_SESSION['color']=$_POST['color'];
	//$_SESSION['type']=$_POST['type'];

	
?>
<body>
<!--hello this is working-->
<?php 
include 'menu.php';
?>
<div class = "imagediv">
			<p>Casual Layouts</p>
			<form action = "inputtext.php" method = "POST">

           <input type="submit" name="layoutname" id="cas1" value="casuallayout1" />
           <input type="submit" name="layoutname" id="cas2" value="casuallayout2"/>           
           <br><br>           
           <input type="submit" name="layoutname" id="cas3" value="casuallayout3"/>
           <input type="submit" name="layoutname" id="cas4" value="casuallayout4"/>
           
           </form>
           </div>
           </body>
</html>
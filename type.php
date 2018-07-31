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

}</style>
</head>
<!--<?php
	//session_start();
	//$_SESSION['color']=$_POST['color'];

	
?>-->
<body>
<!--hello this is working-->

<?php 
include 'menu.php';
print_r($_SESSION);
print_r($_SESSION);
?>
<div class = "imagediv">
			<p>Select Type</p>
			
           <form action = "typemediate.php" method = "POST">

           <input type="submit" name="type" id="one" value="casual" />
           <input type="submit" name="type" id="two" value="corporate"/>
           <input type="submit" name="type" id="three" value="cool"/>
           <br><br>
           <input type="submit" name="type" id="four" value="minimalist" />
           <input type="submit" name="type" id="five" value="events"/>
           <input type="submit" name="type" id="six" value="fun"/>
           
           </form>
           </div>

       <?php //echo '<h2>'.$_SESSION['title'].'</h2>'; 
	/*echo '<h3>'.$_SESSION['quotetext'].'</h2>';
	//echo '<h3>'.$_SESSION['color'].'</h2>'
	$color = $_SESSION['color'];

	if($color == "rw")
		echo '<h3> Red & Yellow</h3>';
	else if($color == "bw>")
		echo '<h3> Black & White</h3>';
	else if($color == "yg")
		echo '<h3> Yellow & Green </h3>';*/ ?>
</html>
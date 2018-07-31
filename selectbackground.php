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
  input[type=button], input[type=submit], input[type=reset] {
    font-size: 0px;
  }



</style>
</head>
<?php
	session_start();
	$_SESSION['titlefont'] = $_POST['titlefont'];	
  $_SESSION['bodfont'] = $_POST['bodfont']; 

  print_r($_SESSION);
?>
<body>
<!--hello this is working-->
<?php 
include 'menu.php';
?>
<div class = "imagediv" id="backgrounddiv">
			<p>Background</p>
			<form action = "generate.php" method = "POST">

           <input type="submit" name="picture" id="seven" value="patterns" />
           <input type="submit" name="picture" id="eight" value="clouds"/>
           <input type="submit" name="picture" id="nine" value="books"/>
           <br><br>
           <input type="submit" name="picture" id="ten" value="computers" />
           <input type="submit" name="picture" id="eleven" value="stationery"/>
           <input type="submit" name="picture" id="twelve" value="low-poly"/>
           <br><br>
           <input type="submit" name="picture" id="one" value="architecture" />
           <input type="submit" name="picture" id="two" value="food"/>
           <input type="submit" name="picture" id="three" value="animals"/>
           <br><br>
           <input type="submit" name="picture" id="four" value="cars" />
           <input type="submit" name="picture" id="five" value="sceneries"/>
           <input type="submit" name="picture" id="six" value="festivals"/>
           <br><br>
           <input type="submit" name="picture" id="thirteen" value="serene" />
           <input type="submit" name="picture" id="fourteen" value="party"/>
           <input type="submit" name="picture" id="fifteen" value="corporate"/>
           <br><br>
           <input type="submit" name="picture" id="sixteen" value="concert" />
           <input type="submit" name="picture" id="seventeen" value="football"/>
           <input type="submit" name="picture" id="eighteen" value="abstract"/>
           
           
           
           </form>
           </div>
           </body>
</html>
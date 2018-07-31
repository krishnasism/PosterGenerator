<!DOCTYPE html>
<html>
<head>
	<title>Quote generator</title>
			<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
	label{
		font-size : 24px;		
	}
	#div1
	{
		overflow-y: auto;
	}
</style>
</head>
<?php
	session_start();
	$_SESSION['title']=$_POST['title'];
	if($_SESSION['layoutname'] != "casuallayout2"){
		$_SESSION['quotetext']=$_POST['quotetext'];
	}
	else
	{
	 $_SESSION['quotetext']=" ";

	}

	$type = $_SESSION['type'];
	if($type == "events")
	{	
		if(!empty($_POST['date']))
			$_SESSION['date'] = $_POST['date'];
	    else
	    	$_SESSION['date']=" ";

	    if(!empty($_POST['time']))
			$_SESSION['time'] = $_POST['time'];
	    else
	    	$_SESSION['time']=" ";

	    if(!empty($_POST['venue']))
			$_SESSION['venue'] = $_POST['venue'];
	    else
	    	$_SESSION['venue']=" ";

	    if(!empty($_POST['website']))
			$_SESSION['website'] = $_POST['website'];
	    else
	    	$_SESSION['website']=" ";
	}

	print_r($_SESSION);

?>
<body>
<!--new script-->
<?php
 include 'menu.php';

?>
<!--<h2> Welcome to Quote generator </h2>
<h3> Select the colour tone </h3>-->
			<div class="colordiv" id="div1">
			<p>Select Colour Profile</p><br>
			<form action = "selectfont.php" method = "POST">
			<p>Header Background Colour</p><br>
				<input type="radio" name="color" value="black" checked/>
				<label>Black</label><br>
		
				<input type="radio" name="color" value="red" />
				<label>Red</label><br>
					
				<input type="radio" name="color" value="green" />
				<label>Green</label><br>
					
				<input type="radio" name="color" value="blue" />
				<label>Blue</label><br>

				<p>Title Font Color</p><br>
				<input type="radio" name="fontcolor" value="white" checked/>
				<label>White</label><br>
		
				<input type="radio" name="fontcolor" value="yellow" />
				<label>Yellow</label><br>
					
				<input type="radio" name="fontcolor" value="violet" />
				<label>Violet</label><br>
					
				<input type="radio" name="fontcolor" value="blue" />
				<label>Light Blue</label><br>
			
				
			<br><br><br><br>
           <input type="submit" value="Generate"/>

           <br><br><br><br>

           </form>
           </div>

       <!--<?php /*echo '<h2>'.$_SESSION['title'].'</h2>'; 
	echo '<h3>'.$_SESSION['quotetext'].'</h2>';*/ ?> -->
</html>
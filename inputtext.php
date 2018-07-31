<!DOCTYPE html>
<html>
<head>
	<title>Quote generator</title>
		<link rel="stylesheet" type="text/css" href="style.css">

</head>
<?php
	session_start();
	$_SESSION['layoutname'] = $_POST['layoutname'];
	$layoutname = $_SESSION['layoutname'];
	$_SESSION['date'] =" ";
	$_SESSION['time'] =" ";
	$_SESSION['venue'] =" ";
	$_SESSION['website'] =" ";

	print_r($_SESSION);




?>
<body>
<!--<h2> Welcome to Quote generator </h2>
<h3>Enter the title and text </h3>-->
<?php
 include 'menu.php';
?>
			 <div class="indexdiv">
			 
			 <p>Quote Generator Beta</p>

			<form action = "colortone.php" method = "POST">
			
 		   	<input type="text" name="title" required="required" <?php ?> maxlength="23" placeholder="Title" /><br><br>
           	<?php if($layoutname!="casuallayout2"){
           		print '<br><input type = "text" name = "quotetext" required = "required" maxlength="500" placeholder="Quote Text"><br>';
           	}
           	?>

           <input type="submit" value="Done!"/>

           </form>

       	</div>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Quote generator</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style type="text/css">
			#scroll{
				overflow-y: auto;
			}
		</style>

</head>
<?php
	session_start();
	$_SESSION['layoutname'] = $_POST['layoutname'];
	$layoutname = $_SESSION['layoutname'];
	print_r($_SESSION);?>
<body>
<!--<h2> Welcome to Quote generator </h2>
<h3>Enter the title and text </h3>-->
<?php
 include 'menu.php';
?>
			 <div class="indexdiv" id="scroll">
			 
			 <p>Quote Generator Beta</p>

			<form action = "colortone.php" method = "POST">
			
 		   	<input type="text" name="title" required="required" maxlength="30" placeholder="Title" /><br><br>
           	<?php if($layoutname!="eventlayout3"){
           		print '<br><input type = "text" name = "quotetext" required = "required" maxlength="500" placeholder="Message"><br>';
           	}
           	?>

           	<input type="text" name="date" maxlength="25" placeholder="Date" /><br><br>

           	<input type="text" name="time" maxlength="25" placeholder="Time" /><br><br>
           	<input type="text" name="venue"  maxlength="25" placeholder="Venue" /><br><br>
           	<input type="text" name="website" maxlength="25" placeholder="Website" /><br><br>

           <input type="submit" value="Done!"/>

           </form>

       	</div>
</html>
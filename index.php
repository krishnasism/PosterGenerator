<!DOCTYPE html>
<html>
<head>
	<title>Quote generator</title>
		<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<!--<h2> Welcome to Quote generator </h2>
<h3>Enter the title and text </h3>-->
<?php
 include 'menu.php';
?>
			 <div class="indexdiv">
			 <p>Quote Generator Beta!</p>
			 <p>©Virtual Vertices</p><br><br><br>
			   <form action ="type.php" method = "POST">
			   	<input type = "submit" value = "Let's begin!"/>
			   </form>
			<!-- <p>Quote Generator Beta</p>

			<form action = "colortone.php" method = "POST">
			
 		   	<input type="text" name="title" required="required" maxlength="50" placeholder="Title" /><br><br>
           	<br><input type = "text" name = "quotetext" required = "required" maxlength="500" placeholder="Quote Text"><br>

           <input type="submit" value="Generate"/>

           </form>-->

       	</div>
</html>
<?php
	session_start();
	//$_SESSION['color']=$_POST['color'];
	$_SESSION['type']=$_POST['type'];
	$type = $_SESSION['type'];
	
	if($type == "casual"){
		header('location:casuallayouts.php');
	}
	else if($type == "corporate")
	{
		header('location:corporatelayouts.php');

	}
	else if($type == "events")
	{
		header('location:eventlayouts.php');
	}
	
?>
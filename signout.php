<?php
	session_start();
	
	if (!isset($_SESSION['insuredLogin'])) {
		header("Location: signin.php");
	} 
	elseif(isset($_SESSION['insuredLogin'])!="") {
		header("Location: index.php");
	}
	
	if (isset($_GET['signout'])) {
		session_destroy();
		unset($_SESSION['insuredLogin']);
		header("Location: signin.php");
		exit;
	}

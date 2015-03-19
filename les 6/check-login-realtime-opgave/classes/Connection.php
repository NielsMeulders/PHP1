<?php 
		$sHost = "localhost";
		$sUser = "root";
		$sPassword = "root";
		$sDatabase = "phples";
		$link = @mysqli_connect($sHost, $sUser, $sPassword, $sDatabase) or die("Oop, dbase is gone!");	
?>
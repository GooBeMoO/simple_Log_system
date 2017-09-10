<?php
		session_start();
		require_once "config.php";
		$link = mysqli_connect(hostname,username,password,db_name) or die ('Cannot connect database');
		mysqli_query($link,"SET NAMES 'utf-8;'");
		$sql = "UPDATE `tutorial2` SET (`account`, `password`, `sex`) VALUES('$account', '$pwd','$sex')"
		$result=mysqli_query($link,$sql) or die("無法執行");
		mysqli_close($link);
		header("location:homepage.html");
?>
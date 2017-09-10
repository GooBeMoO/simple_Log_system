<?php
require_once "config.php";
$link = mysqli_connect(hostname,username,password,db_name) or die ('Cannot connect database');
		mysqli_query($link,"SET NAMES 'utf-8;'");
$account=$_POST['account'];
$pwd=$_POST['password'];
$sex=$_POST['sex'];
	echo "帳號為:",$account,"<br>";
	echo "密碼為:",$pwd,"<br>";
	echo "性別為:",$sex,"<br>";
$sql = "INSERT INTO `tutorial2` (`account`, `password`, `sex`) VALUES('$account', '$pwd','$sex')";
$result=mysqli_query($link,$sql) or die("無法執行");
mysql_close($link);
header("location:log.html");
?>
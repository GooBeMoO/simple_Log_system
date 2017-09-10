<?php
session_start();
require_once 'config.php';
$link = mysqli_connect(hostname,username,password,db_name) or die ('Cannot connect database');
		mysqli_query($link,"SET NAMES 'utf-8;'");
		//connect mysql
		
$account=mysqli_real_escape_string($link,$_POST["account"]);
$password=mysqli_real_escape_string($link,$_POST["password"]);

$sql = "SELECT account,password FROM tutorial2 
WHERE account='$account' AND  password='$password'";
$result = mysqli_query($link,$sql) or die;
if(mysqli_num_rows($result)==1){
	$_SESSION['username'] = $account;
	echo "歡迎".$_SESSION['username']." 登入" ;}
else
	echo "帳號或密碼錯誤" ;
mysqli_close($link);
header("location:192.168.43.238/works/signin/homepage.php");
?>
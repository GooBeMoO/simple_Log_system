<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> The First Example: Hello, World </title>
</head>
<body>
<?php
	if($_SESSION['username'] == null)
	{
		header("location:192.168.43.238/works/signin/log.html") ;
		}
?>
<?php
	echo "歡迎".$_SESSION['username']." 登入"  ;
?>
<p>
<input type="button" onclick="location.href='updatedata.html'" value="會員資料管理">
<input type="button" onclick="location.href='logout.php'" value="登出" > 
</body>
</html>
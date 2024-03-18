<?php
 require_once 'database.php';
 $username = $_POST['nicheng'];
 $password= $_POST['mima'];
 $sql="select ad_name,ad_password from admintable where(ad_name='$username'AND ad_password='$password')";
 $result=mysqli_query($conn,$sql);
 $row=mysqli_num_rows($result);
 if(!$row){
	echo"账号或密码错误,请重新","<a href='ad_login.html'>登录</a>";
	echo"如果没有账号,请","<a href='ad_register.html'>注册</a>";
	 }
	 else{
		 header("location:duzhezengshanchagai.php");
	 } 
 mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<style type="text/css">
			body{background: linear-gradient(-200deg,#fac0e7,#aac2ee);}
		</style>
	</head>
	<body>
	</body>
</html>

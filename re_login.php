<?php
 require_once 'database.php';
 $username = $_POST['zhanghao'];
 $password= $_POST['mima'];
 $sql="select re_id,re_name,re_password from readertable where(re_name='$username'AND re_password='$password')";
 $result=mysqli_query($conn,$sql);
 // 关联数组
 $row=mysqli_fetch_assoc($result);
 //$row=mysqli_num_rows($result);
 if(!$row){
	echo"账号或密码错误,请重新","<a href='re_login.html'>登录</a>";
	echo"如果没有账号,请","<a href='re_register.html'>注册</a>";
	}
	 else{
		 session_start();
		 // 存储 session 数据
		 $_SESSION['re_id']=$row['re_id'];
		 $_SESSION['re_name']=$row['re_name'];
		 header("location:tushuchakanyujieyue.php");
		 //echo " ","<a href='tushuchakanyujieyue.php'>进入图书馆</a>"; 
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
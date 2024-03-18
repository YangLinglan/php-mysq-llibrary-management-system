<?php
 require_once 'database.php';
$username = $_POST['nicheng'];
$password1= $_POST['mima'];
$password2=$_POST['querenmima'];
if($password1==$password2){
	$sql = "INSERT INTO admintable (ad_name, ad_password) VALUES ('$username','$password1')";
	$result = mysqli_query($conn, $sql);
	//判断是否注册后显示内容
	if (!$result)
	{
	    echo "注册失败，请重新注册!","<br>";//输出错误
	    echo "<a href='ad_register.html'>返回</a>";//超链接到首页
	}
	else
	{  
	   echo "注册成功!";
	  echo"<a href='ad_login.html'>立刻登录</a>";//超链接到登录页面
	}
}
else{
	    echo "前后密码不匹配，注册失败！";//输出错误
	   echo "<a href='ad_register.html'>返回</a>";//超链接到注册页面
}
//关闭链接数据库
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


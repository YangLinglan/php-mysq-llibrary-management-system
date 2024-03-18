<?php  
require_once 'database.php';	
$re_name=$_POST['nicheng'];
$password=$_POST['mima'];
$password2=$_POST['querenmima'];
if($password==$password2){
	$resultt=mysqli_query($conn,"select * from readertable where re_name ='$re_name';");
	 while($row=mysqli_fetch_array($resultt)) {
	 $dbusername=$row["re_id"]; 
	 $dbpassword=$row["re_password"]; 
	 } 
	 if(!is_null($dbusername))
	  {echo "该昵称已被占用！请重新输入！"."<br>";
	        echo "<a href='re_register.html'>返回</a>";}
	
	 else if(empty($_POST['nicheng'])||empty($_POST['mima'])||empty($_POST['querenmima']))
	   {echo "存在空白输入！"."<br>";//输出错误
	        echo "<a href='re_register.html'>返回</a>";}
	 
	 else{
	 	$sql="insert into readertable(re_name,re_password) values('$re_name','$password')";
	  $result=mysqli_query($conn,$sql);  //判断内容是否显示
	   if(!$result)
	    {
	        echo "注册不成功！"."<br>";//输出错误
	        echo "<a href='re_register.php'>返回</a>";
	    }
	    else
	    {
	        echo "注册成功!"."<br/>";//输出成功
	        echo "<a href='re_login.html'>点击登录</a>";
	    }
	}
}else{
	echo"前后密码不一致.<a href='re_register.html'>点击返回</a>";
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
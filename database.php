<?php
$conn=new mysqli("localhost","root","123456","mylibrary");
if($conn->connect_error){
	die("数据库链接失败");
}
//else{
//die("连接成功！");
//}
?>


<?php 
session_start();
if(!$_SESSION['re_id']) {
		header("Location:re_login.html");
	}
require_once 'database.php';
//获取借阅记录
$record_id = isset($_GET['record_id']) ? $_GET['record_id'] : '';
$re_id = $_SESSION['re_id'];
//找出记录表的信息
$sql=" select * from recordtable where record_id='$record_id';";
$result=mysqli_query($conn,$sql);
//关联数组,得到上一个页面的record_id
$row=mysqli_fetch_assoc($result);
$dbid=$row["book_id"];
$now_time=time();
$return_time = date('Y-m-d H:i:s',$now_time);
//把那一行的归还时间更新
$sql1= "update recordtable set return_time='$return_time' where record_id='$record_id';";
$r = mysqli_query($conn, $sql1);

	$sql2="update booktable set book_count= book_count+1 where book_id='$dbid';";
	$result2=mysqli_query($conn,$sql2);
	
	header("Location:guihuantushu.php");

mysqli_close($conn);
?>


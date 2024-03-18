<?php 
session_start();
if(!$_SESSION['re_id']) {
		header("Location:re_login.html");
	}
require_once 'database.php';

$book_id = isset($_GET['book_id']) ? $_GET['book_id'] : '';
$re_id = $_SESSION['re_id'];
$re_name = $_SESSION['re_name'];

//找出图书的信息
$sql="select * from booktable where book_id=$book_id";
$result=mysqli_query($conn,$sql);
 // 关联数组
$row=mysqli_fetch_assoc($result);


if( $row['book_count']<1 ) {
	echo '<script type="text/javascript">';
	echo 'alert("此书无库存");';
	echo 'window.history.back(-1);';
	echo '</script>';
	die;
}

//借出时间
$now_time=time();
$borrow_time = date('Y-m-d H:i:s',$now_time);
//插入记录
$sql = "insert into recordtable (book_name,book_reader,borrow_time,return_time,
 book_class,re_id,book_id) values('{$row["book_name"]}','{$re_name}',
	'{$borrow_time}',null,'{$row['book_class']}','{$re_id}','{$book_id}'
)";
$r = mysqli_query($conn, $sql);

if($r) {
	
	$sql="update booktable set book_count= book_count-1 where book_id=$book_id";
	$result=mysqli_query($conn,$sql);
	
	header("Location:tushuchakanyujieyue.php");
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
	</body>
</html>

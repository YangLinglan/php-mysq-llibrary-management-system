<?php
 require_once 'database.php';
$book_class=$_POST["book_class"];
$book_name=$_POST["book_name"];
$writer=$_POST["writer"];
$book_count=$_POST["book_count"];

$sql = 'INSERT INTO booktable (book_class, book_name,writer,book_count) VALUES ("'.$book_class.'","'.$book_name.'","'.$writer.'",'.$book_count.')';
$result = mysqli_query($conn, $sql);
 if(!$result){
		echo"发生错误，添加失败！";
		 mysqli_error($result); 
		echo "<a href='Addbook.html'>重新添加</a>";//超链接到添加页面
} else{
	header("Location:tushuzengshanchagai.php");
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


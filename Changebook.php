<?php

require_once 'database.php';

	$book_id = isset($_POST['book_id']) ? $_POST['book_id'] : '';
	$book_count = isset($_POST['book_count']) ? $_POST['book_count'] : '';
	if(!empty($book_count)&&!empty($book_id)){
			$sql = "UPDATE booktable SET book_count = '$book_count' WHERE book_id='$book_id';";
			 mysqli_query($conn, $sql);
			echo '修改成功';
			header("Location:tushuzengshanchagai.php");
			
			
		}
		else {
		echo  '请输入修改的图书数量';
	    echo " 点击<a href='tushuzengshanchagai.php'>这里</a>返回";
	     }
?>

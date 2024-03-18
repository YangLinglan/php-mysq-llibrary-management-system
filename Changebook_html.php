<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>修改图书数量</title>
		<link rel="stylesheet" type="text/css" href="css/guanli.css"/>
	</head>
	<body>
		<form action="Changebook.php" method="POST">
			<div class="container">
				<div class="tit">修改图书数量</div>
				<input type="hidden" name="book_id" value="<?php echo $_GET['book_id']; ?>" />
				<input type="text" placeholder="请输入数量" name="book_count">
				<input type="submit" name="" id="" value="提交"/>
				<span><a href="tushuzengshanchagai.php">取消修改</a></span>
				<div class="msg" style="display: none;" id="msg">
				</div>
				</form>
			</div>
</html>
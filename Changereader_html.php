
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>修改密码</title>
		<link rel="stylesheet" type="text/css" href="css/guanli.css"/>
	</head>
	<body>
		<form action="Changereader.php" method="POST">
			<div class="container">
				<div class="tit">修改密码</div>
				<input type="hidden" name="re_id" value="<?php echo $_GET['re_id'];?>" />
				<input type="password" placeholder="请输入密码" name="mima">
				<input type="password" placeholder="请确认密码" name="querenmima">
				<input type="submit" name="" id="" value="提交" />
				<span><a href="duzhezengshanchagai.php">取消修改</a></span>
				<div class="msg" style="display: none;" id="msg">
				</div>
				</form>
			</div>
</html>
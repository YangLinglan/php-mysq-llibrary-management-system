<?php
require_once 'database.php';
if($_SERVER['REQUEST_METHOD']==='POST') {	
	$re_id = isset($_POST['re_id']) ? $_POST['re_id'] : '';
	$mima = isset($_POST['mima']) ? $_POST['mima'] : '';
	$querenmima = isset($_POST['querenmima']) ? $_POST['querenmima'] : '';
	if (!empty($mima) && !empty($querenmima)&&!empty($re_id) ){
		if($mima ==  $querenmima) {
			$sql = "UPDATE readertable SET re_password ='$mima' WHERE re_id='$re_id';";
			$result = mysqli_query($conn, $sql);
			echo '修改成功';
			header("Location:duzhezengshanchagai.php");
		}else {
			echo " 点击<a href='Changereader_html.php'>这里</a>重新输入";
		}
	} else {
		 echo "<a href='Changereader_html.php'>请输入密码</a>";
	}
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

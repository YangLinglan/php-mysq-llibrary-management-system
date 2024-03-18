<?php
   require_once 'database.php';
	$sql="select * from readertable";
    mysqli_select_db($conn, 'readertable' );
   $retval = mysqli_query($conn, $sql);
   if(!$retval ){
    die('无法读取数据: ' . mysqli_error($conn));
     }
    $result=$conn->query($sql);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>管理员操作界面</title>
		<link rel="stylesheet" type="text/css" href="css/guanliyuancaozuo.css"/>
	</head>
	<body>
			<div id="wrap">
				<div id="subBar">
					<ul>
						<li>
							<span>欢迎您！管理员</span>
						</li>
						<li>
							<span>
								<a href="#">
									<span>读者增删查改</span>
								</a>
							</span>
						</li>
						<li>
							<span>
								<a href="tushuzengshanchagai.php">
									<span>图书增删查改</span>
								</a>
							</span>
						</li>
						<li>
							<span>
								<a href="jieyuejiluzengshanchagai.php">
									<span>借阅记录查看</span>
								</a>
							</span>
						</li>
						<li>
							<span>
								<a href="index.html">
									<span>退出</span>
								</a>
							</span>
						</li>
					</ul>
				</div>
				<div id="navBar">
				    <a href="Addreader.html">添加读者</a>	
				</div>
				<div id="content">
					<table border="1"  align="center" width="99%" style="height:300px" >
						<tr>
							<td style="text-align:center;">读者id</td>
							<td style="text-align:center;">读者姓名</td>
							<td style="text-align:center;">读者密码</td>
							<td style="text-align:center;">操作</td>
						</tr>
						
					<?php
					while($row=$result->fetch_assoc()){
					?>
					   <th scope="row"><?php echo $row['re_id'];?></th>
					         <td ><?php echo $row['re_name'];?></td> 
					         <td ><?php echo $row['re_password'];?> </td>  
							 <td>
								  <a href="Deletereader.php?re_id=<?php echo $row['re_id']?>"> 删除读者 </a>·
								 <a href="Changereader_html.php?re_id=<?php echo $row['re_id']?>"> 修改密码 </a>
							      </td>
							 </tr >
								 <?php
								 }
						         ?>
				</div>
			</div>
	</body>
</html>
<?
mysqli_close($conn);
?>
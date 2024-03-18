<?php
	session_start();
	if(!$_SESSION['re_id']) {
		header("Location:re_login.html");
	}
   require_once 'database.php';
	$sql="select * from booktable";
    mysqli_select_db($conn, 'booktable' );
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
		<title>用户操作界面</title>
		<link rel="stylesheet" type="text/css" href="css/yonghucaozuo.css"/>
	</head>
	<body>
		<div id="wrap">
				<div id="subBar">
					<ul>
						<li>
							<span>欢迎您！用户</span>
						</li>
						<li>
							<span>
								<a href="#">
									<span>图书查看与借阅</span>
								</a>
							</span>
						</li>
						<li>
							<span>
								<a href="jieyuejiluchakan.php">
									<span>借阅记录查看</span>
								</a>
							</span>
						</li>
						<li>
							<span>
								<a href="guihuantushu.php">
									<span>归还图书</span>
								</a>
							</span>
						</li>
						<li>
							<span>
								<a href="index.html">
									<span>返回</span>
								</a>
							</span>
						</li>
					</ul>
				</div>
			</div>
				<div id="navBar">
				</div>
				<div id="content">
					   <table border="1"  align="center" width="99%" style="height:300px" >
						<tr>
							<td style="text-align:center;">图书分类</td>
							<td style="text-align:center;">图书id</td>
							<td style="text-align:center;">书名</td>
							<td style="text-align:center;">作者</td>	
							<td style="text-align:center;">剩余数量</td>	
							<td style="text-align:center;">操作</td>
						</tr>
						
					<?php
					while($row=$result->fetch_assoc()){
					?>
					   <th scope="row"><?php echo $row['book_class'];?></th>
					         <td ><?php echo $row['book_id'];?></td> 
					         <td ><?php echo $row['book_name'];?> </td> 
					         <td ><?php echo $row['writer'];?> </td> 
							<td ><?php echo $row['book_count'];?> </td> 
							 <td>
							        <a href="jieyue.php?book_id=<?php echo $row['book_id'];?>">借阅</a>
							      </td>
					 
							 </tr >
								 <?php
								 }
								 ?>
                              </table>
				</div>	
			</div>
		</body>
</html>
<?php
mysqli_close($conn);
?>
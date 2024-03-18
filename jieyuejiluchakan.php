<?php
    session_start();
	if(!$_SESSION['re_id']) {
		header("Location:re_login.html");
	}
	
	$re_id = $_SESSION['re_id'];
	
   require_once 'database.php';
   
   //只选出该读者借阅的书
	$sql="select * from recordtable where re_id='$re_id'";
    mysqli_select_db($conn, 'recordtable' );
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
								<a href="tushuchakanyujieyue.php">
									<span>图书查看与借阅</span>
								</a>
							</span>
						</li>
						<li>
							<span>
								<a href="#">
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
				<div id="navBar">
					
				</div>
				<div id="content">
					<div id="content">
						<table border="1"  align="center" width="99%" style="height:100px" >
							<tr>
								<td style="text-align:center;">图书名称</td>
							
								<td style="text-align:center;">借阅时间</td>
								<td style="text-align:center;">归还时间</td>	
								<td style="text-align:center;">图书所在类</td>
							</tr>
							
						<?php
						while($row=$result->fetch_assoc()){
						?>
						   <th scope="row"><?php echo $row['book_name'];?></th>
						         <td ><?php echo $row['borrow_time'];?> </td> 
						         <td >
									 <?php if($row['return_time']==null) {
										echo"未归还"; 
									 }else{
										 echo $row['return_time'];
									 }?> </td> 
								<td ><?php echo $row['book_class'];?> </td> 
		
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

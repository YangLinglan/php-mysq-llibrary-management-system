<?php
   require_once 'database.php';
	$sql="select * from recordtable";
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
								<a href="duzhezengshanchagai.php">
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
								<a href="#">
									<span>借阅记录查看</span>
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
					<table border="1"  align="center" width="99%" style="height:300px" >
						<tr>
							<td style="text-align:center;">记录编号</td>
							<td style="text-align:center;">图书名称</td>
							<td style="text-align:center;">借阅者</td>
							<td style="text-align:center;">借阅时间</td>
							<td style="text-align:center;">归还时间</td>	
							<td style="text-align:center;">图书所在类</td>
						</tr>
						
					<?php
					while($row=$result->fetch_assoc()){
					?>
					   <th scope="row"><?php echo $row['record_id'];?></th>
					         <td ><?php echo $row['book_name'];?></td> 
					         <td ><?php echo $row['book_reader'];?></td> 
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
				</div>
			</div>
	</body>
</html>
<?
mysqli_close($conn);
?>


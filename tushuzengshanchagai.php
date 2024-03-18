<?php
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
								<a href="#">
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
									<span>返回</span>
								</a>
							</span>
						</li>
					</ul>
				</div>
				<div id="navBar">
					<span>
						<a href="Addbook.html">
							<span>增加图书</span>
						</a>
					</span>
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
				 <td> <a href="Deletebook.php?book_id=<?php echo $row['book_id']?>">删除图书 </a>··
					 <a href="Changebook_html.php?book_id=<?php echo $row['book_id']?>"> 更改图书数量 </a>
				      </td>
				 </tr >
					 <?php
					 }
					 ?>
					 </table>
			</div>
	</body>
</html>
<?
mysqli_close($conn);
?>
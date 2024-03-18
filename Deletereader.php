<?php
$re_id=$_GET['re_id'];
require_once'database.php';
$sql="DELETE FROM readertable WHERE re_id='$re_id'";
$conn->query($sql);
header("Location:duzhezengshanchagai.php");
mysql_close($conn);
?>
 
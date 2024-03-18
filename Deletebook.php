<?php
$book_id=$_GET['book_id'];
require_once'database.php';
$sql="DELETE FROM booktable WHERE book_id='$book_id'";
$conn->query($sql);
header("Location:tushuzengshanchagai.php");
mysql_close($conn);
?>
 
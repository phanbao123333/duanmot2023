<?php 
$id = $_GET['id'];
// echo $id;
$sql_delete = "DELETE FROM donhang WHERE id = $id";
$query_id = mysqli_query($connect,$sql_delete);
header('location:index.php?act=order');
?>
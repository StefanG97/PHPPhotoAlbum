<?php
include 'connect.php';

$photo_name = $_GET['name'];

$sql = "DELETE FROM photos WHERE name='$photo_name'";
mysql_query($sql, $conn);
header('location:view.php');
?>

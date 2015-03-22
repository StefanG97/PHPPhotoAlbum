<?php
include 'connect.php';

$album_id = $_GET['id'];

$sql = "DELETE FROM photos WHERE album_id ='$album_id'";
$sql1 = "DELETE FROM albums WHERE id='$album_id'";
mysql_query($sql, $conn);
mysql_query($sql1, $conn);
header('location:index.php');
?>

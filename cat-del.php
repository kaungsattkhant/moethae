<?php
include("confs/config.php");

$id=$_GET['id'];
$sql= "DELETE FROM category WHERE id=$id" ;
mysqli_query($conn,$sql) or die("cannot delete");
header("location: cat-list.php");
?>

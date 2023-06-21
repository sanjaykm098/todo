<?php
require("db.php");
$id = $_GET['del'];
$sql = "DELETE FROM `todo` WHERE id = $id";
$query = mysqli_query($database,$sql) or die('check');
header("location:tasks.php");


?>

<?php
require("db.php");
$id = $_GET['com'];
$sql = "UPDATE `todo` SET `status` = 'Completed' WHERE `todo`.`id` = $id;";
$query = mysqli_query($database,$sql) or die('check');
header("location:tasks.php");


?>
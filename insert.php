<?php
require("db.php");
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $task = $_POST['task'];
    $summary = $_POST['summary'];
    $priority = $_POST['priority'];
    # date Funcation
    $due = $_POST['due'];
    $date = date_create($due);
    $due = date_format($date, "d-m-Y");

    #sql
    $sql = "INSERT INTO `todo` (`id`, `task`, `summary`, `priority`, `due`, `status`) VALUES (NULL, '$task', '$summary', '$priority', '$due', 'Pending')";
    $query = mysqli_query($database,$sql) or die("Check Agin");
    header("location:tasks.php");
}
?>
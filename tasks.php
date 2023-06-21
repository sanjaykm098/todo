<!doctype html>
<html lang="en">
<?php
require('db.php')
?>
<?php
$value = "SELECT * FROM `todo`";
$iid = "asc";
$sid = "status_asc";
$tid = "task_asc";
$pid = "p_asc";
$did = "d_asc";
$ssid = "s_asc";
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (isset($_GET['order'])) {
        if ($_GET['order'] === "asc") {
            $value = "SELECT * FROM `todo` ORDER BY `todo`.`id` ASC";
            $iid = "des";
        } 
        elseif ($_GET['order'] === 'des') {
            $value = "SELECT * FROM `todo` ORDER BY `todo`.`id` DESC";
            $iid = "asc";
        }
        elseif ($_GET['order'] === 'status_des') {
            $value = "SELECT * FROM `todo` ORDER BY `todo`.`status` DESC";
            $sid = "status_asc";
        }
        elseif ($_GET['order'] === 'status_asc') {
            $value = "SELECT * FROM `todo` ORDER BY `todo`.`status` ASC";
            $sid = "status_des";
        }
        elseif ($_GET['order'] === 'task_asc') {
            $value = "SELECT * FROM `todo` ORDER BY `todo`.`task` ASC";
            $tid = "task_des";
        }
        elseif ($_GET['order'] === 'task_des') {
            $value = "SELECT * FROM `todo` ORDER BY `todo`.`task` DESC";
            $tid = "task_asc";
        }
        elseif ($_GET['order'] === 'p_asc') {
            $value = "SELECT * FROM `todo` ORDER BY `todo`.`priority` ASC";
            $pid = "p_des";
        }
        elseif ($_GET['order'] === 'p_des') {
            $value = "SELECT * FROM `todo` ORDER BY `todo`.`priority` DESC";
            $pid = "p_asc";
        }
        elseif ($_GET['order'] === 's_asc') {
            $value = "SELECT * FROM `todo` ORDER BY `todo`.`summary` ASC";
            $ssid = "s_des";
        }
        elseif ($_GET['order'] === 's_des') {
            $value = "SELECT * FROM `todo` ORDER BY `todo`.`summary` DESC";
            $ssid = "s_asc";
        }
        elseif ($_GET['order'] === 'd_asc') {
            $value = "SELECT * FROM `todo` ORDER BY `todo`.`due` ASC";
            $did = "d_des";
        }
        elseif ($_GET['order'] === 'd_des') {
            $value = "SELECT * FROM `todo` ORDER BY `todo`.`due` DESC";
            $did = "d_asc";
        }
    }
}
?>

<?php
$sql = $value;
$query = mysqli_query($database, $sql) or die("Ckeck");
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>To do</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<style>
    a {
        text-decoration: none;
    }

    td#Normal {
        color: green;
        font-weight: 700;
    }

    td#Low {
        color: yellow;
        font-weight: 700;
    }

    td#High {
        color: red;
        font-weight: 700;

    }

    .form-control {
        max-width: 200px;
        margin-bottom: 20px;
    }
</style>

<body>
    <div class="container-fluid pt-5">
        <h1 class="text-center">All Tasks</h1>
        <a class="text-center" href="/crud">
            <h3 class=" pb-4">Add Task</h3>
        </a>
        <table class="table table table-hover text-center">
            <thead>
                <tr>
                    <th scope="col"><a href="tasks.php?order=<?php echo $iid ?>">Sr No.</th></a>
                    <th scope="col"><a href="tasks.php?order=<?php echo $tid ?>">Task Name</a></th>
                    <th scope="col"><a href="tasks.php?order=<?php echo $ssid ?>">Summary</a></th>
                    <th scope="col"><a href="tasks.php?order=<?php echo $did ?>">Date</a></th>
                    <th scope="col"><a href="tasks.php?order=<?php echo $pid ?>">Priority</a></th>
                    <th scope="col"><a href="tasks.php?order=<?php echo $sid ?>">Status</a></th>
                    <th class="">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($query)) {
                    $sr = "#";
                ?>
                    <tr>
                        <th scope="row"><?php echo $row['id'] ?></th>
                        <td><?php echo $row['task'] ?></td>
                        <td>
                            <?php $text = $row['summary'];
                            echo mb_strimwidth($text, 0, 40, '...');
                            ?>
                        </td>
                        <td><?php echo $row['due'] ?></td>
                        <td id="<?php echo $row['priority'] ?>"><?php echo $row['priority'] ?></td>
                        <td><?php echo $row['status'] ?></td>
                        <td>
                            <a href="delete.php?del=<?php echo $row['id'] ?>">
                                <button class="btn btn-success">Delete</button>
                            </a>
                            &nbsp;
                            <a href="comp.php?com=<?php echo $row['id'] ?>">
                                <button class="btn btn-primary">Completed</button>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    // Redirect to tasks.php with the default URL

</script>
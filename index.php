<!doctype html>
<html lang="en">
<?php require('insert.php'); ?>

<head>
    <meta charset="utf-8">
    <script src="https://cdn.tiny.cloud/1/dmzcw6v7lso6fugs5si91ofrzlh1ots55eqrg7cl2b42p023/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>To do</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<style>
    div.tox-statusbar{
        display: none !important;
    }
</style>
<body>
    <div class="container-fluid pt-5 pb-5">
        <div class="container">
            <h2 class="text-center">Add Task </h2>

            <form method="post" class="pt-5">
                <div class="row pt-3">
                    <div class="col-3">
                        <p>Task name</p>
                    </div>
                    <div class="col-9">
                        <input type="text" name="task" id="task" class="form-control" required>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-3">
                        <p>Summary</p>
                    </div>
                    <div class="col-9">
                        <textarea name="summary" rows="5" id="summary" class="form-control" required>
Lorem ipsum dolor sit, amet consectetur adipisicing elit. At soluta cumque impedit omnis praesentium quisquam recusandae, magnam iste distinctio ex blanditiis, esse quia tempore, minus totam quis labore. Mollitia, tenetur.
                        </textarea>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-3">
                        <p>Due Day</p>
                    </div>
                    <div class="col-9">
                        <input type="date" onkeydown="return false"  name="due" id="due" class="form-control" required>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-3">
                        <p>Task Priority</p>
                    </div>
                    <div class="col-9">
                        <select name="priority" class="form-control">
                            <option value="Low">Low</option>
                            <option selected value="Normal">Normal</option>
                            <option value="High">High</option>
                        </select>
                    </div>
                </div>
                <div class="text-center pt-4">
                    <button type="submit" class="btn btn-danger p-2" name="btn" id="btn">Add Task</button>
                    <a href="tasks.php"><button type="button" class="btn btn-success p-2" name="btn" id="btn">View Tasks</button></a>
                </div>
            </form>

        </div>
    </div>
</body>
<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'advlist autolink lists link image charmap print preview',
    toolbar: 'undo redo | bold italic backcolor | \
      alignleft aligncenter alignright alignjustify | \
      bullist numlist outdent indent | removeformat',
    menubar: false,
  });
</script>

</html>
<script>
    document.getElementById('due').valueAsDate = new Date();
</script>
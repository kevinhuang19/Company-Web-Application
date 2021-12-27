<?php require "controllerempworksonproject.php"; ?>
<html>

<head>
    <title>Add New Works On Page</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <?php include 'menu.php'; ?>
    <h1 class="text-primary text-center"><?= isset($result['Essn'],$result['Pno'])? 'Works On Form Update' : 'Works On Form Create' ?></h1>
    <!-- Form for Creating Employee -->
    <!-- Change "action" to the name of your controller file -->
    <form class="container border" method="post" action="<?= preg_replace('/\/[A-Za-z0-9]+(\.*\w*)(\?(.)*)*$/', '/', $_SERVER['REQUEST_URI']); ?>controllerempworksonproject.php">
        <div class="form-group">
            <label for="essn">Enter Employee Social Security number :</label>
            <input type="text" class="form-control" name="essn" value="<?= isset($result['Essn']) ? $result['Essn'] : '' ?>" <?= isset($result['Essn']) ? 'readonly' : '' ?>>
        </div>
        <div class="form-group">
            <label for="pno">Project Number:</label>
            <input type="text" class="form-control" name="pno" value="<?= isset($result['Pno']) ? $result['Pno'] : '' ?>"<?= isset($result['Pno']) ? 'readonly' : '' ?>>
        </div>
        <div class="form-group">
            <label for="hours">Enter Works Hours:</label>
			<input type="text" class="form-control" name="hours" value="<?= isset($result['Hours']) ? $result['Hours'] : '' ?>" required>
        </div>
          
       
        <button type="submit" class="btn btn-primary" name="<?= isset($result['Essn'],$result['Pno']) ? 'update' : 'submitworkson' ?>"><?= isset($result['Essn'],$result['Pno']) ? 'Update' : 'Submit' ?></button>
    </form>
</body>

</html>
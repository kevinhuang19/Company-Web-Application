<?php require "controllersearchproject.php"; ?>
<html>

<head>
    <title>Add New Project Page</title>
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
    <h1 class="text-primary text-center"><?= isset($result['Pnumber']) ? 'Project Form Update' : 'Project Form Create' ?></h1>
    <!-- Form for Creating Employee -->
    <!-- Change "action" to the name of your controller file -->
    <form class="container border" method="post" action="<?= preg_replace('/\/[A-Za-z0-9]+(\.*\w*)(\?(.)*)*$/', '/', $_SERVER['REQUEST_URI']); ?>controllersearchproject.php">
        <div class="form-group">
            <label for="pnumber">Enter Project number :</label>
            <input type="text" class="form-control" name="pnumber" value="<?= isset($result['Pnumber']) ? $result['Pnumber'] : '' ?>" <?= isset($result['Pnumber']) ? 'readonly' : '' ?>>
         
        </div>
        <div class="form-group">
            <label for="pname">Project Name:</label>
            <input type="text" class="form-control" name="pname" value="<?= isset($result['Pname']) ? $result['Pname'] : '' ?>" required>
        </div>
        <div class="form-group">
            <label for="plocation">Enter Project Location:</label>
            <input type="text" class="form-control" name="plocation" value="<?= isset($result['Plocation']) ? $result['Plocation'] : '' ?>" required>
        </div>
        <div class="form-group">
            <label for="dnum">Enter Department Number:</label>
           <input type="text" class="form-control" name="dnum" value="<?= isset($result['Dnum']) ? $result['Dnum'] : '' ?>" required>
        </div>
       
        <button type="submit" class="btn btn-primary" name="<?= isset($result['Pnumber']) ? 'update' : 'submit' ?>"><?= isset($result['Pnumber']) ? 'Update' : 'Submit' ?></button>
    </form>
</body>

</html>
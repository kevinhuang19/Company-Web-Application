<?php require "controller.php"; ?>
<html>

<head>
    <title>Find employee in specific department Page</title>
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
    <h1 class="text-primary text-center">Find employee in specific department</h1>
    <!-- Form for Creating Employee -->
    <!-- Change "action" to the name of your controller file -->
    <form class="container border" method="post" action="<?= preg_replace('/\/[A-Za-z0-9]+(\.*\w*)(\?(.)*)*$/', '/', $_SERVER['REQUEST_URI']); ?>findemployeeindepartment.php">
        <div class="form-group">
            <label for="dname">Enter Department Name:</label>
            <input type="text" class="form-control" name="dname">
        </div>
        <button type="submit" class="btn btn-primary" name="searchemployeeindepartment">Search</button>
    </form>

<table class="container table table-bordered"  >
        <thead>
            <tr>
                <th>Full name</th>
              <th>DnAME</th>
               <!-- <th>Action</th>-->
            </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $row): ?>
                <tr>
                  <td><?= $row['Fname'] ?>&nbsp;<?=$row['Lname'] ?></td>
                    <td><?= $row['Dname'] ?></td>
                    
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

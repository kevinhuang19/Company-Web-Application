<?php require "controllertotalhours.php"; ?>
<html>

<head>
    <title>Find total hours works on a project</title>
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
    <h1 class="text-primary text-center">Find total hours works on a project</h1>
    <!-- Form for Creating Employee -->
    <!-- Change "action" to the name of your controller file -->
    <form class="container border" method="post" action="<?= preg_replace('/\/[A-Za-z0-9]+(\.*\w*)(\?(.)*)*$/', '/', $_SERVER['REQUEST_URI']); ?>findtotalhours.php">
        <div class="form-group">
            <label for="pname">Enter Project Name:</label>
            <input type="text" class="form-control" name="pname">
        </div>
        <button type="submit" class="btn btn-primary" name="findtotalhours">Search</button>
    </form>

<table class="container table table-bordered"  >
        <thead>
            <tr>
                <th>Project name</th>
              <th>Total hours</th>
               <!-- <th>Action</th>-->
            </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $row): ?>
                <tr>
                  <td><?= $row['Pname'] ?></td>
                  
                    <td><?= $row['total_hours'] ?></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

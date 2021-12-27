<?php require "controllerempworksonproject.php"; ?>
<html>

<head>
    <title>Works On Page</title>
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
    <h1 class="text-primary text-center">Find Projects that a specific employee Works On </h1>
    <!-- Form for Creating Employee -->
    <!-- Change "action" to the name of your controller file -->
    <form class="container border" method="post" action="<?= preg_replace('/\/[A-Za-z0-9]+(\.*\w*)(\?(.)*)*$/', '/', $_SERVER['REQUEST_URI']); ?>search1.php">
        <div class="form-group">
            <label for="ssn">Enter Employee Social Security Number:</label>
            <input type="text" class="form-control" name="ssn">
        </div>
        <button type="submit" class="btn btn-primary" name="search1">Search</button>
    </form>
  
  <h1 class="text-primary text-center">Find employee work on specific project</h1>
    <!-- Form for Creating Employee -->
    <!-- Change "action" to the name of your controller file -->
    <form class="container border" method="post" action="<?= preg_replace('/\/[A-Za-z0-9]+(\.*\w*)(\?(.)*)*$/', '/', $_SERVER['REQUEST_URI']); ?>findemployeesworkonproject.php">
        <div class="form-group">
            <label for="pname">Enter Project name:</label>
            <input type="text" class="form-control" name="pname">
        </div>
        <button type="submit" class="btn btn-primary" name="findemponproject">Search</button>
    </form>
  <!-- find total hours works on each project  -->


  
<pre><?php echo "\t \t  \t     " ;?><input type=button onClick="location.href='./addworkson.php'" style = "font-size:20px" value='Add New Works Hours'></pre> 
<table class="container table table-bordered"  >
        <thead>
            <tr>
                <th>Essn</th>
              <th>Employee Name</th>
                <th>Project No</th>
               <th>Project Name</th>
                <th>Hours</th>
              <th>Action</th>
                
               <!-- <th>Action</th>-->
            </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $row): ?>
                <tr>
                    <td><?= $row['Essn'] ?></td>
                  <td><?= $row['Fname'] ?>&nbsp;<?=$row['Lname'] ?></td>
                    <td><?= $row['Pno'] ?></td>
                    <td><?= $row['Pname'] ?></td>
                    <td><?= $row['Hours'] ?></td>
					 <td style="width:20%;">
                        <a href="addworkson.php?pid=<?=$row['Pno']?>&?>">Edit</a><br>
                       <a href="deleteworkson.php?id=<?=$row['Essn']?>&pid=<?=$row['Pno']?>">Delete Employee</a>
                  </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

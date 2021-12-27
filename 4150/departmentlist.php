<?php require "controllerdepartment.php"; ?>
<html>

<head>
    <title>Department Page</title>
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
    <h1 class="text-primary text-center">Search Department By Department Number</h1>
    <!-- Form for Creating Employee -->
    <!-- Change "action" to the name of your controller file -->
    <form class="container border" method="post" action="<?= preg_replace('/\/[A-Za-z0-9]+(\.*\w*)(\?(.)*)*$/', '/', $_SERVER['REQUEST_URI']); ?>departmentlist.php">
        <div class="form-group">
            <label for="dnumber">Enter Department Number:</label>
            <input type="text" class="form-control" name="dnumber">
        </div>
        <button type="submit" class="btn btn-primary" name="searchdepartment">Search</button>
    </form>
  
   <h1 class="text-primary text-center">Search Department By Department Name</h1>
    <!-- Form for Creating Employee -->
    <!-- Change "action" to the name of your controller file -->
    <form class="container border" method="post" action="<?= preg_replace('/\/[A-Za-z0-9]+(\.*\w*)(\?(.)*)*$/', '/', $_SERVER['REQUEST_URI']); ?>departmentlist.php">
        <div class="form-group">
            <label for="dname">Enter Department Name:</label>
            <input type="text" class="form-control" name="dname">
        </div>
        <button type="submit" class="btn btn-primary" name="searchdepname">Search</button>
    </form>
  	
  <pre><?php echo "\t\t\t\t\t\t" ;?><input type=button onClick="location.href='./adddepartment.php'" style = "font-size:20px" value='Add New Department'></pre> 
<table class="container table table-bordered"  >
        <thead>
            <tr>
                <th>Dname</th>
                <th>Dnumber</th>
                <th>Manager Ssn</th>
                <th>Manager Start Date</th>
                 <th>Action</th>
              
            </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $row): ?>
                <tr>
                    <td><?= $row['Dname'] ?></td>
                    <td><?= $row['Dnumber'] ?></td>
                    <td><?= $row['Mgr_ssn'] ?></td>
                    <td><?= $row['Mgr_start_date'] ?></td>
                    <td style="width:20%;">
                        <a href="adddepartment.php?id=<?= $row['Dnumber']?>">Edit</a><br> 
                       <!--<a href="deletedepartment.php?id=<?=$row['Dnumber']?>">Delete Department</a>  -->
                  </td>
                   
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

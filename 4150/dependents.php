<?php require "controllerdependents.php"; ?>
<html>

<head>
    <title>Dependents Page</title>
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
    <h1 class="text-primary text-center">Search Dependents of an Employee by Employee Social Security Number</h1>
    <!-- Form for Creating Employee -->
    <!-- Change "action" to the name of your controller file -->
    <form class="container border" method="post" action="<?= preg_replace('/\/[A-Za-z0-9]+(\.*\w*)(\?(.)*)*$/', '/', $_SERVER['REQUEST_URI']); ?>dependents.php">
        <div class="form-group">
            <label for="essn">Enter Employee Social Security Number:</label>
            <input type="text" class="form-control" name="essn">
        </div>
        <button type="submit" class="btn btn-primary" name="searchdependents">Search</button>
    </form>
  
    <h1 class="text-primary text-center">Search Dependents of an Employee by First name</h1>
  	 <form class="container border" method="post" action="<?= preg_replace('/\/[A-Za-z0-9]+(\.*\w*)(\?(.)*)*$/', '/', $_SERVER['REQUEST_URI']); ?>dependents.php">
        <div class="form-group">
            <label for="fname">Enter Employee First Name:</label>
            <input type="text" class="form-control" name="fname">
        </div>
        <button type="submit" class="btn btn-primary" name="searchempfname">Search</button>
    </form>
  
  
<pre><?php echo "\t \t  \t     " ;?><input type=button onClick="location.href='./adddependents.php'" style = "font-size:20px" value='Add New Dependent'></pre> 
<table class="container table table-bordered"  >
        <thead>
            <tr>
              <th>Employee Name</th>
                <th>Employee Social Security Number</th>
              <th>Dependent Name</th>
                <th>Sex</th>
                <th>Birth Date</th>
              <th>Relationship</th>
         
                
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $row): ?>
                <tr>
                  <td><?= $row['Fname'] ?>  <?= $row['Lname'] ?></td>
                    <td><?= $row['Essn'] ?></td>
                  <td><?= $row['Dependent_name']?></td>
                    <td><?= $row['Sex'] ?></td>
                    <td><?= $row['Bdate'] ?></td>
                   <td><?= $row['Relationship'] ?></td>
					<td style="width:20%;">
                        <!-- <a href="adddependents.php?dependent_name=<?=$row['Dependent_name']?>&eid=<?=$row['Essn']?>">Edit</a><br>	-->
                       <a href="deletedependent.php?id=<?=$row['Essn']?>&dependent_name=<?=$row['Dependent_name']?>">Delete Dependent</a>
                  </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

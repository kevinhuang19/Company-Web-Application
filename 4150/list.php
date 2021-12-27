<?php require "controller.php"; ?>
<html>

<head>
    <title>Employee Page</title>
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
    <h1 class="text-primary text-center">Search information of an employee </h1>
    <!-- Form for Creating Employee -->
    <!-- Change "action" to the name of your controller file -->
    <form class="container border" method="post" action="<?= preg_replace('/\/[A-Za-z0-9]+(\.*\w*)(\?(.)*)*$/', '/', $_SERVER['REQUEST_URI']); ?>list.php">
        <div class="form-group">
            <label for="ssn">Enter Employee Social Security Number:</label>
            <input type="text" class="form-control" name="ssn">
        </div>
        <button type="submit" class="btn btn-primary" name="search">Search</button>
    </form>
  
  	 <h1 class="text-primary text-center">Find employees who has salary greater than</h1>
    <!-- Form for Creating Employee -->
    <!-- Change "action" to the name of your controller file -->
    <form class="container border" method="post" action="<?= preg_replace('/\/[A-Za-z0-9]+(\.*\w*)(\?(.)*)*$/', '/', $_SERVER['REQUEST_URI']); ?>list.php">
        <div class="form-group">
            <label for="salary">Enter salary amount:</label>
            <input type="text" class="form-control" name="salary">
        </div>
        <button type="submit" class="btn btn-primary" name="searchsalary">Search</button>
    </form>
  
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
  
<!--SELECT e.Fname,CONCAT(d.Dependent_name.’’) FROM EMPLOYEE e, DEPENDENT d WHERE E.Ssn=d.Essn and e.Sex=d.Sex; -->

   <h1 class="text-primary text-center">Find all employee in specific gender</h1>
    <!-- Form for Creating Employee -->
    <!-- Change "action" to the name of your controller file -->
    <form class="container border" method="post" action="<?= preg_replace('/\/[A-Za-z0-9]+(\.*\w*)(\?(.)*)*$/', '/', $_SERVER['REQUEST_URI']); ?>list.php">
        <div class="form-group">
            <label for="sex">Select Gender:</label>
           <select name="sex" id="sex" class="form-control">
             <option></option>  
             <option value="F" <?= (isset($result['Sex']) && $result['Sex'] == "F") ? 'selected' : '' ?>>Female</option>
                <option value="M" <?= (isset($result['Sex']) && $result['Sex'] == "M") ? 'selected' : '' ?>>Male</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" name="searchsex">Search</button>
    </form>
  
  
  <pre><?php echo "\t \t  \t     " ;?><input type=button onClick="location.href='./index.php'" style = "font-size:20px" value='Add New Employee'></pre> 
    <table class="container table table-bordered">
        <thead>
            <tr>
                <th>Ssn</th>
                <th>Firstname</th>
                <th>Minit</th>
                <th>Lastname</th>
                <th>Birthday</th>
                <th>Address</th>
                <th>Sex</th>
                <th>Salary</th>
                <th>Department</th>
                <!--<th>Project</th> -->
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $row): ?>
                <tr>
                    <td><?= $row['Ssn'] ?></td>
                    <td><?= $row['Fname'] ?></td>
                    <td><?= $row['Minit'] ?></td>
                    <td><?= $row['Lname'] ?></td>
                    <td><?= date('Y/m/d', strtotime($row['Bdate'])) ?></td>
                    <td><?= $row['Address'] ?></td>
                    <td><?= $row['Sex'] ?></td>
                    <td><?= $row['Salary'] ?></td>
                    <td><?= $row['Dname'] ?></td>
                    <!--<td><?= $row['Pname'] ?></td> -->
                    <td style="width:20%;">
                        <a href="index.php?id=<?= $row['Ssn'] ?>">Edit</a><br>
                       <a href="deleteemployee.php?id=<?=$row['Ssn'] ?>">Delete Employee</a>
                  </td>
                   
                      
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
	
</body>

</html>
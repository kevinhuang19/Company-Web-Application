<?php require "controllersearchproject.php"; ?>
<html>

<head>
    <title>Project Page</title>
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
    <h1 class="text-primary text-center">Search project information by project number</h1>
  
    <!-- Form for Creating Employee -->
    <!-- Change "action" to the name of your controller file -->
    <form class="container border" method="post" action="<?= preg_replace('/\/[A-Za-z0-9]+(\.*\w*)(\?(.)*)*$/', '/', $_SERVER['REQUEST_URI']); ?>searchproject.php">
        <div class="form-group">
            <label for="pnumber">Enter Project Number:</label>
            <input type="text" class="form-control" name="pnumber">
        </div>
        <button type="submit" class="btn btn-primary" name="searchproject">Search</button>
    </form>
  	
  	 <h1 class="text-primary text-center">Search project information by project name</h1>
  
    <!-- Form for Creating Employee -->
    <!-- Change "action" to the name of your controller file -->
    <form class="container border" method="post" action="<?= preg_replace('/\/[A-Za-z0-9]+(\.*\w*)(\?(.)*)*$/', '/', $_SERVER['REQUEST_URI']); ?>searchproject.php">
        <div class="form-group">
            <label for="pname">Enter Project Name:</label>
            <input type="text" class="form-control" name="pname">
        </div>
        <button type="submit" class="btn btn-primary" name="searchprojectpname">Search</button>
    </form>
  
    <h1 class="text-primary text-center">Find total hours works on each project</h1>
    <!-- Form for Creating Employee -->
    <!-- Change "action" to the name of your controller file -->
    <form class="container border" method="post" action="<?= preg_replace('/\/[A-Za-z0-9]+(\.*\w*)(\?(.)*)*$/', '/', $_SERVER['REQUEST_URI']); ?>findtotalhours.php">
        <div class="form-group">
            <label for="pname">Enter Project name:</label>
            <input type="text" class="form-control" name="pname">
        </div>
        <button type="submit" class="btn btn-primary" name="findtotalhours">Search</button>
    </form>
  
  
  <pre><?php echo "\t \t  \t     " ;?><input type=button onClick="location.href='./addproject.php'" style = "font-size:20px" value='Add New Project'></pre> 
<table class="container table table-bordered"  >
        <thead>
            <tr>
                <th>Pname</th>
                <th>Plocation</th>
                <th>Pnumber</th>
                <th>Dnum</th>
              	<th>Action</th>

            </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $row): ?>
                <tr>
                    <td><?= $row['Pname'] ?></td>
                    <td><?= $row['Plocation'] ?></td>
                    <td><?= $row['Pnumber'] ?></td>
                    <td><?= $row['Dnum'] ?></td>
                    <td style="width:20%;">
                          <a href="addproject.php?id=<?=$row['Pnumber'] ?>">Edit</a><br>
                      <a href="deleteproject.php?id=<?=$row['Pnumber'] ?>">Delete Project</a>
                      
                  </td>
                  
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

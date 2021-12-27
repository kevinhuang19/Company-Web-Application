<?php require "controllerdepartment.php"; ?>
<html>

<head>
    <title>Add New Department Page</title>
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
    <h1 class="text-primary text-center"><?= isset($result['Dnumber']) ? 'Department Form Update' : 'Department Form Create' ?></h1>
    <!-- Form for Creating Employee -->
    <!-- Change "action" to the name of your controller file -->
    <form class="container border" method="post" action="<?= preg_replace('/\/[A-Za-z0-9]+(\.*\w*)(\?(.)*)*$/', '/', $_SERVER['REQUEST_URI']); ?>controllerdepartment.php">
        <div class="form-group">
            <label for="dnumber">Enter Department number :</label>
            <input type="text" class="form-control" name="dnumber" value="<?= isset($result['Dnumber']) ? $result['Dnumber'] : '' ?>" <?= isset($result['Dnumber']) ? 'readonly' : '' ?>>
        </div>
        <div class="form-group">
            <label for="dname">Department Name:</label>
            <input type="text" class="form-control" name="dname" value="<?= isset($result['Dname']) ? $result['Dname'] : '' ?>" <?= isset($result['Dnumber']) ? 'readonly' : '' ?>>
        </div>
        <div class="form-group">
            <label for="mgr_ssn">Enter Department Manager Ssn:</label>
			<select name="mgr_ssn" id="mgr_ssn" class="form-control">
                <?php foreach ($departments as $row): ?>
                    <option value="<?= $row['Ssn'] ?>" <?= (isset($result['Mgr_ssn'])&& $result['Mgr_ssn'] == $row['Ssn'] ) ? 'selected' : '' ?>><?= $row['Ssn']?> <?=" - ".$row['Fname']." ".$row['Lname']?></option>
              
                <?php endforeach; ?>
            </select>
           <!-- <input type="text" class="form-control" name="mgr_ssn" value="<?= isset($result['Mgr_ssn']) ? $result['Mgr_ssn'] : '' ?>" required>	-->
         
        </div>
        <div class="form-group">
            <label for="start_date">Enter Department Manager Start Date:</label>
            <input type="date" class="form-control" name="start_date" value="<?= isset($result['Mgr_start_date']) ? $result['Mgr_start_date'] : '' ?>" required>
        </div>
       
        <button type="submit" class="btn btn-primary" name="<?= isset($result['Dnumber']) ? 'update' : 'submitdepartment' ?>"><?= isset($result['Dnumber']) ? 'Update' : 'Submit' ?></button>
    </form>
</body>

</html>
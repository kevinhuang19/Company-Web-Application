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
    <h1 class="text-primary text-center"><?= isset($result['Ssn']) ? 'Employee Form Update' : 'Employee Form Create' ?></h1>
    <!-- Form for Creating Employee -->
    <!-- Change "action" to the name of your controller file -->
    <form class="container border" method="post" action="<?= preg_replace('/\/[A-Za-z0-9]+(\.*\w*)(\?(.)*)*$/', '/', $_SERVER['REQUEST_URI']); ?>controller.php">
        <div class="form-group">
            <label for="ssn">Enter Employee Social Security Number:</label>
            <input type="text" class="form-control" name="ssn" value="<?= isset($result['Ssn']) ? $result['Ssn'] : '' ?>" <?= isset($result['Ssn']) ? 'readonly' : '' ?>>
        </div>
        <div class="form-group">
            <label for="lname">Employee Last name is:</label>
            <input type="text" class="form-control" name="lname" value="<?= isset($result['Lname']) ? $result['Lname'] : '' ?>" required>
        </div>
        <div class="form-group">
            <label for="minit">Employee Minit is:</label>
            <input type="text" class="form-control" name="minit" value="<?= isset($result['Minit']) ? $result['Minit'] : '' ?>" maxlength="1" required>
        </div>
        <div class="form-group">
            <label for="fname">Employee First name is:</label>
            <input type="text" class="form-control" name="fname" value="<?= isset($result['Fname']) ? $result['Fname'] : '' ?>" required>
        </div>
        <div class="form-group">
            <label for="bdate">Employee Birthday is:</label>
            <input type="date" class="form-control" name="bdate" value="<?= isset($result['Bdate']) ? $result['Bdate'] : '' ?>" required>
        </div>
        <div class="form-group">
            <label for="address">Employee Address is:</label>
            <input type="text" class="form-control" name="address" value="<?= isset($result['Address']) ? $result['Address'] : '' ?>" required>
        </div>
        <div class="form-group">
            <label for="salary">Employee Salary is:</label>
            <input type="number" class="form-control" name="salary" value="<?= isset($result['Salary']) ? $result['Salary'] : '' ?>" min=1 required>
        </div>
        <div class="form-group">
            <label for="sex">Employee Sex is:</label>
            <select name="sex" id="sex" class="form-control" required>
              <option> </option>
                <option value="F" <?= (isset($result['Sex']) && $result['Sex'] == "F") ? 'selected' : '' ?>>Female</option>
                <option value="M" <?= (isset($result['Sex']) && $result['Sex'] == "M") ? 'selected' : '' ?>>Male</option>
            </select>
        </div>
        <div class="form-group">
            <label for="dno">Department Name is:</label>
            <select name="dno" id="dno" class="form-control">
                <?php foreach ($departments as $row): ?>
              
                    <option value="<?= $row['Dnumber'] ?>" <?= (isset($result['Dno']) && $result['Dno'] == $row['Dnumber']) ? 'selected' : '' ?>><?= $row['Dname'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" name="<?= isset($result['Ssn']) ? 'update' : 'submit' ?>"><?= isset($result['Ssn']) ? 'Update' : 'Submit' ?></button>
    </form>
</body>

</html>
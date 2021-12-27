<?php require "controllerdependents.php"; ?>
<html>

<head>
    <title>Dependent Page</title>
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
    <h1 class="text-primary text-center"><?= isset($result['Essn']) ? 'Dependent Form Update' : 'Dependent Form Create' ?></h1>
    <!-- Form for Creating Employee -->
    <!-- Change "action" to the name of your controller file -->
    <form class="container border" method="post" action="<?= preg_replace('/\/[A-Za-z0-9]+(\.*\w*)(\?(.)*)*$/', '/', $_SERVER['REQUEST_URI']); ?>controllerdependents.php">
        <div class="form-group">
            <label for="Essn">Enter Essn:</label>
            <input type="text" class="form-control" name="Essn" value="<?= isset($result['Essn']) ? $result['Essn'] : '' ?>" <?= isset($result['Essn']) ? 'readonly' : '' ?>>
        </div>
        <div class="form-group">
            <label for="Dependent_name">Dependent_name:</label>
            <input type="text" class="form-control" name="Dependent_name" value="<?= isset($result['Dependent_name']) ? $result['Dependent_name'] : '' ?>" required>
        </div>
        <div class="form-group">
            <label for="Sex">Dependent Sex:</label>
            <select name="Sex" id="Sex" class="form-control">
                <option value="F" <?= (isset($result['Sex']) && $result['Sex'] == "F") ? 'selected' : '' ?>>Female</option>
                <option value="M" <?= (isset($result['Sex']) && $result['Sex'] == "M") ? 'selected' : '' ?>>Male</option>
            </select>
        </div>
        <div class="form-group">
            <label for="Bdate">Employee Birthday is:</label>
            <input type="date" class="form-control" name="Bdate" value="<?= isset($result['Bdate']) ? $result['Bdate'] : '' ?>" required>
        </div>
      	<div class="form-group">
            <label for="Relationship">Relationship:</label>
           <select name="Relationship" id="Relationship" class="form-control" required>
              <option></option>
                <option value="Son" <?= (isset($result['Relationship']) && $result['Relationship'] == "Son") ? 'selected' : '' ?>>Son</option>
                <option value="Daughter" <?= (isset($result['Relationship']) && $result['Relationship'] == "Daughter") ? 'selected' : '' ?>>Daughter</option>
             	<option value="Parents" <?= (isset($result['Relationship']) && $result['Relationship'] == "Parents") ? 'selected' : '' ?>>Parents</option>
                <option value="Grandparents" <?= (isset($result['Relationship']) && $result['Relationship'] == "Grandparents") ? 'selected' : '' ?>>Grandparents</option>
             <option value="Nephew" <?= (isset($result['Relationship']) && $result['Relationship'] == "Nephew") ? 'selected' : '' ?>>Nephew</option>
              <option value="Neice" <?= (isset($result['Relationship']) && $result['Relationship'] == "Neice") ? 'selected' : '' ?>>Neice</option>
              
            </select>
        </div>
       
        <button type="submit" class="btn btn-primary" name="<?= isset($result['Essn']) ? 'update' : 'submit' ?>"><?= isset($result['Essn']) ? 'Update' : 'Submit' ?></button>
    </form>
</body>

</html>
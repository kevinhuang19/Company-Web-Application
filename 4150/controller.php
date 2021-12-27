<?php
    require "model.php";

    $db = new DB();
    if (isset($_POST['submit'])) {

        $ssn = $_POST['ssn'];
        $minit = $_POST['minit'];
        $bdate = $_POST['bdate'];
        $lname = $_POST['lname'];
        $fname = $_POST['fname'];
        $sex = $_POST['sex'];
        $address = $_POST['address'];
        $salary = $_POST['salary'];
        $dno = $_POST['dno'];

        $sql = "INSERT INTO `Employee`(`Fname`, `Minit`, `Lname`, `Ssn`, `Bdate`, `Address`, `Sex`, `Salary`, `Dno`) 
        VALUES ('{$fname}','{$minit}', '{$lname}', '{$ssn}', '{$bdate}', '{$address}', '{$sex}', {$salary}, {$dno})";

        $result = $db->insertUpdate($sql);

        if ($result) {
            echo "<script>
                window.location.href = 'list.php';
                alert('Add successfully!');
            </script>";
        } else {
            echo "<script>
                window.location.href = 'index.php';
                alert('Something went wrong! Essn should be unique. Please search for employee social security number. Otherwise, please try again');
            </script>";
        }
    } 

	elseif(isset($_POST['searchemployeeindepartment'])){
    	$dname = $_POST['dname'];
      if (!empty($dname)) {
        $data = $db->select("SELECT a.*, b.Dname FROM Employee a, Department b  WHERE b.Dname='{$dname}' AND a.Dno = b.Dnumber  "); 
          $arr = array();
          foreach ($data as $index => $t) {
              if (isset($arr[$t["Dname"]])) {
                  unset($data[$index]);
                  continue;
              }
             # $arr[$t["$dname"]] = true;
          }
        } 
      	else{
             $data = $db->select("SELECT a.*, b.Dname FROM Employee a, Department b  WHERE a.Dno = b.Dnumber ");
        $arr = array();
        foreach ($data as $index => $t) {
            if (isset($arr[$t["Dname"]])) {
                unset($data[$index]);
                continue;
            }
           # $arr[$t["Ssn"]] = true;
        }
        
      }
    }

	elseif(isset($_POST['searchsex'])){
    	$sex = $_POST['sex'];
      if (!empty($sex)) {
        $data = $db->select("SELECT a.*, b.Dname FROM Employee a, Department b  WHERE a.Sex='{$sex}' AND a.Dno = b.Dnumber"); 
          $arr = array();
          foreach ($data as $index => $t) {
              if (isset($arr[$t["Dname"]])) {
                  unset($data[$index]);
                  continue;
              }
             # $arr[$t["$dname"]] = true;
          }
        } 
      	else{
             $data = $db->select("SELECT a.*, b.Dname FROM Employee a, Department b  WHERE a.Dno = b.Dnumber ");
        $arr = array();
        foreach ($data as $index => $t) {
            if (isset($arr[$t["Dname"]])) {
                unset($data[$index]);
                continue;
            }
           # $arr[$t["Ssn"]] = true;
        }
        
      }
    }
  	elseif(isset($_POST['findemponproject'])){
    	$pname = $_POST['pname'];
      if (!empty($pname)) {
        $data = $db->select("SELECT a.*, b.Dname FROM Employee a, Department b, c.Pname FROM Employee a JOIN Department b JOIN Projects c WHERE a.Dno = b.Dnumber AND a.Dno = c.Dnum AND c.Pname = '{$pname}'"); 
          $arr = array();
          foreach ($data as $index => $t) {
              if (isset($arr[$t["Pname"]])) {
                  unset($data[$index]);
                  continue;
              }
             # $arr[$t["$dname"]] = true;
          }
        } 
      	else{
             $data = $db->select("SELECT a.*, b.Dname, c.Pname FROM Employee a JOIN Department b JOIN Projects c WHERE a.Dno = b.Dnumber ");
        $arr = array();
        foreach ($data as $index => $t) {
            if (isset($arr[$t["Pname"]])) {
                unset($data[$index]);
                continue;
            }
           # $arr[$t["Ssn"]] = true;
        }
        
      }
    }
  
  

    	elseif(isset($_POST['searchsalary'])){
    	$salary = $_POST['salary'];
      if (!empty($salary)) {
        $data = $db->select("SELECT a.*,b.Dname,c.Pname FROM Employee a JOIN Department b JOIN Projects c JOIN Dependent d WHERE  a.Salary > '{$salary}'");
          $arr = array();
          foreach ($data as $index => $t) {
              if (isset($arr[$t["Ssn"]])) {
                  unset($data[$index]);
                  continue;
              }
              $arr[$t["Ssn"]] = true;
           
          }
        }
      	else{
            $data = $db->select("SELECT a.*,b.Dname,c.Pname FROM Employee a JOIN Department b JOIN Projects c JOIN Dependent d WHERE  a.Salary > '{$salary}'");
        $arr = array();
        foreach ($data as $index => $t) {
            if (isset($arr[$t["Ssn"]])) {
                unset($data[$index]);
                continue;
            }
           $arr[$t["Ssn"]] = true;
        }
        
      }
    }
  
	elseif (isset($_POST['update'])) {
        $ssn = $_POST['ssn'];
        $minit = $_POST['minit'];
        $bdate = $_POST['bdate'];
        $lname = $_POST['lname'];
        $fname = $_POST['fname'];
        $sex = $_POST['sex'];
        $address = $_POST['address'];
        $salary = $_POST['salary'];
        $dno = $_POST['dno'];

        $sql = "UPDATE `Employee` 
        SET `Fname`='{$fname}',`Minit`='{$minit}',`Lname`='{$lname}' ,`Bdate`='{$bdate}',`Address`='{$address}',`Sex`='{$sex}',`Salary`={$salary},`Dno`={$dno} 
        WHERE `Ssn` = '{$ssn}'";

        $result = $db->insertUpdate($sql);

        if ($result) {
            echo "<script>
                window.location.href = 'list.php';
                alert('Update successfully!');
            </script>";
        } else {
            echo "<script>
                window.location.href = 'index.php?id=".$ssn."';
                alert('Something went wrong. Data type could be invalid. Please enter valid number for SSN, Salary, Dno.');
            </script>";
        }
    }   
	

	
	



      
	elseif (isset($_POST['search'])) {
        $ssn = $_POST['ssn'];
      	if (!empty($ssn)) {
          $data = $db->select("SELECT a.*, b.Dname, c.Pname FROM Employee a, Department b, Projects c WHERE a.Ssn = '{$ssn}'");
          $arr = array();
          foreach ($data as $index => $t) {
              if (isset($arr[$t["Ssn"]])) {
                  unset($data[$index]);
                  continue;
              }
              $arr[$t["Ssn"]] = true;
          }
        } 
       
      
        else {
            $data = $db->select("SELECT a.*, b.Dname, c.Pname FROM Employee a, Department b, Projects c WHERE a.Ssn = '{$ssn}'");
            $arr = array();
            foreach ($data as $index => $t) {
                if (isset($arr[$t["Ssn"]])) {
                    unset($data[$index]);
                    continue;
                }
                $arr[$t["Ssn"]] = true;
            }
          }
    }	 
	elseif (isset($_GET['id'])) {
        $id = $_GET['id'];
        $departments = $db->select("SELECT * FROM Department");
        $values =  $db->select("SELECT * FROM Employee WHERE Ssn = '{$id}'");
        $result = $values[0];
    } 
 
	


else {
        $data = $db->select("SELECT a.*, b.Dname, c.* FROM Employee a, Department b, Projects c  WHERE a.Dno = b.Dnumber ");
        $arr = array();
        foreach ($data as $index => $t) {
            if (isset($arr[$t["Ssn"]])) {
                unset($data[$index]);
                continue;
            }
            $arr[$t["Ssn"]] = true;
        }
        $departments = $db->select("SELECT * FROM Department");
    }
?>
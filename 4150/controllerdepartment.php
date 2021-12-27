<?php
    require "model.php";

    $db = new DB();
	if (isset($_POST['searchdepartment'])) {
        $dnumber = $_POST['dnumber'];
      	if (!empty($dnumber)) {
          
          $data = $db->select("SELECT * FROM Department WHERE Dnumber = '{$dnumber}'");
          $arr = array();
          foreach ($data as $index => $t) {
              if (isset($arr[$t["Dnumber"]])) {
                  unset($data[$index]);
                  continue;
              }
              $arr[$t["Dnumber"]] = true;
           
          }
        } 
       
      
        else {
          $data = $db->select("SELECT * FROM Department WHERE Dnumber = '{$dnumber}'");
            foreach ($data as $index => $t) {
                if (isset($arr[$t["Dnumber"]])) {
                    unset($data[$index]);
                    continue;
                }
                $arr[$t["Dnumber"]] = true;
            }
          } 
    }	

	
		elseif (isset($_POST['searchdepname'])) {
        $dname = $_POST['dname'];
      	if (!empty($dnumber)) {
          
          $data = $db->select("SELECT * FROM Department WHERE Dname = '{$dname}'");
          $arr = array();
          foreach ($data as $index => $t) {
              if (isset($arr[$t["Dname"]])) {
                  unset($data[$index]);
                  continue;
              }
              $arr[$t["Dname"]] = true;
           
          }
        } 
       
      
        else {
          $data = $db->select("SELECT * FROM Department WHERE Dname = '{$dname}'");
            foreach ($data as $index => $t) {
                if (isset($arr[$t["Dname"]])) {
                    unset($data[$index]);
                    continue;
                }
                $arr[$t["Dname"]] = true;
            }
          } 
    }	
		elseif (isset($_POST['update'])) {
        $dname = $_POST['dname'];
        $dnumber=$_POST['dnumber'];
        $mgr_ssn =$_POST['mgr_ssn'];
		$start_date=$_POST['start_date'];
        $sql = "UPDATE `Department` SET `Mgr_ssn`='{$mgr_ssn}',`Mgr_start_date`='{$start_date}' WHERE Dnumber='{$dnumber}'";
        $result = $db->insertUpdate($sql);

        if ($result) {
            echo "<script>
                window.location.href = 'departmentlist.php';
                alert('Update successfully!');
            </script>";
        } else {
            echo "<script>
                window.location.href = 'adddepartment.php?id=".$dnumber."';
                alert('Something went wrong. Manager SSN might not exist in company employee');
            </script>";
        }
    }   

		elseif (isset($_GET['id'])) {
        $id = $_GET['id'];
        $departments = $db->select("SELECT * FROM Employee");
        $values =  $db->select("SELECT * FROM Department WHERE Dnumber = '{$id}'");
        $result = $values[0];
    	} 
		
		elseif (isset($_GET['did'])) {
        $did = $_GET['did'];
        $departments = $db->select("SELECT * FROM Employee");
        $values =  $db->select("SELECT * FROM Department WHERE Dnumber = '{$did}'");
        $result = $values[0];
    	} 

		elseif (isset($_POST['submitdepartment'])) {

        $dnumber= $_POST['dnumber'];
        $dname = $_POST['dname'];
        $mgr_ssn = $_POST['mgr_ssn'];
        $start_date = $_POST['start_date'];

        $sql = "INSERT INTO `Department`(`Dname`, `Dnumber`, `Mgr_Ssn`, `Mgr_start_date`) 
        VALUES ('{$dname}','{$dnumber}', '{$mgr_ssn}', '{$start_date}')";

        $result = $db->insertUpdate($sql);

        if ($result) {
            echo "<script>
                window.location.href = 'departmentlist.php';
                alert('Add successfully!');
            </script>";
        } else {
            echo "<script>
                window.location.href = 'adddepartment.php';
                alert('Something went wrong! The department number or department name must be unqiue. The data could be existed already. Please double check and try again');
            </script>";
        }
    } 

 	else {
          $data = $db->select("SELECT * FROM Department ");
               foreach ($data as $index => $t) {
                    if (isset($arr[$t["Dnumber"]])) {
                        unset($data[$index]);
                        continue;
                    }
                    $arr[$t["Dnumber"]] = true;
                }
        $departments = $db->select("SELECT * FROM Employee");
          } 
?>
 	
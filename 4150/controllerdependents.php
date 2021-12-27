<?php
    require "model.php";

    $db = new DB();
    if (isset($_POST['submit'])) {

        $Essn = $_POST['Essn'];
        $Dependent_name = $_POST['Dependent_name'];
        $Sex = $_POST['Sex'];
        $Bdate = $_POST['Bdate'];
        $Relationship = $_POST['Relationship'];

        $sql = "INSERT INTO `Dependent` (`Essn`, `Dependent_name`, `Sex`, `Bdate`, `Relationship`)
        VALUES ('{$Essn}', '{$Dependent_name}', '{$Sex}', '{$Bdate}', '{$Relationship}')";

        $result = $db->insertUpdate($sql);

        if ($result) {
            echo "<script>
                window.location.href = 'dependents.php';
                alert('Add successfully!');
            </script>";
        } else {
            echo "<script>
                window.location.href = 'dependents.php';
                alert('Something went wrong!');
            </script>";
        }
    }
    

		

	elseif (isset($_POST['update'])) {
         $Essn = $_POST['Essn'];
        $Dependent = $_POST['Dependent_name'];
        $Sex = $_POST['Sex'];
        $Bdate = $_POST['Bdate'];
        $Relationship = $_POST['Relationship'];

        $sql = "UPDATE Dependent SET 'Sex'='{$Sex}' ,'Bdate'='{$Bdate}','Relationship'='{$Relationship} WHERE 'Dependent_name' ='{$Dependent}' AND 'Essn' = '{$Essn}'";

        $result = $db->insertUpdate($sql);

        if ($result) {
            echo "<script>
                window.location.href = 'dependents.php';
                alert('Update successfully!');
            </script>";
        } else {
            echo "<script>
                window.location.href = 'dependentst.php?id=".$Essn."';
                alert('Something went wrong');
            </script>";
        }
    }   
	


      
elseif (isset($_POST['searchdependents'])) {
        $essn = $_POST['essn'];
      	if (!empty($essn)) {
          $data = $db->select("SELECT * FROM Dependent WHERE TRIM(Essn) = '{$essn}'");
          $arr = array();
          foreach ($data as $index => $t) {
              if (isset($arr[$t["Essn"]])) {
                  unset($data[$index]);
                  continue;
              }
              #$arr[$t["Essn"]] = true;
          }
        }
     
        else {
            $data = $db->select("SELECT * FROM Dependent");
            $arr = array();
            foreach ($data as $index => $t) {
                if (isset($arr[$t["Essn"]])) {
                    unset($data[$index]);
                    continue;
                }
                #$arr[$t["Essn"]] = true;
            }
          }
    }	 

elseif (isset($_POST['searchempfname'])) {
        $fname = $_POST['fname'];
      	if (!empty($essn)) {
          $data = $db->select("SELECT d.*,e.Fname, e.Lname FROM Dependent d, Employee e WHERE d.Essn=e.Ssn AND e.Fname='{$fname}'");
          $arr = array();
          foreach ($data as $index => $t) {
              if (isset($arr[$t["Dependent_name"]])) {
                  unset($data[$index]);
                  continue;
              }
              #$arr[$t["Essn"]] = true;
          }
        }
     
        else {
            $data = $db->select("SELECT d.*,e.Fname, e.Lname FROM Dependent d, Employee e WHERE d.Essn=e.Ssn AND e.Fname='{$fname}'");
            $arr = array();
            foreach ($data as $index => $t) {
                if (isset($arr[$t["Dependent_name"]])) {
                    unset($data[$index]);
                    continue;
                }
                #$arr[$t["Essn"]] = true;
            }
          }
    }	 

		elseif (isset($_GET['dependent_name'])) {
        $dependent_name = $_GET['dependent_name'];
        $projectsname = $db->select("SELECT * FROM Dependents");
        $values =  $db->select("SELECT * FROM Dependents WHERE Dependent_name = '{$dependent_name}' ");
        $result = $values[0];
    	} 
		
		elseif (isset($_GET['id'])) {
        $eid = $_GET['id'];
        $projectsname = $db->select("SELECT * FROM Dependents");
        $values =  $db->select("SELECT * FROM Dependents WHERE Essn = '{$eid}'");
        $result = $values[0];
    	} 

else {
        $data = $db->select("SELECT d.*,e.Fname, e.Lname FROM Dependent d, Employee e WHERE d.Essn=e.Ssn");
        $arr = array();
        foreach ($data as $index => $t) {
            if (isset($arr[$t["Essn"]])) {
                unset($data[$index]);
                continue;
            }
           # $arr[$t["Essn"]] = true;
        }
        $dependents = $db->select("SELECT * FROM Dependent");
    }
?>
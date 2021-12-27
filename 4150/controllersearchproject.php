<?php
    require "model.php";

    $db = new DB();
	if (isset($_POST['searchproject'])) {
        $pnumber = $_POST['pnumber'];
      	if (!empty($pnumber)) {
          
          $data = $db->select("SELECT Pnumber,Plocation,Pname,Dnum FROM Projects WHERE Pnumber = '{$pnumber}'");
          $arr = array();
          foreach ($data as $index => $t) {
              if (isset($arr[$t["Pnumber"]])) {
                  unset($data[$index]);
                  continue;
              }
              $arr[$t["Pnumber"]] = true;
           
          }
        } 
       
      
        else {
          $data = $db->select("SELECT Pnumber,Plocation,Pname,Dnum FROM Projects WHERE Pnumber = '{$pnumber}'");
            foreach ($data as $index => $t) {
                if (isset($arr[$t["Pnumber"]])) {
                    unset($data[$index]);
                    continue;
                }
                $arr[$t["Pnumber"]] = true;
            }
          } 
    }	
 
 elseif (isset($_POST['searchprojectpname'])) { 
        $pname=$_POST['pname'];
        
        if (!empty($pname)) {
          
          $data = $db->select("SELECT Pnumber,Plocation,Pname,Dnum FROM Projects WHERE Pname = '{$pname}'");
          $arr = array();
          foreach ($data as $index => $t) {
              if (isset($arr[$t["Pname"]])) {
                  unset($data[$index]);
                  continue;
              }
              $arr[$t["Pname"]] = true;
           
          }
        } 
       
      
        else {
          $data = $db->select("SELECT Pnumber,Plocation,Pname,Dnum FROM Projects WHERE Pname = '{$pname}'");
            foreach ($data as $index => $t) {
                if (isset($arr[$t["Pname"]])) {
                    unset($data[$index]);
                    continue;
                }
                $arr[$t["Pname"]] = true;
            }
          } 
   
    } 

	 elseif(isset($_POST['findtotalhours'])){
    	$pname = $_POST['pname'];
      if (!empty($pname)) {
        $data = $db->select("SELECT p.Pname, SUM(w.Hours) FROM Works_On w, Projects p WHERE w.Pno=p.Pnumber AND p.Pname = '{$pname}' GROUP BY p.Pname"); 
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
             $data = $db->select("SELECT p.Pname, w.SUM(Hours) FROM Works_On w, Projects p WHERE w.Pno=p.Pnumber AND p.Pname = '{$pname}' GROUP BY p.Pname");
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

    elseif (isset($_POST['submit'])) {

        $pnumber = $_POST['pnumber'];
        $pname=$_POST['pname'];
        $plocation =$_POST['plocation'];
        $dnum = $_POST['dnum'];

        $sql = "INSERT INTO `Projects`(`Pnumber`, `Pname`, `Plocation`, `Dnum`) 
        VALUES ('{$pnumber}','{$pname}', '{$plocation}', '{$dnum}')";

        $result = $db->insertUpdate($sql);

        if ($result) {
            echo "<script>
                window.location.href = 'searchproject.php';
                alert('Add successfully!');
            </script>";
        } else {
            echo "<script>
                window.location.href = 'addproject.php';
                alert('Something went wrong!');
            </script>";
        }
    } 
		
	  
	elseif (isset($_POST['update'])) {
        
        $pnumber = $_POST['pnumber'];
        $pname=$_POST['pname'];
        $plocation =$_POST['plocation'];
        $dnum = $_POST['dnum'];

        $sql = "UPDATE `Projects` SET `Pnumber`='{$pnumber}',`Pname`='{$pname}',`Plocation`='{$plocation}' ,`Dnum`='{$dnum}' WHERE Pnumber='{$pnumber}'";

        $result = $db->insertUpdate($sql);

        if ($result) {
            echo "<script>
                window.location.href = 'searchproject.php';
                alert('Update successfully!');
            </script>";
        } else {
            echo "<script>
                window.location.href = 'addproject.php?id=".$pnumber."';
                alert('Something went wrong');
            </script>";
        }
    }   
#for drop down

		elseif (isset($_GET['id'])) {
        $id = $_GET['id'];
        $departments = $db->select("SELECT * FROM Department");
        $values =  $db->select("SELECT * FROM Projects WHERE Pnumber = '{$id}'");
        $result = $values[0];
          
    } 
 
	


	else {
        $data = $db->select("SELECT * FROM Projects");
        $arr = array();
        foreach ($data as $index => $t) {
            if (isset($arr[$t["Pnumber"]])) {
                unset($data[$index]);
                continue;
            }
            $arr[$t["Pnumber"]] = true;
        }
        $projects = $db->select("SELECT * FROM Projects");
    }


?>
 	
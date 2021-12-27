<?php
    require "model.php";

    $db = new DB();
	if (isset($_POST['search1'])) {
        $ssn = $_POST['ssn'];
      	if (!empty($ssn)) {
          
          $data = $db->select("SELECT w.*, e.Fname, e.Lname,p.Pname FROM Works_On w, Projects p, Employee e WHERE w.Essn = '{$ssn}' AND w.Essn=e.Ssn AND w.Pno=p.Pnumber");
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
          $data = $db->select("SELECT w.*, e.Fname, e.Lname FROM Works_On w, Projects p,Employee e WHERE w.Essn = '{$ssn}' AND w.Essn=e.Ssn  AND w.Pno=p.Pnumber");
            foreach ($data as $index => $t) {
                if (isset($arr[$t["Essn"]])) {
                    unset($data[$index]);
                    continue;
                }
               # $arr[$t["Essn"]] = true;
            }
          } 
    }	
  elseif (isset($_POST['submitworkson'])) {

        $essn = $_POST['essn'];
        $pno=$_POST['pno'];
        $hours =$_POST['hours'];

        $sql = "INSERT INTO `Works_On`(`Essn`, `Pno`, `Hours`) 
        VALUES ('{$essn}','{$pno}', '{$hours}')";

        $result = $db->insertUpdate($sql);

        if ($result) {
            echo "<script>
                window.location.href = 'search1.php';
                alert('Add successfully!');
            </script>";
        } else {
            echo "<script>
                window.location.href = 'addworkson.php';
                alert('Something went wrong!');
            </script>";
        }
    } 
		
  
	elseif (isset($_POST['update'])) {
        $essn = $_POST['essn'];
        $pno=$_POST['pno'];
        $hours =$_POST['hours'];

        $sql = "UPDATE `Works_On` SET `Hours`='{$hours}' WHERE `Essn`='{$essn}' AND `Pno`='{$pno}'";

        $result = $db->insertUpdate($sql);

        if ($result) {
            echo "<script>
                window.location.href = 'search1.php';
                alert('Update successfully!');
            </script>";
        } else {
            echo "<script>
                window.location.href = 'addworkson.php?eid=".$essn."&pid=".$pno."';
                alert('Something went wrong');
            </script>";
        }
    }   

		elseif (isset($_GET['id'])) {
        $id = $_GET['id'];
        $projectsname = $db->select("SELECT * FROM Works_On");
        $values =  $db->select("SELECT * FROM Works_On WHERE Pno = '{$id}' ");
        $result = $values[0];
    } 
	elseif (isset($_GET['eid'])) {
        $eid = $_GET['eid'];
        #$projectsname = $db->select("SELECT * FROM Works_On");
        $values =  $db->select("SELECT * FROM Works_On WHERE Essn = '{$eid}'");
        $result = $values[0];
    } 
	elseif (isset($_GET['pid'])) {
        $pid = $_GET['pid'];
        #$projectsname = $db->select("SELECT * FROM Works_On");
        $values =  $db->select("SELECT * FROM Works_On WHERE Pno = '{$pid}'");
        $result = $values[0];
    } 

		elseif(isset($_POST['findemponproject'])){
    	$pname = $_POST['pname'];
      if (!empty($pname)) {
        $data = $db->select("SELECT w.*, e.Fname, e.Lname,p.Pname FROM Works_On w, Employee e, Projects p WHERE w.Essn=e.Ssn AND w.Pno=p.Pnumber AND p.Pname = '{$pname}'"); 
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
             $data = $db->select("SELECT w.*, e.Fname, e.Lname,p.Pname FROM Works_On w, Employee e, Projects p WHERE w.Essn=e.Ssn AND w.Pno=p.Pnumber AND p.Pname = '{$pname}' ");
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

 
 	else {
          $data = $db->select("SELECT w.*, e.Fname, e.Lname,p.Pname FROM Works_On w, Employee e, Projects p WHERE w.Essn=e.Ssn AND w.Pno=p.Pnumber");
               foreach ($data as $index => $t) {
                    if (isset($arr[$t["Essn"]] )) {
                        unset($data[$index]);
                        continue;
                    }
                    #$arr[$t["Essn"]] = true;
                }
          } 
?>





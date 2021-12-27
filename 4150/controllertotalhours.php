<?php
    require "model.php";

    $db = new DB();


	if(isset($_POST['findtotalhours'])){
    	$pname = $_POST['pname'];
      if (!empty($pname)) {
        $data = $db->select("SELECT p.Pname, SUM(w.Hours) AS total_hours FROM Works_On w, Projects p WHERE p.Pname = '{$pname}' AND w.Pno=p.Pnumber GROUP BY p.Pname"); 
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
             $data = $db->select("SELECT p.Pname, SUM(w.Hours) AS total_hours FROM Works_On w, Projects p WHERE w.Pno=p.Pnumber GROUP BY p.Pname");
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
        $data = $db->select("SELECT p.Pname, SUM(w.Hours) AS total_hours FROM Works_On w, Projects p WHERE w.Pno=p.Pnumber GROUP BY p.Pname");
        $arr = array();
        foreach ($data as $index => $t) {
            if (isset($arr[$t["Pname"]])) {
                unset($data[$index]);
                continue;
            }
            $arr[$t["Pname"]] = true;
        }
        $projects = $db->select("SELECT * FROM Projects");
    }


?>
 	
<?php
    require "model.php";

    $db = new DB();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
      #$del =$db->select("ALTER TABLE forum DROP FOREIGN KEY Department_ibfk_1");
      $del =$db->select("DELETE FROM `Department` WHERE Dnumber = '{$id}'"); // delete query
		if($del){
        	echo "<script>
                window.location.href = 'departmentlist.php';
                alert('Delete successfully!');
            </script>";
        }
      else{
      	echo "<script>
                window.location.href = 'departmentlist.php';
                alert('Delete FAILED!');
            </script>";
      }
    } 
?>
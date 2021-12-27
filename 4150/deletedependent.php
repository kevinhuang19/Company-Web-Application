<?php
    require "model.php";

    $db = new DB();
    if (isset($_GET['id'])  && isset($_GET['dependent_name']) ) {
	  $id = $_GET['id'];
	$dependent_name= $_GET['dependent_name'];
      $del =$db->select("DELETE FROM `Dependent` WHERE Dependent_name='{$dependent_name}' AND Essn = '{$id}'"); // delete query

         	echo "<script>
            	
                window.location.href = 'dependents.php';
                alert('Delete Successfully!');
            </script>";
      
     }
    
        
?>


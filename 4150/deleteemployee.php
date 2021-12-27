<?php
    require "model.php";

    $db = new DB();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
       
      $del =$db->select("DELETE FROM `Employee` WHERE Ssn = '{$id}'"); // delete query

      
            echo "<script>
                window.location.href = 'list.php';
                alert('Delete successfully!');
            </script>";
        
        
    } 
?>
<?php
    require "model.php";

    $db = new DB();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
       
      $del =$db->select("DELETE FROM `Projects` WHERE Pnumber = '{$id}'"); // delete query

      
            echo "<script>
                window.location.href = 'searchproject.php';
                alert('Delete successfully!');
            </script>";
        
        
    } 
?>
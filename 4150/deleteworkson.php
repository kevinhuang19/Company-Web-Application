<?php
    require "model.php";

    $db = new DB();
    if (isset($_GET['id']) && isset($_GET['pid'])) {
        $id = $_GET['id'];
      $pid = $_GET['pid'];
       
      $del =$db->select("DELETE FROM `Works_On` WHERE Pno = '{$pid}' AND Essn = '{$id}'"); // delete query

            echo "<script>
                window.location.href = 'search1.php';
                alert('Delete successfully!');
            </script>";
    
        
    } 
?>
<?php
    require_once 'config.php';
    $selected_id=$_GET['emp_id'];
    $del_data=$con->query("DELETE FROM employee WHERE emp_id='$selected_id'");
    if(!$del_data){
        echo "<script>
                alert('ไม่สามารถแก้ไขข้อมูลได้');
                window.history.back();
              </script>";
    }else{
        header('location:employee.php');
    }
?>
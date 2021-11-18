<?php
    require_once 'config.php';
    $selected_id=$_GET['pro_id'];
    $del_data=$con->query("DELETE FROM product WHERE pro_id='$selected_id'");
    if(!$del_data){
        echo "<script>
                alert('ไม่สามารถแก้ไขข้อมูลได้');
                window.history.back();
              </script>";
    }else{
        header('location:product.php');
    }
?>
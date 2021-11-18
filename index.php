<?php
  session_start();
  if(@!$_SESSION['emp_id']){
    header('location:login.php');
  }else{
    include 'navbar.php';
  }
?>
<?php
    /*
    $host='localhost';
    $user='planetco_64309010004';
    $password='64309010004';
    $dbname='planetco_64309010004';
    */
    
    $host='localhost';
    $user='root';
    $password='';
    $dbname='webit41';
    
    
    $con=mysqli_connect($host,$user,$password,$dbname);
    $con->query('SET NAMES UTF8');
?>
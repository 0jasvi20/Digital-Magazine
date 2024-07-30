<?php 
    $severname= "localhost"; 
	$username = "root";
    $password="";
    $dbname = "web";
    $conn =new  mysqli($severname,$username, $password , $dbname,3306);
    if($conn ->connect_error){
        die("Connection Failed".$conn->connect_error);
    }
    echo " ";
?>
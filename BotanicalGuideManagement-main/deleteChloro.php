<?php
include 'Connection.php';

if(isset($_GET['deleteid'])){
    $del = $_GET['deleteid'];

    $sqldelete = "DELETE FROM `cholorophyta` WHERE speciesKey = '$del' ";
    $result1 = mysqli_query($con, $sqldelete);
    if($result1){
        header('location: adminCholorophyta.php');
    }
}



?>
<?php
include '_dbconnect.php';
session_start();

if(isset($_POST['opt'])){
        $customOption=$_POST["valCus"];

        $sql2 = "UPDATE `viewcart`SET `customize`='$customOption')WHERE `userId`='$userId'";   
        $r3 = mysqli_query($conn, $sql2);

    }
?>
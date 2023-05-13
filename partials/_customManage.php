<?php
    include '_dbconnect.php';

    if(isset($_POST['updateCustom'])) {
        
        $foodId = $_POST['foodid'];
        $Custom = $_POST['custom'];
        $userID =$_POST['userid'];

        //$sql4 = "SELECT * FROM `orders` WHERE `userId`='$userID'";
        //$result4 = mysqli_query($conn, $sql4);
        //$ExistRows = mysqli_num_rows($result4);
        //$orderId =$ExistRows['orderId'];

        $sql = "UPDATE `viewCart` SET `customize`='$Custom' WHERE `foodId`='$foodId' and `userId`= '$userID'";
        $result = mysqli_query($conn, $sql);

        //$sql3 = "UPDATE `orderItems` SET `customize`='$Custom' WHERE `foodId`='$foodId' and `orderId`= ' $orderId'";
        //$result3 = mysqli_query($conn, $sql3);

        if ($result){
            echo "<script>
                window.location=document.referrer;
                </script>";
        }
        else {
            echo "<script>alert('failed');
                window.location=document.referrer;
                </script>";
        }
    
    
}

?>
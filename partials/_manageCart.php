<?php
include '_dbconnect.php';
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $userId = $_SESSION['kuid'];
    if(isset($_POST['addToCart'])) {
        $itemId = $_POST["itemId"];
        // Check whether this item exists
        $existSql = "SELECT * FROM `viewcart` WHERE foodId = '$itemId' AND `userId`='$userId'";
        $result = mysqli_query($conn, $existSql);
        $numExistRows = mysqli_num_rows($result);
        
        
        if($numExistRows > 0){
            echo "<script>alert('Item Already Added.');
                    window.history.back(1);
                    </script>";
        }
        else{
            $sql = "INSERT INTO `viewcart` (`foodId`, `itemQuantity`, `userId`, `addedDate`) VALUES ('$itemId', '1', '$userId', current_timestamp())";   
            $result = mysqli_query($conn, $sql);
            if ($result){
                echo "<script>
                    window.history.back(1);
                    </script>";
            }
        }
    }
    
    if(isset($_POST['removeItem'])) {
        $itemId = $_POST["itemId"];
        $sql = "DELETE FROM `viewcart` WHERE `foodId`='$itemId' AND `userId`='$userId'";   
        $result = mysqli_query($conn, $sql);
        echo "<script>
                window.history.back(1);
            </script>";
    }
    if(isset($_POST['removeAllItem'])) {
        $sql = "DELETE FROM `viewcart` WHERE `userId`='$userId'";   
        $result = mysqli_query($conn, $sql);
        echo "<script>
                window.history.back(1);
            </script>";
    }
    if(isset($_POST['checkout'])) {
        $amount = $_POST["amount"];
        
        $card_ex_month = $_POST["c_month"];
        $card_ex_year = $_POST["c_year"];

        $payment=1;
        if($card_ex_year =="2023" ){
            if($card_ex_month=="january" || $card_ex_month=="february" || $card_ex_month=="march" || $card_ex_month=="april" ){
                $payment=0;
                echo '<script>
                alert("Your Credit/Debit Card is not valid !")
                window.history.back(1);
            </script>';
            
            
            }
        
        }
        if($payment==1){
        $passSql = "SELECT * FROM users WHERE id='$userId'"; 
        $passResult = mysqli_query($conn, $passSql);
        $passRow=mysqli_fetch_assoc($passResult);
        
        $ok = 1;

        if($ok==1){ 
        $sql = "INSERT INTO `orders` (`userId`,`amount`,`orderDate`) VALUES ('$userId','$amount', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            $orderId = $conn->insert_id;
            
            if ($result){
                $addSql = "SELECT * FROM `viewcart` WHERE userId='$userId'"; 
                $addResult = mysqli_query($conn, $addSql);
                while($addrow = mysqli_fetch_assoc($addResult)){
                    $foodId = $addrow['foodId'];
                    $itemQuantity = $addrow['itemQuantity'];
                    $customize=$addrow['customize'];
                    $itemSql = "INSERT INTO `orderitems` (`orderId`, `foodId`,`customize`, `itemQuantity`) VALUES ('$orderId', '$foodId','$customize', '$itemQuantity')";
                    $itemResult = mysqli_query($conn, $itemSql);
                }
                $deletesql = "DELETE FROM `viewcart` WHERE `userId`='$userId'"; 
                $_SESSION['orderid']=  $orderId;
                //$deleteresult = mysqli_query($conn, $deletesql);
                echo '
                <script>

                    window.location.href="http://localhost/kfc-kiosk/final.php";  
                    </script>';
                    
            }
        } 
         
} 
    
}
    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
    {
        $foodId = $_POST['foodId'];
        $qty = $_POST['quantity'];
        $updatesql = "UPDATE `viewcart` SET `itemQuantity`='$qty' WHERE `foodId`='$foodId' AND `userId`='$userId'";
        $updateresult = mysqli_query($conn, $updatesql);
    }

}

?>
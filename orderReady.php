<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<style>
        @import url('https://fonts.googleapis.com/css2?family=Tilt+Prism&display=swap');
      </style>">
      
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>KFC KIOSK</title>
    <link rel = "icon" href ="img/kfcLogo1.png" type = "image/x-icon">
    <style>
.bxline{
   position: relative;
  display: inline-block;
}
.box1{
   background-color:#a41e1d;
   margin-top:0px;
   margin-left:600px;
   width:70px;
   height:80px;
   padding-bottom: 50px;
 } 
 .box2{
   background-color:#a41e1d;
   margin-top:0px;
   margin-left:50px;
   width:70px;
   height:80px;
   padding-bottom: 50px;
 } 
 .box3{
   background-color:#a41e1d;
   margin-top:0px;
   margin-left:50px;
   width:70px;
   height:80px;
   padding-bottom: 50px;
 } 
      </style>
</head>
<?php include 'partials/_dbconnect.php';?>
<body style="background-color:white;background-image:red">

     <div class="container" style="background-color:white;background-image:none" >
     <div class="bxline">
      <span class="box1">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
         <span class="box2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </span>
         <span class="box3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </span>
      </div>
        <div class="navbar" style="margin-bottom:20px">
            <img src="images/logo.png" class="logo">
            <span class="readyHEAD" style="color:#a41e1d;font-size: 70px;text-align: center;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: 700; margin-left: 190px;">READY TO COLLECT..</span> 
            
        </div>

        <div class="content" style="display: inline-block;">
        <?php
          $sql = "SELECT * FROM `orders` where `orderStatus`=1 ORDER BY `orderId` DESC"; 
          $result = mysqli_query($conn, $sql);
          
          while($row = mysqli_fetch_assoc($result)){
            
            $orderid = $row['orderId'];
        
        echo '<div class="box" style="width: 125px; height: 100px; background-color: #f6f6f6;display: inline-block; margin: 10px 10px;border-radius: 10px; border:dotted black 3px;">
          <div class="orderno" style="text-align: center;justify-content: center; font-size: 45px;font-weight: 400 ;color:black">
          <span style="color:#a41e1d">#</span>'.$orderid.'</div>
        </div>';
          }
          ?>          
            </div>
</body>
</html>
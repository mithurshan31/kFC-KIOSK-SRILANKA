<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title id=title>KFC</title>
    <link rel = "icon" href ="img/kfcLogo1.png" type = "image/x-icon">
    <style>
    #cont {
        min-height : 650px;
    }
    </style>
    <title>KFC KIOSK</title>
    <link rel = "icon" href ="img/kfcLogo1.png" type = "image/x-icon">
</head>
<body style="background-color:white" class="bodyyy">
    <?php include 'partials/_dbconnect.php';?>
    <?php
include "./partials/_dbconnect.php";
session_start();
$orderID1=$_SESSION['orderid'];
$_SESSION["checkout_time"]=time();

?>
<div class="bodyy">
<div class="bxline">
      <span class="box1">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
         <span class="box2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </span>
         <span class="box3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </span>
      </div>
    <div class="container my-4" id="cont" >
      
   
        <div class="col-md-12 my-5" ><div class="card"><div class="card-body cart"style="background-color:#f6f6f6;border:double #a41e1d 3px"><div class="col-sm-12 empty-cart-cls text-center" style="margin: 10px;">
            <br><br> <h2 style="font-size: 50px;color:black"><strong>Thank you for ordering in KFC!</strong></h2><br><h2>Your order ID is </h2><h1 style="font-size: 160px;color:#a41e1d"><?php echo '#'.$orderID1; ?></h1> 
            

            <div class="waviy" >
            <h2>
            <span style="--i:0">y</span>
            <span style="--i:1">o</span>
            <span style="--i:2">u</span>
            <span style="--i:3">r</span>
            <span style="--i:4"> </span>
            <span style="--i:5">o</span>
            <span style="--i:6">r</span> 
            <span style="--i:7">d</span>
            <span style="--i:8">e</span>
            <span style="--i:9">r</span>
            <span style="--i:10"> </span>
            <span style="--i:10"> </span>
            <span style="--i:11">i</span>
            <span style="--i:12">s</span>
            <span style="--i:13"> </span>
            <span style="--i:13"> </span>
            <span style="--i:14">p </span>
            <span style="--i:15">r</span>
            <span style="--i:16">e</span>
            <span style="--i:17">p</span>
            <span style="--i:18">a</span>
            <span style="--i:19">r</span>
            <span style="--i:20">i</span>
            <span style="--i:21">n</span>
            <span style="--i:22">g</span>
            <span style="--i:23">.</span>
            <span style="--i:23">.</span>
            <span style="--i:23">.</span>
            <span style="--i:23">.</span>

            </h2>
  </div>
           <a href="index.php" class="btn btn-success cart-btn-transform m-3"  data-abc="true"><h5 style="padding:5px 50px">Got it</h5></a> 
           <a href="#" onclick="window.print()" class="btn btn-primary cart-btn-transform m-3"  data-abc="true"><h5 style="padding:5px 50px">Print</h5></a> 
           </div></div></div></div></div>
           <?php
echo '<style>
.waviy span {
  font-family:sans-serif;
  position: relative;
  display: inline-block;
  color: black;
  
  animation: waviy 6s infinite;
  animation-delay: calc(.1s * var(--i));
  
}
@keyframes waviy {
  0%,40%,100% {
    transform: translateY(0)
  }
  20% {
    transform: translateY(-10px)
  }
}
</style>';

?>


            <?php
                echo '<style>.bodyyy {
                    // background-image: linear-gradient(-45deg, #db34d2, #2a95b6, #f33d3d, #c4d01e);
                    // background-size: 400% 400%;
                    // animation: gradient 15s ease infinite;
                }
                .bxline{
                  position: relative;
                 display: inline-block;
                 margin-top:0px;
               }
               .box1{
                  background-color:#a41e1d;
                  margin-top:0px;
                  margin-left:650px;
                  width:70px;
                  height:80px;
                  padding-bottom: 40px;
                } 
                .box2{
                  background-color:#a41e1d;
                  margin-top:0px;
                  margin-left:50px;
                  width:70px;
                  height:80px;
                  padding-bottom: 40px;
                } 
                .box3{
                  background-color:#a41e1d;
                  margin-top:0px;
                  margin-left:50px;
                  width:70px;
                  height:80px;
                  padding-bottom: 40px;
                }
                bodyy{
                    // background-image: linear-gradient(-45deg, #db34d2, #2a95b6, #f33d3d, #c4d01e);
                    // background-size: 400% 400%;
                    // animation: gradient 15s ease infinite;
                }
                @keyframes gradient {
                  0% {
                    background-position: 0% 50%;
                  }
                  50% {
                    background-position: 100% 50%;
                  }
                  100% {
                    background-position: 0% 50%;
                  }
                }</style>';
            ?>
            
    </div>
            </div>
  

    <?php require 'partials/_footer.php' ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>         
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
   
</body>
</html>
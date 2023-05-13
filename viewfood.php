<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title id=title>food</title>
    <link rel = "icon" href ="img/kfcLogo1.png" type = "image/x-icon">
    <style>
    #cont {
        min-height : 578px;
    }
    </style>
</head>
<body style="background-color:white">
    <?php include 'partials/_dbconnect.php';?>
    <?php require 'partials/_nav.php' ?>
    <?php
include "./partials/_dbconnect.php";
?>
    <div class="container my-4" id="cont" style="background-color:white;">
        <div class="row jumbotron" style="background-color:#f6f6f6;border:solid #a41e1d 2px;">
        <?php
            $foodId = $_GET['foodid'];
            $s = "select * FROM food WHERE foodId = {$_GET['foodid']} ";
            $result = $conn->query($s);
            $row = mysqli_fetch_assoc($result);
            $foodName = $row['foodName'];
            $foodPrice = $row['foodPrice'];
            $foodDesc = $row['foodDesc'];
            $foodCategorieId = $row['foodCategorieId'];
            $foodOpt1=$row['custom1'];
            $foodOpt2=$row['custom2'];
            $_SESSION["foodID"]=$foodId;
        ?>
        <script> document.getElementById("title").innerHTML = "<?php echo $foodName; ?>"; </script> 
        <?php
        echo  '<div class="col-md-4" >
                <img src="img/food-'.$foodId. '.jpg" width="249px" height="262px">
            </div>
            <div class="col-md-8 my-4">
                <h2 style="color:#a41e1d;font-weight:bold;">' . $foodName . '</h2>
                <h4 style="color: #a41e1d;font-weight:bold">Rs. '.$foodPrice. '/-</h4>
                <h5 class="mb-0">' .$foodDesc .'</h5>';

                
                    $quaSql = "SELECT `itemQuantity` FROM `viewcart` WHERE foodId = '$foodId' AND `userId`='{$_SESSION['kuid']}'";
                    $quaresult = mysqli_query($conn, $quaSql);
                    $quaExistRows = mysqli_num_rows($quaresult);
                    if($quaExistRows == 0) {
                        echo '<form action="partials/_manageCart.php" method="POST">
                              <input type="hidden" name="itemId" value="'.$foodId. '">
                              <button type="submit" name="addToCart" class="btn btn-primary my-2"style="background-color:#a41e1d;border:#a41e1d">Add to Cart</button>';
                    
                    }
                    else{  
                    echo '<a href="viewCart.php"><button class="btn btn-info my-2"style="background-color:#a41e1d;border:#a41e1d">Go to Cart</button></a>';             
                }
                echo '
                <h6 class="my-1"> View </h6>
                <div class="mx-4">
                    <a href="viewfoodList.php?catid=' . $foodCategorieId . '" class="active text-dark">
                    <i class="fas fa-angle-double-left"></i>
                        <span>All food</span>
                    </a>
                </div>
                <div class="mx-4">
                    <a href="index.php" class="active text-dark">
                    <i class="fas fa-angle-double-left"></i>
                        <span>All Category</span>
                    </a>
                </div>
            </div>'
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
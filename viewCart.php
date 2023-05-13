<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Cart</title>
    <link rel = "icon" href ="img/kfcLogo1.png" type = "image/x-icon">
    <style>
    #cont{
        min-height : 626px;
    }
    </style>
</head>
<body style="background-color:white;">
    <?php include 'partials/_dbconnect.php';?>
    <?php require 'partials/_nav.php' ;?>
    
    
    <div class="container"  id="cont">
        <div class="row" style="background-color:#f6f6f6">
            
            <div class="col-lg-12 text-center border rounded bg-light my-3">
                <h1 style="color:#a41e1d ; font-family: Verdana, Geneva, Tahoma, sans-serif;">My Cart</h1>
            </div>

            <div class="col-lg-8">
                <div class="card wish-list mb-3" style="font-weight:bold;">
                    <table class="table text-center" style="background-color:white">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Item Name</th>
                                <th scope="col">Item Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">customize option</th>
                                <th scope="col">food customize</th>
                                <th scope="col">Total Price</th>
                                <th scope="col">
                                    <form action="partials/_manageCart.php" method="POST">
                                        <button name="removeAllItem" class="btn btn-sm btn-outline-danger">Remove All</button>
                                        <input type="hidden" name="userId" value="<?php $userId = $_SESSION['kuid']; echo $userId ?>">
                                    </form>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM `viewcart` WHERE `userId`= {$_SESSION['kuid']}";
                                $result =$conn->query($sql);
                                $counter = 0;
                                $totalPrice = 0;
                                while($row = mysqli_fetch_assoc($result)){
                                    $foodId = $row['foodId'];
                                    $Quantity = $row['itemQuantity'];
                                    $custom=$row['customize'];
                                    $mysql = "SELECT * FROM `food` WHERE foodId = '$foodId' ";
                                    $myresult = mysqli_query($conn, $mysql);
                                    $myrow = mysqli_fetch_assoc($myresult);
                                    $foodName = $myrow['foodName'];
                                    $foodPrice = $myrow['foodPrice'];
                                    $total = $foodPrice * $Quantity;
                                    $counter++;
                                    $totalPrice = $totalPrice + $total;

                                    $sql1 = "SELECT `custom1`,`custom2` FROM `food` WHERE `foodId`= '$foodId'";
                                    $result1 =$conn->query($sql1);
                                    $row1 = mysqli_fetch_assoc($result1);
                                    $custom1=$row1['custom1'];
                                    $custom2=$row1['custom2'];

                                    




                                    

                                    

                                    echo '<tr>
                                            <td>' . $counter . '</td>
                                            <td>' . $foodName . '</td>
                                            <td>' . $foodPrice . '</td>
                                            <td>
                                                <form id="frm' . $foodId . '">
                                                    <input type="hidden" name="foodId" value="' . $foodId . '">
                                                    <input type="number" name="quantity" max="15" value="' . $Quantity . '" class="text-center" onchange="updateCart(' . $foodId . ')" onkeyup="return false" style="width:60px" min=1 oninput="check(this)" onClick="this.select();">
                                                </form>
                                            </td>
                                            <td> <a href="#" data-toggle="modal" data-target="#Customize'. $foodId. '" class="view"><button class="btn btn-sm btn-outline-primary">choose</button></a></td>
                                            <td>' . $custom. '</td>
                                            
                                            <td>' . $total . '</td>

                                            <td>
                                                <form action="partials/_manageCart.php" method="POST">
                                                    <button name="removeItem" class="btn btn-sm btn-outline-danger">Remove</button>
                                                    <input type="hidden" name="itemId" value="'.$foodId. '">
                                                </form>
                                            </td>
                                        </tr>';
                                                                        }

                                if($counter==0) {
                                    ?><script> document.getElementById("cont").innerHTML = '<div class="col-md-12 my-5"><div class="card"><div class="card-body cart"><div class="col-sm-12 empty-cart-cls text-center"> <img src="https://i.imgur.com/dCdflKN.png" width="130" height="130" class="img-fluid mb-4 mr-3"><h3><strong>Your Cart is Empty</strong></h3><h4>Add something to make me happy :)</h4> <a href="home.php" class="btn btn-primary cart-btn-transform m-3" data-abc="true">continue shopping</a> </div></div></div></div>';</script> <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4" >
                <div class="card wish-list mb-3" >
                    <div class="pt-4 border bg-light rounded p-3">
                    <div class="alert alert-info mb-0" style="width: -webkit-fill-available;">
            <strong>Info!</strong> Only Debit/Credit Card Payment Method is acceptible!.
            </div> <br>
                        <h5 class="mb-3 text-uppercase font-weight-bold text-center">Order summary</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0 bg-light">Total Price<span>Rs. <?php echo $totalPrice .'.00'?></span></li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0 bg-light">tax(3%)<span>Rs.<?php echo (($totalPrice * 0.03)) ?></span></li>
                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3 bg-light">
                                <div>
                                    <strong>The total amount of</strong>
                                    <strong><p class="mb-0">(including Tax & Charge)</p></strong>
                                </div>
                                <span><strong>Rs. <?php echo ($totalPrice=$totalPrice + ($totalPrice * 0.03)) ?></strong></span>
                            </li>
                        </ul>
                        <br>
                        <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#checkoutModal" style="background-color:#a41e1d;border:#a41e1d;font-size:18px">go to checkout</button>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
                                
    <?php 
    
    
    ?>
    <?php
    include 'partials/_orderItemModal.php';
    include 'partials/_customStatusModal.php';
    require 'partials/_checkoutModal.php';
    require 'partials/_footer.php';
     ?>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>         
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
    <script>
        function check(input) {
            if (input.value <= 0) {
                input.value = 1;
            }
        }
        function updateCart(id) {
            $.ajax({
                url: 'partials/_manageCart.php',
                type: 'POST',
                data:$("#frm"+id).serialize(),
                success:function(res) {
                    location.reload();
                } 
            })
        }
    </script>
</body>
</html>
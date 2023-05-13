<?php 
session_start();



$systemName = "KFC SRILANKA";

echo '<nav class="navbar navbar-expand-lg navbar-light bg-light" style="position:relative;">
      
      <a class="navbar-brand"  href="home.php"><img src="img/logo.png" width="45px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home.php"> <b>Home</b> <span class="sr-only">(current)</span></a>
          </li>
          <br>
          <br>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <b>Top Categories</b>
            </a>
            
            <div class="dropdown-menu" aria-labelledby="navbardropdown">';
            $sql = "SELECT categorieName, categorieId FROM `categories`"; 
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
              echo '<a class="dropdown-item" href="viewfoodList.php?catid=' .$row['categorieId']. '">' .$row['categorieName']. '</a>';
            }
            echo '</div>
          </li>';
          
          
        
        $countsql = "SELECT SUM(`itemQuantity`) FROM `viewcart` WHERE `userId`={$_SESSION["kuid"]}"; 
        $countresult = mysqli_query($conn, $countsql);
        $countrow = mysqli_fetch_assoc($countresult);      
        $count = $countrow['SUM(`itemQuantity`)'];
        if(!$count) {
          $count = 0;
        }
        
        echo '
        <style>
        .cartt{
          align-item:"right";
        }
        </style><ul style="padding-left:940px"> <div class="cs1" ><a href="viewCart.php" style="padding:1px 20px"><button type="button" class="btn btn-success mx-2" style=" padding:6px 20px;" title="MyCart">
          <svg xmlns="img/cart.svg" padding="100px" width="16" height="16"  fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </svg>  
          <i class="bi bi-cart">Cart ( '.$count.  ' )</i>
        </button></a> </div> </ul>';

        

            
  echo '
  <div style="padding-left:30px"><div >
  <a class="btn btn-sm btn-danger" style="padding:7px 20px"   href="index.php" align="right">  Exit  <span class="fas fa-arrow-alt-circle-right"></span></a>
</div></div></div>
    </nav>';

    
?>


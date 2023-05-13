<?php
include "./partials/_dbconnect.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<style>
        @import url('https://fonts.googleapis.com/css2?family=Tilt+Prism&display=swap');
      </style>">
      
    <style>
      @font-face {
    font-family: 'Pacifico-Regular';
    src: url(font/Pacifico-Regular.ttf);
}
* {
    margin: 0;
    padding: 0;
    font-family: 'Pacifico-Regular';
    box-sizing:border-box;
}


body {

  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background-image:#a41e1d;
  background-size: 400% 400%;
  /* animation: gradient 15s ease infinite; */
}

.waviy {
  
  position: relative;
  -webkit-box-reflect: below -20px linear-gradient(transparent, rgba(0,0,0,.2));
  font-size: 60px;
  margin-top: 40px;
}
.waviy span {
  font-family:''Russo One', sans-serif';
  position: relative;
  display: inline-block;
  color: #fff;
  
  animation: waviy 2s infinite;
  animation-delay: calc(.1s * var(--i));
  
}
@keyframes waviy {
  0%,40%,100% {
    transform: translateY(0)
  }
  20% {
    transform: translateY(-20px)
  }
}
.waviy1{
    color: #a41e1d;
    background-size: 400% 400%;
    position: relative;
  font-size: 100px;
  margin-top: 40px;
  margin-left :70px;
 
  font-family: 'Nunito', sans-serif;
  text-transform: uppercase;
  letter-spacing: 1.1px;
  font-weight: 700;
    
}
.container {
    height: 100vh;
    width: 100%;
    padding-right: 5%;
    padding-left: 3%;
    box-sizing: border-box;
    position: relative;
    background-image: white;
    background-size: 400% 400%;
    /* animation: gradient 15s ease infinite; */
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
}

.logo {
    height: 80%;
    width: 150px;
    margin-top: 1px;
    cursor: pointer;
}

.content {
    position:fixed;
}/*
h1 {
    text-transform: lowercase;
    font-weight: 500;
    letter-spacing: .1em;
    font-size: 60px;
    margin-top: 100px;
    color: #fff;
}

h1 .style {
    color: #d8c5c5;
    font-size: 100px;
    font-weight: 800;
    font-family: 'Aladin', cursive;
}
.text {
    position:static;
    display: flex;
    align-items:center;

}
  /*
.btn {
    
    color: #d10a20;
    background-color: #fff;
    padding: 12px 35px;
    margin-top: 200px;
    margin-left: 300px;
    border: none;
    outline: none;
    text-transform: uppercase;
    cursor: pointer;
    text-align: center;
    border-radius: 40px;
    display: block;
    font-size: 50px;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    font-weight: 800;
    transition: all .5s;
}
*/
html, body {
  height: 100%;
}

.wrap {
  height: 100%;
  display: flex;
  align-items: left;
  justify-content: left;
}

.button {
  min-width: 300px;
  min-height: 60px;
  font-family: 'Nunito', sans-serif;
  font-size: 40px;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-weight: 700;
  color: white;
  background: #a41e1d;
  /* background-image: linear-gradient(45deg, #db34d2, #2a95b6, #f33d3d, #c4d01e); */
  background-size: 400% 400%;
  /* animation: gradient 15s ease infinite; */
  border: none;
  border-radius: 1000px;
  /* box-shadow: 12px 12px 24px rgba(255, 255, 255, 0.64); */
  transition: all 0.3s ease-in-out 0s;
  cursor: pointer;
  outline: none;
  position: relative;
  padding:20px 50px;
  margin-top: 70px;
  margin-left: 120px;
  }

  

button::before {
content: '';
  border-radius: 1000px;
  min-width: calc(300px + 12px);
  min-height: calc(60px + 12px);
  border: 6px solid #a41e1d;
  box-shadow: 0 0 60px rgba(0,255,203,.64);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  opacity: 0;
  transition: all .3s ease-in-out 0s;
}
/*
.button:hover, .button:focus {
  color: #313133;
  transform: translateY(-6px);
}

button:hover::before, button:focus::before {
  opacity: 1;
}*/

button::after {
  content: '';
  width: 30px; height: 30px;
  border-radius: 100%;
  border: 12px solid maroon;
  position: absolute;
  z-index: -1;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  animation: ring 2.5s infinite;
}

button:hover::after, button:focus::after {
  animation: none;
  display: none;
}

@keyframes ring {
  0% {
    width: 30px;
    height: 30px;
    opacity: 1;
  }
  100% {
    width: 300px;
    height: 300px;
    opacity: 0;
  }
}
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
.image {
    position:fixed;
    bottom: 0;
    width: 700px;
    height: 650px;
    margin-bottom: 10px;
    margin-left: 770px;
    
}
      </style>
    <title>KFC KIOSK</title>
    <link rel = "icon" href ="img/kfcLogo1.png" type = "image/x-icon">
</head>
<body style="background-color:#f6f6f6">
<?php	
if(isset($_POST["btn"]))
      {
         $i=1;
         $sql="select * from k_user;";
         $res=$conn->query($sql);
         
         if($res->num_rows>0)
         {
          while($ro = $res->fetch_assoc())
         {
         $i++;
         }
         }
         
         $_SESSION["kuid"]=$i;
         $s="insert into k_user(ID) values ($i);";
         if($conn->query($s))
         
         {
         echo "
            <script> 
            window.open('home.php','_self');
            </script>
            ";
         }
         
      }
   ?>
   <body>
   
     <div class="container">
      <div class="bxline">
      <span class="box1">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
         <span class="box2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </span>
         <span class="box3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </span>
      </div>
     
        <div class="navbar">
            <img src="images/logo.png" class="logo">
            
            <br>
            <br><br>
             <span class="waviy1">LET'S GET </span>
             <br>
             <span class="waviy1" style="color:#a41e1d">&nbsp;&nbsp;CRISPY! </span>
        </div>

        <div class="content">
        
          <!-- <div class="waviy">
            <span style="--i:0  ; color:black">'</span>
            <span style="--i:1; color:black">F</span>
            <span style="--i:2; color:black">i</span>
            <span style="--i:3; color:black">n</span>
            <span style="--i:4; color:black">g</span>
            <span style="--i:5; color:black">e</span>
            <span style="--i:6; color:black">r</span> 
            <span style="--i:7; color:black"> </span>
            <span style="--i:8; color:black">L</span>
            <span style="--i:9; color:black">i</span>
            <span style="--i:10; color:black">c</span>
            <span style="--i:11; color:black">k</span>
            <span style="--i:12; color:black">i</span>
            <span style="--i:13; color:black">n</span>
            <span style="--i:14; color:black"> </span>
            <span style="--i:15; color:black">G</span>
            <span style="--i:16; color:black">o</span>
            <span style="--i:17; color:black">o</span>
            <span style="--i:18; color:black">d</span>
            <span style="--i:19; color:black">'</span>

         
           </div> -->

            <!--<h1>Finger Lickin Good <br></h1> -->
            

        <div class="wrap">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
               <button class="button" name="btn">Start Order</button>
               </form>
        </div>


            <!--<button class="btn">Order Now</button> -->
          
            </div>
            <img src="images/1.png" class="image">
        </div>
     </div>
</body>
</html>


 

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" integrity="sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=" crossorigin="anonymous"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   grabCursor:true,
   effect: "flip",
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
});


</script>


</body>
</html>
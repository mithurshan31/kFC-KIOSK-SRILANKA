<?php

session_start();
echo "Logging you out. Please wait...";
unset($_SESSION["chefloggedin"]);
unset($_SESSION["chefusername"]);
unset($_SESSION["chefuserId"]);

// session_unset();
// session_destroy();

header("location: /kfc-kiosk/chef/login.php");;
?>

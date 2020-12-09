<?php
    session_start();

   session_unset();
   session_destroy();
    // session_abort($_SESSION["userdata"]);
    header("Location:login.php");

?>
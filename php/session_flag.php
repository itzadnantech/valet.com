<?php
session_start();
 if(!isset($_SESSION["email"])&&!isset($_SESSION["name"])&&!isset($_SESSION["role"])&&!isset($_SESSION["userid"])){
     header("Location: signin.php");
     exit; 
 }
else{
    if((isset($add_driver)||isset($add_location)||isset($manage_users)||isset($rate_plan)||isset($shift_timings)||isset($checkin))&&$_SESSION["role"]!=101){
             header("Location: 404.html");
             exit;
    }
}
?>
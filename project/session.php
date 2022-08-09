<?php
    // session_start();
    if(isset($_SESSION["useremail"]))
        $useremail = $_SESSION["useremail"];
    else
        $useremail="";

    if(isset($_SESSION["username"]))
        $username = $_SESSION["username"];
    else
        $username="";
?>
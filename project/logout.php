<?php
    session_start();
    unset($_SESSION["useremail"]);
    unset($_SESSION["username"]);

    echo("
        <script>location.href = 'main.php';</script>
        ");
?>

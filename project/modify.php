<?php
    $email=$_GET["email"];

    $pass=$_POST["pass"];
    $name=$_POST["name"];
    // $email=$_POST["email"];

    $con = mysqli_connect("localhost", "w1004mesmg", "sunmoons1s2s3!", "w1004mesmg");

    $sql = "update gr_member set email='$email', pass='$pass', name='$name'";
    $sql .= "where email='$email'";
    mysqli_query($con, $sql);

    mysqli_close($con);

    echo "
    <script>
    location.href = 'main.php';
    </script>
    ";
?>

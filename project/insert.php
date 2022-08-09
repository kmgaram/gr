<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $con = mysqli_connect("localhost", "w1004mesmg", "sunmoons1s2s3!", "w1004mesmg");

    $sql = "insert into gr_member (name, email, pass)";   //데이터 삽입 명령
    $sql .= "values('$name','$email','$pass')";

    mysqli_query($con,$sql);
    mysqli_close($con);

    //로그인 폼으로 이동
    echo "<script>location.href = 'login_form.php';
    </script>";
?>
    
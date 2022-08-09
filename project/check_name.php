<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
    .close { margin:20px 0 0 120px; cursor: pointer;}
    </style>
</head>
<body>
    <h3>닉네임 중복 체크</h3>
    <div>
<?php
    $name = $_GET["name"];

    if(!$name){
        echo("닉네임을 입력해 주세요.");
    }
    else {
        $con = mysqli_connect("localhost", "w1004mesmg", "sunmoons1s2s3!", "w1004mesmg");
        $sql = "select * from gr_member where name='$name'";
        $result = mysqli_query($con, $sql);

        $num_record = mysqli_num_rows($result);

        if($num_record){
            echo $name." 닉네임이 중복됩니다.<br>";
            echo "다른 닉네임을 사용해 주세요.<br>";
        }
        else {
            echo $name."사용 가능 합니다.<br>";
        }
        mysqli_close($con);
    }
?>
    </div>
    <div class="close">
        <button onclick="javascript:self.close()">창 닫기</button>
    </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<mate charset="utf-8">
<title>정보 수정</title>
<link rel="stylesheet" href="modify.css">
<script>
    function check_input(){
        if(!document.member.pass.value){
            alert("비밀번호를 입력하세요");
            doucument.member.pass.focus();
            return;
        }
        if(!document.member.pass_confirm.value){
            alert("비밀번호확인을 입력하세요");
            document.member.pass_confirm.focus();
            return;
        }
        if(!document.member.name.value){
            alert("닉네임을 입력하세요");
            document.member.name.focus();
            return;
        }
        if(document.member.pass.value != document.member.pass_confirm.value){
            alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요.");
            document.member.pass.focus();
            document.member.pass.select();
            return;
        }
        document.member.submit();
    }

    function reset_form(){
        document.member.email.value="";
        document.member.pass.value="";
        document.member.pass_confirm.value="";
        document.member.name.value="";
        document.member.email.focus();
        return;
    }
</script>
</head>
<body>
<?php
    session_start();
    if(isset($_SESSION["useremail"]))
        $useremail = $_SESSION["useremail"];
    else
        $useremail = "";

    $con = mysqli_connect("localhost", "w1004mesmg", "sunmoons1s2s3!", "w1004mesmg");
    $sql = "select * from gr_member where email='$useremail'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    $email = $row["email"];
    $pass = $row["pass"];
    $name = $row["name"];

    mysqli_close($con);
?>
    <form name="member" action="modify.php?email=<?=$useremail?>" method="post" id="form">
    <a href="main.php"><img src="logo.png" alt="" width="200px" height="200px" id="logo"></a>
            <h2>회원 정보 수정</h2><br>
    <ul class="join_form">
        <li>
            <span class="col1">이메일</span><br>
            <span class="col2"><?=$useremail?></span><br><br>
        </li>
        <li>
            <span class="col1">비밀번호</span>
            <span calss="col2"><input type="password" name="pass" value="<?=$pass?>"></span><br><br>
        </li>
        <li>
            <span class="col1">비밀번호 확인</span>
            <span class="col2"><input type="password" name="pass_confirm"></span><br><br>
        </li>
        <li>
            <span class="col1">닉네임</span>
            <input type="text" name="name" value="<?=$name?>"><br><br>
        </li>
    </ul>
        <!-- <ul class="buttons">
        <li><button type="button" onclick="check_input()">저장하기</button></li>
        <<li><button type="button" onclick="reset_form()">취소하기</button></li> 
    </ul> -->
    <button class="w-100 btn btn-lg btn-primary" id="button_style" type="submit" onclick="check_input()">저장하기</button>
    <br>
    <br>
    <br>
    <footer>@kimgaram 01092853249</footer>
    <br>
    <br>
    </form>
</body>
</html>


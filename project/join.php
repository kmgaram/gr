<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <link rel="stylesheet" href="join.css">
    <script>
        function check_input(){
            if(!document.member.name.value){
                alert("닉네임을 입력하세요.");
                document.member.name.focus();
                return;
            }
            if(!document.member.email.value){
                alert("이메일을 입력하세요.");
                document.member.email.focus();
                return;
            }
            if(!document.member.pass.value){
                alert("비밀번호를 입력하세요.");
                document.member.pass.focus();
                return;
            }
            if(!document.member.pass_confirm.value){
                alert("비밀번호확인을 입력하세요.");
                document.member.pass_confirm.focus();
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
            document.member.name.value = "";
            document.member.email.value = "";
            document.member.pass.value = "";
            document.member.pass_confirm.value = "";
            document.member.name.focus();
            return;
        }
        function check_name() {
            window.open("check_name.php?name="+ document.member.name.value,"NAMEcheck","left=700,top=300,width=380,height=160, scrollbars=no,resizable=yes");
        }
    </script>
</head>
<body class="text-center">
<?php $root = $_SERVER['DOCUMENT_ROOT']?>
<main class="form-signin w-100 m-auto">
    <form name="member" action="insert.php" method="post" id="form">
    <a href="main.php"><img src="logo.png" alt="" width="200px" height="200px" id="logo"></a>
    <h2>회원 가입</h2><br>
        <ul class="join_form">
            <li>
                <span class="col1">닉네임</span>
                <span class="col2"><input type="text" name="name"></span><br><br>
                <span class="col3"><button type="button" onclick="check_name()">중복체크</button></span>
            </li>
            <li>
                <span class="col1">이메일</span>
                <span class="col2"><input type="text" name="email"></span>
            </li>
            <li>
                <span class="col1">비밀번호</span>
                <span class="col2"><input type="password" name="pass"></span>
            </li>
            <li>
                <span class="col1">비밀번호 확인</span>
                <span class="col2"><input type="password" name="pass_confirm"></span><br><br>
            </li>
        </ul>
        <ul class="buttons" id="last">
            <li id= "list"><button class="w-100 btn btn-lg btn-primary" id="login_button" type="submit" onclick="check_input()">회원가입</button></li>
            <li id= "list"><button class="w-100 btn btn-lg btn-primary" id="login_button" type="submit" onclick="reset_form()">취소하기</button></li>
        </ul>
        <br>
        <br>
        <br>
        <footer>@kimgaram 01092853249</footer>
        <br>
        <br>
    </form>
</body>
</html>
<!-- 

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
    <link rel="stylesheet" type="test/css" href="login.css">
    <script>
        function check_input()
        {
            if(!document.login.email.value){
                alert("이메일을 입력하세요");
                document.login_form.email.focus();
                return;
            }

            if(!document.login.pass.value){
                alert("비밀번호를 입력하세요");
                document.login_form.pass.focus();
                return;
            }
            document.login.submit();
        }
    </script>
</head>
<body>
    <?php $root = $_SERVER['DOCUMENT_ROOT']?>
    <h2 class="login_title">로그인</h2>
    <form name="login" method="post" action="login.php">
        <ul class="login_form">
            <li>
                <span class="col1">이메일</span>
                <span class="col2"><input type="text" name="email" placeholder="이메일"></span>
            </li>
            <li>
            <span class="col1">비밀번호</span>
                <span class="col2"><input type="password" name="pass" placeholder="비밀번호"></span>
            </li>
            <li><button type="button" onclick="check_input()">로그인</button></li>
        </ul>
    </form>
</body>
</html> -->



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>로그인</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    

    <link rel="stylesheet" type="text/css" href="login_form.css">
    <script>
        function check_input()
        {
            if(!document.login.email.value){
                alert("이메일을 입력하세요");
                document.login_form.email.focus();
                return;
            }

            if(!document.login.pass.value){
                alert("비밀번호를 입력하세요");
                document.login_form.pass.focus();
                return;
            }
            document.login.submit();
        }
    </script>
</head>

<body class="text-center">
<?php $root = $_SERVER['DOCUMENT_ROOT']?>
<main class="form-signin w-100 m-auto">
  <form name="login" method="post" action="login.php">
    <a href="main.php"><img src="logo.png" alt="" width="200px" height="200px"></a>
    <h1 class="h3 mb-3 fw-normal">Login</h1>

    <div class="form-floating">
      <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input name="pass" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" id="login_button" type="submit" onclick="check_input()">Sign in</button>
    <br>
    <br>
    <a href="join.php" id="join">회원가입 하러가기</a>
    <p class="mt-5 mb-3 text-muted">© 9285–3249</p>
  </form>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>

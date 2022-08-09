<?php include $_SERVER['DOCUMENT_ROOT']."/p2/gr/project/header.php"?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="list.css">
<script>
    function check_input(){
        if(!document.board.subject.value){     //제목 체크
            alert("제목을 입력하세요");
            doucument.board.subject.focus();
            return;
            }
        if(!document.board.content.value){      //내용 체크
            alert("내용을 입력하세요.");
            document.board.content.focus();
            return;
        }
        document.board.submit();
    }
</script>
</head>
<body>
    <div>
    <h2>거래 게시판 > 글쓰기</h2>
    <form name="board" method="post" action="memberboard_insert.php"
                enctype="multipart/form-data">
        <ul class="board_form">
            <li>
                <span class="col1">이름</span>
                <span class="col2"><?=$username?></span>
            </li>
            <li>
                <span class="col1">제목</span>
                <span class="col2"><input name="subject" type="text"></span>
            </li>
            <li class="text">
                <span class="col1">내용</span>
                <span class="col2"><textarea name="content"></textarea></span>
            </li>
            <li class="ares">
                <span class="col1">첨부 파일</span>
                <span class="col2"><input type="file" name="upfile"></span>
            </li>
        </ul>

    </div>
        <div class="button_wrap">
            <ul class="buttons">
                <li><button type="button" onclick="check_input()">저장하기</button></li>
                <li><button type="button" onclick="location.href='memberboard_list.php'">목록보기</button></li>
            </ul>
        </div>

    </form>
</body>
</html>
    
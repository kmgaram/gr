<?php include $_SERVER['DOCUMENT_ROOT']."/p2/gr/project/header.php"?>

<?php
    $num = $_GET["num"];
    $page = $_GET["page"];

    $con = mysqli_connect("localhost", "w1004mesmg", "sunmoons1s2s3!", "w1004mesmg");
    $sql = "select * from gr_memberboard where num=$num";
    $result = mysqli_query($con, $sql);     //SQL 명령 실행

    $row = mysqli_fetch_assoc($result);     //레코드 가져오기
    
    $name = $row["name"];
    $subject = $row["subject"];
    $regist_day = $row["regist_day"];

    $content = $row["content"];             //내용
    $content = str_replace(" ","&nbsp;",$content);      //공백 변환
    $content = str_replace("\n","<br>",$content);       //줄바꿈 변환
    
    $file_name = $row["file_name"];
    $file_type = $row["file_type"];
    $file_copied = $row["file_copied"];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="list.css">
<script>
	function check_password(mode, num) {
		// mode : modify(수정) delete(삭제), num : 레코드 번호
     	window.open("password_form.php?mode="+mode+"&num="+num,
         "pass_check",
          "left=700,top=300,width=550,height=150,scrollbars=no,resizable=yes");
   }
</script>  
</head>
<body>
    <h2>거래 게시판 > 내용보기</h2>
    <ul class="board_view">
        <li class="row1">
            <span class="col1"><b>제목 : </b> <?=$subject?></span>
            <span class="col2"><?=$name?> │ <?=$regist_day?></span>
        </li>
        <li class="row2">
        <?php
            if($file_name){
                $file_path = "./data/".$file_copied;
                $file_size = filesize($file_path);

                echo "▶ 첨부파일 : $file_name($file_size Byte)
                        &nbsp;&nbsp;&nbsp;&nbsp;
<a href='download.php?num=$num&file_copied=$file_copied&
    file_name=$file_name&file_type'>[저장]</a><br><br>";
            }
            if(!$file_name == null){
                echo "<br><div id='img_box'><img src='data/".$file_copied."'></img><div>";
            }
            echo $content;      //글 내용 출력
            ?>
        </li>

    </ul>
    <ul class="buttons">
    <li><button onclick="location.href='memberboard_list.php?page=<?=$page?>'">목록보기</button></li>
    <li><button onclick="location.href='member_modify_form.php? num=<?=$num?>&page=<?=$page?>'">수정하기</button></li>
    <li><button onclick="location.href='member_delete.php?num=<?=$num?>&page=<?=$page?>'">삭제하기</button></li>
    </ul>
</body>
</html>

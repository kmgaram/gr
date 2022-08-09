<?php include $_SERVER['DOCUMENT_ROOT']."/p2/gr/project/header.php"?>


<?php
    if (isset($_GET["num"]))				// $_GET["num"] : 레코드 번호
		$num = $_GET["num"];
	else 
		$num = "";

	$con = mysqli_connect("localhost", "w1004mesmg", "sunmoons1s2s3!", "w1004mesmg");	// DB 접속
	$sql = "select * from gr_freeboard where num=$num";	// 레코드 검색
	$result = mysqli_query($con, $sql);			// SQL 명령 실행

	$row = mysqli_fetch_assoc($result);			// 레코드 가져오기
	$name      = $row["name"];					// 이름
	$subject    = $row["subject"];				// 제목
	$regist_day   = $row["regist_day"];			// 작성일
	$content    = $row["content"];				// 내용
	$content = str_replace(" ", "&nbsp;", $content);		// 공백 변환
	$content = str_replace("\n", "<br>", $content);			// 줄바꿈 변환
?>	
<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<link rel="stylesheet" href="freeboard.css">
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
	<h2>Q&A > 내용보기</h2>
	<ul class="board_view">
		<li class="row1">
			<span class="col1"><b>제목 :</b> <?=$subject?></span>	<!-- 제목 출력 -->
			<span class="col2"><?=$name?> | <?=$regist_day?></span>	<!-- 이름, 작성일 출력 -->
		</li>
		<li class="row2">
			<?=$content?>	 <!-- 내용 출력 -->
		</li>		
	</ul>
	<ul class="buttons">
		<li><button onclick="location.href='free_list.php'">목록보기</button></li>
		<li><button onclick="check_password('modify', '<?=$num?>')">수정하기</button></li>   
		<li><button onclick="check_password('delete', '<?=$num?>')">삭제하기</button></li>
		<li><button onclick="location.href='free_form.php'">글쓰기</button></li>
	</ul>
</body>
</html>




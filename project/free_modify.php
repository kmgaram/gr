<?php
	$num = $_GET["num"];

	$name = $_POST["name"];
	$pass = $_POST["pass"];	
    $subject = $_POST["subject"];
    $content = $_POST["content"];

	$subject = htmlspecialchars($subject, ENT_QUOTES);	// 제목 HTML 특수문자 변환
	$content = htmlspecialchars($content, ENT_QUOTES);	// 내용 HTML 특수문자 변환 
	$regist_day = date("Y-m-d (H:i)");  // UTC 기준 현재의 '년-월-일 (시:분)'

	$con = mysqli_connect("localhost", "w1004mesmg", "sunmoons1s2s3!", "w1004mesmg");	// DB 연결
	$sql = "update gr_freeboard set name='$name', pass='$pass', subject='$subject', ";	// 수정 명령
	$sql .= "content='$content', regist_day='$regist_day' where num=$num";
	mysqli_query($con, $sql);  // SQL 명령 실행

	mysqli_close($con);       // DB 연결 끊기

	echo "
	   <script>
	    location.href = 'free_list.php';
	   </script>
	";
?>
<?php
	$connect = mysqli_connect("localhost","root","1234","db_test");

	$sql = "create table client (";
	$sql = $sql."name char(12) not null,";
	$sql = $sql."id char(12) not null,";
	$sql = $sql."email varchar(40),";
	$sql = $sql."gender varchar(4),";
	$sql = $sql."point int,";
	$sql = $sql."grade varchar(2),";
	$sql = $sql."primary key(id))";

	$result = mysqli_query($connect, $sql);

	if (!$result) {
		echo("client 테이블 생성 실패!!<br>");
		exit;
	}
	else {
		echo("client 테이블 생성 성공!!<br>");
	}

	$sql = "insert into client values";
	$sql = $sql."('이경희','khlee','khlee@hanmail.net','여',30,90)";

	$result = mysqli_query($connect, $sql);

	if (!$result) {
		echo("레코드 삽입 실패!!");
		exit;
	}
	else {
		echo("레코드 삽입 성공!!");
	}

	mysqli_close($connect);
?>
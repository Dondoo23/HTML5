<?php
	$connect = mysqli_connect("localhost","root","1234","db_test");

	$sql = "select * from client";
	$result = mysqli_query($connect, $sql);

	$total_records = mysqli_num_fields($result);

	echo("member 테이블의 전체 필드 수 : $total_records");

	mysqli_close($connect);
?>
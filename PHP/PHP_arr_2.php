<?php
	// array() 함수를 이용한
	// 학생 20명이 받은 영어 점수의 합계와 평균 계산

	$eng_score = array(87, 76, 98, 87, 87, 93, 79, 85, 88, 63, 74, 84, 93, 89, 63, 99, 81, 70, 80, 95);
	$sum = 0;

	for ($a = 0; $a<20; $a++) {
		$sum += $eng_score[$a]; // 영어 점수의 누적합
	}

	$avg = $sum/20; // 평균 계산

	echo "학생 20명의 영어 점수 : "; // 입력된 영어 점수 출력
	for ($a=0; $a<20; $a++) {
		echo "$eng_score[$a] ";
	}

	echo "<br>";

	echo "합계 : $sum, 평균 : $avg";
?>
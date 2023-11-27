<?php
	// 배열을 이용한 다섯 과목 점수의 합계와 평균
	// 배열의 인덱스 값은 0부터 시작

	$score[0]=78;
	$score[1]=83;
	$score[2]=97;
	$score[3]=88;
	$score[4]=78;

	$sum=0;
	for ($a=0; $a<=4; $a++) {
		$sum += $score[$a];
	}
	$avg = $sum/5;

	echo "과목 점수 : $score[0], $score[1], $score[2], $score[3], $score[4]<br>";
	echo "합계 : $sum, 평균 : $avg<br>";
?>
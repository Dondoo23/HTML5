<?php
	$arr = array("name" => "korea", "age" => 30);

	echo $arr["name"];
	echo "<br>";
	echo $arr["age"];

	unset($arr["age"]); // 배열의 한 원소 제거
	echo "나이 :".$arr["age"];
?>
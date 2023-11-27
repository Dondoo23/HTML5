<?php
	$arr = array("name" => "korea", "age" => 30);

	echo $arr["name"];
	echo "<br>";
	echo $arr["age"];

	unset($arr); // 배열 전체 제거
	echo "이름 : ".$arr["name"].", 나이 : ".$arr["age"];
?>
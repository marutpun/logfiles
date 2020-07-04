<?php
	include('connection.php');

	$result = $mysqli -> query("SELECT * FROM SystemEvents");
	$arr = array();
	while ($rs = $result -> fetch_assoc()) {
		$arr[] = $rs;
	}

	echo json_encode($arr);
?>
<?php 

if(isset($_POST['title'])){
	require '../db_conn.php';

	$title = $_POST['title'];

	if (empty($title)) {
		header("Location: ../indexx.php?mess=error");
	}else{
		$stmt = $conn->prepare("INSERT INTO todos(title) VALUES(?)");
		$res = $stmt->execute([$title]);
		
		if ($res) {
			header("Location: ../indexx.php?mess=seccess");
		}else{
			header("Location: ../indexx.php");
		}
		$conn = null;
		exit();
	}
}else{
	header("Location: ../indexx.php?mess=error");
}

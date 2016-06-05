<?php
	//$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_SPECIAL_CHARS);
	if(!empty($_GET["id"])) {
		$id = $_GET["id"];
		$id = htmlentities($id);
		echo "News post" . $id;
	}
	else {
		echo "hello world";
	}
?>
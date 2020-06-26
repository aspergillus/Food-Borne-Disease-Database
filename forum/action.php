<?php

	require ('config.php');

	$msg = "";

	if (isset($_POST['submit_post'])) {
		$name = $_POST['name'];
		$comment = $_POST['comment'];
		$date = date("d-m-Y");

		$sql = "INSERT INTO comment_table(comment_name,comment,cur_date)values('$name','$comment','$date')";

		if ($conn -> query($sql)) {
			$msg = "Posted Successfully";
		}
		else{
			$msg = "Failed to Post Comment";
		}

	}

?>

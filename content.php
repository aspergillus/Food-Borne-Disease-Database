<?php
	include('main.php');
	$id = $_GET['id'];
	$query = mysqli_query($connection, 'select * from disease_data where disease_id = '.$id);
	$row = mysqli_fetch_assoc($query);
	echo $row['content'];
?>
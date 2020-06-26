<?php

	include ('config.php');

?>

<html lang="en">
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/e4c9651b5d.js" crossorigin="anonymous"></script>
	<title>comment_query</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body class="bg-dark">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-5 bg-light round mt-2">
				<h4 class="text-center">Write Your Comment</h4>
				<form action="index.php" method="POST" class="p-2">
					<div class="form-group">
						<input type="text" name="name" class="form-control rounded-0" placeholder="Enter Your Name" required>
					</div>
					<div class="form-group">
						<textarea name="comment" class="form-control rounded-0" placeholder="Write Your Comment here" required></textarea>
					</div>
					<div class="form-group">
						<input type="submit" name="submit_post" class="btn btn-primary rounded-0" value="Post Comment">
						<h5 class="float-right text-success p-2"></h5>
					</div>
				</form>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-5 rounded bg-light p-3"></div>			
		</div> 		
	</div>
</body>
</html>
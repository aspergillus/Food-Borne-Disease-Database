

<html>

<head>
	<title>Contact Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style>
		.body {
			border: 3px solid #dedede;
			background-color:#dedede;
		}
		/* .cnt ,.strange{
			background-color:#dedede;
		} */
		.contact-form1 {
			padding: 12px 25px;
			margin-bottom: 12px;
			margin-top: 0px
		}

		.btn {
			border-radius: 30px;
		}

		h2 {
			text-align: left;
			color: #0088cc;
		}

		p {
			font-family: Adobe Caslon Pro;
			text-align: left;
			font-size: 15px;
		}

		.message {
			resize: none;
		}

		.footer {
			border: solid black;
		}

		.decoration {
			font-weight: bolder;
		}

		.strange {
			margin-top: 2.5%;
		}

		footer {
			border: 10px;
		}

		.error {
			color: red;
		}
	</style>
</head>

<body>
<?php
	include ('contact_validation.php');
?>
	<div class="container body">
		<?php
		include('jumbotron.php');
	?>
		<?php
		include('navbar.php');
	?>
	<div class="col-lg-1">
	</div>
		<div class="col-lg-6 cnt">
			<div class="buttom">
				<div class="form">
					<h2>Contact Us</h2>
					<p>We are here to answer any question you may have about our Database.Reach out to us and we'll
						respond as soon as we can.
						<br><br>
						Even if there is something you have wanted to experience and can't find it on Database,let us
						know and we promise we'll do our
						best to find it for you and send you there.
					</p>
					<form class="contact-form" action="<?php $_SERVER ['PHP_SELF'] ?>" method="post">
						<fieldset>
							<p class="decoration">YOUR NAME(Required)</p><input type="value"
								class="form-control contact-form1" name="name" placeholder="Your Name">
							<span class="error"><?= $nameError ?></span>
						</fieldset>
						<fieldset>
							<p class="decoration">YOUR EMAIL(Required)</p><input type="value"
								class="form-control contact-form1" name="email" placeholder="Your Email">
							<span class="error"><?php echo $emailError ?></span>
						</fieldset>
						<fieldset>
							<p class="decoration">SUBJECT</p><input type="value" class="form-control contact-form1"
								name="subject" placeholder="Subject">
							<span class="error"><?php echo $subjectError ?></span>
						</fieldset>
						<fieldset>
							<p class="decoration">YOUR MESSAGE</p><textarea
								class="form-control message  contact-form1" name="message" placeholder="Your Message *"
								style="height: 100px;"></textarea>
							<span class="error"><?php echo $messageError ?></span>
						</fieldset>
						<fieldset>
							<button class="btn btn-primary" name="submit" type="submit" id="contact-submit"
								data-submit="....Sending">Submit</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
		<div class="col-lg-3 strange">

			<p><strong style="color: #ff6666">EMAIL</strong>
				<br>
				<p class="string">vishwakarmaryan143@gmail.com</p>
			</p>
			<hr align="right" width="auto">
			<p><strong style="color: #ff6666">PHONE</strong>
				<br>
				<p class="string"> +91 7208890633</p>
			</p>
			<hr align="right" width="auto">
		</div>
	</div>
	<?php
		include('footer.php');
	?>
</body>
</html>

<?php
  include('signin.php')
?>
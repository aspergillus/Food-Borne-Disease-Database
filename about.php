<?php
require('config.php');
?>

<html>

<head>
	<title>About</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style>
		@import "style.css";

		.abt{
			text-align: left;
			color: #0088cc;
		}
	</style>
</head>

<body>
	<div class="container body">
		<?php
		include('jumbotron.php');
		?>
		<?php
		include('navbar.php');
		?>
		<div class="col-lg-1"></div>
		<div class="col-lg-9 about">
			<h2 class="abt">About Us</h2>
			<p>Foodborne diseases are illnesses that result from the ingestion of contaminated food. More than 250
				different foodborne hazards have been recognized including infectious bacteria, viruses and parasites,
				and noninfectious chemicals and toxins. Many of these agents commonly cause diarrhea and vomiting, but
				there is no single clinical syndrome for all foodborne diseases. The sources of these agents range from
				being an inherent constituent of the food to inadvertent (or intentional) addition during food
				production, processing, or preparation. Moreover, most foodborne agents can be transmitted via routes
				other than food, including through water or through contact with infected farm animals, pets, and
				humans. The proportion of disease associated with being foodborne will differ depending on the agent and
				food handling, with only a few foodborne diseases being transmitted exclusively via foods. Food-borne
				diseases, including food-borne intoxication and food-borne infection, are terms applied to illness
				acquired through consumption food and are also frequently referred to as food poisoning. Foodborne
				pathogens are mainly bacteria, viruses, or even parasites that are present in the food and are the cause
				of major diseases such as food poisoning. There are different types of pathogens, but we’re going to
				focus on the four most common types: viruses, bacteria, fungi, and parasites.
				<h3>Bacteria</h3>
				<p>Bacteria are microorganisms made of a single cell. They are very diverse, have a variety of shapes and features, and have the ability to live in just about any environment, including in and on your body. Not all bacteria cause infections. Those that can are called pathogenic bacteria. Your body can be more prone to bacterial infections when your immune system is compromised by a virus. The disease state caused by a virus enables normally harmless bacteria to become pathogenic.</p>
				<p>Here are some examples of bacterial infections:
					<ul>
						<li>Strep throat</li>
						<li>Urinary tract infection (UTI)</li>
						<li>Bacterial gastroenteritis, such as salmonella food poisoning or e.coli infection</li>
						<li>Bacterial meningitis</li>
						<li>Lyme disease</li>
						<li>Tuberculosis</li>
						<li>Gonorrhea</li>
						<li>Cellulitis</li>
					</ul>
				</p>
			</p>

		</div>
</body>

</html>

<?php
	include('signin.php')
?>
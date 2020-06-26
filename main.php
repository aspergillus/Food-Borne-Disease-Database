<?php
require('config.php');
// $connection=mysqli_connect('localhost','root','','foodborne_disease');
?>

<html lang="en">

<head>
  <title>Database</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="title icon" href="images/database_logo_3.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
  <?php
    echo @$_GET['message'];
  ?>
  <div class="container body">
    <div class="photo_wala">
      <?php
        include('jumbotron.php');
      ?>
    </div>
    <div class="naviagtion">
      <?php
        include('navbar.php');
      ?>
    </div>

    <span class="bar">
      <?php
        include('sidenav.php');
      ?>
    </span>
    <div class="">
      <div class="col-lg-6 middle">
        <?php
          include('search_function.php')
        ?>
      </div>

    </div>
  </div>
  <div class="">
    <?php
      include('footer.php');
    ?>
  </div>
</body>

</html>

<?php
  include('signin.php')
?>
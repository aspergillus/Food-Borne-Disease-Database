<style>
  .navbar{
    margin-top: -10px;
    margin-bottom: -1px;
  }
</style>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="main.php" style="text-align:center"><b>Home</b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="about.php"><b>About</b></a></li>
        <!-- <li><a href="#contact-us-div"><b>Contact</b></a></li> -->
        <li><a href="contact.php"><b>Contact</b></a></li>
        <li><a href="./forum/forum_main.php"><b>Community Forum</b></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
          session_start();
          if (@$_SESSION['userid'] && $_SESSION['username']) {
            echo '<li><a href="#"><span class="glyphicon glyphicon-user"></span>'."&nbsp". ucfirst($_SESSION['username']) .'</a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>';
          } else {
            echo '<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#myModal" class="trigger-btn" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>';
          }
        ?>
      </ul>
    </div>
  </div>
</nav>
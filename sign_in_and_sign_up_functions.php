<?php
session_start();
      include ('config.php');
      if (isset($_GET['actions'])) 
      {
            $action = $_GET['actions'];
            if ($action == 'signup') {
                  // get data and put into database
                  $username = $_POST['username'];
                  $email = $_POST['email'];
                  $password = $_POST['password'];
                  
                  $query = mysqli_query($connection, 'insert into users (username, email, password) 
                  values ("'.$username.'", "'.$email.'", "'.$password.'")');
                  if ($query) {
                        header("Location: main.php?message=User_registered_successfully");
                  } else {
                        // do something, if user is not registered
                        die('user is not registered yet');
                  }
            }
            else if ($action == 'login')
            {
                  // login code
                  // select from users where username = $_POST['username'];
                  $username = $_POST['username'];
                  $password = $_POST['password'];

                  $result = mysqli_query($connection, "select * from users where username = '$username' and password = '$password'");
                  $row = mysqli_fetch_array($result);
                  if ($row['username'] == $username && $row['password'] == $password){
                        $_SESSION['userid'] = $row['user_id'];
                        $_SESSION['username'] = $row['username'];
                        header("Location: main.php?message=Login Success....");
                  } else {
                        echo "Failed to Login.....";
                  }
            }
      }
?>
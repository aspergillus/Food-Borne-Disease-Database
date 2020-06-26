<?php
    include('config.php');
    if(isset($_GET['actions']))
    {
        $action = $_GET['actions'];
        $forum_question = $_POST['forum_question'];
        
        $query = mysqli_query($connection, 'insert into forum (forum_question) values ("'.$forum_question.'")');
        if($query)
        {
            echo '<script type="text/javascript">

                window.onload = function () { if(confirm("Successfully Posted Your Query")) document.location = \'forum_main.php\'; }
                
                    

            </script>';
        }
    }
    else{
        /* echo"Enter the Query"; */
    }
?>
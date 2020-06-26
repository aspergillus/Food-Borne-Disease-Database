<style>
    .sidenav {
        left: 10px;
        overflow-x: hidden;
        padding-bottom:0px;
    }

    .left>h3 {
        font-size: 21;
        border: 2px solid white;
        border-radius: 25px 25px 5px 5px;
        padding: 9px;
        margin-bottom: -8px;
        margin-top: 10px;
    }

    .left>h3:hover {
        cursor: pointer;
        text-decoration: underline;
        
    }

    .left {
        padding-left: 0px;
        width: auto;
    }

    .search {
        padding-top: 15px;
    }


    @media (min-width: 1200px) {
        .left{
            width: 17%;
        }
    }

    @media (max-width: 768px) {
        .left {
            padding-right: 0px;
        }
    }
</style>
<div class="col-lg-3 left">
    <h3>Disease Caused</h3>
    <div class="sidenav">
        <ul class="list-group">
            <?php
              $query = mysqli_query($connection, 'select * from disease_caused');
              while ($row = mysqli_fetch_assoc($query)) 
              {
              echo '<a href="main.php?id='.$row['id'].'">
                          <li class="list-group-item">'.$row['name'].'</li>
                    </a>';
              }
            ?>
        </ul>
    </div>
</div>
<div class="col-lg-9 search">
    <?php
          require('search.php');
    ?>
    <div>
    </div>
</div>
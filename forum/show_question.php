<style>
  .show_question {
    border: 2px solid #dedede;
    height: 50px;
  }
</style>

<div class="show_question">
  <?php
    include('config.php');
    $query = mysqli_query($connection, 'select * from forum');
    while($row = mysqli_fetch_assoc($query)){
      echo $row['forum_question'].'<br>';
        }
  ?>
</div>

comment (comment name ,like ,dislike ,answer on date,)

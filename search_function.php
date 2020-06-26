<div>
  <?php
  if(isset($_GET['id']))
  {
              // display articles related to the disease selected
    include('config.php');
    $id = $_GET['id'];
    $query = mysqli_query($connection, 'select * from disease_data where disease_id = '.$id);
    $index = 1;
    while($row = mysqli_fetch_assoc($query)){
      echo "<a href = main.php?article_id={$row['id']}>$index. {$row['disease_title']}.<br><br></a>";
      $index++;
    }
  }
  elseif(isset($_GET['article_id']))
  {
              // show article content of the article clicked
    include('config.php');
    $id = $_GET['article_id'];
    $query = mysqli_query($connection, 'select * from disease_data where id = '.$id);
    $row = mysqli_fetch_assoc($query);
    echo "<div>{$row['disease_content']}</div>";
  }
  elseif(isset($_GET['search_query']))
  {
              // when user searches for a query
    include('config.php');
    $search_query = $_GET['search_query'];
    if (trim($search_query))
    {
      $query = mysqli_query($connection, "select * from disease_data where disease_title like '%$search_query%'");
      if (mysqli_num_rows($query) >= 1) {
        $index = 1;
        while($row = mysqli_fetch_assoc($query)){
          echo "<a href = main.php?article_id={$row['id']}>$index. {$row['disease_title']}</a><br/><br/>  ";
          $index++;
        }
      } else {
        echo "no results found for $search_query"; 
      }
    }  
  }
  else
  {
    echo '<p>Foodborne diseases are illnesses that result from the ingestion of contaminated food. 
    More than 250 different foodborne hazards have been recognized including infectious bacteria, 
    viruses and parasites, and noninfectious chemicals and toxins. Many of these agents commonly 
    cause diarrhea and vomiting, but there is no single clinical syndrome for all foodborne diseases. 
    The sources of these agents range from being an inherent constituent of the food to inadvertent 
    (or intentional) addition during food production, processing, or preparation. Moreover, 
    most foodborne agents can be transmitted via routes other than food, including through water 
    or through contact with infected farm animals, pets, and humans. Food-borne diseases,
    including food-borne intoxication and food-borne infection, are terms applied to illness
    acquired through consumption food and are also frequently referred to as food poisoning.
    Foodborne pathogens are mainly bacteria, viruses, or even parasites that are present in the 
    food and are the cause of major diseases such as food poisoning. There are different types of 
    pathogens, but we’re going to focus on the four most common types: viruses, bacteria, fungi, 
    and parasites.</p> 
    <h3>Bacteria</h3>
    <p>Bacteria are microorganisms made of a single cell. They are very diverse, have a variety of 
    shapes and features, and have the ability to live in just about any environment, including in 
    and on your body. Not all bacteria cause infections. Those that can are called pathogenic bacteria. 
    Your body can be more prone to bacterial infections when your immune system is compromised by 
    a virus. The disease state caused by a virus enables normally harmless bacteria to become pathogenic.</p>
    <h3>Fungi</h3>
    <p>There are millions of different fungal species on Earth. Just 300 Trusted Source or so are
    known to cause sickness. Fungi can be found just about everywhere in the environment, 
    including indoors, outdoors, and on human skin. They cause infection when they overgrow. &nbsp <a href="about.php">Read more</a></p>';
  }   
  ?>
</div>
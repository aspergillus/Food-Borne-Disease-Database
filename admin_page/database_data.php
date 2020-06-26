<style>

</style>

<?php
    include('admin_main.php');
?>
<?php
    include('config.php');
?>

<div class="container-fluid">
    <div class="row">
        <div class="data col-xl-10 col-lg-9 col-md-8 ml-auto mt-5">
            <div class="row">
                <div class="col-xl-12 col-sm-6 p-2">
                    <div class="wrapper">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Disease Id</th>
                                    <th scope="col">Disease Title</th>
                                    <th scope="col">Disease Content</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $query = "select id ,disease_id, disease_title, disease_content from disease_data";
                                $result = $connection-> query($query);

                                if($result -> num_rows > 0){
                                    while($row = $result -> fetch_assoc()){
                                        echo "<tr><td>".$row["id"]."</td><td>".$row["disease_id"]."</td><td>".
                                        $row["disease_title"]."</td><td>".$row["disease_content"]."</td></tr>";
                                    }
                                    echo"</table>";
                                }else{
                                    echo"No Result Found";
                                }

                                $connection -> close();
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
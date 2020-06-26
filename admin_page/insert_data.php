<style>
    .data_insertion {
        margin-left: 10px;
    }

    .wrapper {
        padding-left: 15px;
        padding-right: 15px;
    }

    .control{
        resize:none;
    }
    @media(min-width:768px) {
        .data_insertion {
            padding-top: 60px;
            margin-top: auto;
        }
    }
</style>

<?php
    include('admin_main.php');
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row ">
                <div class="col-xl-12 col-sm-6 p-2">
                    <form class="data_insertion" action="insert_data_handler.php" method="post">
                        <div class="wrapper">
                            <div class="row justify-content-between">
                                <div class="col-xl-6 pl-0 pr-4 form-group">
                                    <label for="Organism_Name">Organism Name:- </label>
                                    <input type="text" class="form-control" id="data_insertion"
                                        placeholder="Enter the Organism Name" name="organism_name">
                                </div>
                                <br>
                                <div class="col-xl-6 pl-3 form-group">
                                    <label for="Organism_Name">Disease caused:- </label>
                                    <textarea class="form-control control" id="data_insertion"
                                        placeholder="Enter the Disease caused" rows="1"></textarea>
                                    
                                </div>
                                <br>
                                <div class="col-xl-6 pl-0 pr-4 form-group">
                                    <label for="Organism_Name">General description :- </label>
                                    <input type="text" class="form-control" id="data_insertion" name="general_description"
                                        placeholder="Enter the General description">
                                </div>
                                <br>
                                <div class="col-xl-6 pl-3 form-group">
                                    <label for="Organism_Name">Found in :- </label>
                                    <input type="text" class="form-control" id="data_insertion"
                                        placeholder="Enter the Found in">
                                </div>
                                <br>
                                <div class="col-xl-6 pl-0 pr-4 form-group">
                                    <label for="Organism_Name">Hosts:- </label>
                                    <input type="text" class="form-control" id="data_insertion"
                                        placeholder="Enter the Hosts Name">
                                </div>
                                <br>
                                <div class="col-xl-6 pl-3 form-group">
                                    <label for="Organism_Name">Organism Name:- </label>
                                    <input type="text" class="form-control" id="data_insertion"
                                        placeholder="Enter the Organism Name">
                                </div>
                                <br>
                                <div class="col-xl-6 pl-0 pr-4 form-group">
                                    <label for="Organism_Name">Affected organs :- </label>
                                    <input type="text" class="form-control" id="data_insertion"
                                        placeholder="Enter the Affected organs">
                                </div>
                                <br>
                                <div class="col-xl-6 pl-3 form-group">
                                    <label for="Organism_Name">Transmission:- </label>
                                    <input type="text" class="form-control" id="data_insertion"
                                        placeholder="Enter the Transmission">
                                </div>
                                <br>
                                <div class="col-xl-6 pl-0 pr-4 form-group">
                                    <label for="Organism_Name">Incubation periods:- </label>
                                    <input type="text" class="form-control" id="data_insertion"
                                        placeholder="Enter the Incubation periods">
                                </div>
                                <br>
                                <div class="col-xl-6 pl-3 form-group">
                                    <label for="Organism_Name">Symptoms:- </label>
                                    <input type="text" class="form-control" id="data_insertion"
                                        placeholder="Enter the Symptoms">
                                </div>
                                <br>
                                <div class="col-xl-6 pl-0 pr-4 form-group">
                                    <label for="Organism_Name">Treatment:- </label>
                                    <input type="text" class="form-control" id="data_insertion"
                                        placeholder="Enter the Organism Name">
                                </div>
                                <br>
                                <div class="col-xl-6 pl-3 form-group">
                                    <label for="Organism_Name">Preventions:- </label>
                                    <input type="text" class="form-control" id="data_insertion"
                                        placeholder="Enter the Preventions">
                                </div>
                                <br>

                                <div class="col-xl-6 pl-0 pr-4 form-group">
                                    <label for="Organism_Name">Taxonomic classification:- </label>
                                    <input type="text" class="form-control" id="data_insertion"
                                        placeholder="Enter the Taxonomic classification">
                                </div>
                                <br>
                                <div class="col-xl-6 pl-3 form-group">
                                    <label for="Organism_Name">Genome information:- </label>
                                    <input type="text" class="form-control" id="data_insertion"
                                        placeholder="Enter the Genome information">
                                </div>
                                <br>
                                <div class="col-xl-6 pl-0 pr-4 form-group">
                                    <label for="Organism_Name">References:- </label>
                                    <input type="text" class="form-control" id="data_insertion"
                                        placeholder="Enter the References">
                                </div>
                                <br>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
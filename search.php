<style>
    .dropdown.dropdown-lg .dropdown-menu {
        margin-top: -1px;
        padding: 6px 20px;
    }

    .input-group-btn .btn-group {
        display: flex !important;
    }

    .btn-group .btn {
        border-radius: 0;
        margin-left: -1px;
    }

    .btn-group .btn:last-child {
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px;
    }

    .btn-group .form-horizontal .btn[type="submit"] {
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
    }

    .form-horizontal .form-group {
        margin-left: 0;
        margin-right: 0;
    }

    .form-group .form-control:last-child {
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
    }

    .search {
        padding-left: 0px;
    }

    @media screen and (min-width: 768px) {
        #adv-search {
            width: 100%;
            margin: auto;
        }

        .dropdown.dropdown-lg {
            position: static;
        }

        .dropdown.dropdown-lg .dropdown-menu {
            min-width: 50%;
        }

        .search {
        }
    }
</style>

<form action="main.php">
    <span class="search">
        <div class="input-group" id="adv-search">
            <input type="text" class="form-control" required name="search_query" placeholder="Search for keywords" />
            <div class="input-group-btn">
                <div class="btn-group" role="group">
                    <div class="dropdown dropdown-lg">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                            aria-expanded="false">Advance &nbsp<!-- <span class="caret"></span> --></button>
                        <!-- <div class="dropdown-menu dropdown-menu-right" role="menu">
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label for="contain">Keyword</label>
                                    <input class="form-control" type="text" />
                                </div>
                                <div class="form-group">
                                    <label for="contain">Organism</label>
                                    <input class="form-control" type="text" />
                                </div>
                                <div class="form-group">
                                    <label for="contain">Disease Caused</label>
                                    <input class="form-control" type="text" />
                                </div>
                                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"
                                        aria-hidden="true"></span></button>
                            </form>
                        </div> -->
                    </div>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"
                            aria-hidden="true"></span></button>
                </div>
            </div>
        </div>
    </span>
</form>
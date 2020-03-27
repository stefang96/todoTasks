<?php



?>




<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="index.php"> ToDo Tasks</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">


                <li class="nav-item">
                    <a class="nav-link" style="color: white" href="index.php?view=newTask">Create Task</a>
                </li>

                <li class="nav-item d-none d-sm-block">
                    <a class="nav-link" href="#">|</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" style="color: white" href="index.php?logout=true">Logout</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
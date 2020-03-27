<?php
require 'config/loader.php';
require 'config/loader_models.php';


?>
<html>

<head>


    <title>ToDo Tasks</title>
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>



</head>


<body>


    <?php
    if (isset($_GET['logout'])) {
        session_unset();
    }




    if (isset($_SESSION['is_logged'])) {

        include 'view/default/header.php';
    }


    if (isset($_SESSION['is_logged'])) {

        if (isset($_GET['view']) && $_GET['view'] == 'newTask') {

            include 'view/newTask.php';
        } elseif (isset($_GET['view']) && $_GET['view'] == 'delete') {

            include 'view/delete.php';
        } elseif (isset($_GET['view']) && $_GET['view'] == 'edit') {

            include 'view/edit.php';
        } elseif (isset($_GET['view']) && $_GET['view'] == 'detail') {

            include 'view/detail.php';
        } else {
            include 'view/tasks.php';
        }
    } else {

        if (isset($_GET['view']) && $_GET['view'] == 'register') {

            include 'view/register.php';
        } else {
            include 'view/login.php';
        }
    }







    ?>






    <script src="assets/script.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>


    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</body>


</html>
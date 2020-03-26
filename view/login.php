<?php

if (isset($_POST['email']) && isset($_POST['email'])) {

    $user = new User();
    $result =  $user->login($_POST);

    if ($result) {

        header('Location: index.php');
    } else {
        print_r($result);
        die();
    }
}

?>


<div id="login">
    <h3 class="text-center text-white pt-5">Login form</h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="" method="post">
                        <div class="alert alert-warning" role="alert" id="message_reg" hidden="true"></div>
                        <h3 class="text-center text-info">Login</h3>
                        <div class="form-group">
                            <label for="email" class="text-info">Email:</label><br>
                            <input required type="text" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Password:</label><br>
                            <input required type="text" name="password" id="password" class="form-control">
                        </div>
                        <div class="row">

                            <div class="form-group col-3">
                                <input type="button" name="login" class="btn btn-info btn-md" id="loginBtn" value="Submit">
                            </div>


                            <div class="text-right col-9">
                                <a href="index.php?view=register" class="text-info">Register here</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
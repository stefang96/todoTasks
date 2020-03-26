<?php




if (isset($_POST['email']) && isset($_POST['name']) && isset($_POST['password'])) {

    $user = new User();
    $result =  $user->register($_POST);

    if ($result) {

        header('Location: index.php');
    } else {
        print_r($result);
    }
}
?>


<div id="register">
    <h3 class="text-center text-white pt-5">Register form</h3>
    <div class="container">
        <div id="register-row" class="row justify-content-center align-items-center">
            <div id="register-column" class="col-md-6">
                <div id="register-box" class="col-md-12">
                    <form id="register-form" class="form" action="" method="post">

                        <div class="alert alert-warning" role="alert" id="message_reg" hidden="true"></div>
                        <h3 class="text-center text-info">Register</h3>
                        <div class="form-group">
                            <label for="username" class="text-info">Name:</label><br>
                            <input required type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-info">Email:</label><br>
                            <input required type="text" name="email" id="emailRegister" class="form-control">
                        </div>
                        <p class="alert alert-warning" style="color: red" id="emailP" hidden="true"></p>
                        <div class="form-group">
                            <label for="password" class="text-info">Password:</label><br>
                            <input required type="text" name="password" id="password" class="form-control">
                        </div>
                        <div class="row">

                            <div class="form-group col-3">
                                <input type="button" name="registration" id="registration" class="btn btn-info btn-md" value="Submit">
                            </div>

                            <div class="text-right col-9">
                                <a href="index.php" class="text-info">Login here</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
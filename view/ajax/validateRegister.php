<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/todoTasks/config/loader.php';
require_once FULL_FILE_PATH . 'models/User.php';
$userModel = new User();


if ($_POST['name'] == 'email') {
    $result = $userModel->checkEmail($_POST['value']);


    if ($result) {

        echo 'This is email is already used!';
    } else {
        if (filter_var($_POST['value'], FILTER_VALIDATE_EMAIL)) {
            echo false;
        } else {
            echo ' Please include @ in the email address! <br> <i>Example: someone@example.com </i>';
        }
    }
}

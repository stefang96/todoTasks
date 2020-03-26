<?php
header('Content-Type: application/json');


$message = array();
if (empty($_POST['name'])) {
    array_push($message, 'Field name is required! <br>');
}
if (empty($_POST['email'])) {
    array_push($message, 'Field email is required! <br>');
}
if (empty($_POST['password'])) {
    array_push($message, 'Field password is  required!<br> ');
}



if ($_POST['name'] != "" &&  $_POST['email'] != "" &&  $_POST['password'] != "") {

    print json_encode(array('status' => true));
} else {
    print json_encode(array('status' => false, 'message' => $message));
}

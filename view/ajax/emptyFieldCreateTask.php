<?php
header('Content-Type: application/json');


$message = array();

if (empty($_POST['title'])) {
    array_push($message, 'Field title is required! <br>');
}
if (empty($_POST['date'])) {
    array_push($message, 'Field date is  required!<br> ');
}

if (empty($_POST['description'])) {
    array_push($message, 'Field description is  required!<br> ');
}



if ($_POST['title'] != "" &&  $_POST['date'] != "" &&  $_POST['description'] != "") {

    print json_encode(array('status' => true));
} else {
    print json_encode(array('status' => false, 'message' => $message));
}

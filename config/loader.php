<?php


/**
 * session contain data about login user.
 */
session_start();
/**
 * Full path of file in which the project is.
 */
define("FULL_FILE_PATH", $_SERVER['DOCUMENT_ROOT'] . '/todoTasks/');
/**
 * Full url address od project.
 */
define("FULL_URL_PATH", (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/');

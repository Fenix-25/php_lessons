<?php

const ROOT_DIR = __DIR__;
require_once ROOT_DIR . '/config/constants.php';
require_once ROOT_DIR . '/views/pages/home.php';

try {
    $db_connect = new PDO(DSN, USER, PASSWORD);
}catch (Exception $exception){
    die('connect is lose: ' . $exception->getMessage());
}



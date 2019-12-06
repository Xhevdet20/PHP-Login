<?php

// If there's no contsant defined called __CONFIG___ do  not load the file
if (!defined('__CONFIG__')) {
    exit("You do not have a config file");
}


// Our config is below


// Include the DB.php file:
include_once "inc/classes/DB.php";

$con = DB::getConnection();

<?php
// Allow the config
define('__CONFIG__', true);
// Require the config 
include "../inc/config.php";
//require_once "/../inc/config.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Always return in json format
    header('Content-Type: application/json');

    $return = [];

    // Make sure the user does not exist


    // Make sure the user can be added and is added


    // Return the proper information back to Javascript to redirect us.

    $return['redirect'] = '/PHP-Login/dashboard.php';

    $return['name'] = "Xhevdet Kryeziu";

    echo json_encode($return, JSON_PRETTY_PRINT);
    exit;
} else {

    // Kill the script , redirect use to do something regardless 
    exit('test');
}

$array = ['test', 'test2', 'test3', array('name' => 'Xhevdet', 'lastname' => 'Kryeziu')];

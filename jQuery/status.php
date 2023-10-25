<?php
//
require_once 'db.php';
require_once 'check.php';

// Simulating waiting time
sleep(1);

// Receive a POST request
$check = $_POST['check'];

//
$callback = checkName($dataBase, $check);

// CallBack :)
echo $callback;



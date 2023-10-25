<?php
//
require_once 'db.php';
require_once 'check.php';

// Simulating waiting time
sleep(1);

// Receive a POST request
$check = $_POST['name'];

//
$callback = checkName($dataBase, $check);

if ($callback == 'Fail') {
    echo "Имя " . $_POST['name'] . " Занято!";
} else {
    echo "Имя " . $_POST['name'] . " Добавлено!";
}


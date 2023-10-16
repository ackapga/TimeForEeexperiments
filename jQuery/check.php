<?php
// Simulating waiting time
sleep(1);

// Simulating DataBase

$dataBase = [
    'admin',
    'ackap',
    'people',
    'aaa',
];

// Receive a POST request
$check = $_POST['check'];

// Check
foreach ($dataBase as $db) {
    if ($check == $db) {
        $callback = 'Fail';
        break;
    } else {
        $callback = 'Success';
    }
}

// CallBack :)
echo $callback;



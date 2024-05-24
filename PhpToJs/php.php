<?php

$products = [1,2,3];

function sendPhpArrayToJs($list) {
    header('Content-Type: application/json');
    echo json_encode($list);
}

sendPhpArrayToJs($products);
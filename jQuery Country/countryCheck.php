<?php
require_once 'db.php';

$number = $_GET['country'];

if ($number == 1) {
    echo json_encode($kazakhstan);
} elseif ($number == 2) {
    echo json_encode($russian);
} elseif ($number == 3) {
    echo json_encode($belarus);
} elseif ($number == 4) {
    echo json_encode($uzbekistan);
} elseif ($number == 5) {
    echo json_encode($usa);
}


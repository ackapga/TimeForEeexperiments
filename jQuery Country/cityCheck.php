<?php
require_once 'db.php';

$info = $_POST;

function cityOne($array, $need)
{
    foreach ($array as $key => $object) {
        if ($key == $need) {
            echo $object;
        }
    }
}

if ($info['country'] == 1) {
    cityOne($kazakhstan, $info['city']);
} elseif ($info['country'] == 2) {
    cityOne($russian, $info['city']);
} elseif ($info['country'] == 3) {
    cityOne($belarus, $info['city']);
} elseif ($info['country'] == 4) {
    cityOne($uzbekistan, $info['city']);
} elseif ($info['country'] == 5) {
    cityOne($usa, $info['city']);
}
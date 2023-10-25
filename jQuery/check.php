<?php
function checkName ($dataBase, $check) {
    $name = strtolower($check);
    foreach ($dataBase as $db) {
        if ($name == $db) {
            $callback = 'Fail';
            break;
        } else {
            $callback = 'Success';
        }
    }
    return $callback;
}
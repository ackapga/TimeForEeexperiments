<?php
$name = $_POST['name'];

if ($name == 'admin') {
    echo 'Fail';
} else {
    echo $name;
}

<?php
/* ------------------------------------------------------------------------------------------------------------------ */

echo '---------------------------------DELETE---------------------------------<br>' . PHP_EOL;

$filesToDelete = [
    'flip.php',
    'shops.html',
    'post.php',
    'post-json.php',
    'inndex.html',
    'new 1.html',
    'sensor1.jpg',
    'sensor1.png',
    'softgroup.sql',
    'test.php',
    'update-cache.js',
    'ust-kamenogorsk.zip',
    'wifi.jpg',
    'cart_data_log.txt',
];

function deleteFiles($dir, $filesToDelete)
{
    $currentFiles = scandir($dir);
    foreach ($currentFiles as $file) {
        if ($file == '.' || $file == '..') {
            continue;
        }
        $filePath = $dir . '/' . $file;
        if (is_dir($filePath)) {
            deleteFiles($filePath, $filesToDelete);
        } elseif (is_file($filePath) && in_array($file, $filesToDelete)) {
            if (strpos($filePath, 'images') !== false) {
                continue;
            }
            if (strpos($filePath, '/js') !== false) {
                continue;
            }
            unlink($filePath);
            echo "Файл $filePath был удален.<br>" . PHP_EOL;
        }
    }
}

deleteFiles(__DIR__, $filesToDelete);

echo '---------------------------------END DELETE---------------------------------<br>' . PHP_EOL;

/* ------------------------------------------------------------------------------------------------------------------ */
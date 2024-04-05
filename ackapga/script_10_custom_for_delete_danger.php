<?php
/* -------------------------------------------------- */
$filesToDelete = [
    'aktau.html',
    'kazakhstan.html',
    'aktobe.html',
    'astana.html',
    'atyrau.html',
    'janaozen.html',
    'jezkazgan.html',
    'karaganda.html',
    'kokshetau.html',
    'kostanai.html',
    'kyzylorda.html',
    'pavlodar.html',
    'petropavlovsk.html',
    'semei.html',
    'shymkent.html',
    'taldykorgan.html',
    'taraz.html',
    'turkestan.html',
    'uralsk.html',
    'ust-kamenogorsk.html',
    'almaty.html',
];
/* -------------------------------------------------- */

function deleteFiles($dir, $filesToDelete) {
    $currentFiles = scandir($dir);

    foreach ($currentFiles as $file) {

        if ($file == '.' || $file == '..') {
            continue;
        }

        $filePath = $dir . '/' . $file;

        if (is_dir($filePath)) {
            deleteFiles($filePath, $filesToDelete);
        } elseif (is_file($filePath) && in_array($file, $filesToDelete)) {
            unlink($filePath);
            echo "Файл $filePath был удален.<br>" . PHP_EOL;
        }
    }
}

/* -------------------------------------------------- */
deleteFiles(__DIR__, $filesToDelete);
/* -------------------------------------------------- */
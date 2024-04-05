<?php

// --------------------------------------------------
echo "START RENAME <br>" . PHP_EOL;

$directory = __DIR__;

function renameFilesInDirectory($directory, $oldFileName, $newFileName) {
    if (is_dir($directory)) {
        $files = scandir($directory);
        foreach ($files as $file) {
            if ($file != "." && $file != "..") {
                $filePath = $directory . DIRECTORY_SEPARATOR . $file;
                if (is_dir($filePath)) {
                    renameFilesInDirectory($filePath, $oldFileName, $newFileName);
                } elseif (is_file($filePath) && $file == $oldFileName) {
                    $newFilePath = $directory . DIRECTORY_SEPARATOR . $newFileName;
                    if (rename($filePath, $newFilePath)) {
                        echo "Файл $file успешно переименован в $newFileName.<br>" . PHP_EOL;
                    } else {
                        echo "Не удалось переименовать файл $file.<br>" . PHP_EOL;
                    }
                }
            }
        }
    }
}

renameFilesInDirectory($directory, 'desktop.html', 'scanner_desktop.html');

echo "END RENAME <br>" . PHP_EOL;
// --------------------------------------------------

// --------------------------------------------------
echo "START CHANGE CONTENT <br>" . PHP_EOL;

$filesToChangeLinkOne = [
    'scanner.html',
    'scanner_2306.php',
    'scanner_2310.php',
    'scanner_70-2D.php',
];

function changeFilesContent($dir, $filesToChange) {
    $currentFiles = scandir($dir);
    foreach ($currentFiles as $file) {
        if ($file == '.' || $file == '..') {
            continue;
        }
        $filePath = $dir . '/' . $file;
        if (is_dir($filePath)) {
            changeFilesContent($filePath, $filesToChange);
        } elseif (is_file($filePath) && in_array($file, $filesToChange)) {
            //--------------------------------------------------------------
            $content = file_get_contents($filePath);

            $content = str_replace(
                'href="desktop.html"',
                'href="scanner_desktop.html"',
                $content);

            $content = str_replace(
                '                            <li><a href="../scanner.html">Сканеры штрих кодов</a><i>/</i></li>
                            <li>Стационарный сканер Штрих Кода 2306</li>',
                '                            <li><a href="scanner.html">Сканеры штрих кодов</a><i>/</i></li>
                            <li><a href="scanner_desktop.html">Настольные сканеры штрих-кодов</a><i>/</i></li>
                            <li>Стационарный сканер Штрих Кода 2306</li>',
                $content);

            $content = str_replace(
                '                            <li><a href="../scanner.html">Сканеры штрих кодов</a><i>/</i></li>
                            <li>Стационарный сканер Штрих Кода 2310</li>',
                '                            <li><a href="scanner.html">Сканеры штрих кодов</a><i>/</i></li>
                            <li><a href="scanner_desktop.html">Настольные сканеры штрих-кодов</a><i>/</i></li>
                            <li>Стационарный сканер Штрих Кода 2310</li>',
                $content);

            $content = str_replace(
                '                            <li><a href="../scanner.html">Сканеры штрих кодов</a><i>/</i></li>
                            <li>Стационарный сканер Штрих Кода 70-2D</li>',
                '                           <li><a href="scanner.html">Сканеры штрих кодов</a><i>/</i></li>
                            <li><a href="scanner_desktop.html">Настольные сканеры штрих-кодов</a><i>/</i></li>
                            <li>Стационарный сканер Штрих Кода 70-2D</li>',
                $content);

            file_put_contents($filePath, $content);
            //--------------------------------------------------------------
        }
    }
}

changeFilesContent(__DIR__, $filesToChangeLinkOne);

echo "END CHANGE CONTENT <br>" . PHP_EOL;
// --------------------------------------------------
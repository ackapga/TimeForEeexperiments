<?php
// --------------------------------------------------
echo "START BOOTSTRAP <br>" . PHP_EOL;

$filesBootstrap = [
    'bootstrap.js',
];

function changeBootstrap($dir, $filesToChange) {
    $currentFiles = scandir($dir);
    foreach ($currentFiles as $file) {
        if ($file == '.' || $file == '..') {
            continue;
        }
        $filePath = $dir . '/' . $file;
        if (is_dir($filePath)) {
            changeBootstrap($filePath, $filesToChange);
        } elseif (is_file($filePath) && in_array($file, $filesToChange)) {
            //--------------------------------------------------------------
            $content = file_get_contents($filePath);
            $content = str_replace(
                'Komputery-i-komplektuyushchiye',
                'computer',
                $content);
            $content = str_replace(
                'Monitor-i-periferiya',
                'computer_periferiya',
                $content);
            $content = str_replace(
                'Blok-sistemy',
                'computer_block',
                $content);
            file_put_contents($filePath, $content);
            //--------------------------------------------------------------
        }
    }
}

changeBootstrap(__DIR__, $filesBootstrap);

echo "END BOOTSTRAP <br>" . PHP_EOL;
// --------------------------------------------------

// --------------------------------------------------
echo "START MAIN CHANGE <br>" . PHP_EOL;

$filesIP = [
    'index.html',
    'products.html',
];

function changeFilesIP($dir, $filesToChange) {
    $currentFiles = scandir($dir);
    foreach ($currentFiles as $file) {
        if ($file == '.' || $file == '..') {
            continue;
        }
        $filePath = $dir . '/' . $file;
        if (is_dir($filePath)) {
            changeFilesIP($filePath, $filesToChange);
        } elseif (is_file($filePath) && in_array($file, $filesToChange)) {
            //--------------------------------------------------------------
            $content = file_get_contents($filePath);
            $content = str_replace(
                'Komputery-i-komplektuyushchiye',
                'computer',
                $content);
            file_put_contents($filePath, $content);
            //--------------------------------------------------------------
        }
    }
}

changeFilesIP(__DIR__, $filesIP);

echo "END MAIN CHANGE <br>" . PHP_EOL;
// --------------------------------------------------


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
                    //--------------------------------------------------------------
                    $content = file_get_contents($filePath);
                    $content = str_replace(
                        'Komputery-i-komplektuyushchiye',
                        'computer',
                        $content);
                    $content = str_replace(
                        'Monitor-i-periferiya',
                        'computer_periferiya',
                        $content);
                    $content = str_replace(
                        'Blok-sistemy',
                        'computer_block',
                        $content);
                    file_put_contents($filePath, $content);
                    //--------------------------------------------------------------
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

renameFilesInDirectory($directory, 'Komputery-i-komplektuyushchiye.html', 'computer.html');
renameFilesInDirectory($directory, 'Blok-sistemy.html', 'computer_block.html');
renameFilesInDirectory($directory, 'Monitor-i-periferiya.html', 'computer_periferiya.html');

echo "END RENAME <br>" . PHP_EOL;
// --------------------------------------------------


// --------------------------------------------------
echo "START BLOCK -I- <br>" . PHP_EOL;

$filesToChangeLinkOne = [
    'Sistemnyy-blok-AMD.php',
    'Sistemnyy-blok-Core-i3.php',
    'Sistemnyy-blok-Core-i5.php',
    'Sistemnyy-blok-Core-i7.php',
    'Sistemnyy-blok-Core-i7-gtx.php',
];

function changeFilesOne($dir, $filesToChange) {
    $currentFiles = scandir($dir);
    foreach ($currentFiles as $file) {
        if ($file == '.' || $file == '..') {
            continue;
        }
        $filePath = $dir . '/' . $file;
        if (is_dir($filePath)) {
            changeFilesOne($filePath, $filesToChange);
        } elseif (is_file($filePath) && in_array($file, $filesToChange)) {
            //--------------------------------------------------------------
            $content = file_get_contents($filePath);
            $content = str_replace(
                'Komputery-i-komplektuyushchiye',
                'computer',
                $content);
            $content = str_replace(
                'Blok-sistemy',
                'computer_block',
                $content);
            file_put_contents($filePath, $content);
            //--------------------------------------------------------------
        }
    }
}

changeFilesOne(__DIR__, $filesToChangeLinkOne);

echo "END BLOCK -I- <br>" . PHP_EOL;
// --------------------------------------------------


// --------------------------------------------------
echo "START PERIFERIYA -II- <br>" . PHP_EOL;

$filesToChangeLinkTwo = [
    'Klaviatura-Delux-DLD-1505OGB.php',
    'Klaviatura-Delux-DLK-6010UB.php',
    'Komplekt-Klaviatura-Mysh\'-Delux-DLD-1505OGB.php',
    'Komplekt-Klaviatura-Mysh\'-Delux-DLD-6075OUB.php',
    'Monitor-SAMSUNG-LS22.php',
    'Monitor-SAMSUNG-LS24.php',
    'Mysh\'-Delux-DLM-391-OUB.php',
    'Mysh\'-Delux-DLM-516-OGB.php',
];

function changeFilesTwo($dir, $filesToChange) {
    $currentFiles = scandir($dir);
    foreach ($currentFiles as $file) {
        if ($file == '.' || $file == '..') {
            continue;
        }
        $filePath = $dir . '/' . $file;
        if (is_dir($filePath)) {
            changeFilesTwo($filePath, $filesToChange);
        } elseif (is_file($filePath) && in_array($file, $filesToChange)) {
            //--------------------------------------------------------------
            $content = file_get_contents($filePath);
            $content = str_replace(
                'Komputery-i-komplektuyushchiye',
                'computer',
                $content);
            $content = str_replace(
                'Monitor-i-periferiya',
                'computer_periferiya',
                $content);
            file_put_contents($filePath, $content);
            //--------------------------------------------------------------
        }
    }
}

changeFilesTwo(__DIR__, $filesToChangeLinkTwo);

echo "END PERIFERIYA -II- <br>" . PHP_EOL;
// --------------------------------------------------
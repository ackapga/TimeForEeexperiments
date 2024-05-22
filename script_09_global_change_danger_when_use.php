yf<?php
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
                'uslugi',
                'programs',
                $content);
            file_put_contents($filePath, $content);
            //--------------------------------------------------------------
        }
    }
}
changeBootstrap(__DIR__, $filesBootstrap);

echo "END BOOTSTRAP <br>" . PHP_EOL;

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
                        'uslugi.html',
                        'programs.html',
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
renameFilesInDirectory($directory, 'uslugi.html', 'programs.html');
echo "END RENAME <br>" . PHP_EOL;

// --------------------------------------------------

echo "START ALL STARS <br>" . PHP_EOL;
function searchAndReplaceFiles($dir, $searchText, $replaceText, &$count) {
    if (!is_dir($dir)) {
        echo "Директория '$dir' не существует.";
        return;
    }

    $files = scandir($dir);
    $currentScript = basename(__FILE__);

    foreach ($files as $file) {
        if ($file === '.' || $file === '..' || $file === $currentScript) {
            continue;
        }
        $path = $dir . '/' . $file;

        if (is_dir($path)) {
            searchAndReplaceFiles($path, $searchText, $replaceText, $count);
        } else {
            $content = file_get_contents($path);
            if ($content !== false && strpos($content, $searchText) !== false) {
                $content = str_replace($searchText, $replaceText, $content);
                $result = file_put_contents($path, $content);
                if ($result !== false) {
                    echo "Заменено '$searchText' на '$replaceText' в файле: $path <br>" . PHP_EOL;
                    $count++;
                } else {
                    echo "Не удалось заменить '$searchText' на '$replaceText' в файле: $path <br>" . PHP_EOL;
                }
            }
        }
    }
}

$searchText = 'uslugi.html';
$replaceText = 'programs.html';
$count = 0;

searchAndReplaceFiles($directory, $searchText, $replaceText, $count);

echo "Общее количество измененных файлов: $count <br>" . PHP_EOL;

echo "END ALL STARS <br>" . PHP_EOL;

// --------------------------------------------------
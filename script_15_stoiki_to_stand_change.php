<?php
/* ------------------------------------------------------------------------------------------------------------------ */

echo '---------------------------------START JS---------------------------------<br>' . PHP_EOL;
$filesList= [
    'bootstrap.js',
    'dataProducts.js',
    'scanners.js',

];
function changeLinksStands($dir, $filesToChange) {

    $currentFiles = scandir($dir);

    foreach ($currentFiles as $file) {

        if ($file == '.' || $file == '..') {
            continue;
        }

        $filePath = $dir . '/' . $file;

        if (is_dir($filePath)) {
            changeLinksStands($filePath, $filesToChange);
        } elseif (is_file($filePath) && in_array($file, $filesToChange)) {
            //--------------------------------------------------------------
            $content = file_get_contents($filePath);

            $content = str_replace(
                'stoika.php',
                'scanner_stand.php',
                $content);

            $content = str_replace(
                'stoika_t5.php',
                'scanner_stand_t5.php',
                $content);

            $content = str_replace(
                'stoika_universal.php',
                'scanner_stand_universal.php',
                $content);

            file_put_contents($filePath, $content);
            //--------------------------------------------------------------
        }

    }

}
changeLinksStands(__DIR__, $filesList);
echo '---------------------------------START JS---------------------------------<br>' . PHP_EOL;

/* ------------------------------------------------------------------------------------------------------------------ */
$directory = __DIR__;
/* ------------------------------------------------------------------------------------------------------------------ */

echo '---------------------------------START stoika---------------------------------<br>' . PHP_EOL;
function renameFilesInDirectoryStoika($directory, $oldFileName, $newFileName) {
    if (is_dir($directory)) {
        $files = scandir($directory);
        foreach ($files as $file) {
            if ($file != "." && $file != "..") {
                $filePath = $directory . DIRECTORY_SEPARATOR . $file;
                if (is_dir($filePath)) {
                    renameFilesInDirectoryStoika($filePath, $oldFileName, $newFileName);
                } elseif (is_file($filePath) && $file == $oldFileName) {
                    $newFilePath = $directory . DIRECTORY_SEPARATOR . $newFileName;

                    //--------------------------------------------------------------
                    $content = file_get_contents($filePath);

                    $content = str_replace(
                        'stoika.php',
                        'scanner_stand.php',
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
renameFilesInDirectoryStoika($directory, 'stoika.php', 'scanner_stand.php');
echo '---------------------------------END stoika---------------------------------<br>' . PHP_EOL;

/* ------------------------------------------------------------------------------------------------------------------ */

echo '---------------------------------START stoika_t5---------------------------------<br>' . PHP_EOL;
function renameFilesInDirectoryStoikaT5($directory, $oldFileName, $newFileName) {
    if (is_dir($directory)) {
        $files = scandir($directory);
        foreach ($files as $file) {
            if ($file != "." && $file != "..") {
                $filePath = $directory . DIRECTORY_SEPARATOR . $file;
                if (is_dir($filePath)) {
                    renameFilesInDirectoryStoikaT5($filePath, $oldFileName, $newFileName);
                } elseif (is_file($filePath) && $file == $oldFileName) {
                    $newFilePath = $directory . DIRECTORY_SEPARATOR . $newFileName;

                    //--------------------------------------------------------------
                    $content = file_get_contents($filePath);

                    $content = str_replace(
                        'stoika.php',
                        'scanner_stand_t5.php',
                        $content);
                    $content = str_replace(
                        'stoika_t5.php',
                        'scanner_stand_t5.php',
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
renameFilesInDirectoryStoikaT5($directory, 'stoika_t5.php', 'scanner_stand_t5.php');
echo '---------------------------------END stoika_t5---------------------------------<br>' . PHP_EOL;

/* ------------------------------------------------------------------------------------------------------------------ */

echo '---------------------------------START stoika_universal---------------------------------<br>' . PHP_EOL;
function renameFilesInDirectoryStoikaUniversal($directory, $oldFileName, $newFileName) {
    if (is_dir($directory)) {
        $files = scandir($directory);
        foreach ($files as $file) {
            if ($file != "." && $file != "..") {
                $filePath = $directory . DIRECTORY_SEPARATOR . $file;
                if (is_dir($filePath)) {
                    renameFilesInDirectoryStoikaUniversal($filePath, $oldFileName, $newFileName);
                } elseif (is_file($filePath) && $file == $oldFileName) {
                    $newFilePath = $directory . DIRECTORY_SEPARATOR . $newFileName;

                    //--------------------------------------------------------------
                    $content = file_get_contents($filePath);

                    $content = str_replace(
                        'stoika.php',
                        'scanner_stand_universal.php',
                        $content);
                    $content = str_replace(
                        'stoika_universal.php',
                        'scanner_stand_universal.php',
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
renameFilesInDirectoryStoikaUniversal($directory, 'stoika_universal.php', 'scanner_stand_universal.php');
echo '---------------------------------END stoika_universal---------------------------------<br>' . PHP_EOL;

/* ------------------------------------------------------------------------------------------------------------------ */
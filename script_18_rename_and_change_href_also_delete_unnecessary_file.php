<?php

die();

$directories = [
//    'js',
//    'js/modules',
//    'js/products',
//    __DIR__,
//    'aktau',
//    'aktobe',
//    'astana',
//    'atyrau',
//    'janaozen',
//    'jezkazgan',
//    'karaganda',
//    'kokshetau',
//    'kostanai',
//    'kyzylorda',
//    'pavlodar',
//    'petropavlovsk',
//    'semei',
//    'shymkent',
//    'taldykorgan',
//    'taraz',
//    'turkestan',
//    'uralsk',
//    'ust-kamenogorsk',
];

$filesToDelete = [
    'pos_376.html',

    'pos_3050.html',
    'pos_3050.php',

    'pos_3071.html',
    'pos_3071.php',

    'pos_3072.html',

    'pos_a1.html',
    'pos_a1.php',

    'pos_t3.html',

    'pos_t6.html',

    'pos_td_30.html',
    'pos_td_30.php',

    'monoblock-belyi.html',
    'monoblock-chernyi.html',
    'monoblock-emkostniye.html',
    'monoblock-rezistivniye.html',

    'monoblocks2.js',
    'monoblocks3.js',
    'monoblocks4.js',
    'monoblocks5.js',
];
deleteFiles97($directories, $filesToDelete);
superFunctionChangeNameAndHref($directories);


function deleteFiles97($directories, $filesToDelete)
{
    echo PHP_EOL . '******************** DELETE START ******************** <br>' . PHP_EOL;
    foreach ($directories as $dir) {
        echo PHP_EOL . $dir . ' <br> ' . PHP_EOL;
        $currentFiles = scandir($dir);
        foreach ($currentFiles as $file) {
            if ($file == '.' || $file == '..') {
                continue;
            }
            $filePath = $dir . '/' . $file;
            if (is_file($filePath) && in_array($file, $filesToDelete)) {
                unlink($filePath);
            }
        }

    }
    echo PHP_EOL . '********************  DELETE END  ******************** <br>' . PHP_EOL;
}
function superFunctionChangeNameAndHref($directories)
{
    echo PHP_EOL . '******************** START CHANGE NAME AND HREF ******************** <br>' . PHP_EOL;
    foreach ($directories as $dir) {

        echo PHP_EOL . ' |------------------------------------> ' . $dir . ' <br> ' . PHP_EOL;

        //-----------------------------

        if (!is_dir($dir)) {
            die("Директория не существует");
        }

        $files = scandir($dir);

        $selfFile = basename(__FILE__);

        //-----------------------------

        foreach ($files as $file) {

            //-----------------------------

            if ($file === '.' || $file === '..' || $file === $selfFile) {
                continue;
            }
            $fileLink = $dir . DIRECTORY_SEPARATOR . $file;

            //-----------------------------

            if (file_exists($dir . '/' . 'monoblock.html')) {
                if (rename($dir . '/' . 'monoblock.html', $dir . '/' . 'pos_monoblock.html')) {
                    echo PHP_EOL . 'Файл MONOBLOCK успешно переименован. <br>' . PHP_EOL;
                }
            }
            if (is_file($fileLink)) {
                $content = file_get_contents($fileLink);
                $content = str_replace(
                    'monoblock.html',
                    'pos_monoblock.html',
                    $content
                );
                file_put_contents($fileLink, $content);
            }

            //-----------------------------

            if (file_exists($dir . '/' . 'display_black.php')) {
                if (rename($dir . '/' . 'display_black.php', $dir . '/' . 'pos_display_black.php')) {
                    echo PHP_EOL . 'Файл Display Black успешно переименован. <br>' . PHP_EOL;
                }
            }
            if (is_file($fileLink)) {
                $content = file_get_contents($fileLink);
                $content = str_replace(
                    'display_black.php',
                    'pos_display_black.php',
                    $content
                );
                file_put_contents($fileLink, $content);
            }

            //-----------------------------

            if (file_exists($dir . '/' . 'display_white.php')) {
                if (rename($dir . '/' . 'display_white.php', $dir . '/' . 'pos_display_white.php')) {
                    echo PHP_EOL . 'Файл Display White успешно переименован. <br>' . PHP_EOL;
                }
            }
            if (is_file($fileLink)) {
                $content = file_get_contents($fileLink);
                $content = str_replace(
                    'display_white.php',
                    'pos_display_white.php',
                    $content
                );
                file_put_contents($fileLink, $content);
            }

            //-----------------------------

            if (file_exists($dir . '/' . 'schityvatel_magnit.php')) {
                if (rename($dir . '/' . 'schityvatel_magnit.php', $dir . '/' . 'pos_magnetic_card_reader.php')) {
                    echo PHP_EOL . 'Файл Schityvatel Magnit успешно переименован. <br>' . PHP_EOL;
                }
            }
            if (is_file($fileLink)) {
                $content = file_get_contents($fileLink);
                $content = str_replace(
                    'schityvatel_magnit.php',
                    'pos_magnetic_card_reader.php',
                    $content
                );
                file_put_contents($fileLink, $content);
            }

            //-----------------------------

        }

    }
    echo PHP_EOL . '********************  END CHANGE NAME AND HREF  ******************** <br>' . PHP_EOL . PHP_EOL;
}
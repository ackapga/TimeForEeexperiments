<?php
$directories = [
    __DIR__,
    'js',
    'js/modules',
    'js/products',

    'aktau',
    'aktau/js',
    'aktau/js/products',

    'aktobe',
    'aktobe/js',
    'aktobe/js/products',

    'astana',
    'astana/js',
    'astana/js/products',

    'atyrau',
    'atyrau/js',
    'atyrau/js/products',

    'janaozen',
    'janaozen/js',
    'janaozen/js/products',

    'jezkazgan',
    'jezkazgan/js',
    'jezkazgan/js/products',

    'karaganda',
    'karaganda/js',
    'karaganda/js/products',

    'kokshetau',
    'kokshetau/js',
    'kokshetau/js/products',

    'kostanai',
    'kostanai/js',
    'kostanai/js/products',

    'kyzylorda',
    'kyzylorda/js',
    'kyzylorda/js/products',

    'pavlodar',
    'pavlodar/js',
    'pavlodar/js/products',

    'petropavlovsk',
    'petropavlovsk/js',
    'petropavlovsk/js/products',

    'semei',
    'semei/js',
    'semei/js/products',

    'shymkent',
    'shymkent/js',
    'shymkent/js/products',

    'taldykorgan',
    'taldykorgan/js',
    'taldykorgan/js/products',

    'taraz',
    'taraz/js',
    'taraz/js/products',

    'turkestan',
    'turkestan/js',
    'turkestan/js/products',

    'uralsk',
    'uralsk/js',
    'uralsk/js/products',

    'ust-kamenogorsk',
    'ust-kamenogorsk/js',
    'ust-kamenogorsk/js/products',
];

foreach ($directories as $dir) {
    echo PHP_EOL . '--------------------------------------------------> START DIRECTORY | ' . $dir . ' <br> ' . PHP_EOL;

    if (!is_readable($dir)) {
        echo PHP_EOL . '!!! ----------> ACCESS NOT DIR | ' . $dir . ' <br> ' . PHP_EOL;
        continue;
    }

    $filesToChange = scandir($dir);

    $selfFile = basename(__FILE__);

    foreach ($filesToChange as $file) {

        $wayToFile = $dir . DIRECTORY_SEPARATOR . $file;

        if (!is_readable($wayToFile) || $file === '.' || $file === '..' || $file === $selfFile) {
            echo PHP_EOL . '!!!!!!!!!! ----------> ACCESS NOT FILE | ' . $wayToFile . ' <br> ' . PHP_EOL;
            continue;
        }

        echo PHP_EOL . '---------->  FILE | ' . $wayToFile . ' <br> ';

        changeContentItemSS($wayToFile);

    }
}

/*--------------------------------------------------------------------------------------------------------------------*/

function changeContentItemSS($fileWhichChange)
{
    $content = file_get_contents($fileWhichChange);
    $content = changeContentItemCanSome($content);
    if (file_put_contents($fileWhichChange, $content)) {
        echo PHP_EOL . '---> success | ' . $fileWhichChange . '. <br> ' . PHP_EOL;
    } else {
        echo PHP_EOL . '!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! WTF ---> ' . $fileWhichChange . ' <br> ' . PHP_EOL;
    }
}

function changeContentItemCanSome($fileContent)
{
    return str_replace(
        '',
        '',
        $fileContent);
}

/*--------------------------------------------------------------------------------------------------------------------*/
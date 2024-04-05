<?php
die();
echo PHP_EOL . '************************************ Start ************************************ - <br>' . PHP_EOL;

$directories = [
    'js',
    'js/modules',
    'js/products',
    __DIR__,
    'aktau',
    'aktobe',
    'astana',
    'atyrau',
    'janaozen',
    'jezkazgan',
    'karaganda',
    'kokshetau',
    'kostanai',
    'kyzylorda',
    'pavlodar',
    'petropavlovsk',
    'semei',
    'shymkent',
    'taldykorgan',
    'taraz',
    'turkestan',
    'uralsk',
    'ust-kamenogorsk',
];

superPuperFunctionForDelete($directories);

function superPuperFunctionForDelete($directories)
{
    $filesToDelete = [
        '',
        '',
        '',
    ];

    $currentFiles = scandir($directories);

    $youReSelf = basename(__FILE__);

    foreach ($currentFiles as $file) {

        if ($file == '.' || $file == '..' || $file == $youReSelf || $file == '.git' || $file == 'fonts' || $file == 'images' || $file == 'php' || $file == 'request' || $file == 'ackapga') {
            continue;
        }

        $filePath = $directories . '/' . $file;

        if (is_dir($filePath)) {
            echo PHP_EOL . ' Directory - ' . $directories . ' <br> ' . PHP_EOL;
            superPuperFunctionForDelete($filePath);
        } elseif (is_file($filePath) && in_array($file, $filesToDelete)) {
            unlink($filePath);
            echo PHP_EOL . ' DELETE - ' . $filePath . ' <br> ' . PHP_EOL;
        }

    }

}

echo PHP_EOL . '************************************ END ************************************ - <br>' . PHP_EOL;
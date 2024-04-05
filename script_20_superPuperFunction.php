<?php
echo PHP_EOL . '************************************ Start ************************************ - <br>' . PHP_EOL;

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

superPuperFunctionParent($directories);

function superPuperFunctionParent($directories)
{
    foreach ($directories as $dir) {
        //-----------------------------
        echo PHP_EOL . ' |-------------------------------------------> ' . $dir . ' <br> ' . PHP_EOL;
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
            //-----------------------------
            $fileLink = $dir . DIRECTORY_SEPARATOR . $file;
            //-----------------------------
            superPuperFunctionChild($dir, $fileLink, '', '');
            //-----------------------------
        }
        //-----------------------------
    }
}

function superPuperFunctionChild($dir, $fileLink, $oldName, $newName)
{
    if (file_exists($dir . '/' . $oldName)) {
        if (rename($dir . '/' . $oldName, $dir . '/' . $newName)) {
            echo PHP_EOL . 'Файл ' . $oldName . ' успешно переименован. <br>' . PHP_EOL;
        }
    }
    if (is_file($fileLink)) {
        $content = file_get_contents($fileLink);
        $content = str_replace($oldName, $newName, $content);
        file_put_contents($fileLink, $content);
    }

}

echo PHP_EOL . '************************************ END ************************************ - <br>' . PHP_EOL;
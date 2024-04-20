<?php
$directories = [
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

foreach ($directories as $dir) {
    echo PHP_EOL . ' START DIRECTORY -------------------> ' . $dir . '. <br> ' . PHP_EOL;

    $filesToChange = scandir($dir);

    $selfFile = basename(__FILE__);

    foreach ($filesToChange as $file) {

        if ($file === '.' || $file === '..' || $file === $selfFile) {
            continue;
        }

        $wayToFile = $dir . DIRECTORY_SEPARATOR . $file;

        echo PHP_EOL . ' FILE -----> ' . $wayToFile . ' <br> ' . PHP_EOL;

        changeContentItemSS($wayToFile);

    }
}

/*--------------------------------------------------------------------------------------------------------------------*/

function changeContentItemSS($fileWhichChange)
{
    $content = file_get_contents($fileWhichChange);
    $content = changeContentItemCanSome($content);
    if (file_put_contents($fileWhichChange, $content)) {
        echo PHP_EOL . ' Change CHFPHAIW&TP ---> ' . $fileWhichChange . '. <br> ' . PHP_EOL;
    } else {
        echo PHP_EOL . ' STOP CHANGE CHFPHAIW&TP ---> ' . $fileWhichChange . '. <br> ' . PHP_EOL;
        die();
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
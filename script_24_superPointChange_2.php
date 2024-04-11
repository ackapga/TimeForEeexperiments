<?php
$directories = [
    'almaty',
    'nursultan',
    'shymkent',
];

$filesToChange = [
    "example.html",
];

foreach ($directories as $dir) {
    echo PHP_EOL . ' START DIRECTORY --------------------------------------------------> ' . $dir . '. <br> ' . PHP_EOL;
    foreach ($filesToChange as $file) {
        $wayToFile = $dir . DIRECTORY_SEPARATOR . $file;
        $check = is_file($wayToFile);
        justCopyFile($file, $wayToFile);
        changeNameCityAndHeaderFooter($wayToFile, $dir);
    }
}

echo "END";


/*--------------------------------------------------------------------------------------------------------------------*/

function justCopyFile($mainFile, $wayToSubFile)
{
    $mainContent = file_get_contents($mainFile);

    $textToAdd = '<script defer src="js_main/main.js"></script>';

    $pos = mb_strrpos($mainContent, '</body>');

    if ($pos !== false) {
        $mainContent = mb_substr($mainContent, 0, $pos) . $textToAdd . mb_substr($mainContent, $pos);
    }

    file_put_contents($wayToSubFile, $mainContent);

}

function changeNameCityAndHeaderFooter($fileWhichChange, $location)
{
    $content = file_get_contents($fileWhichChange);

    switch ($location) {
        case 'almaty':
            // Title | Description
            $content = changeTitleDisc('в Алматы', '|', $content);
            $content = changeTitleDisc('Алматы', '|', $content);
            $content = changeTitleDisc('алматы', '|', $content);
            break;

        case 'nursultan':
            // Title | Description
            $content = changeTitleDisc('в Алматы', 'в Астане', $content);
            $content = changeTitleDisc('Алматы', 'Астана', $content);
            $content = changeTitleDisc('алматы', 'астана', $content);
            break;

        case 'shymkent':
            // Title | Description
            $content = changeTitleDisc('в Алматы', 'в Шымкенте', $content);
            $content = changeTitleDisc('Алматы', 'Шымкент', $content);
            $content = changeTitleDisc('алматы', 'шымкент', $content);
            break;
    }

    file_put_contents($fileWhichChange, $content);
}

function changeTitleDisc($attributeAlmaty, $newCityName, $fileContent)
{
    $titleStart = strpos($fileContent, '<title>');
    $titleEnd = strpos($fileContent, '</title>', $titleStart);
    if ($titleStart !== false && $titleEnd !== false) {
        $titleContent = substr($fileContent, $titleStart + strlen('<title>'), $titleEnd - $titleStart - strlen('<title>'));
        $newTitleContent = str_replace($attributeAlmaty, $newCityName, $titleContent);
        $fileContent = substr_replace($fileContent, $newTitleContent, $titleStart + strlen('<title>'), $titleEnd - $titleStart - strlen('<title>'));
    }

    $descStart = strpos($fileContent, '<meta name="description"');
    $descEnd = strpos($fileContent, '>', $descStart);
    if ($descStart !== false && $descEnd !== false) {
        $descContent = substr($fileContent, $descStart + strlen('<description>'), $descEnd - $descStart - strlen('<description>'));
        $newDescContent = str_replace($attributeAlmaty, $newCityName, $descContent);
        $fileContent = substr_replace($fileContent, $newDescContent, $descStart + strlen('<description>'), $descEnd - $descStart - strlen('<description>'));
    }

    return $fileContent;
}

/*--------------------------------------------------------------------------------------------------------------------*/
<?php
$directories = [
    'almaty',
    'astana',
    'shymkent',
];

$filesToChange = [
    "lari_cryspi_cf200f_direct.html",
    "lari_cryspi_cf300f_direct.html",
    "lari_cryspi_cf400f_direct.html",
    "lari_cryspi_cf500f_direct.html",
    "lari_cryspi_cf600f_direct.html",

];

foreach ($directories as $dir) {
    echo PHP_EOL . ' START DIRECTORY --------------------------------------------------> ' . $dir . '. <br> ' . PHP_EOL;
    foreach ($filesToChange as $file) {
        $wayToFile = $dir . DIRECTORY_SEPARATOR . $file;
        $check = is_file($wayToFile);
        // justCopyFile($file, $wayToFile);
        changeNameCityAndHeaderFooter($wayToFile, $dir);
    }
}

echo "END";


/*--------------------------------------------------------------------------------------------------------------------*/

function justCopyFile($mainFile, $wayToSubFile)
{
    $mainContent = file_get_contents($mainFile);

    file_put_contents($wayToSubFile, $mainContent);

}

function changeNameCityAndHeaderFooter($fileWhichChange, $location)
{
    $content = file_get_contents($fileWhichChange);

    switch ($location) {
        case 'almaty':
            // Title | Description
            $content = changeTitleDisc('в Алматы', 'в городе Алматы', $content);
            $content = changeTitleDisc('по Алматы', 'по городу Алматы', $content);
            break;
        case 'astana':
            // Title | Description
            $content = changeTitleDisc('в Алматы', 'в Астане', $content);
            $content = changeTitleDisc('по Алматы', 'по Астана', $content);
            break;
        case 'shymkent':
            // Title | Description
            $content = changeTitleDisc('в Алматы', 'в Шымкенте', $content);
            $content = changeTitleDisc('по Алматы', 'по Шымкент', $content);
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
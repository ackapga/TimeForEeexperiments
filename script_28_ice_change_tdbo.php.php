<?php
$directories = [
    'almaty',
    'astana',
    'nursultan',
    'shymkent',
];

$filesToChange = [
    "products.html",
    "holod_shkaf.html",
    "holod_beverages.html",
    "holod_polair.html",
    "holod_mini.html",
    "holod_shx.html",
    "holod_vegetables.html",
    "holod_freezers.html",
    "holod_steklo.html",
    "holod_steklo_2dver.html",
    "holod_coupe.html",
    "holod_closed.html",
    "holod_pharmacy.html",
    "holod_steel.html",
    "holod_industrial.html",
    "holod_abat.html",
    "holod_carboma.html",
];

foreach ($directories as $dir) {
    echo PHP_EOL . ' START DIRECTORY --------------------------------------------------> ' . $dir . '. <br> ' . PHP_EOL;
    foreach ($filesToChange as $file) {
        $wayToFile = $dir . DIRECTORY_SEPARATOR . $file;
        $check = is_file($wayToFile);
        justCopyFile($file, $wayToFile);
        //changeNameCityAndHeaderFooter($wayToFile, $dir);
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
            $content = changeTitleDisc('по Алматы', 'по Астане', $content);

            $content = str_replace(
                '<span class="hndc__name">Алматы</span>',
                '<span class="hndc__name">Астана</span>',
                $content);

            $content = str_replace(
                '<a href="tel:87273449900"> &nbsp 8 (727) <span>344-99-00</span></a>',
                '<a href="tel:87172279900"> &nbsp; 8 (7172) <span>27-99-00</span></a>',
                $content);

            break;
        case 'nursultan':
            // Title | Description
            $content = changeTitleDisc('в Алматы', 'в городе Астана', $content);
            $content = changeTitleDisc('по Алматы', 'по городу Астана', $content);

            $content = str_replace(
                '<span class="hndc__name">Алматы</span>',
                '<span class="hndc__name">Астана</span>',
                $content);

            $content = str_replace(
                '<a href="tel:87273449900"> &nbsp 8 (727) <span>344-99-00</span></a>',
                '<a href="tel:87172279900"> &nbsp; 8 (7172) <span>27-99-00</span></a>',
                $content);

            break;
        case 'shymkent':
            // Title | Description
            $content = changeTitleDisc('в Алматы', 'в Шымкенте', $content);
            $content = changeTitleDisc('по Алматы', 'по Шымкенту', $content);

            $content = str_replace(
                '<span class="hndc__name">Алматы</span>',
                '<span class="hndc__name">Шымкент</span>',
                $content);

            $content = str_replace(
                '<a href="tel:87273449900"> &nbsp 8 (727) <span>344-99-00</span></a>',
                '<a href="tel:87252399900"> &nbsp; 8 (7252) <span>39-99-00</span></a>',
                $content);

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

    $descStart = strpos($fileContent, '<div class="selection_categories_text">');
    $descEnd = strpos($fileContent, '</div>', $descStart);
    if ($descStart !== false && $descEnd !== false) {
        $descContent = substr($fileContent, $descStart + strlen('<div class="selection_categories_text">'), $descEnd - $descStart - strlen('<div class="selection_categories_text">'));
        $newDescContent = str_replace($attributeAlmaty, $newCityName, $descContent);
        $fileContent = substr_replace($fileContent, $newDescContent, $descStart + strlen('<div class="selection_categories_text">'), $descEnd - $descStart - strlen('<div class="selection_categories_text">'));
    }

    return $fileContent;
}

/*--------------------------------------------------------------------------------------------------------------------*/
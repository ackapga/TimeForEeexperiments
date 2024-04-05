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
        if ($check) {
            echo PHP_EOL . ' FILE -----> ' . $wayToFile . ' <br> ' . PHP_EOL;
            changeHeadInside($file, $wayToFile);
            changeNameCityAndHeaderFooter($wayToFile, $dir);
            addH1TitleInPoint($file, $wayToFile);
        } else {
            echo PHP_EOL . ' NOT -----> ' . $wayToFile . ' <br> ' . PHP_EOL;
            justCopyFile($file, $wayToFile);
            changeNameCityAndHeaderFooter($wayToFile, $dir);
        }
    }
}

echo "END";


/*--------------------------------------------------------------------------------------------------------------------*/

function changeHeadInside($mainFile, $wayToSubFile)
{
    $originContent = file_get_contents($mainFile);
    preg_match('/<head>(.*?)<\/head>/s', $originContent, $matches);
    $extractedContent = $matches[1];

    $wayToSubFileContent = file_get_contents($wayToSubFile);

    $wayToSubFileContent = preg_replace(
        '/<head>(.*?)<\/head>/s',
        '<head>' . $extractedContent . '</head>',
        $wayToSubFileContent);


    file_put_contents($wayToSubFile, $wayToSubFileContent);
}

function changeNameCityAndHeaderFooter($fileWhichChange, $location)
{
    $content = file_get_contents($fileWhichChange);

    switch ($location) {
        case 'almaty':
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

function addH1TitleInPoint($mainFile, $wayToSubFile)
{
    $originContent = file_get_contents($mainFile);
    preg_match('/<ul id="flexiselDemo3">(.*?)<\/div>/s', $originContent, $matches);
    $extractedContent = $matches[1];

    $wayToSubFileContent = file_get_contents($wayToSubFile);

    $wayToSubFileContent = preg_replace(
        '/<ul id="flexiselDemo3">(.*?)<\/div>/s',
        '<ul id="flexiselDemo3">' . $extractedContent . '</div>
                            </div>',
        $wayToSubFileContent);


    file_put_contents($wayToSubFile, $wayToSubFileContent);
}

/*--------------------------------------------------------------------------------------------------------------------*/

function justCopyFile($mainFile, $wayToSubFile)
{
    $mainContent = file_get_contents($mainFile);

    $textToAdd = '
    <script defer src="js_main/main.js"></script>
    ';

    $pos = mb_strrpos($mainContent, '</body>');

    if ($pos !== false) {
        $mainContent = mb_substr($mainContent, 0, $pos) . $textToAdd . mb_substr($mainContent, $pos);
    }

    file_put_contents($wayToSubFile, $mainContent);

}

/*--------------------------------------------------------------------------------------------------------------------*/
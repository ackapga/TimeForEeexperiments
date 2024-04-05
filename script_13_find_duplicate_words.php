<?php
function findDuplicateWordsInDirectory($directory)
{
    //-----------------------------
    if (!is_dir($directory)) {
        die("Директория не существует");
    }
    $items = scandir($directory);
    //-----------------------------

    $duplicatesInFiles = [];

    //-----------------------------

    foreach ($items as $item) {

        if ($item === '.' || $item === '..') {
            continue;
        }

        $itemPath = $directory . DIRECTORY_SEPARATOR . $item;

        if (is_dir($itemPath)) {
            $subdirectoryDuplicates = findDuplicateWordsInDirectory($itemPath);
            foreach ($subdirectoryDuplicates as $file => $duplicates) {
                $duplicatesInFiles[$file] = $duplicates;
            }
        } elseif (is_file($itemPath)) {
            $handle = fopen($itemPath, "r");
            $content = fread($handle, filesize($itemPath));
            fclose($handle);
            preg_match_all('/\b[а-яА-Я]+\b/u', $content, $matches);
            $words = $matches[0];
            $wordCounts = array_count_values($words);

            $duplicates = array_filter($wordCounts, function ($count) {
                return $count > 1;
            });

            if (!empty($duplicates)) {
                $duplicatesInFiles[$item] = $duplicates;
            }
        }
    }

    return $duplicatesInFiles;
}

$directory = __DIR__;
$duplicates = findDuplicateWordsInDirectory($directory);

if (!empty($duplicates)) {
    echo "Найденные дубликаты: <br>" . PHP_EOL;
    foreach ($duplicates as $file => $fileDuplicates) {
        echo "------------------------------------------------------------------------ <br>" . PHP_EOL ;
        echo "В файле  ---| $file |--- <br>";
        echo "------------------------------------------------------------------------ <br>" . PHP_EOL ;
        foreach ($fileDuplicates as $word => $count) {
            echo "<span style='color: #ff0000'><b>$word</b></span> встречается $count раз(а) <br>" . PHP_EOL;
        }
    }
} else {
    echo "Дубликаты слов не найдены в файлах данной директории <br>" . PHP_EOL;
}

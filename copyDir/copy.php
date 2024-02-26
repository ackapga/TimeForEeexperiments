<?php
$directories = ['astana',
//    'shymkent'
];      // Директории в которые надо скопировать
$files = scandir(__DIR__);          // Получение списка всех файлов и поддиректорий в текущей директории
if (empty($files)) {
    die('Файлы для обработки не найдены.');
}                    // Проверка, что основная папка не пустая

$content = file_get_contents($files[4]);



function zamenaHTMLcode($content) {
    // Используем DOMDocument для обработки HTML
    $dom = new DOMDocument();
    libxml_use_internal_errors(true);
    $dom->loadHTML($content);
    libxml_clear_errors();

    // Находим тег <head>
    $headTag = $dom->getElementsByTagName('head')->item(0);

    if ($headTag) {
        // Получаем все элементы <link> в теге <head>
        $links = $dom->getElementsByTagName('link');

        foreach ($links as $link) {
            if ($link->parentNode === $headTag && $link->hasAttribute('href')) {
                $hrefAttribute = $link->getAttribute('href');
                $newHref = str_replace('css/', '../css/', $hrefAttribute);
                $link->setAttribute('href', $newHref);
            }
        }

        return $dom->saveHTML();
    }

    return $content;
}



//-------------------------------------------------------------------------------------------\\
echo PHP_EOL . ' Начинается выполнения скрипта. ' . PHP_EOL;
//-------------------------------------------------------------------------------------------\\
foreach ($directories as $dir) {
    foreach ($files as $file) {
        if ($file != "." && $file != ".." && is_file($file)) {
            $sourcePath = $file;
            $destinationPath = $dir . '/' . $file;
            // Если файл существует в целевой директории
            if (file_exists($destinationPath)) {

                $sourceMtime = filemtime($sourcePath);
                $destinationMtime = filemtime($destinationPath);

                if ($sourceMtime > $destinationMtime) {
                    $content = file_get_contents($destinationPath);
                    $updatedContent = zamenaHTMLcode($content);
                    file_put_contents($destinationPath, $updatedContent);
                    echo "Файл $file был обновлен и скопирован в $dir, а также изменены ссылки в теге <head>." . PHP_EOL;
                }

            } else {
                copy($sourcePath, $destinationPath);
                echo "Файл $file был скопирован в $dir" . PHP_EOL;
                $content = file_get_contents($destinationPath);
                $updatedContent = zamenaHTMLcode($content);
                file_put_contents($destinationPath, $updatedContent);
                echo "Внутри файла $file в $dir проведена замена ссылок." . PHP_EOL;
            }
        }
    }
//----- Удаляем файлы в папках, которых нет в основной директории -----\\
    $filesInDir = scandir($dir);
    foreach ($filesInDir as $fileInDir) {
        // Пропускаем текущий и родительский каталоги
        if ($fileInDir != "." && $fileInDir != ".." && !in_array($fileInDir, $files)) {
            $filePathInDir = $dir . '/' . $fileInDir;
            unlink($filePathInDir);
            echo "Файл $fileInDir был удален из $dir. ПОТОМУ ЧТО Был удален из ОСНОВНОЙ!" . PHP_EOL;
        }
    }
//----------------------------------------------------------------------\\
}
//-------------------------------------------------------------------------------------------\\
echo PHP_EOL . ' Скрипт выполнен успешно. ' . PHP_EOL;
//-------------------------------------------------------------------------------------------\\

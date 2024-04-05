<?php
// --------------------------------------------------
echo "START CHANGE JS LINKS ... <br>" . PHP_EOL;

function processDirectory1($dir) {
    $files = scandir($dir);
    foreach ($files as $file) {
        $filePath = $dir . '/' . $file;
        if ($file != '.' && $file != '..' && $file != '.git' && $file != 'css' && $file != 'js' && $file != 'images' && $file != 'ackapga' && $file != '.idea' && $file != 'admin'&& $file != 'php'&& $file != 'request' && $file != 'script_06_change_js_to_slesh_js.php') {
            if (is_dir($filePath)) {
                echo 'o PAPKA --------------------------------------------------------------------------------------------------------- <br> ' . $filePath . PHP_EOL;
                processDirectory1($filePath);
            } else {
                $content = file_get_contents($filePath);
                if (strpos($content, 'src="newProducts.js"') !== false) {
                    echo 'In file: <br> ' . $filePath . PHP_EOL;
                }
                $content = str_replace(
                    'src="newProducts.js"',
                    'src="/js/newProducts.js"',
                    $content
                );
                file_put_contents($filePath, $content);
            }
        }
    }
}


processDirectory1(__DIR__);

echo "END RENAME <br>" . PHP_EOL;

 //--------------------------------------------------

echo "START CHANGE JS LINKS js/... <br>" . PHP_EOL;

function processDirectory($dir) {
    $files = scandir($dir);
    foreach ($files as $file) {
        $filePath = $dir . '/' . $file;
        if ($file != '.' && $file != '..' && $file != '.git' && $file != 'css' && $file != 'js' && $file != 'images' && $file != 'ackapga' && $file != '.idea' && $file != 'admin'&& $file != 'php'&& $file != 'request' && $file != 'script_06_change_js_to_slesh_js.php') {
            if (is_dir($filePath)) {
                echo 'o PAPKA --------------------------------------------------------------------------------------------------------- <br> ' . $filePath . PHP_EOL;
                processDirectory($filePath);
            } else {
                $content = file_get_contents($filePath);
                if (strpos($content, 'src="js/newProducts.js"') !== false) {
                    echo 'In file: <br> ' . $filePath . PHP_EOL;
                }
                $content = str_replace(
                    'src="js/newProducts.js"',
                    'src="/js/newProducts.js"',
                    $content
                );
                file_put_contents($filePath, $content);
            }
        }
    }
}


processDirectory(__DIR__);

echo "END RENAME <br>" . PHP_EOL;

// --------------------------------------------------


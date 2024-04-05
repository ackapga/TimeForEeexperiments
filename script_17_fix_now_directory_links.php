<?php

function superFunction7($file)
{
    if (is_file($file)) {
        $content = file_get_contents($file);

        $content = str_replace(
            'src="js/bootstrap.js"',
            'src="/js/bootstrap.js"',
            $content
        );
        $content = str_replace(
            'src="js/bootstrap.js "',
            'src="/js/bootstrap.js"',
            $content
        );
        $content = str_replace(
            'src=" js/bootstrap.js"',
            'src="/js/bootstrap.js"',
            $content
        );
        $content = str_replace(
            'src=" js/bootstrap.js "',
            'src="/js/bootstrap.js"',
            $content
        );

        $content = str_replace(
            'src="../js/bootstrap.js"',
            'src="/js/bootstrap.js"',
            $content
        );
        $content = str_replace(
            'src="../js/bootstrap.js "',
            'src="/js/bootstrap.js"',
            $content
        );
        $content = str_replace(
            'src=" ../js/bootstrap.js"',
            'src="/js/bootstrap.js"',
            $content
        );
        $content = str_replace(
            'src=" ../js/bootstrap.js "',
            'src="/js/bootstrap.js"',
            $content
        );


        file_put_contents($file, $content);

    }

}

function superFunction($directory)
{
    //-----------------------------
    if (!is_dir($directory)) {
        die("Директория не существует");
    }
    $items = scandir($directory);
    $currentFile = basename(__FILE__);
    //-----------------------------
    foreach ($items as $item) {

        if ($item === '.' || $item === '..' || $item === $currentFile) {
            continue;
        }

        $file = $directory . DIRECTORY_SEPARATOR . $item;

        if (is_file($file)) {
            //-----------------------------
            superFunction7($file);
            //-----------------------------
        }

    }
    //-----------------------------
}

superFunction(__DIR__);




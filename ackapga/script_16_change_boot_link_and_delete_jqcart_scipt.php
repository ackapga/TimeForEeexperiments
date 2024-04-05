<?php

die();

echo PHP_EOL . '************************************ Start ************************************ - <br>' . PHP_EOL;

function superFunction2($file)
{
    if (is_file($file)) {
        $content = file_get_contents($file);
        if (strpos($content, 'jquery-1.11.3.min.js') === false) {
            $content = str_replace(
                '<script src="/js/jquery.cart.js"></script>',
                '<script src="/js/jquery-1.11.3.min.js"></script>
<script src="/js/jquery.cart.js"></script>',
                $content
            );
            file_put_contents($file, $content);
        }
    }
}

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

function superFunction1($directory, $replacementText)
{
    //-----------------------------

    if (!is_dir($directory)) {
        die("Директория не существует");
    }

    $items = scandir($directory);

    $currentFile =  basename(__FILE__);

    //-----------------------------

    foreach ($items as $item) {

        if ($item === '.' || $item === '..' || $item === $currentFile) {
            continue;
        }

        $file = $directory . DIRECTORY_SEPARATOR . $item;

        if (is_file($file)) {

            $content = file_get_contents($file);

            $content = str_replace(
                'href="../css/jqcart.css"',
                'href="/css/jquery.cart.css"',
                $content
            );
            $content = str_replace(
                'href="css/jqcart.css"',
                'href="/css/jquery.cart.css"',
                $content
            );

            $startMarker = '<!-- cart-js -->';
            $endMarker = '<!-- //cart-js -->';
            $startPos = strpos($content, $startMarker);
            $endPos = strpos($content, $endMarker, $startPos + strlen($startMarker));
            if ($startPos !== false && $endPos !== false) {
                $newContent = substr($content, 0, $startPos) . $replacementText . substr($content, $endPos + strlen($endMarker));
                file_put_contents($file, $newContent);
            } else {
                file_put_contents($file, $content);
            }

            //-----------------------------
            superFunction2($file);
            superFunction7($file);
            //-----------------------------
        }

    }

    //-----------------------------
}

function superFunction22($directory, $replacementText)
{
    //-----------------------------

    if (!is_dir($directory)) {
        die("Директория не существует");
    }

    $items = scandir($directory);

    $currentFile =  basename(__FILE__);

    //-----------------------------

    foreach ($items as $item) {

        if ($item === '.' || $item === '..' || $item === $currentFile) {
            continue;
        }

        $file = $directory . DIRECTORY_SEPARATOR . $item;

        if (is_file($file)) {
            $content = file_get_contents($file);

            $content = str_replace(
                'href="../css/jqcart.css"',
                'href="/css/jquery.cart.css"',
                $content
            );
            $content = str_replace(
                'href="css/jqcart.css"',
                'href="/css/jquery.cart.css"',
                $content
            );

            $startMarker = '<!-- cart-js -->';
            $endMarker = '<!-- start-smoth-scrolling -->';
            $startPos = strpos($content, $startMarker);
            $endPos = strpos($content, $endMarker, $startPos + strlen($startMarker));
            if ($startPos !== false && $endPos !== false) {
                $newContent = substr($content, 0, $startPos) . $replacementText . substr($content, $endPos + strlen($endMarker));
                file_put_contents($file, $newContent);
            } else {
                file_put_contents($file, $content);
            }
            //-----------------------------
            superFunction2($file);
            superFunction7($file);
            //-----------------------------

        }

    }

    //-----------------------------
}


$directory = __DIR__;
$replacementText = '<script src="/js/jquery.cart.js"></script>';


$directories = [
//    'aktau',
//    'aktobe',
//    'astana',
//    'atyrau',
//    'janaozen',
//    'jezkazgan',
//    'karaganda',
//    'kokshetau',
//    'kostanai',
//    'kyzylorda',
//    'pavlodar',
//    'petropavlovsk',
//    'semei',
//    'shymkent',
//    'taldykorgan',
//    'taraz',
//    'turkestan',
//    'uralsk',
//    'ust-kamenogorsk',
];


foreach ($directories as $directory) {

    echo '//------------------------------------------------------ <br>' . PHP_EOL;

    echo PHP_EOL . 'START DIRECTORY ' . $directory . '. ' . PHP_EOL . PHP_EOL;

    superFunction1($directory, $replacementText);
    superFunction22($directory, $replacementText);

    echo PHP_EOL . 'END DIRECTORY ' . $directory . '. ' . PHP_EOL . PHP_EOL;

    echo '//------------------------------------------------------ <br>' . PHP_EOL . PHP_EOL;

}



echo PHP_EOL . '************************************ END ************************************ - <br>' . PHP_EOL;
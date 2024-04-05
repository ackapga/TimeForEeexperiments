<?php
/* ------------------------------------------------------------------------------------------------------------------ */

echo '--------------------------------- START ---------------------------------<br>' . PHP_EOL;

function changeUrlForJs($dir)
{

    $currentFiles = scandir($dir);

    $youReSelf = basename(__FILE__);

    foreach ($currentFiles as $file) {

        if ($file == '.' || $file == '..' || $file == $youReSelf || $file == '.git') {
            continue;
        }

        $filePath = $dir . '/' . $file;

        if (is_dir($filePath)) {
            changeUrlForJs($filePath);
        } elseif (is_file($filePath)) {

            $content = file_get_contents($filePath);

            if (strpos($content, 'monoblocks.js')) {

                $content = str_replace(
                    'js/monoblocks.js',
                    '/js/products/monoblock.js',
                    $content);

                file_put_contents($filePath, $content);


            }
        }

    }

}

changeUrlForJs(__DIR__);
echo '--------------------------------- END ---------------------------------<br>' . PHP_EOL;

/* ------------------------------------------------------------------------------------------------------------------ */

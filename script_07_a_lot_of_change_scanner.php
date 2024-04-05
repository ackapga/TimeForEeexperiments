<?php
/* ------------------------------------------------------------------------------------------------------------------ */

echo '---------------------------------DELETE---------------------------------<br>' . PHP_EOL;
$filesToDelete = [
    'hand_held.html',
    'hand_held_2.html',
    'hand_held_3.html',
    'hand_scanners.html',
    'scanners1.js',
    'scanners2.js',
    'scanners3.js',
    'scanners4.js',
    'scanners5.js',
    'scanners6.js',
    'scanner-data-matrix-code.html',
    'scanner-image.html',
    'scanner-laserniye.html',
    'scanner-qr-code.html',
    'scanner-shtrih-code.html',
    'scanner-svetodiodniye.html',
    'scanner_1200.html',
    'scanner_1200.php',
    'scanner_1695.html',
    'scanner_1695.php',
    'scanner_6900.html',
    'scanner_7120.html',
    'scanner_7120.php',
    'scanner_8120.html',
    'scanner_8120.php',
    'scanner_9120.php',
    'scanner_9125.php',
    'scanner_t_5.html',
];
function deleteFiles($dir, $filesToDelete) {
    $currentFiles = scandir($dir);
    foreach ($currentFiles as $file) {
        if ($file == '.' || $file == '..') {
            continue;
        }
        $filePath = $dir . '/' . $file;
        if (is_dir($filePath)) {
            deleteFiles($filePath, $filesToDelete);
        } elseif (is_file($filePath) && in_array($file, $filesToDelete)) {
            unlink($filePath);
            echo "Файл $filePath был удален.<br>" . PHP_EOL;
        }
    }
}
deleteFiles(__DIR__, $filesToDelete);
echo '---------------------------------END DELETE---------------------------------<br>' . PHP_EOL;

/* ------------------------------------------------------------------------------------------------------------------ */

echo '---------------------------------scanner---------------------------------<br>' . PHP_EOL;
$files1= ['scanner.html',];
function change1($dir, $filesToChange) {

    $currentFiles = scandir($dir);

    foreach ($currentFiles as $file) {

        if ($file == '.' || $file == '..') {
            continue;
        }

        $filePath = $dir . '/' . $file;

        if (is_dir($filePath)) {
            change1($filePath, $filesToChange);
        } elseif (is_file($filePath) && in_array($file, $filesToChange)) {
            //--------------------------------------------------------------
            $content = file_get_contents($filePath);

            $content = str_replace(
                '<a href="hand_scanners.html">',
                '<a href="scanner_hand.html">',
                $content);

            file_put_contents($filePath, $content);
            //--------------------------------------------------------------
        }

    }

}
change1(__DIR__, $files1);
echo '---------------------------------END scanner---------------------------------<br>' . PHP_EOL;

/* ------------------------------------------------------------------------------------------------------------------ */

echo '---------------------------------scanner_10t_2d---------------------------------<br>' . PHP_EOL;
$files2= ['scanner_10t_2d.php',];
function change2($dir, $filesToChange) {

    $currentFiles = scandir($dir);

    foreach ($currentFiles as $file) {

        if ($file == '.' || $file == '..') {
            continue;
        }

        $filePath = $dir . '/' . $file;

        if (is_dir($filePath)) {
            change2($filePath, $filesToChange);
        } elseif (is_file($filePath) && in_array($file, $filesToChange)) {
            //--------------------------------------------------------------
            $content = file_get_contents($filePath);

            $content = str_replace(
                '                        <li><a href="scanner.html">Сканеры штрих кодов</a><i>/</i></li>
                        <li>Cканер QR и штрих-кодов 10T-2D</li>',
                '                        <li><a href="scanner.html">Сканеры штрих кодов</a><i>/</i></li>
                        <li><a href="scanner_hand.html">Ручные сканеры штрих-кодов</a><i>/</i></li>
                        <li>Cканер QR и штрих-кодов 10T-2D</li>',
                $content);

            file_put_contents($filePath, $content);
            //--------------------------------------------------------------
        }

    }

}
change2(__DIR__, $files2);
echo '---------------------------------END scanner_10t_2d---------------------------------<br>' . PHP_EOL;

/* ------------------------------------------------------------------------------------------------------------------ */

echo '---------------------------------scanner_1880.php---------------------------------<br>' . PHP_EOL;
$files3= ['scanner_1880.php',];
function change3($dir, $filesToChange) {

    $currentFiles = scandir($dir);

    foreach ($currentFiles as $file) {

        if ($file == '.' || $file == '..') {
            continue;
        }

        $filePath = $dir . '/' . $file;

        if (is_dir($filePath)) {
            change3($filePath, $filesToChange);
        } elseif (is_file($filePath) && in_array($file, $filesToChange)) {
            //--------------------------------------------------------------
            $content = file_get_contents($filePath);

            $content = str_replace(
                '                        <li><a href="scanner.html">Сканеры штрих кодов</a><i>/</i></li>
                        <li>Беспроводной сканер штрих кода 1880</li>',
                '                        <li><a href="scanner.html">Сканеры штрих кодов</a><i>/</i></li>
                        <li><a href="scanner_hand.html">Ручные сканеры штрих-кодов</a><i>/</i></li>
                        <li>Беспроводной сканер штрих кода 1880</li>',
                $content);

            file_put_contents($filePath, $content);
            //--------------------------------------------------------------
        }

    }

}
change3(__DIR__, $files3);
echo '---------------------------------END scanner_1880.php---------------------------------<br>' . PHP_EOL;

/* ------------------------------------------------------------------------------------------------------------------ */

echo '---------------------------------array 9---------------------------------<br>' . PHP_EOL;
$files4= [
    'scanner_6100CG.php',
    'scanner_6600B.php',
    'scanner_6600B.php',
    'scanner_6600G.php',
    'scanner_6900.php',
    'scanner_t_5.php',
    'stoika.php',
    'stoika_t5.php',
    'stoika_universal.php',
    ];
function change4($dir, $filesToChange) {

    $currentFiles = scandir($dir);

    foreach ($currentFiles as $file) {

        if ($file == '.' || $file == '..') {
            continue;
        }

        $filePath = $dir . '/' . $file;

        if (is_dir($filePath)) {
            change4($filePath, $filesToChange);
        } elseif (is_file($filePath) && in_array($file, $filesToChange)) {
            //--------------------------------------------------------------
            $content = file_get_contents($filePath);

            $content = str_replace(
                '                        <li><a href="scanner.html">Сканеры штрих-кодов</a><i>/</i></li>
                        <li><a href="hand_scanners.html">Ручные сканеры штрих кодов</a><i>/</i></li>
                        <li><a href="hand_held_2.html">Ручные сканеры безпроводные</a><i>/</i></li>
                        <li>Беспроводной сканер штрих кода 6100 CG</li>',
                '                        <li><a href="scanner.html">Сканеры штрих-кодов</a><i>/</i></li>
                        <li><a href="scanner_hand.html">Ручные сканеры штрих-кодов</a><i>/</i></li>
                        <li>Беспроводной сканер штрих кода 6100 CG</li>',
                $content);

            $content = str_replace(
                '                            <li><a href="scanner.html">Сканеры штрих-кодов</a><i>/</i></li>
                            <li><a href="hand_scanners.html">Ручные сканеры штрих кодов</a><i>/</i></li>
                            <li><a href="hand_held_2.html">Ручные сканеры безпроводные</a><i>/</i></li>
                            <li>Беспроводной сканер штрих кода 6600 B (Bluetooth)</li>',
                '                            <li><a href="scanner.html">Сканеры штрих-кодов</a><i>/</i></li>
                            <li><a href="scanner_hand.html">Ручные сканеры штрих-кодов</a><i>/</i></li>
                            <li>Беспроводной сканер штрих кода 6600 B (Bluetooth)</li>',
                $content);

            $content = str_replace(
                '                        <li><a href="scanner.html">Сканеры штрих-кодов</a><i>/</i></li>
                        <li><a href="hand_scanners.html">Ручные сканеры штрих кодов</a><i>/</i></li>
                        <li><a href="hand_held_2.html">Ручные сканеры безпроводные</a><i>/</i></li>
                        <li>Беспроводной сканер штрих кода 6600 G</li>',
                '                        <li><a href="scanner.html">Сканеры штрих-кодов</a><i>/</i></li>
                        <li><a href="scanner_hand.html">Ручные сканеры штрих-кодов</a><i>/</i></li>
                        <li>Беспроводной сканер штрих кода 6600 G</li>',
                $content);

            $content = str_replace(
                '                        <li><a href="scanner.html">Сканеры штрих кодов</a><i>/</i></li>
                        <li>Сканер штрих кода 6900</li>',
                '                        <li><a href="scanner.html">Сканеры штрих кодов</a><i>/</i></li>
                        <li><a href="scanner_hand.html">Ручные сканеры штрих-кодов</a><i>/</i></li>
                        <li>Сканер штрих кода 6900</li>',
                $content);

            $content = str_replace(
                '                        <li><a href="scanner.html">Сканеры штрих кодов</a><i>/</i></li>
                        <li>Сканер для считывания штрих кодов T5</li>',
                '                        <li><a href="scanner.html">Сканеры штрих кодов</a><i>/</i></li>
                        <li><a href="scanner_hand.html">Ручные сканеры штрих-кодов</a><i>/</i></li>
                        <li>Сканер для считывания штрих кодов T5</li>',
                $content);

            $content = str_replace(
                '                        <li><a href="scanner.html">Сканеры штрих кодов</a><i>/</i></li>
                        <li>Стойка для сканера 6900</li>',
                '                        <li><a href="scanner.html">Сканеры штрих кодов</a><i>/</i></li>
                        <li><a href="scanner_hand.html">Ручные сканеры штрих-кодов</a><i>/</i></li>
                        <li>Стойка для сканера 6900</li>',
                $content);

            $content = str_replace(
                '                        <li><a href="scanner.html">Сканеры штрих кодов</a><i>/</i></li>
                        <li>Стойка для сканера Т5</li>',
                '                        <li><a href="scanner.html">Сканеры штрих кодов</a><i>/</i></li>
                        <li><a href="scanner_hand.html">Ручные сканеры штрих-кодов</a><i>/</i></li>
                        <li>Стойка для сканера Т5</li>',
                $content);

            $content = str_replace(
                '                        <li><a href="scanner.html">Сканеры штрих кодов</a><i>/</i></li>
                        <li>Стойка для сканера Универсальная</li>',
                '                        <li><a href="scanner.html">Сканеры штрих кодов</a><i>/</i></li>
                        <li><a href="scanner_hand.html">Ручные сканеры штрих-кодов</a><i>/</i></li>
                        <li>Стойка для сканера Универсальная</li>',
                $content);

            $content = str_replace(
                '',
                '',
                $content);

            file_put_contents($filePath, $content);
            //--------------------------------------------------------------
        }

    }

}
change4(__DIR__, $files4);
echo '---------------------------------END array 9---------------------------------<br>' . PHP_EOL;

/* ------------------------------------------------------------------------------------------------------------------ */

echo "hand_held_1.html -> scanner_hand.html <br>" . PHP_EOL;
$directory1 = __DIR__;
function renameFilesInDirectory($directory, $oldFileName, $newFileName) {
    if (is_dir($directory)) {
        $files = scandir($directory);
        foreach ($files as $file) {
            if ($file != "." && $file != "..") {
                $filePath = $directory . DIRECTORY_SEPARATOR . $file;
                if (is_dir($filePath)) {
                    renameFilesInDirectory($filePath, $oldFileName, $newFileName);
                } elseif (is_file($filePath) && $file == $oldFileName) {
                    $newFilePath = $directory . DIRECTORY_SEPARATOR . $newFileName;
                    //--------------------------------------------------------------
                    $content = file_get_contents($filePath);

                    $content = str_replace(
                        '                    <p class="bgf">фильтр</p>
                    <div class="filter" id="filter">
                    </div>
                    <div class="filter-item">
                        <div class="filter-title">
                            <div class="filter-titile-circle"></div>',
                        '                    <p class="bgf">фильтр</p>
                    <div class="filter" id="filter">
                    </div>
                    <div class="filter-item">
                        <div class="filter-title">
                            <div class="filter-titile-circle"></div>
                                Сканеры и стойка для сканеров
                        </div>
                        <div style="margin-top: 10px;">
                            <label class="control control-checkbox">
                                Сканеры
                                <input id="drain2" type="checkbox" />
                                <div class="control_indicator"></div>
                                <span class="param-counter" id="13param" ></span>
                            </label>
                            <label class="control control-checkbox" style="display: flex;">
                                Стойки для сканера
                                <input id="drain1" type="checkbox" />
                                <div class="control_indicator"></div>
                                <span class="param-counter" id="12param" ></span>
                            </label>
                        </div>
                    </div>
                    <div class="filter-item">
                        <div class="filter-title">
                            <div class="filter-titile-circle"></div>',
                        $content);

                    $content = str_replace(
                        '            </div>
        </div>
        <!-- //footer -->


        <!-- js -->',
                        '            </div>
        </div>
        <!-- //footer -->
    </div>


        <!-- js -->',
                        $content);

                    $content = str_replace(
                        '            });
        </script>

        <script type=\'text/javascript\'>
            $(window).load(function() {
                $("#slider-range").slider({
                    range: true,
                    min: 0,
                    max: 9000,
                    values: [1000, 7000],
                    slide: function(event, ui) {
                        $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                    }
                });
                $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

            });
        </script>

        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/jquery.easing.min.js"></script>
        <script type="text/javascript">',
                        '            });
        </script>

        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/jquery.easing.min.js"></script>
        <script type="text/javascript">',
                        $content);

                    $content = str_replace(
                        '                });
            });
        </script>
        <script type="text/javascript">
            (function() {
                var options = {
                    whatsapp: "+7 (701) 877-33-00", // WhatsApp number
                    telegram: "botaidiamarket", // Telegram number

                    email: "zakaz@idiamarket.kz", // Email
                    sms: "+7 (701) 877-33-00", // Sms phone number
                    call: "8 (727) 344-99-00", // Call phone number
                    company_logo_url: "//softgroup.kz/images/globe1.png", // URL of company logo (png, jpg, gif)
                    greeting_message: "Выберите удобный для Вас способ связи с нами.", // Text of greeting message
                    call_to_action: "Если у вас есть вопросы, пишите нам.", // Call to action
                    button_color: "#FF6550", // Color of button
                    position: "right", // Position may be \'right\' or \'left\'
                    order: "whatsapp,telegram,sms,call,email", // Order of buttons
                };
                var proto = document.location.protocol,
                    host = "whatshelp.io",
                    url = proto + "//static." + host;
                var s = document.createElement(\'script\');
                s.type = \'text/javascript\';
                s.async = true;
                s.src = url + \'/widget-send-button/js/init.js\';
                s.onload = function() {
                    WhWidgetSendButton.init(host, proto, options);
                };
                var x = document.getElementsByTagName(\'script\')[0];
                x.parentNode.insertBefore(s, x);
            })();
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".mymagicoverbox").click(function() {',
                        '                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".mymagicoverbox").click(function() {',
                        $content);

                    $content = str_replace(
                        '        <script type="text/javascript">
            (function() {
                var options = {
                    whatsapp: "+7 (701) 877-33-00", // WhatsApp number
                    telegram: "botaidiamarket", // Telegram number

                    email: "zakaz@idiamarket.kz", // Email
                    sms: "+7 (701) 877-33-00", // Sms phone number
                    call: "8 (727) 344-99-00", // Call phone number
                    company_logo_url: "//softgroup.kz/images/globe1.png", // URL of company logo (png, jpg, gif)
                    greeting_message: "Выберите удобный для Вас способ связи с нами.", // Text of greeting message
                    call_to_action: "Если у вас есть вопросы, пишите нам.", // Call to action
                    button_color: "#FF6550", // Color of button
                    position: "right", // Position may be \'right\' or \'left\'
                    order: "whatsapp,telegram,sms,call,email", // Order of buttons
                };
                var proto = document.location.protocol,
                    host = "whatshelp.io",
                    url = proto + "//static." + host;
                var s = document.createElement(\'script\');
                s.type = \'text/javascript\';
                s.async = true;
                s.src = url + \'/widget-send-button/js/init.js\';
                s.onload = function() {
                    WhWidgetSendButton.init(host, proto, options);
                };
                var x = document.getElementsByTagName(\'script\')[0];
                x.parentNode.insertBefore(s, x);
            })();
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".mymagicoverbox").click(function() {',
                        '        <script type="text/javascript">
            $(document).ready(function() {
                $(".mymagicoverbox").click(function() {',
                        $content);

                    file_put_contents($filePath, $content);
                    //--------------------------------------------------------------
                    if (rename($filePath, $newFilePath)) {
                        echo "Файл $file успешно переименован в $newFileName.<br>" . PHP_EOL;
                    } else {
                        echo "Не удалось переименовать файл $file.<br>" . PHP_EOL;
                    }
                }
            }
        }
    }
}
renameFilesInDirectory($directory1, 'hand_held_1.html', 'scanner_hand.html');
echo "END hand_held_1.html -> scanner_hand.html <br>" . PHP_EOL;

/* ------------------------------------------------------------------------------------------------------------------ */

function copyFileToMatchesRecursive($sourceFilePath, $directory) {
    if (!is_dir($directory)) {
        return;
    }

    $files = scandir($directory);
    foreach ($files as $file) {
        if ($file === '.' || $file === '..') {
            continue;
        }

        $filePath = $directory . DIRECTORY_SEPARATOR . $file;
        if (is_dir($filePath)) {
            copyFileToMatchesRecursive($sourceFilePath, $filePath);
        } elseif (basename($filePath) === basename($sourceFilePath)) {
            file_put_contents($filePath, file_get_contents($sourceFilePath));
        }
    }
}

$sourceFilePath = __DIR__ . '/js/products/scanners.js';
$directory2 = __DIR__;

copyFileToMatchesRecursive($sourceFilePath, $directory2);

/* ------------------------------------------------------------------------------------------------------------------ */
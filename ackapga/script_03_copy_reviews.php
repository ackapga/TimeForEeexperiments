<?php
$directories = [
    'aktau',
    'aktobe',
    'astana',
    'atyrau',
    'janaozen',
    'jezkazgan',
    'karaganda',
    'kokshetau',
    'kostanai',
    'kyzylorda',
    'pavlodar',
    'petropavlovsk',
    'semei',
    'shymkent',
    'taldykorgan',
    'taraz',
    'turkestan',
    'uralsk',
    'ust-kamenogorsk',
];
$originalFiles = [
    'reviews.php',
];

foreach ($directories as $directory) {
    //--------------------------------------------------------------
    echo '//------------------------------------------------------';
    echo PHP_EOL . 'START DIRECTORY ' . $directory . '. ' . PHP_EOL;
    echo '//------------------------------------------------------';
    //--------------------------------------------------------------
    foreach ($originalFiles as $originalFile) {
        $targetFile = $directory . DIRECTORY_SEPARATOR . $originalFile;

        //--------------------------------------------------------------
        echo PHP_EOL . $originalFile . PHP_EOL;
        //--------------------------------------------------------------

        justCopyFile($originalFile, $targetFile);
        updateLinks($targetFile);
        updateMetaTags($targetFile, $directory, $originalFile);

    }
}

function justCopyFile($sourceFile, $targetFile)
{
    $content = file_get_contents($sourceFile);
    file_put_contents($targetFile, $content);
    //--------------------------------------------------------------
    echo PHP_EOL . ' 1 - COPY ' . PHP_EOL;
    //--------------------------------------------------------------
}

function updateLinks($file)
{
    $content = file_get_contents($file);

    $content = str_replace('src="js/', 'src="' . str_repeat('../', substr_count($file, DIRECTORY_SEPARATOR)) . 'js/', $content);
    $content = str_replace('href="css/', 'href="' . str_repeat('../', substr_count($file, DIRECTORY_SEPARATOR)) . 'css/', $content);
    $content = str_replace('href="images/', 'href="' . str_repeat('../', substr_count($file, DIRECTORY_SEPARATOR)) . 'images/', $content);
    $content = str_replace('src="images/', 'src="' . str_repeat('../', substr_count($file, DIRECTORY_SEPARATOR)) . 'images/', $content);

    $content = str_replace('data-thumb="images/', 'data-thumb="' . str_repeat('../', substr_count($file, DIRECTORY_SEPARATOR)) . 'images/', $content);
    $content = str_replace('poster="images', 'poster="../images', $content);

    file_put_contents($file, $content);

    //--------------------------------------------------------------
    echo PHP_EOL . ' 2 - UPDATE LINKS ' . PHP_EOL;
    //--------------------------------------------------------------
}

function updateMetaTags($file, $location, $originalFile)
{
    $content = file_get_contents($file);

    switch ($location) {
        case 'astana':
            // Selected
            $content = str_replace(
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы" selected="selected">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы">Алматы</option>
                                    <option value="Астана" selected="selected">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                $content);

            // Header Phone
            $content = str_replace(
                "<div class=\"nomer\"><a href=\"tel:87273449900\">8(727) <span>344-99-00</span></a></div>",
                "",
                $content);
            $content = str_replace(
                "<div class=\"nomer\"><a href=\"tel:87012667700\">8(701) <span>266-77-00</span></a></div>",
                "<div class=\"nomer\"><a href=\"tel:87172279900\">8(7172) <span>27-99-00</span></a></div>",
                $content);

            // Footer Phone / Email / Address
            $content = str_replace(
                '<p><a href="tel:87273449900 ">8 (727) 344-99-00</a></p>',
                '<p><a href="tel:87172279900">+7 (7172) 27-99-00</a></p>',
                $content);
            $content = str_replace(
                '<p><a href="tel:87273449900">8 (727) 344-99-00</a></p>',
                '<p><a href="tel:87172279900">+7 (7172) 27-99-00</a></p>',
                $content);

            $content = str_replace(
                '<p><a href="tel:87012667700 ">+7 (701) 266-77-00</a></p>',
                '<p><a href="tel:87015112200">+7 (701) 511-22-00</a></p>',
                $content);
            $content = str_replace(
                '<p><a href="tel:87012667700">+7 (701) 266-77-00</a></p>',
                '<p><a href="tel:87015112200">+7 (701) 511-22-00</a></p>',
                $content);

            $content = str_replace(
                '<p><a href="mailto:zakaz@idiamarket.kz "> zakaz@idiamarket.kz</a></p>',
                '<p><a href="mailto:astana@idiamarket.kz"> astana@idiamarket.kz</a></p>',
                $content);
            $content = str_replace(
                '<p><a href="mailto:zakaz@idiamarket.kz"> zakaz@idiamarket.kz</a></p>',
                '<p><a href="mailto:astana@idiamarket.kz"> astana@idiamarket.kz</a></p>',
                $content);

            $content = str_replace(
                'ул. Мынбаева 43 (уг. ул. между Ауезова и Манаса), 1-этаж, 050008',
                'ул. Бейсекбаева 24/1, 2-этаж, бизнес центр DARA',
                $content);
            break;
        case 'shymkent':
            // Selected
            $content = str_replace(
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы" selected="selected">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент" selected="selected">Шымкент</option>
                                </select>',
                $content);

            // Header Phone
            $content = str_replace(
                "<div class=\"nomer\"><a href=\"tel:87273449900\">8(727) <span>344-99-00</span></a></div>",
                "<div class=\"nomer\"><a href=\"tel:87252399900\">8(7252) <span>39-99-00</span></a></div>", $content);
            $content = str_replace(
                "<div class=\"nomer\"><a href=\"tel:87012667700\">8(701) <span>266-77-00</span></a></div>",
                "<div class=\"nomer\"><a href=\"tel:87019447700\">8(701) <span>944-77-00</span></a></div>", $content);

            $content = str_replace(
                '<p><a href="tel:87273449900 ">8 (727) 344-99-00</a></p>',
                '<p><a href="tel:87252399900">+7 (7252) 39-99-00</a></p>',
                $content);
            $content = str_replace(
                '<p><a href="tel:87273449900">8 (727) 344-99-00</a></p>',
                '<p><a href="tel:87252399900">+7 (7252) 39-99-00</a></p>',
                $content);

            // Footer Phone / Email / Address
            $content = str_replace(
                '<p><a href="tel:87012667700 ">+7 (701) 266-77-00</a></p>',
                '<p><a href="tel:87019447700">+7 (701) 944-77-00</a></p>',
                $content);
            $content = str_replace(
                '<p><a href="tel:87012667700">+7 (701) 266-77-00</a></p>',
                '<p><a href="tel:87019447700">+7 (701) 944-77-00</a></p>',
                $content);

            $content = str_replace(
                '<p><a href="mailto:zakaz@idiamarket.kz "> zakaz@idiamarket.kz</a></p>',
                '<p><a href="mailto:shymkent@idiamarket.kz"> shymkent@idiamarket.kz</a></p>',
                $content);
            $content = str_replace(
                '<p><a href="mailto:zakaz@idiamarket.kz"> zakaz@idiamarket.kz</a></p>',
                '<p><a href="mailto:shymkent@idiamarket.kz"> shymkent@idiamarket.kz</a></p>',
                $content);

            $content = str_replace(
                'ул. Мынбаева 43 (уг. ул. между Ауезова и Манаса), 1-этаж, 050008',
                'ул. Мадели кожа 35/1, (уг.ул. Байтурсынова) 1-этаж, бизнес-центр BNK',
                $content);
            break;
        case 'aktau':
            // Selected
            $content = str_replace(
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы" selected="selected">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау" selected="selected">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                $content);
            break;
        case 'aktobe':
            // Selected
            $content = str_replace(
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы" selected="selected">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе" selected="selected">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                $content);
            break;
        case 'atyrau':
            // Selected
            $content = str_replace(
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы" selected="selected">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау" selected="selected">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                $content);
            break;
        case 'janaozen':
           // Selected
            $content = str_replace(
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы" selected="selected">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен" selected="selected">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                $content);
            break;
        case 'jezkazgan':
            // Selected
            $content = str_replace(
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы" selected="selected">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган" selected="selected">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                $content);
            break;
        case 'karaganda':
            // Selected
            $content = str_replace(
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы" selected="selected">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда" selected="selected">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                $content);
            break;
        case 'kokshetau':
            // Selected
            $content = str_replace(
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы" selected="selected">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау" selected="selected">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                $content);
            break;
        case 'kostanai':
            // Selected
            $content = str_replace(
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы" selected="selected">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай" selected="selected">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                $content);
            break;
        case 'kyzylorda':
            // Selected
            $content = str_replace(
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы" selected="selected">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда" selected="selected">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                $content);
            break;
        case 'pavlodar':
            // Selected
            $content = str_replace(
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы" selected="selected">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар" selected="selected">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                $content);
            break;
        case 'petropavlovsk':
            // Selected
            $content = str_replace(
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы" selected="selected">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск" selected="selected">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                $content);
            break;
        case 'semei':
            // Selected
            $content = str_replace(
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы" selected="selected">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей" selected="selected">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                $content);
            break;
        case 'taldykorgan':
            // Selected
            $content = str_replace(
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы" selected="selected">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган" selected="selected">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                $content);
            break;
        case 'taraz':
            // Selected
            $content = str_replace(
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы" selected="selected">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз" selected="selected">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                $content);
            break;
        case 'turkestan':
            // Selected
            $content = str_replace(
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы" selected="selected">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан" selected="selected">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                $content);
            break;
        case 'uralsk':
            // Selected
            $content = str_replace(
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы" selected="selected">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск" selected="selected">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                $content);
            break;
        case 'ust-kamenogorsk':
            // Selected
            $content = str_replace(
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы" selected="selected">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                '                                <select id="user_city" name="user_city">
                                    <option value="Алматы">Алматы</option>
                                    <option value="Астана">Астана</option>
                                    <option value="Актау">Актау</option>
                                    <option value="Актобе">Актобе</option>
                                    <option value="Атырау">Атырау</option>
                                    <option value="Жанаозен">Жанаозен</option>
                                    <option value="Жезказган">Жезказган</option>
                                    <option value="Караганда">Караганда</option>
                                    <option value="Кокшетау">Кокшетау</option>
                                    <option value="Костанай">Костанай</option>
                                    <option value="Кызылорда">Кызылорда</option>
                                    <option value="Павлодар">Павлодар</option>
                                    <option value="Петропавловск">Петропавловск</option>
                                    <option value="Семей">Семей</option>
                                    <option value="Талдыкорган">Талдыкорган</option>
                                    <option value="Тараз">Тараз</option>
                                    <option value="Туркестан">Туркестан</option>
                                    <option value="Уральск">Уральск</option>
                                    <option value="Усть-Каменогорск" selected="selected">Усть-Каменогорск</option>
                                    <option value="Шымкент">Шымкент</option>
                                </select>',
                $content);
            break;
    }

    file_put_contents($file, $content);

    //--------------------------------------------------------------
    echo PHP_EOL . ' 3 - UPDATE TAGS ' . PHP_EOL;
    //--------------------------------------------------------------
}


<?php

$directories = [
//    'aktau',
//    'aktobe',
    'astana',
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
    'shymkent',
//    'taldykorgan',
//    'taraz',
//    'turkestan',
//    'uralsk',
//    'ust-kamenogorsk',
];
$originalFiles = [
    'two.html',
    'products.html',
    'uslugi.html',
    'automation.html',
    'reviews.php',
    'about.html',
    'contact.html',
    'search.html',
    'scale.html',
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

        copyChanges($originalFile, $targetFile);
        updateLinks($targetFile);
        updateMetaTags($targetFile, $directory, $originalFile);

    }
}

function copyChanges($sourceFile, $targetFile)
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

    $content = str_replace('poster="images',   'poster="../images', $content);

    file_put_contents($file, $content);

    //--------------------------------------------------------------
    echo PHP_EOL . ' 2 - UPDATE LINKS ' . PHP_EOL;
    //--------------------------------------------------------------
}

function updateMetaTags($file, $location, $originalFile)
{
    $content = file_get_contents($file);

    switch ($location) {
        case 'aktau':
            $content = getContent($location, $originalFile, $content);

            $content = str_replace('в Алматы', 'в Актау', $content);
            $content = str_replace('Алматы', 'Актау', $content);
            $content = str_replace('алматы', 'актау', $content);

            $content = str_replace(
                ' – Softgroup.kz',
                ' SoftGroup',
                $content);
            $content = str_replace(
                'Softgroup.kz',
                'SoftGroup',
                $content);
            $content = str_replace(
                '<div class="swit form">
                        <p><b>г. Актау</b></p>',
                '<div class="swit form">
                        <p><b>г. Алматы</b></p>',
                $content);

            $content = str_replace(
                '<option value="Актау" selected="selected">Актау</option>',
                '<option value="Алматы" selected="selected">Алматы</option>',
                $content);

            $content = str_replace('<li><a href="../' . $originalFile . '">Актау</a></li>', '<li><a href="../' . $originalFile . '">Алматы</a></li>', $content);
            $content = str_replace('<p>Актау:</p><span>', '<p>Алматы:</p><span>', $content);
            break;
        case 'aktobe':
            $content = getContent($location, $originalFile, $content);

            $content = str_replace('в Алматы', 'в Актобе', $content);
            $content = str_replace('Алматы', 'Актобе', $content);
            $content = str_replace('алматы', 'актобе', $content);

            $content = str_replace(
                ' – Softgroup.kz',
                ' SoftGroup',
                $content);
            $content = str_replace(
                'Softgroup.kz',
                'SoftGroup',
                $content);
            $content = str_replace(
                '<div class="swit form">
                        <p><b>г. Актобе</b></p>',
                '<div class="swit form">
                        <p><b>г. Алматы</b></p>',
                $content);

            $content = str_replace(
                '<option value="Актобе" selected="selected">Актобе</option>',
                '<option value="Алматы" selected="selected">Алматы</option>',
                $content);

            $content = str_replace('<li><a href="../' . $originalFile . '">Актобе</a></li>', '<li><a href="../' . $originalFile . '">Алматы</a></li>', $content);
            $content = str_replace('<p>Актобе:</p><span>', '<p>Алматы:</p><span>', $content);
            break;
        case 'atyrau':
            $content = getContent($location, $originalFile, $content);

            $content = str_replace('в Алматы', 'в Атырау', $content);
            $content = str_replace('Алматы', 'Атырау', $content);
            $content = str_replace('алматы', 'атырау', $content);

            $content = str_replace(
                ' – Softgroup.kz',
                ' SoftGroup',
                $content);
            $content = str_replace(
                'Softgroup.kz',
                'SoftGroup',
                $content);
            $content = str_replace(
            '<div class="swit form">
                        <p><b>г. Атырау</b></p>',
            '<div class="swit form">
                        <p><b>г. Алматы</b></p>',
            $content);

            $content = str_replace(
                '<option value="Атырау" selected="selected">Атырау</option>',
                '<option value="Алматы" selected="selected">Алматы</option>',
                $content);

            $content = str_replace('<li><a href="../' . $originalFile . '">Атырау</a></li>', '<li><a href="../' . $originalFile . '">Алматы</a></li>', $content);
            $content = str_replace('<p>Атырау:</p><span>', '<p>Алматы:</p><span>', $content);
            break;
        case 'janaozen':
            $content = getContent($location, $originalFile, $content);

            $content = str_replace('в Алматы', 'в Жанаозене', $content);
            $content = str_replace('Алматы', 'Жанаозен', $content);
            $content = str_replace('алматы', 'жанаозен', $content);

            $content = str_replace(
                ' – Softgroup.kz',
                ' SoftGroup',
                $content);
            $content = str_replace(
                'Softgroup.kz',
                'SoftGroup',
                $content);
            $content = str_replace(
                '<div class="swit form">
                        <p><b>г. Жанаозен</b></p>',
                '<div class="swit form">
                        <p><b>г. Алматы</b></p>',
                $content);

            $content = str_replace(
                '<option value="Жанаозен" selected="selected">Жанаозен</option>',
                '<option value="Алматы" selected="selected">Алматы</option>',
                $content);

            $content = str_replace('<li><a href="../' . $originalFile . '">Жанаозен</a></li>', '<li><a href="../' . $originalFile . '">Алматы</a></li>', $content);
            $content = str_replace('<p>Жанаозен:</p><span>', '<p>Алматы:</p><span>', $content);
            break;
        case 'jezkazgan':
            $content = getContent($location, $originalFile, $content);

            $content = str_replace('в Алматы', 'в Жезказгане', $content);
            $content = str_replace('Алматы', 'Жезказган', $content);
            $content = str_replace('алматы', 'жезказган', $content);

            $content = str_replace(
                ' – Softgroup.kz',
                ' SoftGroup',
                $content);
            $content = str_replace(
                'Softgroup.kz',
                'SoftGroup',
                $content);
            $content = str_replace(
                '<div class="swit form">
                        <p><b>г. Жезказган</b></p>',
                '<div class="swit form">
                        <p><b>г. Алматы</b></p>',
                $content);

            $content = str_replace(
                '<option value="Жезказган" selected="selected">Жезказган</option>',
                '<option value="Алматы" selected="selected">Алматы</option>',
                $content);

            $content = str_replace('<li><a href="../' . $originalFile . '">Жезказган</a></li>', '<li><a href="../' . $originalFile . '">Алматы</a></li>', $content);
            $content = str_replace('<p>Жезказган:</p><span>', '<p>Алматы:</p><span>', $content);
            break;
        case 'karaganda':
            $content = getContent($location, $originalFile, $content);

            $content = str_replace('в Алматы', 'в Караганде', $content);
            $content = str_replace('Алматы', 'Караганда', $content);
            $content = str_replace('алматы', 'караганда', $content);

            $content = str_replace(
                ' – Softgroup.kz',
                ' SoftGroup',
                $content);
            $content = str_replace(
                'Softgroup.kz',
                'SoftGroup',
                $content);
            $content = str_replace(
                '<div class="swit form">
                        <p><b>г. Караганда</b></p>',
                '<div class="swit form">
                        <p><b>г. Алматы</b></p>',
                $content);

            $content = str_replace(
                '<option value="Караганда" selected="selected">Караганда</option>',
                '<option value="Алматы" selected="selected">Алматы</option>',
                $content);

            $content = str_replace('<li><a href="../' . $originalFile . '">Караганда</a></li>', '<li><a href="../' . $originalFile . '">Алматы</a></li>', $content);
            $content = str_replace('<p>Караганда:</p><span>', '<p>Алматы:</p><span>', $content);
            break;
        case 'kokshetau':
            $content = getContent($location, $originalFile, $content);

            $content = str_replace('в Алматы', 'в Кокшетау', $content);
            $content = str_replace('Алматы', 'Кокшетау', $content);
            $content = str_replace('алматы', 'кокшетау', $content);

            $content = str_replace(
                ' – Softgroup.kz',
                ' SoftGroup',
                $content);
            $content = str_replace(
                'Softgroup.kz',
                'SoftGroup',
                $content);
            $content = str_replace(
                '<div class="swit form">
                        <p><b>г. Кокшетау</b></p>',
                '<div class="swit form">
                        <p><b>г. Алматы</b></p>',
                $content);

            $content = str_replace(
                '<option value="Кокшетау" selected="selected">Кокшетау</option>',
                '<option value="Алматы" selected="selected">Алматы</option>',
                $content);

            $content = str_replace('<li><a href="../' . $originalFile . '">Кокшетау</a></li>', '<li><a href="../' . $originalFile . '">Алматы</a></li>', $content);
            $content = str_replace('<p>Кокшетау:</p><span>', '<p>Алматы:</p><span>', $content);
            break;
        case 'kostanai':
            $content = getContent($location, $originalFile, $content);

            $content = str_replace('в Алматы', 'в Костанай', $content);
            $content = str_replace('Алматы', 'Костанай', $content);
            $content = str_replace('алматы', 'костанай', $content);

            $content = str_replace(
                ' – Softgroup.kz',
                ' SoftGroup',
                $content);
            $content = str_replace(
                'Softgroup.kz',
                'SoftGroup',
                $content);
            $content = str_replace(
                '<div class="swit form">
                        <p><b>г. Костанай</b></p>',
                '<div class="swit form">
                        <p><b>г. Алматы</b></p>',
                $content);

            $content = str_replace(
                '<option value="Костанай" selected="selected">Костанай</option>',
                '<option value="Алматы" selected="selected">Алматы</option>',
                $content);

            $content = str_replace('<li><a href="../' . $originalFile . '">Костанай</a></li>', '<li><a href="../' . $originalFile . '">Алматы</a></li>', $content);
            $content = str_replace('<p>Костанай:</p><span>', '<p>Алматы:</p><span>', $content);
            break;
        case 'kyzylorda':
            $content = getContent($location, $originalFile, $content);

            $content = str_replace('в Алматы', 'в Кызылорде', $content);
            $content = str_replace('Алматы', 'Кызылорда', $content);
            $content = str_replace('алматы', 'кызылорда', $content);

            $content = str_replace(
                ' – Softgroup.kz',
                ' SoftGroup',
                $content);
            $content = str_replace(
                'Softgroup.kz',
                'SoftGroup',
                $content);
            $content = str_replace(
                '<div class="swit form">
                        <p><b>г. Кызылорда</b></p>',
                '<div class="swit form">
                        <p><b>г. Алматы</b></p>',
                $content);

            $content = str_replace(
                '<option value="Кызылорда" selected="selected">Кызылорда</option>',
                '<option value="Алматы" selected="selected">Алматы</option>',
                $content);

            $content = str_replace('<li><a href="../' . $originalFile . '">Кызылорда</a></li>', '<li><a href="../' . $originalFile . '">Алматы</a></li>', $content);
            $content = str_replace('<p>Кызылорда:</p><span>', '<p>Алматы:</p><span>', $content);
            break;
        case 'astana':
            $content = getContent($location, $originalFile, $content);

            $content = str_replace('в Алматы', 'в Астане', $content);
            $content = str_replace('Алматы', 'Астана', $content);
            $content = str_replace('алматы', 'астана', $content);

            $content = str_replace(
                ' – Softgroup.kz',
                ' SoftGroup',
                $content);
            $content = str_replace(
                'Softgroup.kz',
                'SoftGroup',
                $content);

            $content = str_replace(
                '<option value="Астана" selected="selected">Астана</option>',
                '<option value="Алматы" selected="selected">Алматы</option>',
                $content);

            $content = str_replace('<li><a href="../' . $originalFile . '">Астана</a></li>', '<li><a href="../' . $originalFile . '">Алматы</a></li>', $content);

            $content = str_replace(
                '<div class="mail-agileits-w3layouts" style="margin-top:1.5em">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <div class="contact-right">
                                <p>Астана:</p><span><a href="https://2gis.kz/almaty/firm/9429940000970891?snow"> ул.
                                        Мынбаева 43 (уг. ул. Манаса)</a></span>
                                <br><span><a href="tel:87273449900">8 (727) 344-99-00</a><br>
                                    <a href="tel:87012667700"> +7 (701) 266-77-00</a><br>
                                    <a href="tel:87027773656"> +7 702 777 3656</a>
                                    <br> <a href="mailto:zakaz@idiamarket.kz">zakaz@idiamarket.kz</a></span>
                                <div style="margin-top:7px;"><a style="color:#07c;"
                                        href="contact_almaty.html"><b>посмотреть на карте</b></a></div>
                                <div style="margin-top:7px;"><a href="https://2gis.kz/almaty/firm/9429940000970891?snow"
                                        target="_blank" style="color:#07c;"><b>посмотреть на 2Gis</b></a></div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>

                        <div class="mail-agileits-w3layouts">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <div class="contact-right">
                                <p>Астана:</p><span><a
                                        href="https://2gis.kz/nur_sultan/firm/70000001027762786?m=71.460673%2C51.171641%2F16&snow">
                                        ул. Бейсекбаева 24/1, 2-этаж, бизнес центр DARA</a></span>
                                <span><br> <a href="tel:87172279900">8 (7172) 27-99-00</a><br>
                                   
                                            <a href="tel:87015112200">+7(701) 511-22-00</a><br>
											<a href="mailto:astana@idiamarket.kz">astana@idiamarket.kz</a></span>
                                <div style="margin-top:7px;"><a href="contact_astana.html"
                                        style="color:#07c;"><b>посмотреть на карте</b></a></div>
                                <div style="margin-top:7px;"><a
                                        href="https://2gis.kz/nur_sultan/firm/70000001027762786?m=71.460673%2C51.171641%2F16&snow"
                                        target="_blank" style="color:#07c;"><b>посмотреть на 2Gis</b></a></div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>

                        <div class="mail-agileits-w3layouts">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <div class="contact-right">
                                <p>Шымкент:</p><span><a
                                        href="https://2gis.kz/shymkent/inside/22659371323900392/firm/70000001061039192?m=69.598973%2C42.331511%2F17.72">
                                        ул. Мадели кожа 35/1, (уг.ул. Байтурсынова) 1-этаж, бизнес-центр BNK</a></span>
                                <br><span><a href="tel:87252399900">8 (7252) 39-99-00</a><br>
                                    <a href="tel:87019447700">+7 (701) 944-77-00</a>
                                    <br> <a href="mailto:shymkent@idiamarket.kz">shymkent@idiamarket.kz</a></span>
                                <div style="margin-top:7px;"><a href="contact_shymkent.html"
                                        style="color:#07c;"><b>посмотреть на карте</b></a></div>
                                <div style="margin-top:7px;"><a
                                        href="https://2gis.kz/shymkent/inside/22659371323900392/firm/70000001061039192?m=69.598973%2C42.331511%2F17.72"
                                        target="_blank" style="color:#07c;"><b>посмотреть на 2Gis</b></a></div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>',

                '<div class="mail-agileits-w3layouts" style="margin-top:1.5em">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <div class="contact-right">
                                <p>Астана:</p>
                                <span><a href="https://2gis.kz/nur_sultan/firm/70000001027762786?m=71.460673%2C51.171641%2F16&snow"> ул.Бейсекбаева 24/1, 2-этаж, бизнес центр DARA</a></span>
                                <br>
                                <span> 
                                <a href="tel:87172279900">8 (7172) 27-99-00</a><br>
                                <a href="tel:87015112200">+7(701) 511-22-00</a><br>
								<a href="mailto:astana@idiamarket.kz">astana@idiamarket.kz</a>
								</span>
                                <div style="margin-top:7px;"><a href="contact_astana.html" style="color:#07c;"><b>посмотреть на карте</b></a></div>
                                <div style="margin-top:7px;"><a href="https://2gis.kz/nur_sultan/firm/70000001027762786?m=71.460673%2C51.171641%2F16&snow" target="_blank" style="color:#07c;"><b>посмотреть на 2Gis</b></a></div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        
                        <div class="mail-agileits-w3layouts">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <div class="contact-right">
                                <p>Алматы:</p>
                                <span><a href="https://2gis.kz/almaty/firm/9429940000970891?snow"> ул.Мынбаева 43 (уг. ул. Манаса)</a></span>
                                <br>
                                <span>
                                <a href="tel:87273449900">8 (727) 344-99-00</a><br>
                                <a href="tel:87012667700"> +7 (701) 266-77-00</a><br>
                                <a href="tel:87027773656"> +7 702 777 3656</a><br> 
                                <a href="mailto:zakaz@idiamarket.kz">zakaz@idiamarket.kz</a>
                                </span>
                                <div style="margin-top:7px;"><a style="color:#07c;" href="contact_almaty.html"><b>посмотреть на карте</b></a></div>
                                <div style="margin-top:7px;"><a href="https://2gis.kz/almaty/firm/9429940000970891?snow" target="_blank" style="color:#07c;"><b>посмотреть на 2Gis</b></a></div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>

                        <div class="mail-agileits-w3layouts">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <div class="contact-right">
                                <p>Шымкент:</p>
                                <span><a href="https://2gis.kz/shymkent/inside/22659371323900392/firm/70000001061039192?m=69.598973%2C42.331511%2F17.72"> ул.Мадели кожа 35/1, (уг.ул. Байтурсынова) 1-этаж, бизнес-центр BNK</a></span>
                                <br>
                                <span>
                                <a href="tel:87252399900">8 (7252) 39-99-00</a><br>
                                <a href="tel:87019447700">+7 (701) 944-77-00</a><br> 
                                <a href="mailto:shymkent@idiamarket.kz">shymkent@idiamarket.kz</a>
                                </span>
                                <div style="margin-top:7px;"><a href="contact_shymkent.html" style="color:#07c;"><b>посмотреть на карте</b></a></div>
                                <div style="margin-top:7px;"><a href="https://2gis.kz/shymkent/inside/22659371323900392/firm/70000001061039192?m=69.598973%2C42.331511%2F17.72" target="_blank" style="color:#07c;"><b>посмотреть на 2Gis</b></a></div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>',
                $content);

            $content = str_replace(
                '<p> ул. Мынбаева 43<br> (уг. ул. между Ауезова и Манаса),<br> 1-этаж, 050008</p>
                        <p><a href="tel:87273449900">8 (727) 344-99-00</a></p>
                        <p><a href="tel:87012667700">+7 (701) 266-77-00</a></p>
                        <p><a href="tel:87011018388">+7 (701) 101-83-88</a></p>
                        <p><a href="tel:87012336600">+7 701 233 6600</a></p>
                        <p>Email: zakaz@idiamarket.kz</p>',
                '<p> ул. Бейсекбаева 24/1, 2-этаж, бизнес центр DARA</p>
                        <p><a href="tel:87172279900">+7 (7172) 27-99-00</a></p>
                        <p><a href="tel:87015112200">+7 (701) 511-22-00</a></p>
                        <p>Email: astana@idiamarket.kz</p>',
                $content);

            // Header Phone
            $content = str_replace(
                "<div class=\"nomer\"><a href=\"tel:87273449900\">8(727) <span>344-99-00</span></a></div>",
                "<div class=\"nomer\"><a href=\"tel:87172279900\">8(7172) <span>27-99-00</span></a></div>",
                $content);
            $content = str_replace(
                "<div class=\"nomer\"><a href=\"tel:87012667700\">8(701) <span>266-77-00</span></a></div>",
                "",
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
        case 'pavlodar':
            $content = getContent($location, $originalFile, $content);

            $content = str_replace('в Алматы', 'в Павлодаре', $content);
            $content = str_replace('Алматы', 'Павлодар', $content);
            $content = str_replace('алматы', 'павлодар', $content);

            $content = str_replace(
                ' – Softgroup.kz',
                ' SoftGroup',
                $content);
            $content = str_replace(
                'Softgroup.kz',
                'SoftGroup',
                $content);
            $content = str_replace(
                '<div class="swit form">
                        <p><b>г. Павлодар</b></p>',
                '<div class="swit form">
                        <p><b>г. Алматы</b></p>',
                $content);

            $content = str_replace(
                '<option value="Павлодар" selected="selected">Павлодар</option>',
                '<option value="Алматы" selected="selected">Алматы</option>',
                $content);

            $content = str_replace('<li><a href="../' . $originalFile . '">Павлодар</a></li>', '<li><a href="../' . $originalFile . '">Алматы</a></li>', $content);
            $content = str_replace('<p>Павлодар:</p><span>', '<p>Алматы:</p><span>', $content);
            break;
        case 'petropavlovsk':
            $content = getContent($location, $originalFile, $content);

            $content = str_replace('в Алматы', 'в Петропавловске', $content);
            $content = str_replace('Алматы', 'Петропавловск', $content);
            $content = str_replace('алматы', 'петропавловск', $content);

            $content = str_replace(
                ' – Softgroup.kz',
                ' SoftGroup',
                $content);
            $content = str_replace(
                'Softgroup.kz',
                'SoftGroup',
                $content);
            $content = str_replace(
                '<div class="swit form">
                        <p><b>г. Петропавловск</b></p>',
                '<div class="swit form">
                        <p><b>г. Алматы</b></p>',
                $content);

            $content = str_replace(
                '<option value="Петропавловск" selected="selected">Петропавловск</option>',
                '<option value="Алматы" selected="selected">Алматы</option>',
                $content);

            $content = str_replace('<li><a href="../' . $originalFile . '">Петропавловск</a></li>', '<li><a href="../' . $originalFile . '">Алматы</a></li>', $content);
            $content = str_replace('<p>Петропавловск:</p><span>', '<p>Алматы:</p><span>', $content);
            break;
        case 'semei':
            $content = getContent($location, $originalFile, $content);

            $content = str_replace('в Алматы', 'в Семей', $content);
            $content = str_replace('Алматы', 'Семей', $content);
            $content = str_replace('алматы', 'семей', $content);

            $content = str_replace(
                ' – Softgroup.kz',
                ' SoftGroup',
                $content);
            $content = str_replace(
                'Softgroup.kz',
                'SoftGroup',
                $content);
            $content = str_replace(
                '<div class="swit form">
                        <p><b>г. Семей</b></p>',
                '<div class="swit form">
                        <p><b>г. Алматы</b></p>',
                $content);

            $content = str_replace(
                '<option value="Семей" selected="selected">Семей</option>',
                '<option value="Алматы" selected="selected">Алматы</option>',
                $content);

            $content = str_replace('<li><a href="../' . $originalFile . '">Семей</a></li>', '<li><a href="../' . $originalFile . '">Алматы</a></li>', $content);
            $content = str_replace('<p>Семей:</p><span>', '<p>Алматы:</p><span>', $content);
            break;
        case 'taldykorgan':
            $content = getContent($location, $originalFile, $content);

            $content = str_replace('в Алматы', 'в Талдыкоргане', $content);
            $content = str_replace('Алматы', 'Талдыкорган', $content);
            $content = str_replace('алматы', 'талдыкорган', $content);

            $content = str_replace(
                ' – Softgroup.kz',
                ' SoftGroup',
                $content);
            $content = str_replace(
                'Softgroup.kz',
                'SoftGroup',
                $content);
            $content = str_replace(
                '<div class="swit form">
                        <p><b>г. Талдыкорган</b></p>',
                '<div class="swit form">
                        <p><b>г. Алматы</b></p>',
                $content);

            $content = str_replace(
                '<option value="Талдыкорган" selected="selected">Талдыкорган</option>',
                '<option value="Алматы" selected="selected">Алматы</option>',
                $content);

            $content = str_replace('<li><a href="../' . $originalFile . '">Талдыкорган</a></li>', '<li><a href="../' . $originalFile . '">Алматы</a></li>', $content);
            $content = str_replace('<p>Талдыкорган:</p><span>', '<p>Алматы:</p><span>', $content);
            break;
        case 'taraz':
            $content = getContent($location, $originalFile, $content);

            $content = str_replace('в Алматы', 'в Таразе', $content);
            $content = str_replace('Алматы', 'Тараз', $content);
            $content = str_replace('алматы', 'тараз', $content);

            $content = str_replace(
                ' – Softgroup.kz',
                ' SoftGroup',
                $content);
            $content = str_replace(
                'Softgroup.kz',
                'SoftGroup',
                $content);
            $content = str_replace(
                '<div class="swit form">
                        <p><b>г. Тараз</b></p>',
                '<div class="swit form">
                        <p><b>г. Алматы</b></p>',
                $content);

            $content = str_replace(
                '<option value="Тараз" selected="selected">Тараз</option>',
                '<option value="Алматы" selected="selected">Алматы</option>',
                $content);

            $content = str_replace('<li><a href="../' . $originalFile . '">Тараз</a></li>', '<li><a href="../' . $originalFile . '">Алматы</a></li>', $content);
            $content = str_replace('<p>Тараз:</p><span>', '<p>Алматы:</p><span>', $content);
            break;
        case 'turkestan':
            $content = getContent($location, $originalFile, $content);

            $content = str_replace('в Алматы', 'в Туркестане', $content);
            $content = str_replace('Алматы', 'Туркестан', $content);
            $content = str_replace('алматы', 'туркестан', $content);

            $content = str_replace(
                ' – Softgroup.kz',
                ' SoftGroup',
                $content);
            $content = str_replace(
                'Softgroup.kz',
                'SoftGroup',
                $content);
            $content = str_replace(
                '<div class="swit form">
                        <p><b>г. Туркестан</b></p>',
                '<div class="swit form">
                        <p><b>г. Алматы</b></p>',
                $content);

            $content = str_replace(
                '<option value="Туркестан" selected="selected">Туркестан</option>',
                '<option value="Алматы" selected="selected">Алматы</option>',
                $content);

            $content = str_replace('<li><a href="../' . $originalFile . '">Туркестан</a></li>', '<li><a href="../' . $originalFile . '">Алматы</a></li>', $content);
            $content = str_replace('<p>Туркестан:</p><span>', '<p>Алматы:</p><span>', $content);
            break;
        case 'uralsk':
            $content = getContent($location, $originalFile, $content);

            $content = str_replace('в Алматы', 'в Уральске', $content);
            $content = str_replace('Алматы', 'Уральск', $content);
            $content = str_replace('алматы', 'уральск', $content);

            $content = str_replace(
                ' – Softgroup.kz',
                ' SoftGroup',
                $content);
            $content = str_replace(
                'Softgroup.kz',
                'SoftGroup',
                $content);
            $content = str_replace(
                '<div class="swit form">
                        <p><b>г. Уральск</b></p>',
                '<div class="swit form">
                        <p><b>г. Алматы</b></p>',
                $content);

            $content = str_replace(
                '<option value="Уральск" selected="selected">Уральск</option>',
                '<option value="Алматы" selected="selected">Алматы</option>',
                $content);

            $content = str_replace('<li><a href="../' . $originalFile . '">Уральск</a></li>', '<li><a href="../' . $originalFile . '">Алматы</a></li>', $content);
            $content = str_replace('<p>Уральск:</p><span>', '<p>Алматы:</p><span>', $content);
            break;
        case 'ust-kamenogorsk':
            $content = getContent($location, $originalFile, $content);

            $content = str_replace('в Алматы', 'в Усть-Каменогорске', $content);
            $content = str_replace('Алматы', 'Усть-Каменогорск', $content);
            $content = str_replace('алматы', 'усть-каменогорск', $content);

            $content = str_replace(
                ' – Softgroup.kz',
                ' SoftGroup',
                $content);
            $content = str_replace(
                'Softgroup.kz',
                'SoftGroup',
                $content);
            $content = str_replace(
                '<div class="swit form">
                        <p><b>г. Усть-Каменогорск</b></p>',
                '<div class="swit form">
                        <p><b>г. Алматы</b></p>',
                $content);

            $content = str_replace(
                '<option value="Усть-Каменогорск" selected="selected">Усть-Каменогорск</option>',
                '<option value="Алматы" selected="selected">Алматы</option>',
                $content);

            $content = str_replace('<li><a href="../' . $originalFile . '">Усть-Каменогорск</a></li>', '<li><a href="../' . $originalFile . '">Алматы</a></li>', $content);
            $content = str_replace('<p>Усть-Каменогорск:</p><span>', '<p>Алматы:</p><span>', $content);
            break;
        case 'shymkent':
            $content = getContent($location, $originalFile, $content);

            $content = str_replace('в Алматы', 'в Шымкенте', $content);
            $content = str_replace('Алматы', 'Шымкент', $content);
            $content = str_replace('алматы', 'шымкент', $content);

            $content = str_replace(
                ' – Softgroup.kz',
                ' SoftGroup',
                $content);
            $content = str_replace(
                'Softgroup.kz',
                'SoftGroup',
                $content);

            $content = str_replace(
                '<option value="Шымкент" selected="selected">Шымкент</option>',
                '<option value="Алматы" selected="selected">Алматы</option>',
                $content);

            $content = str_replace('<li><a href="../' . $originalFile . '">Шымкент</a></li>', '<li><a href="../' . $originalFile . '">Алматы</a></li>', $content);

            $content = str_replace(
                '<div class="mail-agileits-w3layouts" style="margin-top:1.5em">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <div class="contact-right">
                                <p>Шымкент:</p><span><a href="https://2gis.kz/almaty/firm/9429940000970891?snow"> ул.
                                        Мынбаева 43 (уг. ул. Манаса)</a></span>
                                <br><span><a href="tel:87273449900">8 (727) 344-99-00</a><br>
                                    <a href="tel:87012667700"> +7 (701) 266-77-00</a><br>
                                    <a href="tel:87027773656"> +7 702 777 3656</a>
                                    <br> <a href="mailto:zakaz@idiamarket.kz">zakaz@idiamarket.kz</a></span>
                                <div style="margin-top:7px;"><a style="color:#07c;"
                                        href="contact_almaty.html"><b>посмотреть на карте</b></a></div>
                                <div style="margin-top:7px;"><a href="https://2gis.kz/almaty/firm/9429940000970891?snow"
                                        target="_blank" style="color:#07c;"><b>посмотреть на 2Gis</b></a></div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>

                        <div class="mail-agileits-w3layouts">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <div class="contact-right">
                                <p>Астана:</p><span><a
                                        href="https://2gis.kz/nur_sultan/firm/70000001027762786?m=71.460673%2C51.171641%2F16&snow">
                                        ул. Бейсекбаева 24/1, 2-этаж, бизнес центр DARA</a></span>
                                <span><br> <a href="tel:87172279900">8 (7172) 27-99-00</a><br>
                                   
                                            <a href="tel:87015112200">+7(701) 511-22-00</a><br>
											<a href="mailto:astana@idiamarket.kz">astana@idiamarket.kz</a></span>
                                <div style="margin-top:7px;"><a href="contact_astana.html"
                                        style="color:#07c;"><b>посмотреть на карте</b></a></div>
                                <div style="margin-top:7px;"><a
                                        href="https://2gis.kz/nur_sultan/firm/70000001027762786?m=71.460673%2C51.171641%2F16&snow"
                                        target="_blank" style="color:#07c;"><b>посмотреть на 2Gis</b></a></div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>

                        <div class="mail-agileits-w3layouts">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <div class="contact-right">
                                <p>Шымкент:</p><span><a
                                        href="https://2gis.kz/shymkent/inside/22659371323900392/firm/70000001061039192?m=69.598973%2C42.331511%2F17.72">
                                        ул. Мадели кожа 35/1, (уг.ул. Байтурсынова) 1-этаж, бизнес-центр BNK</a></span>
                                <br><span><a href="tel:87252399900">8 (7252) 39-99-00</a><br>
                                    <a href="tel:87019447700">+7 (701) 944-77-00</a>
                                    <br> <a href="mailto:shymkent@idiamarket.kz">shymkent@idiamarket.kz</a></span>
                                <div style="margin-top:7px;"><a href="contact_shymkent.html"
                                        style="color:#07c;"><b>посмотреть на карте</b></a></div>
                                <div style="margin-top:7px;"><a
                                        href="https://2gis.kz/shymkent/inside/22659371323900392/firm/70000001061039192?m=69.598973%2C42.331511%2F17.72"
                                        target="_blank" style="color:#07c;"><b>посмотреть на 2Gis</b></a></div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>',

                '<div class="mail-agileits-w3layouts" style="margin-top:1.5em">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <div class="contact-right">
                                <p>Шымкент:</p>
                                <span><a href="https://2gis.kz/shymkent/inside/22659371323900392/firm/70000001061039192?m=69.598973%2C42.331511%2F17.72"> ул.Мадели кожа 35/1, (уг.ул. Байтурсынова) 1-этаж, бизнес-центр BNK</a></span>
                                <br>
                                <span>
                                <a href="tel:87252399900">8 (7252) 39-99-00</a><br>
                                <a href="tel:87019447700">+7 (701) 944-77-00</a><br> 
                                <a href="mailto:shymkent@idiamarket.kz">shymkent@idiamarket.kz</a>
                                </span>
                                <div style="margin-top:7px;"><a href="contact_shymkent.html" style="color:#07c;"><b>посмотреть на карте</b></a></div>
                                <div style="margin-top:7px;"><a href="https://2gis.kz/shymkent/inside/22659371323900392/firm/70000001061039192?m=69.598973%2C42.331511%2F17.72" target="_blank" style="color:#07c;"><b>посмотреть на 2Gis</b></a></div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        
                        <div class="mail-agileits-w3layouts">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <div class="contact-right">
                                <p>Алматы:</p>
                                <span><a href="https://2gis.kz/almaty/firm/9429940000970891?snow"> ул.Мынбаева 43 (уг. ул. Манаса)</a></span>
                                <br>
                                <span>
                                <a href="tel:87273449900">8 (727) 344-99-00</a><br>
                                <a href="tel:87012667700"> +7 (701) 266-77-00</a><br>
                                <a href="tel:87027773656"> +7 702 777 3656</a><br> 
                                <a href="mailto:zakaz@idiamarket.kz">zakaz@idiamarket.kz</a>
                                </span>
                                <div style="margin-top:7px;"><a style="color:#07c;" href="contact_almaty.html"><b>посмотреть на карте</b></a></div>
                                <div style="margin-top:7px;"><a href="https://2gis.kz/almaty/firm/9429940000970891?snow" target="_blank" style="color:#07c;"><b>посмотреть на 2Gis</b></a></div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        
                        <div class="mail-agileits-w3layouts">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <div class="contact-right">
                                <p>Астана:</p>
                                <span><a href="https://2gis.kz/nur_sultan/firm/70000001027762786?m=71.460673%2C51.171641%2F16&snow"> ул.Бейсекбаева 24/1, 2-этаж, бизнес центр DARA</a></span>
                                <br>
                                <span> 
                                <a href="tel:87172279900">8 (7172) 27-99-00</a><br>
                                <a href="tel:87015112200">+7(701) 511-22-00</a><br>
								<a href="mailto:astana@idiamarket.kz">astana@idiamarket.kz</a>
								</span>
                                <div style="margin-top:7px;"><a href="contact_astana.html" style="color:#07c;"><b>посмотреть на карте</b></a></div>
                                <div style="margin-top:7px;"><a href="https://2gis.kz/nur_sultan/firm/70000001027762786?m=71.460673%2C51.171641%2F16&snow" target="_blank" style="color:#07c;"><b>посмотреть на 2Gis</b></a></div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                       
                        ',
                $content);

            $content = str_replace(
                '<p> ул. Мынбаева 43<br> (уг. ул. между Ауезова и Манаса),<br> 1-этаж, 050008</p>
                        <p><a href="tel:87273449900">8 (727) 344-99-00</a></p>
                        <p><a href="tel:87012667700">+7 (701) 266-77-00</a></p>
                        <p><a href="tel:87011018388">+7 (701) 101-83-88</a></p>
                        <p><a href="tel:87012336600">+7 701 233 6600</a></p>
                        <p>Email: zakaz@idiamarket.kz</p>',
                '<p> ул. Мадели кожа 35/1, (уг.ул. Байтурсынова) 1-этаж, бизнес-центр BNK</p>
                        <p><a href="tel:87252399900">+7 (7252) 39-99-00</a></p>
                        <p><a href="tel:87019447700">+7 (701) 944-77-00</a></p>
                        <p>Email: shymkent@idiamarket.kz</p>',
                $content);

            // Header Phone
            $content = str_replace(
                "<div class=\"nomer\"><a href=\"tel:87273449900\">8(727) <span>344-99-00</span></a></div>",
                "<div class=\"nomer\"><a href=\"tel:87252399900\">8(7252) <span>39-99-00</span></a></div>", $content);
            $content = str_replace(
                "<div class=\"nomer\"><a href=\"tel:87012667700\">8(701) <span>266-77-00</span></a></div>",
                "<div class=\"nomer\"><a href=\"tel:87019447700\">8(701) <span>944-77-00</span></a></div>", $content);
            // Footer Phone / Email / Address

            $content = str_replace(
                '<p><a href="tel:87273449900 ">8 (727) 344-99-00</a></p>',
                '<p><a href="tel:87252399900">+7 (7252) 39-99-00</a></p>',
                $content);
            $content = str_replace(
                '<p><a href="tel:87273449900">8 (727) 344-99-00</a></p>',
                '<p><a href="tel:87252399900">+7 (7252) 39-99-00</a></p>',
                $content);

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
    }

    file_put_contents($file, $content);

    //--------------------------------------------------------------
    echo PHP_EOL . ' 3 - UPDATE TAGS ' . PHP_EOL;
    //--------------------------------------------------------------
}

function getContent($location, $originalFile, $content)
{
    $array = [];
    $array[] = 'href="' . $originalFile . '">Алматы</a>';
    $array[] = 'href="../' . $originalFile . '">Алматы</a>';

    $array[] = 'aktau/' . $originalFile;
    $array[] = $location == 'aktau' ? $originalFile : '../aktau/' . $originalFile;

    $array[] = 'aktobe/' . $originalFile;
    $array[] = $location == 'aktobe' ? $originalFile : '../aktobe/' . $originalFile;

    $array[] = 'atyrau/' . $originalFile;
    $array[] = $location == 'atyrau' ? $originalFile : '../atyrau/' . $originalFile;

    $array[] = 'janaozen/' . $originalFile;
    $array[] = $location == 'janaozen' ? $originalFile : '../janaozen/' . $originalFile;

    $array[] = 'jezkazgan/' . $originalFile;
    $array[] = $location == 'jezkazgan' ? $originalFile : '../jezkazgan/' . $originalFile;

    $array[] = 'karaganda/' . $originalFile;
    $array[] = $location == 'karaganda' ? $originalFile : '../karaganda/' . $originalFile;

    $array[] = 'kokshetau/' . $originalFile;
    $array[] = $location == 'kokshetau' ? $originalFile : '../kokshetau/' . $originalFile;

    $array[] = 'kyzylorda/' . $originalFile;
    $array[] = $location == 'kyzylorda' ? $originalFile : '../kyzylorda/' . $originalFile;

    $array[] = 'kostanai/' . $originalFile;
    $array[] = $location == 'kostanai' ? $originalFile : '../kostanai/' . $originalFile;

    $array[] = 'astana/' . $originalFile;
    $array[] = $location == 'astana' ? $originalFile : '../astana/' . $originalFile;

    $array[] = 'pavlodar/' . $originalFile;
    $array[] = $location == 'pavlodar' ? $originalFile : '../pavlodar/' . $originalFile;

    $array[] = 'petropavlovsk/' . $originalFile;
    $array[] = $location == 'petropavlovsk' ? $originalFile : '../petropavlovsk/' . $originalFile;

    $array[] = 'semei/' . $originalFile;
    $array[] = $location == 'semei' ? $originalFile : '../semei/' . $originalFile;

    $array[] = 'taldykorgan/' . $originalFile;
    $array[] = $location == 'taldykorgan' ? $originalFile : '../taldykorgan/' . $originalFile;

    $array[] = 'taraz/' . $originalFile;
    $array[] = $location == 'taraz' ? $originalFile : '../taraz/' . $originalFile;

    $array[] = 'turkestan/' . $originalFile;
    $array[] = $location == 'turkestan' ? $originalFile : '../turkestan/' . $originalFile;

    $array[] = 'uralsk/' . $originalFile;
    $array[] = $location == 'uralsk' ? $originalFile : '../uralsk/' . $originalFile;

    $array[] = 'ust-kamenogorsk/' . $originalFile;
    $array[] = $location == 'ust-kamenogorsk' ? $originalFile : '../ust-kamenogorsk/' . $originalFile;

    $array[] = 'shymkent/' . $originalFile;
    $array[] = $location == 'shymkent' ? $originalFile : '../shymkent/' . $originalFile;


    $content = str_replace($array[0], $array[1], $content);
    $content = str_replace($array[2], $array[3], $content);
    $content = str_replace($array[4], $array[5], $content);
    $content = str_replace($array[6], $array[7], $content);
    $content = str_replace($array[8], $array[9], $content);
    $content = str_replace($array[10], $array[11], $content);
    $content = str_replace($array[12], $array[13], $content);
    $content = str_replace($array[14], $array[15], $content);
    $content = str_replace($array[16], $array[17], $content);
    $content = str_replace($array[18], $array[19], $content);
    $content = str_replace($array[20], $array[21], $content);
    $content = str_replace($array[22], $array[23], $content);
    $content = str_replace($array[24], $array[25], $content);
    $content = str_replace($array[26], $array[27], $content);
    $content = str_replace($array[28], $array[29], $content);
    $content = str_replace($array[30], $array[31], $content);
    $content = str_replace($array[32], $array[33], $content);
    $content = str_replace($array[34], $array[35], $content);
    $content = str_replace($array[36], $array[37], $content);
    $content = str_replace($array[38], $array[39], $content);
    return $content;
}

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

$filesToChange = [
    'reviews.php',
];

foreach ($directories as $dir) {
    echo PHP_EOL . ' START DIRECTORY -------------------> ' . $dir . '. <br> ' . PHP_EOL;
    foreach ($filesToChange as $file) {
        $wayToFile = $dir . DIRECTORY_SEPARATOR . $file;
        echo PHP_EOL . ' FILE -----> ' . $wayToFile . ' <br> ' . PHP_EOL;
        justCopyFile($file, $wayToFile);
        changeNameCityAndHeaderFooter($wayToFile, $dir);
    }
}
/*--------------------------------------------------------------------------------------------------------------------*/
function justCopyFile($mainFile, $wayToSubFile)
{
    $mainContent = file_get_contents($mainFile);
    if (file_put_contents($wayToSubFile, $mainContent)) {
        echo PHP_EOL . ' Copy ---> ' . $wayToSubFile . '. <br> ' . PHP_EOL;
    } else {
        echo PHP_EOL . ' STOP COPY ---> ' . $wayToSubFile . '. <br> ' . PHP_EOL;
        die();
    }
}
/*--------------------------------------------------------------------------------------------------------------------*/
function changeNameCityAndHeaderFooter($fileWhichChange, $location)
{
    $content = file_get_contents($fileWhichChange);

    switch ($location) {
        case 'astana':
            // Title | Description
            $content = changeTitleDisc('в Алматы', 'в Астане', $content);
            $content = changeTitleDisc('Алматы', 'Астана', $content);
            $content = changeTitleDisc('алматы', 'астана', $content);
            // Header | Footer
            $content = changeHeaderFooterAstana($content);
            // ChangePageHeadAgileInfoW3l
            $content = changePageHeadAgileInfoW3l('в Алматы', 'в Астане', $content);
            $content = changePageHeadAgileInfoW3l('Алматы', 'Астана', $content);
            $content = changePageHeadAgileInfoW3l('алматы', 'астана', $content);
            // ChangePageTitle
            $content = changePageTitle('в Алматы', 'в Астане', $content);
            $content = changePageTitle('Алматы', 'Астана', $content);
            $content = changePageTitle('алматы', 'астана', $content);
            // ChangeCitySelector
            $content = changeCitySelector($content, 'Астана');
            break;
        case 'karaganda':
            // Title | Description
            $content = changeTitleDisc('в Алматы', 'в Караганде', $content);
            $content = changeTitleDisc('Алматы', 'Караганда', $content);
            $content = changeTitleDisc('алматы', 'караганда', $content);
            // Header | Footer
            $content = changeHeaderFooterAstana($content);
            // ChangePageHeadAgileInfoW3l
            $content = changePageHeadAgileInfoW3l('в Алматы', 'в Караганде', $content);
            $content = changePageHeadAgileInfoW3l('Алматы', 'Караганда', $content);
            $content = changePageHeadAgileInfoW3l('алматы', 'караганда', $content);
            // ChangePageTitle
            $content = changePageTitle('в Алматы', 'в Караганде', $content);
            $content = changePageTitle('Алматы', 'Караганда', $content);
            $content = changePageTitle('алматы', 'караганда', $content);
            // ChangeCitySelector
            $content = changeCitySelector($content, 'Караганда');
            break;
        case 'kokshetau':
            // Title | Description
            $content = changeTitleDisc('в Алматы', 'в Кокшетау', $content);
            $content = changeTitleDisc('Алматы', 'Кокшетау', $content);
            $content = changeTitleDisc('алматы', 'кокшетау', $content);
            // Header | Footer
            $content = changeHeaderFooterAstana($content);
            // ChangePageHeadAgileInfoW3l
            $content = changePageHeadAgileInfoW3l('в Алматы', 'в Кокшетау', $content);
            $content = changePageHeadAgileInfoW3l('Алматы', 'Кокшетау', $content);
            $content = changePageHeadAgileInfoW3l('алматы', 'кокшетау', $content);
            // ChangePageTitle
            $content = changePageTitle('в Алматы', 'в Кокшетау', $content);
            $content = changePageTitle('Алматы', 'Кокшетау', $content);
            $content = changePageTitle('алматы', 'кокшетау', $content);
            // ChangeCitySelector
            $content = changeCitySelector($content, 'Кокшетау');
            break;
        case 'kostanai':
            // Title | Description
            $content = changeTitleDisc('в Алматы', 'в Костанай', $content);
            $content = changeTitleDisc('Алматы', 'Костанай', $content);
            $content = changeTitleDisc('алматы', 'костанай', $content);
            // Header | Footer
            $content = changeHeaderFooterAstana($content);
            // ChangePageHeadAgileInfoW3l
            $content = changePageHeadAgileInfoW3l('в Алматы', 'в Костанай', $content);
            $content = changePageHeadAgileInfoW3l('Алматы', 'Костанай', $content);
            $content = changePageHeadAgileInfoW3l('алматы', 'костанай', $content);
            // ChangePageTitle
            $content = changePageTitle('в Алматы', 'в Костанай', $content);
            $content = changePageTitle('Алматы', 'Костанай', $content);
            $content = changePageTitle('алматы', 'костанай', $content);
            // ChangeCitySelector
            $content = changeCitySelector($content, 'Костанай');
            break;
        case 'pavlodar':
            // Title | Description
            $content = changeTitleDisc('в Алматы', 'в Павлодаре', $content);
            $content = changeTitleDisc('Алматы', 'Павлодар', $content);
            $content = changeTitleDisc('алматы', 'павлодар', $content);
            // Header | Footer
            $content = changeHeaderFooterAstana($content);
            // ChangePageHeadAgileInfoW3l
            $content = changePageHeadAgileInfoW3l('в Алматы', 'в Павлодаре', $content);
            $content = changePageHeadAgileInfoW3l('Алматы', 'Павлодар', $content);
            $content = changePageHeadAgileInfoW3l('алматы', 'павлодар', $content);
            // ChangePageTitle
            $content = changePageTitle('в Алматы', 'в Павлодаре', $content);
            $content = changePageTitle('Алматы', 'Павлодар', $content);
            $content = changePageTitle('алматы', 'павлодар', $content);
            // ChangeCitySelector
            $content = changeCitySelector($content, 'Павлодар');
            break;
        case 'petropavlovsk':
            // Title | Description
            $content = changeTitleDisc('в Алматы', 'в Петропавловске', $content);
            $content = changeTitleDisc('Алматы', 'Петропавловск', $content);
            $content = changeTitleDisc('алматы', 'петропавловск', $content);
            // Header | Footer
            $content = changeHeaderFooterAstana($content);
            // ChangePageHeadAgileInfoW3l
            $content = changePageHeadAgileInfoW3l('в Алматы', 'в Петропавловске', $content);
            $content = changePageHeadAgileInfoW3l('Алматы', 'Петропавловск', $content);
            $content = changePageHeadAgileInfoW3l('алматы', 'петропавловск', $content);
            // ChangePageTitle
            $content = changePageTitle('в Алматы', 'в Петропавловске', $content);
            $content = changePageTitle('Алматы', 'Петропавловск', $content);
            $content = changePageTitle('алматы', 'петропавловск', $content);
            // ChangeCitySelector
            $content = changeCitySelector($content, 'Петропавловск');
            break;
        case 'shymkent':
            // Title | Description
            $content = changeTitleDisc('в Алматы', 'в Шымкенте', $content);
            $content = changeTitleDisc('Алматы', 'Шымкент', $content);
            $content = changeTitleDisc('алматы', 'шымкент', $content);
            // Header | Footer
            $content = changeHeaderFooterShymkent($content);
            // ChangePageHeadAgileInfoW3l
            $content = changePageHeadAgileInfoW3l('в Алматы', 'в Шымкенте', $content);
            $content = changePageHeadAgileInfoW3l('Алматы', 'Шымкент', $content);
            $content = changePageHeadAgileInfoW3l('алматы', 'шымкент', $content);
            // ChangePageTitle
            $content = changePageTitle('в Алматы', 'в Шымкенте', $content);
            $content = changePageTitle('Алматы', 'Шымкент', $content);
            $content = changePageTitle('алматы', 'шымкент', $content);
            // ChangeCitySelector
            $content = changeCitySelector($content, 'Шымкент');
            break;
        case 'taraz':
            $content = changeTitleDisc('в Алматы', 'в Таразе', $content);
            $content = changeTitleDisc('Алматы', 'Тараз', $content);
            $content = changeTitleDisc('алматы', 'тараз', $content);
            // Header | Footer
            $content = changeHeaderFooterShymkent($content);
            // ChangePageHeadAgileInfoW3l
            $content = changePageHeadAgileInfoW3l('в Алматы', 'в Таразе', $content);
            $content = changePageHeadAgileInfoW3l('Алматы', 'Тараз', $content);
            $content = changePageHeadAgileInfoW3l('алматы', 'тараз', $content);
            // ChangePageTitle
            $content = changePageTitle('в Алматы', 'в Таразе', $content);
            $content = changePageTitle('Алматы', 'Тараз', $content);
            $content = changePageTitle('алматы', 'тараз', $content);
            // ChangeCitySelector
            $content = changeCitySelector($content, 'Тараз');
            break;
        case 'turkestan':
            // Title | Description
            $content = changeTitleDisc('в Алматы', 'в Туркестане', $content);
            $content = changeTitleDisc('Алматы', 'Туркестан', $content);
            $content = changeTitleDisc('алматы', 'туркестан', $content);
            // Header | Footer
            $content = changeHeaderFooterShymkent($content);
            // ChangePageHeadAgileInfoW3l
            $content = changePageHeadAgileInfoW3l('в Алматы', 'в Туркестане', $content);
            $content = changePageHeadAgileInfoW3l('Алматы', 'Туркестан', $content);
            $content = changePageHeadAgileInfoW3l('алматы', 'туркестан', $content);
            // ChangePageTitle
            $content = changePageTitle('в Алматы', 'в Туркестане', $content);
            $content = changePageTitle('Алматы', 'Туркестан', $content);
            $content = changePageTitle('алматы', 'туркестан', $content);
            // ChangeCitySelector
            $content = changeCitySelector($content, 'Туркестан');
            break;
        case 'kyzylorda':
            // Title | Description
            $content = changeTitleDisc('в Алматы', 'в Кызылорде', $content);
            $content = changeTitleDisc('Алматы', 'Кызылорда', $content);
            $content = changeTitleDisc('алматы', 'кызылорда', $content);
            // Header | Footer
            $content = changeHeaderFooterShymkent($content);
            // ChangePageHeadAgileInfoW3l
            $content = changePageHeadAgileInfoW3l('в Алматы', 'в Кызылорде', $content);
            $content = changePageHeadAgileInfoW3l('Алматы', 'Кызылорда', $content);
            $content = changePageHeadAgileInfoW3l('алматы', 'кызылорда', $content);
            // ChangePageTitle
            $content = changePageTitle('в Алматы', 'в Кызылорде', $content);
            $content = changePageTitle('Алматы', 'Кызылорда', $content);
            $content = changePageTitle('алматы', 'кызылорда', $content);
            // ChangeCitySelector
            $content = changeCitySelector($content, 'Кызылорда');
            break;
        case 'aktau':
            // Title | Description
            $content = changeTitleDisc('в Алматы', 'в Актау', $content);
            $content = changeTitleDisc('Алматы', 'Актау', $content);
            $content = changeTitleDisc('алматы', 'актау', $content);
            // ChangePageHeadAgileInfoW3l
            $content = changePageHeadAgileInfoW3l('в Алматы', 'в Актау', $content);
            $content = changePageHeadAgileInfoW3l('Алматы', 'Актау', $content);
            $content = changePageHeadAgileInfoW3l('алматы', 'актау', $content);
            // ChangePageTitle
            $content = changePageTitle('в Алматы', 'в Актау', $content);
            $content = changePageTitle('Алматы', 'Актау', $content);
            $content = changePageTitle('алматы', 'актау', $content);
            // ChangeCitySelector
            $content = changeCitySelector($content, 'Актау');
            break;
        case 'aktobe':
            // Title | Description
            $content = changeTitleDisc('в Алматы', 'в Актобе', $content);
            $content = changeTitleDisc('Алматы', 'Актобе', $content);
            $content = changeTitleDisc('алматы', 'актобе', $content);
            // ChangePageHeadAgileInfoW3l
            $content = changePageHeadAgileInfoW3l('в Алматы', 'в Актобе', $content);
            $content = changePageHeadAgileInfoW3l('Алматы', 'Актобе', $content);
            $content = changePageHeadAgileInfoW3l('алматы', 'актобе', $content);
            // ChangePageTitle
            $content = changePageTitle('в Алматы', 'в Актобе', $content);
            $content = changePageTitle('Алматы', 'Актобе', $content);
            $content = changePageTitle('алматы', 'актобе', $content);
            // ChangeCitySelector
            $content = changeCitySelector($content, 'Актобе');
            break;
        case 'atyrau':
            // Title | Description
            $content = changeTitleDisc('в Алматы', 'в Атырау', $content);
            $content = changeTitleDisc('Алматы', 'Атырау', $content);
            $content = changeTitleDisc('алматы', 'атырау', $content);
            // ChangePageHeadAgileInfoW3l
            $content = changePageHeadAgileInfoW3l('в Алматы', 'в Атырау', $content);
            $content = changePageHeadAgileInfoW3l('Алматы', 'Атырау', $content);
            $content = changePageHeadAgileInfoW3l('алматы', 'атырау', $content);
            // ChangePageTitle
            $content = changePageTitle('в Алматы', 'в Атырау', $content);
            $content = changePageTitle('Алматы', 'Атырау', $content);
            $content = changePageTitle('алматы', 'атырау', $content);
            // ChangeCitySelector
            $content = changeCitySelector($content, 'Атырау');
            break;
        case 'janaozen':
            // Title | Description
            $content = changeTitleDisc('в Алматы', 'в Жанаозене', $content);
            $content = changeTitleDisc('Алматы', 'Жанаозен', $content);
            $content = changeTitleDisc('алматы', 'жанаозен', $content);
            // ChangePageHeadAgileInfoW3l
            $content = changePageHeadAgileInfoW3l('в Алматы', 'в Жанаозене', $content);
            $content = changePageHeadAgileInfoW3l('Алматы', 'Жанаозен', $content);
            $content = changePageHeadAgileInfoW3l('алматы', 'жанаозен', $content);
            // ChangePageTitle
            $content = changePageTitle('в Алматы', 'в Жанаозене', $content);
            $content = changePageTitle('Алматы', 'Жанаозен', $content);
            $content = changePageTitle('алматы', 'жанаозен', $content);
            // ChangeCitySelector
            $content = changeCitySelector($content, 'Жанаозен');
            break;
        case 'jezkazgan':
            // Title | Description
            $content = changeTitleDisc('в Алматы', 'в Жезказгане', $content);
            $content = changeTitleDisc('Алматы', 'Жезказган', $content);
            $content = changeTitleDisc('алматы', 'жезказган', $content);
            // ChangePageHeadAgileInfoW3l
            $content = changePageHeadAgileInfoW3l('в Алматы', 'в Жезказгане', $content);
            $content = changePageHeadAgileInfoW3l('Алматы', 'Жезказган', $content);
            $content = changePageHeadAgileInfoW3l('алматы', 'жезказган', $content);
            // ChangePageTitle
            $content = changePageTitle('в Алматы', 'в Жезказгане', $content);
            $content = changePageTitle('Алматы', 'Жезказган', $content);
            $content = changePageTitle('алматы', 'жезказган', $content);
            // ChangeCitySelector
            $content = changeCitySelector($content, 'Жезказган');
            break;
        case 'semei':
            // Title | Description
            $content = changeTitleDisc('в Алматы', 'в Семей', $content);
            $content = changeTitleDisc('Алматы', 'Семей', $content);
            $content = changeTitleDisc('алматы', 'семей', $content);
            // ChangePageHeadAgileInfoW3l
            $content = changePageHeadAgileInfoW3l('в Алматы', 'в Семей', $content);
            $content = changePageHeadAgileInfoW3l('Алматы', 'Семей', $content);
            $content = changePageHeadAgileInfoW3l('алматы', 'семей', $content);
            // ChangePageTitle
            $content = changePageTitle('в Алматы', 'в Семей', $content);
            $content = changePageTitle('Алматы', 'Семей', $content);
            $content = changePageTitle('алматы', 'семей', $content);
            // ChangeCitySelector
            $content = changeCitySelector($content, 'Семей');
            break;
        case 'taldykorgan':
            // Title | Description
            $content = changeTitleDisc('в Алматы', 'в Талдыкоргане', $content);
            $content = changeTitleDisc('Алматы', 'Талдыкорган', $content);
            $content = changeTitleDisc('алматы', 'талдыкорган', $content);
            // ChangePageHeadAgileInfoW3l
            $content = changePageHeadAgileInfoW3l('в Алматы', 'в Талдыкоргане', $content);
            $content = changePageHeadAgileInfoW3l('Алматы', 'Талдыкорган', $content);
            $content = changePageHeadAgileInfoW3l('алматы', 'талдыкорган', $content);
            // ChangePageTitle
            $content = changePageTitle('в Алматы', 'в Талдыкоргане', $content);
            $content = changePageTitle('Алматы', 'Талдыкорган', $content);
            $content = changePageTitle('алматы', 'талдыкорган', $content);
            // ChangeCitySelector
            $content = changeCitySelector($content, 'Талдыкорган');
            break;
        case 'uralsk':
            // Title | Description
            $content = changeTitleDisc('в Алматы', 'в Уральске', $content);
            $content = changeTitleDisc('Алматы', 'Уральск', $content);
            $content = changeTitleDisc('алматы', 'уральск', $content);
            // ChangePageHeadAgileInfoW3l
            $content = changePageHeadAgileInfoW3l('в Алматы', 'в Уральске', $content);
            $content = changePageHeadAgileInfoW3l('Алматы', 'Уральск', $content);
            $content = changePageHeadAgileInfoW3l('алматы', 'уральск', $content);
            // ChangePageTitle
            $content = changePageTitle('в Алматы', 'в Уральске', $content);
            $content = changePageTitle('Алматы', 'Уральск', $content);
            $content = changePageTitle('алматы', 'уральск', $content);
            // ChangeCitySelector
            $content = changeCitySelector($content, 'Уральск');
            break;
        case 'ust-kamenogorsk':
            // Title | Description
            $content = changeTitleDisc('в Алматы', 'в Усть-Каменогорске', $content);
            $content = changeTitleDisc('Алматы', 'Усть-Каменогорск', $content);
            $content = changeTitleDisc('алматы', 'усть-каменогорск', $content);
            // ChangePageHeadAgileInfoW3l
            $content = changePageHeadAgileInfoW3l('в Алматы', 'в Усть-Каменогорске', $content);
            $content = changePageHeadAgileInfoW3l('Алматы', 'Усть-Каменогорск', $content);
            $content = changePageHeadAgileInfoW3l('алматы', 'усть-каменогорск', $content);
            // ChangePageTitle
            $content = changePageTitle('в Алматы', 'в Усть-Каменогорске', $content);
            $content = changePageTitle('Алматы', 'Усть-Каменогорск', $content);
            $content = changePageTitle('алматы', 'усть-каменогорск', $content);
            // ChangeCitySelector
            $content = changeCitySelector($content, 'Усть-Каменогорск');
            break;
    }

    if (file_put_contents($fileWhichChange, $content)) {
        echo PHP_EOL . ' Change CHFPHAIW&TP ---> ' . $fileWhichChange . '. <br> ' . PHP_EOL;
    } else {
        echo PHP_EOL . ' STOP CHANGE CHFPHAIW&TP ---> ' . $fileWhichChange . '. <br> ' . PHP_EOL;
        die();
    }
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

function changeHeaderFooterAstana($fileContent)
{
    $fileContent = str_replace(
        '<div class="contact_info">
                <div class="contact_info_btn">
                    <span class="contact_city_name">Алматы</span>
                    <span class="contact_info_arrow"></span>
                    <span class="contact_city_number">
                        <a href="tel:87273449900"> &nbsp 8 (727) <span class="contact_city_number_b">344-99-00</span></a>
                    </span>
                    <div class="cont_icon_menu">
                        <div class="cont_circle_0 fa fa-phone" aria-hidden="true"></div>
                        <div class="cont_circle_1"></div>
                        <div class="cont_circle_2"></div>
                        <div class="cont_circle_3"></div>
                        <div class="cont_circle_4"></div>
                    </div>
                </div>
                <div class="contact_drop_down">
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city contact_drop_down_city_hidden">Алматы</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87012667700"> +7 (701) <span class="contact_city_number_b">266-77-00</span></a>
                        </div>
                    </div>
                    <br>
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city">Астана</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87172279900" class="contact_drop_down_mobile_hidden"> &nbsp 8 (7172) <span class="contact_city_number_b">27-99-00</span></a>
                            <br class="contact_drop_down_mobile_hidden">
                            <a href="tel:87015112200"> +7 (701) <span class="contact_city_number_b">511-22-00</span></a>
                        </div>
                    </div>
                    <br>
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city">Шымкент</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87252399900" class="contact_drop_down_mobile_hidden"> &nbsp 8 (7252) <span class="contact_city_number_b">39-99-00</span></a>
                            <br class="contact_drop_down_mobile_hidden">
                            <a href="tel:87019447700"> +7 (701) <span class="contact_city_number_b">944-77-00</span></a>
                        </div>
                    </div>
                    <br>
                </div>
            </div>',
        '<div class="contact_info">
                <div class="contact_info_btn">
                    <span class="contact_city_name">Астана</span>
                    <span class="contact_info_arrow contact_info_arrow_astana"></span>
                    <span class="contact_city_number">
                        <a href="tel:87172279900"> &nbsp 8 (7172) <span class="contact_city_number_b">27-99-00</span></a>
                    </span>
                    <div class="cont_icon_menu">
                        <div class="cont_circle_0 fa fa-phone" aria-hidden="true"></div>
                        <div class="cont_circle_1"></div>
                        <div class="cont_circle_2"></div>
                        <div class="cont_circle_3"></div>
                        <div class="cont_circle_4"></div>
                    </div>
                </div>
                <div class="contact_drop_down">
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city contact_drop_down_city_hidden">Астана</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87015112200"> +7 (701) <span class="contact_city_number_b">511-22-00</span></a>
                        </div>
                    </div>
                    <br>
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city">Алматы</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87273449900" class="contact_drop_down_mobile_hidden"> &nbsp 8 (727) <span class="contact_city_number_b">344-99-00</span></a>
                            <br class="contact_drop_down_mobile_hidden">
                            <a href="tel:87012667700"> +7 (701) <span class="contact_city_number_b">266-77-00</span></a>
                        </div>
                    </div>
                    <br>
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city">Шымкент</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87252399900" class="contact_drop_down_mobile_hidden"> &nbsp 8 (7252) <span class="contact_city_number_b">39-99-00</span></a>
                            <br class="contact_drop_down_mobile_hidden">
                            <a href="tel:87019447700"> +7 (701) <span class="contact_city_number_b">944-77-00</span></a>
                        </div>
                    </div>
                    <br>
                </div>
            </div>',
        $fileContent);
    $fileContent = str_replace(
        '<div class="contact_info">
                <div class="contact_info_btn">
                    <span class="contact_city_name">Алматы</span>
                    <span class="contact_info_arrow"></span>
                    <span class="contact_city_number">
                        <a href="tel:87273449900"> &nbsp 8 (727) <span
                                class="contact_city_number_b">344-99-00</span></a>
                    </span>
                    <div class="cont_icon_menu">
                        <div class="cont_circle_0 fa fa-phone" aria-hidden="true"></div>
                        <div class="cont_circle_1"></div>
                        <div class="cont_circle_2"></div>
                        <div class="cont_circle_3"></div>
                        <div class="cont_circle_4"></div>
                    </div>
                </div>
                <div class="contact_drop_down">
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city contact_drop_down_city_hidden">Алматы</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87012667700"> +7 (701) <span class="contact_city_number_b">266-77-00</span></a>
                        </div>
                    </div>
                    <br>
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city">Астана</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87172279900" class="contact_drop_down_mobile_hidden"> &nbsp 8 (7172) <span
                                    class="contact_city_number_b">27-99-00</span></a>
                            <br class="contact_drop_down_mobile_hidden">
                            <a href="tel:87015112200"> +7 (701) <span class="contact_city_number_b">511-22-00</span></a>
                        </div>
                    </div>
                    <br>
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city">Шымкент</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87252399900" class="contact_drop_down_mobile_hidden"> &nbsp 8 (7252) <span
                                    class="contact_city_number_b">39-99-00</span></a>
                            <br class="contact_drop_down_mobile_hidden">
                            <a href="tel:87019447700"> +7 (701) <span class="contact_city_number_b">944-77-00</span></a>
                        </div>
                    </div>
                    <br>
                </div>
            </div>',
        '<div class="contact_info">
                <div class="contact_info_btn">
                    <span class="contact_city_name">Астана</span>
                    <span class="contact_info_arrow contact_info_arrow_astana"></span>
                    <span class="contact_city_number">
                        <a href="tel:87172279900"> &nbsp 8 (7172) <span class="contact_city_number_b">27-99-00</span></a>
                    </span>
                    <div class="cont_icon_menu">
                        <div class="cont_circle_0 fa fa-phone" aria-hidden="true"></div>
                        <div class="cont_circle_1"></div>
                        <div class="cont_circle_2"></div>
                        <div class="cont_circle_3"></div>
                        <div class="cont_circle_4"></div>
                    </div>
                </div>
                <div class="contact_drop_down">
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city contact_drop_down_city_hidden">Астана</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87015112200"> +7 (701) <span class="contact_city_number_b">511-22-00</span></a>
                        </div>
                    </div>
                    <br>
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city">Алматы</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87273449900" class="contact_drop_down_mobile_hidden"> &nbsp 8 (727) <span class="contact_city_number_b">344-99-00</span></a>
                            <br class="contact_drop_down_mobile_hidden">
                            <a href="tel:87012667700"> +7 (701) <span class="contact_city_number_b">266-77-00</span></a>
                        </div>
                    </div>
                    <br>
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city">Шымкент</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87252399900" class="contact_drop_down_mobile_hidden"> &nbsp 8 (7252) <span class="contact_city_number_b">39-99-00</span></a>
                            <br class="contact_drop_down_mobile_hidden">
                            <a href="tel:87019447700"> +7 (701) <span class="contact_city_number_b">944-77-00</span></a>
                        </div>
                    </div>
                    <br>
                </div>
            </div>',
        $fileContent);
    $fileContent = str_replace(
        '<div class="contact_info">
                <div class="contact_info_btn">
                    <span class="contact_city_name">Алматы</span>
                    <span class="contact_info_arrow"></span>
                    <span class="contact_city_number">
                        <a href="tel:87273449900"> &nbsp 8 (727) <span class="contact_city_number_b">344-99-00</span></a>
                    </span>
                    <div class="cont_icon_menu">
                        <div class="cont_circle_0 fa fa-phone" aria-hidden="true"></div>
                        <div class="cont_circle_1"></div>
                        <div class="cont_circle_2"></div>
                        <div class="cont_circle_3"></div>
                        <div class="cont_circle_4"></div>
                    </div>
                </div>
                <div class="contact_drop_down">
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city contact_drop_down_city_hidden">Алматы</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87012667700"> +7 (701) <span class="contact_city_number_b">266-77-00</span></a>
                        </div>
                    </div>
                    <br>
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city">Астана</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87172279900" class="contact_drop_down_mobile_hidden"> &nbsp 8 (7172) <span
                                    class="contact_city_number_b">27-99-00</span></a>
                            <br class="contact_drop_down_mobile_hidden">
                            <a href="tel:87015112200"> +7 (701) <span class="contact_city_number_b">511-22-00</span></a>
                        </div>
                    </div>
                    <br>
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city">Шымкент</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87252399900" class="contact_drop_down_mobile_hidden"> &nbsp 8 (7252) <span
                                    class="contact_city_number_b">39-99-00</span></a>
                            <br class="contact_drop_down_mobile_hidden">
                            <a href="tel:87019447700"> +7 (701) <span class="contact_city_number_b">944-77-00</span></a>
                        </div>
                    </div>
                    <br>
                </div>
            </div>',
        '<div class="contact_info">
                <div class="contact_info_btn">
                    <span class="contact_city_name">Астана</span>
                    <span class="contact_info_arrow contact_info_arrow_astana"></span>
                    <span class="contact_city_number">
                        <a href="tel:87172279900"> &nbsp 8 (7172) <span class="contact_city_number_b">27-99-00</span></a>
                    </span>
                    <div class="cont_icon_menu">
                        <div class="cont_circle_0 fa fa-phone" aria-hidden="true"></div>
                        <div class="cont_circle_1"></div>
                        <div class="cont_circle_2"></div>
                        <div class="cont_circle_3"></div>
                        <div class="cont_circle_4"></div>
                    </div>
                </div>
                <div class="contact_drop_down">
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city contact_drop_down_city_hidden">Астана</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87015112200"> +7 (701) <span class="contact_city_number_b">511-22-00</span></a>
                        </div>
                    </div>
                    <br>
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city">Алматы</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87273449900" class="contact_drop_down_mobile_hidden"> &nbsp 8 (727) <span class="contact_city_number_b">344-99-00</span></a>
                            <br class="contact_drop_down_mobile_hidden">
                            <a href="tel:87012667700"> +7 (701) <span class="contact_city_number_b">266-77-00</span></a>
                        </div>
                    </div>
                    <br>
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city">Шымкент</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87252399900" class="contact_drop_down_mobile_hidden"> &nbsp 8 (7252) <span class="contact_city_number_b">39-99-00</span></a>
                            <br class="contact_drop_down_mobile_hidden">
                            <a href="tel:87019447700"> +7 (701) <span class="contact_city_number_b">944-77-00</span></a>
                        </div>
                    </div>
                    <br>
                </div>
            </div>',
        $fileContent);

    $fileContent = str_replace(
        '<div class="footer_mobile_block">
            <div class="footer_mobile_block__item">
                <div class="footer_mobile_block__title">
                    <h5 class="footer_trans_title">О компании</h5>
                </div>
                <div class="footer_mobile_block__text">
                    <ul class="footer_mobile_block__content">
                        <li><a class="footer_trans_title" href="index.html">Главная</a></li>
                        <li><a class="footer_trans_title" href="products.html">Оборудование</a></li>
                        <li><a class="footer_trans_title" href="programs.html">Программы</a></li>
                        <li><a class="footer_trans_title" href="automation.html">Автоматизация</a></li>
                        <li><a class="footer_trans_title" href="reviews.php">Отзывы</a></li>
                        <li><a class="footer_trans_title" href="about.html">О нас</a></li>
                        <li><a class="footer_trans_title" href="contact.html">Контакты</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer_mobile_block__item">
                <div class="footer_mobile_block__title">
                    <h5 class="footer_trans_title">Оборудование</h5>
                </div>
                <div class="footer_mobile_block__text">
                    <ul class="footer_mobile_block__content">
                        <li><a class="footer_trans_title" href="pos.html">POS системы</a></li>
                        <li><a class="footer_trans_title" href="computer.html">Компьютеры и комплектующие</a></li>
                        <li><a class="footer_trans_title" href="scanner.html">Сканеры штрих-кодов</a></li>
                        <li><a class="footer_trans_title" href="printer.html">Принтеры чеков и этикеток</a></li>
                        <li><a class="footer_trans_title" href="till.html">Денежные ящики</a></li>
                        <li><a class="footer_trans_title" href="scale.html">Весы электронные</a></li>
                        <li><a class="footer_trans_title" href="terminal.html">Терминалы сбора данных</a></li>
                        <li><a class="footer_trans_title" href="banknotes.html">Счетчики и детекторы банкнот</a></li>
                        <li><a class="footer_trans_title" href="eas.html">Антикражное оборудование</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer_mobile_block__item">
                <div class="footer_mobile_block__title">
                    <h5 class="footer_trans_title">г. Алматы</h5>
                </div>
                <div class="footer_mobile_block__text">
                    <div class="footer_mobile_block_padding">
                        <p><a class="almaty_info" href="contact_almaty.html">ул. Мынбаева 43 (уг. ул. между Ауезова и Манаса) 050008</a></p>
                    </div>
                    <div class="footer_mobile_block_padding">
                        <p><a href="tel:87273449900" onclick="gtag(\'event\', \'click phone numbers\', {\'event_category\': \'link\', \'event_action\': \'click\'});">8 (727) 344-99-00</a></p>
                        <p><a href="tel:87012667700" onclick="gtag(\'event\', \'click phone numbers\', {\'event_category\': \'link\', \'event_action\': \'click\'});">+7 (701) 266-77-00</a></p>
                    </div>
                    <div class="footer_mobile_block_padding">
                        <p><a href="mailto:zakaz@idiamarket.kz">zakaz@idiamarket.kz</a></p>
                    </div>
                </div>
            </div>
            <div class="footer_mobile_block__item">
                <div class="footer_mobile_block__title">
                    <h5 class="footer_trans_title">г. Астана</h5>
                </div>
                <div class="footer_mobile_block__text">
                    <div class="footer_mobile_block_padding">
                        <p><a class="almaty_info" href="contact_astana.html">ул. Бейсекбаева 24/1, 2-этаж бизнес-центр DARA.</a></p>
                    </div>
                    <div class="footer_mobile_block_padding">
                        <p><a href="tel:87172279900" onclick="gtag(\'event\', \'click phone numbers\', {\'event_category\': \'link\', \'event_action\': \'click\'});">8 (7172) 27-99-00</a></p>
                        <p><a href="tel:87015112200" onclick="gtag(\'event\', \'click phone numbers\', {\'event_category\': \'link\', \'event_action\': \'click\'});">+7 (701) 511-22-00</a></p>
                    </div>
                    <div class="footer_mobile_block_padding">
                        <p><a href="mailto:astana@idiamarket.kz">astana@idiamarket.kz</a></p>
                    </div>
                </div>
            </div>
            <div class="footer_mobile_block__item">
                <div class="footer_mobile_block__title">
                    <h5 class="footer_trans_title">г. Шымкент</h5>
                </div>
                <div class="footer_mobile_block__text">
                    <div class="footer_mobile_block_padding">
                        <p><a class="almaty_info" href="contact_shymkent.html">ул. Мадели кожа 35/1, (уг.ул. Байтурсынова) 1-этаж, бизнес-центр BNK</a></p>
                    </div>
                    <div class="footer_mobile_block_padding">
                        <p><a href="tel:87252399900" onclick="gtag(\'event\', \'click phone numbers\', {\'event_category\': \'link\', \'event_action\': \'click\'});">8 (7252) 39-99-00</a></p>
                        <p><a href="tel:87019447700" onclick="gtag(\'event\', \'click phone numbers\', {\'event_category\': \'link\', \'event_action\': \'click\'});">+7 (701) 944 77 00</a></p>
                    </div>
                    <div class="footer_mobile_block_padding">
                        <p><a href="mailto:shymkent@idiamarket.kz">shymkent@idiamarket.kz</a></p>
                    </div>
                </div>
            </div>
        </div>',
        '<div class="footer_mobile_block">
            <div class="footer_mobile_block__item">
                <div class="footer_mobile_block__title">
                    <h5 class="footer_trans_title">О компании</h5>
                </div>
                <div class="footer_mobile_block__text">
                    <ul class="footer_mobile_block__content">
                        <li><a class="footer_trans_title" href="index.html">Главная</a></li>
                        <li><a class="footer_trans_title" href="products.html">Оборудование</a></li>
                        <li><a class="footer_trans_title" href="programs.html">Программы</a></li>
                        <li><a class="footer_trans_title" href="automation.html">Автоматизация</a></li>
                        <li><a class="footer_trans_title" href="reviews.php">Отзывы</a></li>
                        <li><a class="footer_trans_title" href="about.html">О нас</a></li>
                        <li><a class="footer_trans_title" href="contact.html">Контакты</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer_mobile_block__item">
                <div class="footer_mobile_block__title">
                    <h5 class="footer_trans_title">Оборудование</h5>
                </div>
                <div class="footer_mobile_block__text">
                    <ul class="footer_mobile_block__content">
                        <li><a class="footer_trans_title" href="pos.html">POS системы</a></li>
                        <li><a class="footer_trans_title" href="computer.html">Компьютеры и комплектующие</a></li>
                        <li><a class="footer_trans_title" href="scanner.html">Сканеры штрих-кодов</a></li>
                        <li><a class="footer_trans_title" href="printer.html">Принтеры чеков и этикеток</a></li>
                        <li><a class="footer_trans_title" href="till.html">Денежные ящики</a></li>
                        <li><a class="footer_trans_title" href="scale.html">Весы электронные</a></li>
                        <li><a class="footer_trans_title" href="terminal.html">Терминалы сбора данных</a></li>
                        <li><a class="footer_trans_title" href="banknotes.html">Счетчики и детекторы банкнот</a></li>
                        <li><a class="footer_trans_title" href="eas.html">Антикражное оборудование</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer_mobile_block__item">
                <div class="footer_mobile_block__title">
                    <h5 class="footer_trans_title">г. Астана</h5>
                </div>
                <div class="footer_mobile_block__text">
                    <div class="footer_mobile_block_padding">
                        <p><a class="almaty_info" href="contact_astana.html">ул. Бейсекбаева 24/1, 2-этаж бизнес-центр DARA.</a></p>
                    </div>
                    <div class="footer_mobile_block_padding">
                        <p><a href="tel:87172279900" onclick="gtag(\'event\', \'click phone numbers\', {\'event_category\': \'link\', \'event_action\': \'click\'});">8 (7172) 27-99-00</a></p>
                        <p><a href="tel:87015112200" onclick="gtag(\'event\', \'click phone numbers\', {\'event_category\': \'link\', \'event_action\': \'click\'});">+7 (701) 511-22-00</a></p>
                    </div>
                    <div class="footer_mobile_block_padding">
                        <p><a href="mailto:astana@idiamarket.kz">astana@idiamarket.kz</a></p>
                    </div>
                </div>
            </div>
            <div class="footer_mobile_block__item">
                <div class="footer_mobile_block__title">
                    <h5 class="footer_trans_title">г. Алматы</h5>
                </div>
                <div class="footer_mobile_block__text">
                    <div class="footer_mobile_block_padding">
                        <p><a class="almaty_info" href="contact_almaty.html">ул. Мынбаева 43 (уг. ул. между Ауезова и Манаса) 050008</a></p>
                    </div>
                    <div class="footer_mobile_block_padding">
                        <p><a href="tel:87273449900" onclick="gtag(\'event\', \'click phone numbers\', {\'event_category\': \'link\', \'event_action\': \'click\'});">8 (727) 344-99-00</a></p>
                        <p><a href="tel:87012667700" onclick="gtag(\'event\', \'click phone numbers\', {\'event_category\': \'link\', \'event_action\': \'click\'});">+7 (701) 266-77-00</a></p>
                    </div>
                    <div class="footer_mobile_block_padding">
                        <p><a href="mailto:zakaz@idiamarket.kz">zakaz@idiamarket.kz</a></p>
                    </div>
                </div>
            </div>
            <div class="footer_mobile_block__item">
                <div class="footer_mobile_block__title">
                    <h5 class="footer_trans_title">г. Шымкент</h5>
                </div>
                <div class="footer_mobile_block__text">
                    <div class="footer_mobile_block_padding">
                        <p><a class="almaty_info" href="contact_shymkent.html">ул. Мадели кожа 35/1, (уг.ул. Байтурсынова) 1-этаж, бизнес-центр BNK</a></p>
                    </div>
                    <div class="footer_mobile_block_padding">
                        <p><a href="tel:87252399900" onclick="gtag(\'event\', \'click phone numbers\', {\'event_category\': \'link\', \'event_action\': \'click\'});">8 (7252) 39-99-00</a></p>
                        <p><a href="tel:87019447700" onclick="gtag(\'event\', \'click phone numbers\', {\'event_category\': \'link\', \'event_action\': \'click\'});">+7 (701) 944 77 00</a></p>
                    </div>
                    <div class="footer_mobile_block_padding">
                        <p><a href="mailto:shymkent@idiamarket.kz">shymkent@idiamarket.kz</a></p>
                    </div>
                </div>
            </div> 
        </div>',
        $fileContent);
    $fileContent = str_replace(
        '<div class="footer_desktop_block">
            <div class="footer_contact_container">
                <div class="footer_nav_logo">
                    <a href="index.html">
                        <span>Soft</span>Gr<img src="/images/globe1.png" alt="logo">up
                    </a>
                </div>
                <div class="footer_nav_phone">
                    <a href="tel:87273449900">&nbsp 8 (727) 344-99-00</a>
                </div>
                <div class="footer_nav_phone">
                    <a href="tel:87012667700">+7 (701) 266-77-00</a>
                </div>
                <div class="footer_nav_text">
                    <a href="contact_almaty.html">
                        <p>г. Алматы, ул. Мынбаева 43 (уг.ул. Манаса), 1-этаж, 050008</p>
                    </a>
                </div>
                <hr class="footer_nav_hr">
                <div class="footer_nav_phone">
                    <a href="tel:87172279900">&nbsp 8 (7172) 27-99-00</a>
                </div>
                <div class="footer_nav_phone">
                    <a href="tel:87015112200">+7 (701) 511-22-00</a>
                </div>
                <div class="footer_nav_text">
                    <a href="contact_astana.html">
                        <p>г. Астана, ул. Бейсекбаева 24/1, 2-этаж бизнес-центр DARA</p>
                    </a>
                </div>
                <hr class="footer_nav_hr">
                <div class="footer_nav_phone">
                    <a href="tel:87252399900">&nbsp 8 (7252) 39-99-00</a>
                </div>
                <div class="footer_nav_phone">
                    <a href="tel:87019447700">+7 (701) 944-77-00</a>
                </div>
                <div class="footer_nav_text">
                    <a href="contact_shymkent.html">
                        <p>г. Шымкент, ул. Мадели кожа 35/1, (уг.ул. Байтурсынова) 1-этаж, бизнес-центр BNK</p>
                    </a>
                </div>
            </div>
            <div class="footer_links_container">
                <div class="footer_links_container_column">
                    <div class="footer_link_subtitle">
                        <a href="index.html">Главная</a>
                    </div>
                    <ul class="footer_link_list">
                        <li><a href="products.html">Оборудование</a></li>
                        <li><a href="programs.html">Программы</a></li>
                        <li><a href="automation.html">Автоматизация</a></li>
                        <li><a href="reviews.php">Отзывы</a></li>
                        <li><a href="about.html">О нас</a></li>
                        <li><a href="contact.html">Контакты</a></li>
                    </ul>
                </div>
                <div class="footer_links_container_column">
                    <div class="footer_link_subtitle">
                        <a href="products.html">Оборудование</a>
                    </div>
                    <ul class="footer_link_list">
                        <li><a href="pos.html">POS системы</a></li>
                        <li><a href="computer.html">Компьютеры и комплектующие</a></li>
                        <li><a href="scanner.html">Сканеры штрих-кодов</a></li>
                        <li><a href="printer.html">Принтеры чеков и этикеток</a></li>
                        <li><a href="till.html">Денежные ящики</a></li>
                        <li><a href="scale.html">Весы электронные</a></li>
                        <li><a href="terminal.html">Терминалы сбора данных</a></li>
                        <li><a href="banknotes.html">Счетчики и детекторы банкнот</a></li>
                        <li><a href="eas.html">Антикражное оборудование</a></li>
                    </ul>
                    <div class="footer_social_btns">
                        <div class="footer_social_btns_content">
                            <a class="btn instagram" href="https://www.instagram.com/idiamarket/">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                            <a class="btn whatsapp" href="https://api.whatsapp.com/send/?phone=77012336600&amp;text&amp;app_absent=0">
                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                            </a>
                            <a class="btn youtube" href="https://www.youtube.com/channel/UCNDMIviMuZOhhCP7xoxGYAA/videos">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>',
        '<div class="footer_desktop_block">
            <div class="footer_contact_container">
                <div class="footer_nav_logo">
                    <a href="index.html">
                        <span>Soft</span>Gr<img src="/images/globe1.png" alt="logo">up
                    </a>
                </div>
                <div class="footer_nav_phone">
                    <a href="tel:87172279900">&nbsp 8 (7172) 27-99-00</a>
                </div>
                <div class="footer_nav_phone">
                    <a href="tel:87015112200">+7 (701) 511-22-00</a>
                </div>
                <div class="footer_nav_text">
                    <a href="contact_astana.html">
                        <p>г. Астана, ул. Бейсекбаева 24/1, 2-этаж бизнес-центр DARA</p>
                    </a>
                </div>
                <hr class="footer_nav_hr">
                <div class="footer_nav_phone">
                    <a href="tel:87273449900">&nbsp 8 (727) 344-99-00</a>
                </div>
                <div class="footer_nav_phone">
                    <a href="tel:87012667700">+7 (701) 266-77-00</a>
                </div>
                <div class="footer_nav_text">
                    <a href="contact_almaty.html">
                        <p>г. Алматы, ул. Мынбаева 43 (уг.ул. Манаса), 1-этаж, 050008</p>
                    </a>
                </div>
                <hr class="footer_nav_hr">
                <div class="footer_nav_phone">
                    <a href="tel:87252399900">&nbsp 8 (7252) 39-99-00</a>
                </div>
                <div class="footer_nav_phone">
                    <a href="tel:87019447700">+7 (701) 944-77-00</a>
                </div>
                <div class="footer_nav_text">
                    <a href="contact_shymkent.html">
                        <p>г. Шымкент, ул. Мадели кожа 35/1, (уг.ул. Байтурсынова) 1-этаж, бизнес-центр BNK</p>
                    </a>
                </div>
            </div>
            <div class="footer_links_container">
                <div class="footer_links_container_column">
                    <div class="footer_link_subtitle">
                        <a href="index.html">Главная</a>
                    </div>
                    <ul class="footer_link_list">
                        <li><a href="products.html">Оборудование</a></li>
                        <li><a href="programs.html">Программы</a></li>
                        <li><a href="automation.html">Автоматизация</a></li>
                        <li><a href="reviews.php">Отзывы</a></li>
                        <li><a href="about.html">О нас</a></li>
                        <li><a href="contact.html">Контакты</a></li>
                    </ul>
                </div>
                <div class="footer_links_container_column">
                    <div class="footer_link_subtitle">
                        <a href="products.html">Оборудование</a>
                    </div>
                    <ul class="footer_link_list">
                        <li><a href="pos.html">POS системы</a></li>
                        <li><a href="computer.html">Компьютеры и комплектующие</a></li>
                        <li><a href="scanner.html">Сканеры штрих-кодов</a></li>
                        <li><a href="printer.html">Принтеры чеков и этикеток</a></li>
                        <li><a href="till.html">Денежные ящики</a></li>
                        <li><a href="scale.html">Весы электронные</a></li>
                        <li><a href="terminal.html">Терминалы сбора данных</a></li>
                        <li><a href="banknotes.html">Счетчики и детекторы банкнот</a></li>
                        <li><a href="eas.html">Антикражное оборудование</a></li>
                    </ul>
                    <div class="footer_social_btns">
                        <div class="footer_social_btns_content">
                            <a class="btn instagram" href="https://www.instagram.com/idiamarket/">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                            <a class="btn whatsapp" href="https://api.whatsapp.com/send/?phone=77012336600&amp;text&amp;app_absent=0">
                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                            </a>
                            <a class="btn youtube" href="https://www.youtube.com/channel/UCNDMIviMuZOhhCP7xoxGYAA/videos">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>',
        $fileContent);
    return $fileContent;
}

function changeHeaderFooterShymkent($fileContent)
{
    $fileContent = str_replace(
        '<div class="contact_info">
                <div class="contact_info_btn">
                    <span class="contact_city_name">Алматы</span>
                    <span class="contact_info_arrow"></span>
                    <span class="contact_city_number">
                        <a href="tel:87273449900"> &nbsp 8 (727) <span class="contact_city_number_b">344-99-00</span></a>
                    </span>
                    <div class="cont_icon_menu">
                        <div class="cont_circle_0 fa fa-phone" aria-hidden="true"></div>
                        <div class="cont_circle_1"></div>
                        <div class="cont_circle_2"></div>
                        <div class="cont_circle_3"></div>
                        <div class="cont_circle_4"></div>
                    </div>
                </div>
                <div class="contact_drop_down">
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city contact_drop_down_city_hidden">Алматы</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87012667700"> +7 (701) <span class="contact_city_number_b">266-77-00</span></a>
                        </div>
                    </div>
                    <br>
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city">Астана</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87172279900" class="contact_drop_down_mobile_hidden"> &nbsp 8 (7172) <span class="contact_city_number_b">27-99-00</span></a>
                            <br class="contact_drop_down_mobile_hidden">
                            <a href="tel:87015112200"> +7 (701) <span class="contact_city_number_b">511-22-00</span></a>
                        </div>
                    </div>
                    <br>
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city">Шымкент</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87252399900" class="contact_drop_down_mobile_hidden"> &nbsp 8 (7252) <span class="contact_city_number_b">39-99-00</span></a>
                            <br class="contact_drop_down_mobile_hidden">
                            <a href="tel:87019447700"> +7 (701) <span class="contact_city_number_b">944-77-00</span></a>
                        </div>
                    </div>
                    <br>
                </div>
            </div>',
        '<div class="contact_info">
                <div class="contact_info_btn">
                    <span class="contact_city_name">Шымкент</span>
                    <span class="contact_info_arrow"></span>
                    <span class="contact_city_number">
                        <a href="tel:87252399900"> &nbsp 8 (7252) <span class="contact_city_number_b">39-99-00</span></a>
                    </span>
                    <div class="cont_icon_menu">
                        <div class="cont_circle_0 fa fa-phone" aria-hidden="true"></div>
                        <div class="cont_circle_1"></div>
                        <div class="cont_circle_2"></div>
                        <div class="cont_circle_3"></div>
                        <div class="cont_circle_4"></div>
                    </div>
                </div>
                <div class="contact_drop_down">
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city_shymkent">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city contact_drop_down_city_hidden">Шымкент</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87019447700"> +7 (701) <span class="contact_city_number_b">944-77-00</span></a>
                        </div>
                    </div>
                    <br>
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city_shymkent">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city">Алматы</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87273449900" class="contact_drop_down_mobile_hidden"> &nbsp 8 (727) <span class="contact_city_number_b">344-99-00</span></a>
                            <br class="contact_drop_down_mobile_hidden">
                            <a href="tel:87012667700"> +7 (701) <span class="contact_city_number_b">266-77-00</span></a>
                        </div>
                    </div>
                    <br>
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city_shymkent">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city">Астана</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87172279900" class="contact_drop_down_mobile_hidden"> &nbsp 8 (7172) <span class="contact_city_number_b">27-99-00</span></a>
                            <br class="contact_drop_down_mobile_hidden">
                            <a href="tel:87015112200"> +7 (701) <span class="contact_city_number_b">511-22-00</span></a>
                        </div>
                    </div>
                    <br>
                </div>
            </div>',
        $fileContent);
    $fileContent = str_replace(
        '<div class="contact_info">
                <div class="contact_info_btn">
                    <span class="contact_city_name">Алматы</span>
                    <span class="contact_info_arrow"></span>
                    <span class="contact_city_number">
                        <a href="tel:87273449900"> &nbsp 8 (727) <span
                                class="contact_city_number_b">344-99-00</span></a>
                    </span>
                    <div class="cont_icon_menu">
                        <div class="cont_circle_0 fa fa-phone" aria-hidden="true"></div>
                        <div class="cont_circle_1"></div>
                        <div class="cont_circle_2"></div>
                        <div class="cont_circle_3"></div>
                        <div class="cont_circle_4"></div>
                    </div>
                </div>
                <div class="contact_drop_down">
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city contact_drop_down_city_hidden">Алматы</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87012667700"> +7 (701) <span class="contact_city_number_b">266-77-00</span></a>
                        </div>
                    </div>
                    <br>
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city">Астана</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87172279900" class="contact_drop_down_mobile_hidden"> &nbsp 8 (7172) <span
                                    class="contact_city_number_b">27-99-00</span></a>
                            <br class="contact_drop_down_mobile_hidden">
                            <a href="tel:87015112200"> +7 (701) <span class="contact_city_number_b">511-22-00</span></a>
                        </div>
                    </div>
                    <br>
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city">Шымкент</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87252399900" class="contact_drop_down_mobile_hidden"> &nbsp 8 (7252) <span
                                    class="contact_city_number_b">39-99-00</span></a>
                            <br class="contact_drop_down_mobile_hidden">
                            <a href="tel:87019447700"> +7 (701) <span class="contact_city_number_b">944-77-00</span></a>
                        </div>
                    </div>
                    <br>
                </div>
            </div>',
        '<div class="contact_info">
                <div class="contact_info_btn">
                    <span class="contact_city_name">Шымкент</span>
                    <span class="contact_info_arrow"></span>
                    <span class="contact_city_number">
                        <a href="tel:87252399900"> &nbsp 8 (7252) <span class="contact_city_number_b">39-99-00</span></a>
                    </span>
                    <div class="cont_icon_menu">
                        <div class="cont_circle_0 fa fa-phone" aria-hidden="true"></div>
                        <div class="cont_circle_1"></div>
                        <div class="cont_circle_2"></div>
                        <div class="cont_circle_3"></div>
                        <div class="cont_circle_4"></div>
                    </div>
                </div>
                <div class="contact_drop_down">
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city_shymkent">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city contact_drop_down_city_hidden">Шымкент</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87019447700"> +7 (701) <span class="contact_city_number_b">944-77-00</span></a>
                        </div>
                    </div>
                    <br>
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city_shymkent">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city">Алматы</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87273449900" class="contact_drop_down_mobile_hidden"> &nbsp 8 (727) <span class="contact_city_number_b">344-99-00</span></a>
                            <br class="contact_drop_down_mobile_hidden">
                            <a href="tel:87012667700"> +7 (701) <span class="contact_city_number_b">266-77-00</span></a>
                        </div>
                    </div>
                    <br>
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city_shymkent">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city">Астана</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87172279900" class="contact_drop_down_mobile_hidden"> &nbsp 8 (7172) <span class="contact_city_number_b">27-99-00</span></a>
                            <br class="contact_drop_down_mobile_hidden">
                            <a href="tel:87015112200"> +7 (701) <span class="contact_city_number_b">511-22-00</span></a>
                        </div>
                    </div>
                    <br>
                </div>
            </div>',
        $fileContent);
    $fileContent = str_replace(
        '<div class="contact_info">
                <div class="contact_info_btn">
                    <span class="contact_city_name">Алматы</span>
                    <span class="contact_info_arrow"></span>
                    <span class="contact_city_number">
                        <a href="tel:87273449900"> &nbsp 8 (727) <span class="contact_city_number_b">344-99-00</span></a>
                    </span>
                    <div class="cont_icon_menu">
                        <div class="cont_circle_0 fa fa-phone" aria-hidden="true"></div>
                        <div class="cont_circle_1"></div>
                        <div class="cont_circle_2"></div>
                        <div class="cont_circle_3"></div>
                        <div class="cont_circle_4"></div>
                    </div>
                </div>
                <div class="contact_drop_down">
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city contact_drop_down_city_hidden">Алматы</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87012667700"> +7 (701) <span class="contact_city_number_b">266-77-00</span></a>
                        </div>
                    </div>
                    <br>
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city">Астана</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87172279900" class="contact_drop_down_mobile_hidden"> &nbsp 8 (7172) <span
                                    class="contact_city_number_b">27-99-00</span></a>
                            <br class="contact_drop_down_mobile_hidden">
                            <a href="tel:87015112200"> +7 (701) <span class="contact_city_number_b">511-22-00</span></a>
                        </div>
                    </div>
                    <br>
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city">Шымкент</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87252399900" class="contact_drop_down_mobile_hidden"> &nbsp 8 (7252) <span
                                    class="contact_city_number_b">39-99-00</span></a>
                            <br class="contact_drop_down_mobile_hidden">
                            <a href="tel:87019447700"> +7 (701) <span class="contact_city_number_b">944-77-00</span></a>
                        </div>
                    </div>
                    <br>
                </div>
            </div>',
        '<div class="contact_info">
                <div class="contact_info_btn">
                    <span class="contact_city_name">Шымкент</span>
                    <span class="contact_info_arrow"></span>
                    <span class="contact_city_number">
                        <a href="tel:87252399900"> &nbsp 8 (7252) <span class="contact_city_number_b">39-99-00</span></a>
                    </span>
                    <div class="cont_icon_menu">
                        <div class="cont_circle_0 fa fa-phone" aria-hidden="true"></div>
                        <div class="cont_circle_1"></div>
                        <div class="cont_circle_2"></div>
                        <div class="cont_circle_3"></div>
                        <div class="cont_circle_4"></div>
                    </div>
                </div>
                <div class="contact_drop_down">
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city_shymkent">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city contact_drop_down_city_hidden">Шымкент</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87019447700"> +7 (701) <span class="contact_city_number_b">944-77-00</span></a>
                        </div>
                    </div>
                    <br>
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city_shymkent">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city">Алматы</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87273449900" class="contact_drop_down_mobile_hidden"> &nbsp 8 (727) <span class="contact_city_number_b">344-99-00</span></a>
                            <br class="contact_drop_down_mobile_hidden">
                            <a href="tel:87012667700"> +7 (701) <span class="contact_city_number_b">266-77-00</span></a>
                        </div>
                    </div>
                    <br>
                    <div class="contact_drop_down_items">
                        <div class="contact_drop_down_city_shymkent">
                            <span class="contact_drop_down_item_line"></span>
                            <span class="contact_drop_down_item_city">Астана</span>
                        </div>
                        <div class="contact_drop_down_item_number">
                            <a href="tel:87172279900" class="contact_drop_down_mobile_hidden"> &nbsp 8 (7172) <span class="contact_city_number_b">27-99-00</span></a>
                            <br class="contact_drop_down_mobile_hidden">
                            <a href="tel:87015112200"> +7 (701) <span class="contact_city_number_b">511-22-00</span></a>
                        </div>
                    </div>
                    <br>
                </div>
            </div>',
        $fileContent);

    $fileContent = str_replace(
        '<div class="footer_mobile_block">
            <div class="footer_mobile_block__item">
                <div class="footer_mobile_block__title">
                    <h5 class="footer_trans_title">О компании</h5>
                </div>
                <div class="footer_mobile_block__text">
                    <ul class="footer_mobile_block__content">
                        <li><a class="footer_trans_title" href="index.html">Главная</a></li>
                        <li><a class="footer_trans_title" href="products.html">Оборудование</a></li>
                        <li><a class="footer_trans_title" href="programs.html">Программы</a></li>
                        <li><a class="footer_trans_title" href="automation.html">Автоматизация</a></li>
                        <li><a class="footer_trans_title" href="reviews.php">Отзывы</a></li>
                        <li><a class="footer_trans_title" href="about.html">О нас</a></li>
                        <li><a class="footer_trans_title" href="contact.html">Контакты</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer_mobile_block__item">
                <div class="footer_mobile_block__title">
                    <h5 class="footer_trans_title">Оборудование</h5>
                </div>
                <div class="footer_mobile_block__text">
                    <ul class="footer_mobile_block__content">
                        <li><a class="footer_trans_title" href="pos.html">POS системы</a></li>
                        <li><a class="footer_trans_title" href="computer.html">Компьютеры и комплектующие</a></li>
                        <li><a class="footer_trans_title" href="scanner.html">Сканеры штрих-кодов</a></li>
                        <li><a class="footer_trans_title" href="printer.html">Принтеры чеков и этикеток</a></li>
                        <li><a class="footer_trans_title" href="till.html">Денежные ящики</a></li>
                        <li><a class="footer_trans_title" href="scale.html">Весы электронные</a></li>
                        <li><a class="footer_trans_title" href="terminal.html">Терминалы сбора данных</a></li>
                        <li><a class="footer_trans_title" href="banknotes.html">Счетчики и детекторы банкнот</a></li>
                        <li><a class="footer_trans_title" href="eas.html">Антикражное оборудование</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer_mobile_block__item">
                <div class="footer_mobile_block__title">
                    <h5 class="footer_trans_title">г. Алматы</h5>
                </div>
                <div class="footer_mobile_block__text">
                    <div class="footer_mobile_block_padding">
                        <p><a class="almaty_info" href="contact_almaty.html">ул. Мынбаева 43 (уг. ул. между Ауезова и Манаса) 050008</a></p>
                    </div>
                    <div class="footer_mobile_block_padding">
                        <p><a href="tel:87273449900" onclick="gtag(\'event\', \'click phone numbers\', {\'event_category\': \'link\', \'event_action\': \'click\'});">8 (727) 344-99-00</a></p>
                        <p><a href="tel:87012667700" onclick="gtag(\'event\', \'click phone numbers\', {\'event_category\': \'link\', \'event_action\': \'click\'});">+7 (701) 266-77-00</a></p>
                    </div>
                    <div class="footer_mobile_block_padding">
                        <p><a href="mailto:zakaz@idiamarket.kz">zakaz@idiamarket.kz</a></p>
                    </div>
                </div>
            </div>
            <div class="footer_mobile_block__item">
                <div class="footer_mobile_block__title">
                    <h5 class="footer_trans_title">г. Астана</h5>
                </div>
                <div class="footer_mobile_block__text">
                    <div class="footer_mobile_block_padding">
                        <p><a class="almaty_info" href="contact_astana.html">ул. Бейсекбаева 24/1, 2-этаж бизнес-центр DARA.</a></p>
                    </div>
                    <div class="footer_mobile_block_padding">
                        <p><a href="tel:87172279900" onclick="gtag(\'event\', \'click phone numbers\', {\'event_category\': \'link\', \'event_action\': \'click\'});">8 (7172) 27-99-00</a></p>
                        <p><a href="tel:87015112200" onclick="gtag(\'event\', \'click phone numbers\', {\'event_category\': \'link\', \'event_action\': \'click\'});">+7 (701) 511-22-00</a></p>
                    </div>
                    <div class="footer_mobile_block_padding">
                        <p><a href="mailto:astana@idiamarket.kz">astana@idiamarket.kz</a></p>
                    </div>
                </div>
            </div>
            <div class="footer_mobile_block__item">
                <div class="footer_mobile_block__title">
                    <h5 class="footer_trans_title">г. Шымкент</h5>
                </div>
                <div class="footer_mobile_block__text">
                    <div class="footer_mobile_block_padding">
                        <p><a class="almaty_info" href="contact_shymkent.html">ул. Мадели кожа 35/1, (уг.ул. Байтурсынова) 1-этаж, бизнес-центр BNK</a></p>
                    </div>
                    <div class="footer_mobile_block_padding">
                        <p><a href="tel:87252399900" onclick="gtag(\'event\', \'click phone numbers\', {\'event_category\': \'link\', \'event_action\': \'click\'});">8 (7252) 39-99-00</a></p>
                        <p><a href="tel:87019447700" onclick="gtag(\'event\', \'click phone numbers\', {\'event_category\': \'link\', \'event_action\': \'click\'});">+7 (701) 944 77 00</a></p>
                    </div>
                    <div class="footer_mobile_block_padding">
                        <p><a href="mailto:shymkent@idiamarket.kz">shymkent@idiamarket.kz</a></p>
                    </div>
                </div>
            </div>
        </div>',
        '<div class="footer_mobile_block">
            <div class="footer_mobile_block__item">
                <div class="footer_mobile_block__title">
                    <h5 class="footer_trans_title">О компании</h5>
                </div>
                <div class="footer_mobile_block__text">
                    <ul class="footer_mobile_block__content">
                        <li><a class="footer_trans_title" href="index.html">Главная</a></li>
                        <li><a class="footer_trans_title" href="products.html">Оборудование</a></li>
                        <li><a class="footer_trans_title" href="programs.html">Программы</a></li>
                        <li><a class="footer_trans_title" href="automation.html">Автоматизация</a></li>
                        <li><a class="footer_trans_title" href="reviews.php">Отзывы</a></li>
                        <li><a class="footer_trans_title" href="about.html">О нас</a></li>
                        <li><a class="footer_trans_title" href="contact.html">Контакты</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer_mobile_block__item">
                <div class="footer_mobile_block__title">
                    <h5 class="footer_trans_title">Оборудование</h5>
                </div>
                <div class="footer_mobile_block__text">
                    <ul class="footer_mobile_block__content">
                        <li><a class="footer_trans_title" href="pos.html">POS системы</a></li>
                        <li><a class="footer_trans_title" href="computer.html">Компьютеры и комплектующие</a></li>
                        <li><a class="footer_trans_title" href="scanner.html">Сканеры штрих-кодов</a></li>
                        <li><a class="footer_trans_title" href="printer.html">Принтеры чеков и этикеток</a></li>
                        <li><a class="footer_trans_title" href="till.html">Денежные ящики</a></li>
                        <li><a class="footer_trans_title" href="scale.html">Весы электронные</a></li>
                        <li><a class="footer_trans_title" href="terminal.html">Терминалы сбора данных</a></li>
                        <li><a class="footer_trans_title" href="banknotes.html">Счетчики и детекторы банкнот</a></li>
                        <li><a class="footer_trans_title" href="eas.html">Антикражное оборудование</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer_mobile_block__item">
                <div class="footer_mobile_block__title">
                    <h5 class="footer_trans_title">г. Шымкент</h5>
                </div>
                <div class="footer_mobile_block__text">
                    <div class="footer_mobile_block_padding">
                        <p><a class="almaty_info" href="contact_shymkent.html">ул. Мадели кожа 35/1, (уг.ул. Байтурсынова) 1-этаж, бизнес-центр BNK</a></p>
                    </div>
                    <div class="footer_mobile_block_padding">
                        <p><a href="tel:87252399900" onclick="gtag(\'event\', \'click phone numbers\', {\'event_category\': \'link\', \'event_action\': \'click\'});">8 (7252) 39-99-00</a></p>
                        <p><a href="tel:87019447700" onclick="gtag(\'event\', \'click phone numbers\', {\'event_category\': \'link\', \'event_action\': \'click\'});">+7 (701) 944 77 00</a></p>
                    </div>
                    <div class="footer_mobile_block_padding">
                        <p><a href="mailto:shymkent@idiamarket.kz">shymkent@idiamarket.kz</a></p>
                    </div>
                </div>
            </div> 
            <div class="footer_mobile_block__item">
                <div class="footer_mobile_block__title">
                    <h5 class="footer_trans_title">г. Алматы</h5>
                </div>
                <div class="footer_mobile_block__text">
                    <div class="footer_mobile_block_padding">
                        <p><a class="almaty_info" href="contact_almaty.html">ул. Мынбаева 43 (уг. ул. между Ауезова и Манаса) 050008</a></p>
                    </div>
                    <div class="footer_mobile_block_padding">
                        <p><a href="tel:87273449900" onclick="gtag(\'event\', \'click phone numbers\', {\'event_category\': \'link\', \'event_action\': \'click\'});">8 (727) 344-99-00</a></p>
                        <p><a href="tel:87012667700" onclick="gtag(\'event\', \'click phone numbers\', {\'event_category\': \'link\', \'event_action\': \'click\'});">+7 (701) 266-77-00</a></p>
                    </div>
                    <div class="footer_mobile_block_padding">
                        <p><a href="mailto:zakaz@idiamarket.kz">zakaz@idiamarket.kz</a></p>
                    </div>
                </div>
            </div>
            <div class="footer_mobile_block__item">
                <div class="footer_mobile_block__title">
                    <h5 class="footer_trans_title">г. Астана</h5>
                </div>
                <div class="footer_mobile_block__text">
                    <div class="footer_mobile_block_padding">
                        <p><a class="almaty_info" href="contact_astana.html">ул. Бейсекбаева 24/1, 2-этаж бизнес-центр DARA.</a></p>
                    </div>
                    <div class="footer_mobile_block_padding">
                        <p><a href="tel:87172279900" onclick="gtag(\'event\', \'click phone numbers\', {\'event_category\': \'link\', \'event_action\': \'click\'});">8 (7172) 27-99-00</a></p>
                        <p><a href="tel:87015112200" onclick="gtag(\'event\', \'click phone numbers\', {\'event_category\': \'link\', \'event_action\': \'click\'});">+7 (701) 511-22-00</a></p>
                    </div>
                    <div class="footer_mobile_block_padding">
                        <p><a href="mailto:astana@idiamarket.kz">astana@idiamarket.kz</a></p>
                    </div>
                </div>
            </div>
        </div>',
        $fileContent);
    $fileContent = str_replace(
        '<div class="footer_desktop_block">
            <div class="footer_contact_container">
                <div class="footer_nav_logo">
                    <a href="index.html">
                        <span>Soft</span>Gr<img src="/images/globe1.png" alt="logo">up
                    </a>
                </div>
                <div class="footer_nav_phone">
                    <a href="tel:87273449900">&nbsp 8 (727) 344-99-00</a>
                </div>
                <div class="footer_nav_phone">
                    <a href="tel:87012667700">+7 (701) 266-77-00</a>
                </div>
                <div class="footer_nav_text">
                    <a href="contact_almaty.html">
                        <p>г. Алматы, ул. Мынбаева 43 (уг.ул. Манаса), 1-этаж, 050008</p>
                    </a>
                </div>
                <hr class="footer_nav_hr">
                <div class="footer_nav_phone">
                    <a href="tel:87172279900">&nbsp 8 (7172) 27-99-00</a>
                </div>
                <div class="footer_nav_phone">
                    <a href="tel:87015112200">+7 (701) 511-22-00</a>
                </div>
                <div class="footer_nav_text">
                    <a href="contact_astana.html">
                        <p>г. Астана, ул. Бейсекбаева 24/1, 2-этаж бизнес-центр DARA</p>
                    </a>
                </div>
                <hr class="footer_nav_hr">
                <div class="footer_nav_phone">
                    <a href="tel:87252399900">&nbsp 8 (7252) 39-99-00</a>
                </div>
                <div class="footer_nav_phone">
                    <a href="tel:87019447700">+7 (701) 944-77-00</a>
                </div>
                <div class="footer_nav_text">
                    <a href="contact_shymkent.html">
                        <p>г. Шымкент, ул. Мадели кожа 35/1, (уг.ул. Байтурсынова) 1-этаж, бизнес-центр BNK</p>
                    </a>
                </div>
            </div>
            <div class="footer_links_container">
                <div class="footer_links_container_column">
                    <div class="footer_link_subtitle">
                        <a href="index.html">Главная</a>
                    </div>
                    <ul class="footer_link_list">
                        <li><a href="products.html">Оборудование</a></li>
                        <li><a href="programs.html">Программы</a></li>
                        <li><a href="automation.html">Автоматизация</a></li>
                        <li><a href="reviews.php">Отзывы</a></li>
                        <li><a href="about.html">О нас</a></li>
                        <li><a href="contact.html">Контакты</a></li>
                    </ul>
                </div>
                <div class="footer_links_container_column">
                    <div class="footer_link_subtitle">
                        <a href="products.html">Оборудование</a>
                    </div>
                    <ul class="footer_link_list">
                        <li><a href="pos.html">POS системы</a></li>
                        <li><a href="computer.html">Компьютеры и комплектующие</a></li>
                        <li><a href="scanner.html">Сканеры штрих-кодов</a></li>
                        <li><a href="printer.html">Принтеры чеков и этикеток</a></li>
                        <li><a href="till.html">Денежные ящики</a></li>
                        <li><a href="scale.html">Весы электронные</a></li>
                        <li><a href="terminal.html">Терминалы сбора данных</a></li>
                        <li><a href="banknotes.html">Счетчики и детекторы банкнот</a></li>
                        <li><a href="eas.html">Антикражное оборудование</a></li>
                    </ul>
                    <div class="footer_social_btns">
                        <div class="footer_social_btns_content">
                            <a class="btn instagram" href="https://www.instagram.com/idiamarket/">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                            <a class="btn whatsapp" href="https://api.whatsapp.com/send/?phone=77012336600&amp;text&amp;app_absent=0">
                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                            </a>
                            <a class="btn youtube" href="https://www.youtube.com/channel/UCNDMIviMuZOhhCP7xoxGYAA/videos">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>',
        '<div class="footer_desktop_block">
            <div class="footer_contact_container">
                <div class="footer_nav_logo">
                    <a href="index.html">
                        <span>Soft</span>Gr<img src="/images/globe1.png" alt="logo">up
                    </a>
                </div>
                <div class="footer_nav_phone">
                    <a href="tel:87252399900">&nbsp 8 (7252) 39-99-00</a>
                </div>
                <div class="footer_nav_phone">
                    <a href="tel:87019447700">+7 (701) 944-77-00</a>
                </div>
                <div class="footer_nav_text">
                    <a href="contact_shymkent.html">
                        <p>г. Шымкент, ул. Мадели кожа 35/1, (уг.ул. Байтурсынова) 1-этаж, бизнес-центр BNK</p>
                    </a>
                </div>
                <hr class="footer_nav_hr">
                <div class="footer_nav_phone">
                    <a href="tel:87273449900">&nbsp 8 (727) 344-99-00</a>
                </div>
                <div class="footer_nav_phone">
                    <a href="tel:87012667700">+7 (701) 266-77-00</a>
                </div>
                <div class="footer_nav_text">
                    <a href="contact_almaty.html">
                        <p>г. Алматы, ул. Мынбаева 43 (уг.ул. Манаса), 1-этаж, 050008</p>
                    </a>
                </div>
                <hr class="footer_nav_hr">
                <div class="footer_nav_phone">
                    <a href="tel:87172279900">&nbsp 8 (7172) 27-99-00</a>
                </div>
                <div class="footer_nav_phone">
                    <a href="tel:87015112200">+7 (701) 511-22-00</a>
                </div>
                <div class="footer_nav_text">
                    <a href="contact_astana.html">
                        <p>г. Астана, ул. Бейсекбаева 24/1, 2-этаж бизнес-центр DARA</p>
                    </a>
                </div>
            </div>
            <div class="footer_links_container">
                <div class="footer_links_container_column">
                    <div class="footer_link_subtitle">
                        <a href="index.html">Главная</a>
                    </div>
                    <ul class="footer_link_list">
                        <li><a href="products.html">Оборудование</a></li>
                        <li><a href="programs.html">Программы</a></li>
                        <li><a href="automation.html">Автоматизация</a></li>
                        <li><a href="reviews.php">Отзывы</a></li>
                        <li><a href="about.html">О нас</a></li>
                        <li><a href="contact.html">Контакты</a></li>
                    </ul>
                </div>
                <div class="footer_links_container_column">
                    <div class="footer_link_subtitle">
                        <a href="products.html">Оборудование</a>
                    </div>
                    <ul class="footer_link_list">
                        <li><a href="pos.html">POS системы</a></li>
                        <li><a href="computer.html">Компьютеры и комплектующие</a></li>
                        <li><a href="scanner.html">Сканеры штрих-кодов</a></li>
                        <li><a href="printer.html">Принтеры чеков и этикеток</a></li>
                        <li><a href="till.html">Денежные ящики</a></li>
                        <li><a href="scale.html">Весы электронные</a></li>
                        <li><a href="terminal.html">Терминалы сбора данных</a></li>
                        <li><a href="banknotes.html">Счетчики и детекторы банкнот</a></li>
                        <li><a href="eas.html">Антикражное оборудование</a></li>
                    </ul>
                    <div class="footer_social_btns">
                        <div class="footer_social_btns_content">
                            <a class="btn instagram" href="https://www.instagram.com/idiamarket/">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                            <a class="btn whatsapp" href="https://api.whatsapp.com/send/?phone=77012336600&amp;text&amp;app_absent=0">
                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                            </a>
                            <a class="btn youtube" href="https://www.youtube.com/channel/UCNDMIviMuZOhhCP7xoxGYAA/videos">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>',
        $fileContent);
    return $fileContent;
}

function changePageHeadAgileInfoW3l($attributeAlmaty, $newCityName, $fileContent)
{
    $w3lStart = strpos($fileContent, '<div class="page-head_agile_info_w3l">');
    $w3lEnd = strpos($fileContent, '</div>', $w3lStart);
    if ($w3lStart !== false && $w3lEnd !== false) {
        $w3lContent = substr($fileContent, $w3lStart + strlen('<title>'), $w3lEnd - $w3lStart - strlen('<title>'));
        $newW3lContent = str_replace($attributeAlmaty, $newCityName, $w3lContent);
        $fileContent = substr_replace($fileContent, $newW3lContent, $w3lStart + strlen('<title>'), $w3lEnd - $w3lStart - strlen('<title>'));
    }
    return $fileContent;
}

function changePageTitle($attributeAlmaty, $newCityName, $fileContent)
{
    $pageTitleStart = strpos($fileContent, '<div class="page_title">');
    $pageTitleEnd = strpos($fileContent, '</div>', $pageTitleStart);
    if ($pageTitleStart !== false && $pageTitleEnd !== false) {
        $pageTitleContent = substr($fileContent, $pageTitleStart + strlen('<title>'), $pageTitleEnd - $pageTitleStart - strlen('<title>'));
        $newPageTitleContent = str_replace($attributeAlmaty, $newCityName, $pageTitleContent);
        $fileContent = substr_replace($fileContent, $newPageTitleContent, $pageTitleStart + strlen('<title>'), $pageTitleEnd - $pageTitleStart - strlen('<title>'));
    }
    return $fileContent;
}

function replaceWordInText($cityNam) {
    $draft = '<option value="Алматы">Алматы</option>
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
                                    <option value="Шымкент">Шымкент</option>';

    $replacement = '<option value="' . $cityNam . '"';

    return str_replace(
        $replacement,
        $replacement . ' selected="selected"',
        $draft);
}

function changeCitySelector($fileContent, $cityName)
{
    $readyChangeSelector = replaceWordInText($cityName);
    return str_replace(
        '<option value="Алматы" selected="selected">Алматы</option>
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
                                    <option value="Шымкент">Шымкент</option>',
        $readyChangeSelector,
        $fileContent);
}
/*--------------------------------------------------------------------------------------------------------------------*/
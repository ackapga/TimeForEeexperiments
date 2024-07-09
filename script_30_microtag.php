<?php

$directories = [
    '',
    //'almaty',
    //'astana',
    //'nursultan',
    //'shymkent',
];

$filesToChange = [
    'lari_frostor_f400c.html',
//    'lari_cryspi_cf500f_direct.html',
//    'lari_frostor_gellar_fg400c.html',
//    'camera_standard.html',
//    'shx08.html',
//    'polair_cb107s.html',
//    'lari_frostor_f600c.html',
//    'boneta_frostor_f2500b.html',
//    'camera_professional.html',
//    'boneta_frostor_f2100be.html',
//    'mxm_capri_05_nsk.html',
//    'polair_cb105s.html',
//    'boneta_frostor_f2000b.html',
//    'boneta_frostor_uf1900be.html',
//    'dm105s.html',
//    'dm110sd.html',
//    'polair_dm110s.html',
//    'polair_db102s.html',
//    'capri490.html',
//    'dm107s.html',
//    'capri390.html',
//    'bc105.html',
//    'capri05.html',
//    'carboma_shkaf2.html',
//    'capri112.html',
//    'kapri_nerjaveika.html',
//    'carboma_shkaf.html',
//    'capri15.html',
//    'bonvini.html',
//    'mxm_capri_12_n.html',
//    'dv110s.html',
//    'shx080.html',
//    'bc110sd.html',
//    'elton15.html',
//    'cm105gm.html',
//    'cm105s.html',
//    'elton07.html',
//    'carboma_f560.html',
//    'camera_steklo.html',
//    'camera_minicella.html',
//    'lari_frostor_gellar_fg600c.html',
//    'lari_frostor_f400s.html',
//    'lari_frostor_f500sd.html',
//    'lari_frostor_gellar_fg250c.html',
//    'boneta_frostor_f1900be.html',
//    'boneta_frostor_uf2000b.html',
//    'boneta_frostor_uf2100be.html',
//    'boneta_frostor_f2500be.html',
//    'polair_db105s.html',
//    'mxm_capri_05_n.html',
//    'mxm_capri_07_n.html',
//    'lari_frostor_f500c.html',
//    'lari_frostor_gellar_fg375e.html',
//    'lari_frostor_f500s.html',
//    'lari_frostor_gellar_fg275e.html',
//    'boneta_frostor_uf2500be.html',
//    'boneta_frostor_uf2500b.html',
//    'boneta_lvn_2500.html',
//    'boneta_lvn_2100.html',
//    'lari_frostor_f700s.html',
//    'lari_frostor_f700c.html',
//    'lari_frostor_gellar_fg500e.html',
//    'lari_frostor_f400sd.html',
//    'polair_db107s.html',
//    'carboma_f700.html',
//    'polair_cb114s.html',
//    'mxm_capri_15_n.html',
//    'boneta_lvn_1850.html',
//    'boneta_lvn_1850_torec.html',
//    'boneta_bonvini.html',
//    'boneta_bf.html',
//    'lari_frostor_gellar_fg400e.html',
//    'lari_frostor_f600sd.html',
//    'lari_frostor_gellar_fg600e.html',
//    'lari_frostor_f350s.html',
//    'boneta_frostor_superstructure_2100.html',
//    'boneta_frostor_superstructure_lighting_2100.html',
//    'boneta_frostor_superstructure_2000.html',
//    'boneta_frostor_superstructure_lighting_2500.html',
//    'boneta_frostor_superstructure_2500.html',
//    'cryspi_milan_1562.html',
//    'cryspi_milan_2343.html',
//    'cryspi_milan_3123.html',
//    'lari_frostor_f350c.html',
//    'lari_frostor_gellar_fg250e.html',
//    'lari_frostor_f700sd.html',
//    'lari_frostor_f800c.html',
//    'lari_frostor_gellar_fg700e.html',
//    'lari_frostor_f800s.html',
//    'lari_frostor_gellar_fg350e.html',
//    'lari_frostor_f800sd.html',
//    'lari_frostor_gellar_fg350c.html',
//    'lari_frostor_gellar_fg675e.html',
//    'lari_frostor_f180c.html',
//    'lari_cryspi_cf200f_direct.html',
//    'cryspi_milan_3905.html',
//    'carboma_f1400.html',
//    'cryspi_milan_s_2343.html',
//    'dm104_bravo.html',
//    'lari_frostor_f180s.html',
//    'lari_frostor_gellar_fg475e.html',
//    'lari_frostor_f215c.html',
//    'lari_frostor_f215s.html',
//    'lari_cryspi_cf300f_direct.html',
//    'lari_frostor_f250c.html',
//    'lari_cryspi_cf600f_direct.html',
//    'lari_frostor_f600s.html',
//    'lari_frostor_f250s.html',
//    'lari_frostor_gellar_fg575e.html',
//    'lari_frostor_gellar_fg500c.html',
//    'lari_frostor_gellar_fg775e.html',
//    'lari_cryspi_cf400f_direct.html',
//    'lari_frostor_gellar_fg700c.html',
//    'boneta_bfg.html',
//    'boneta_torcevaya.html',
//    'boneta_kalipso.html',
//    'boneta_kupec.html',
//    'boneta_malta.html',
//    'boneta_rica.html',
//    'lar_gluhoi.html',
//    'lar_gnutyi.html',
//    'lar_gnutyi_siniy.html',
//    'lar_gnutyi_seryi.html',
//    'lar_pryamoi.html',
//    'lar_pryamoi_siniy.html',
//    'lar_pryamoi_seryi.html',
//    'monoblok_standard.html',
//    'monoblok_mmn.html',
//    'monoblok_mikrokanal.html',
//    'monoblok_potolochnyi.html',
//    'split_standard.html',
//    'split_mikrokanal.html',
//    'split_professionale.html',
//    'split_msn.html',
//    'shx.html',
//    'carboma_met.html',
//    'cm105sm.html',
//    'cm110gm.html',
//    'cm110g.html',
//    'dm102_bravo.html',
//    'dm110s.html',
//    'cm110s.html',
//    'cm110sm.html',
//    'cm105g.html',
//    'dp102s.html',
//    'shkhs-0-5-krash.html',
//    'shkhs-0-5-01-nerzh.html',
//    'shkhs-0-5-02-krash.html',
//    'shkhs-0-7-krash.html',
//    'shkhs-0-7-03-nerzh.html',
//    'shkhs-0-7-01-nerzh.html',
//    'shkhs-0-7-02-krash.html',
//    'shkhs-1-0-krash.html',
//    'shkhs-1-4-03-nerzh.html',
//    'shkhs-1-4-krash.html',
//    'shkhs-1-4-01-nerzh.html',
//    'shkhs-1-4-02-krash.html',
//    'shkh-0-5-krash.html',
//    'shkh-0-5-01-nerzh.html',
//    'shkh-0-5-02-krash.html',
//    'shkh-0-7-krash.html',
//    'shkh-0-7-01-nerzh.html',
//    'shkh-0-7-02-krash.html',
//    'shkh-1-0-krash.html',
//    'shkh-1-4-krash.html',
//    'shkh-1-4-01-nerzh.html',
//    'shkh-1-4-02-krash.html',
//    'shkhn-0-5-krash.html',
//    'shkhn-0-5-01-nerzh.html',
//    'shkhn-0-5-02-krash.html',
//    'shkhn-0-7-krash.html',
//    'shkhn-0-7-01-nerzh.html',
//    'shkhn-0-7-02-krash.html',
//    'shkhn-1-0-krash.html',
//    'shkhn-1-4-01-nerzh.html',
//    'shkhn-1-4-02-krash.html',
//    'shkhn-1-4-krash.html',
//    'shxf02.html',
//    'shxf02_dc.html',
//    'shxf04.html',
//    'shxf04_dc.html',
//    'shxf05_dc.html',
//    'shxf05.html',
//    'shxf1_dc.html',
//    'shxf1.html',
];



foreach ($directories as $dir) {
    echo PHP_EOL . ' START DIRECTORY --------------------------------------------------> ' . $dir . '. <br> ' . PHP_EOL;
    foreach ($filesToChange as $file) {
        //$wayToFile = $dir . DIRECTORY_SEPARATOR . $file;
        $wayToFile = $dir . $file;
        $check = is_file($wayToFile);
        changeNameCityAndHeaderFooter($wayToFile);
    }
}

echo "END";


/*--------------------------------------------------------------------------------------------------------------------*/

function changeNameCityAndHeaderFooter($fileWhichChange)
{
    $content = file_get_contents($fileWhichChange);

//    $content = str_replace(
//        'class="product_page_box"',
//        'class="product_page_box" itemscope itemtype="https://schema.org/Product"',
//        $content);
//
//    $content = str_replace(
//        '<h1>',
//        '<h1 itemprop="name">',
//        $content);

    $content = askarFunction667($content, '<ul id="image-gallery"', '</ul>', '<img', 'wws');



    file_put_contents($fileWhichChange, $content);
}

function askarFunction667($html, $startTag, $endTag, $searchText, $replaceText) {
    $startPos = strpos($html, $startTag);
    if ($startPos === false) {
        return $html;
    }

    $endPos = strpos($html, $endTag, $startPos);
    if ($endPos === false) {
        return $html; // Если не найдено конечное место, возвращаем оригинальный HTML
    }

    $range = substr($html, $startPos, $endPos - $startPos + strlen($endTag));

    $range = str_replace($searchText, $replaceText, $range);

    return substr_replace($html, $range, $startPos, $endPos - $startPos + strlen($endTag));
}

/*--------------------------------------------------------------------------------------------------------------------*/

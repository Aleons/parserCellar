<?php
//include (ABSOLUTE_PATH.'/template/listShopProduct.php');
//include (ABSOLUTE_PATH.'/template/templatePage.php');
// (ABSOLUTE_PATH.'/function/savepage/pageSave.php');
//
function get_api_ecopulseRU()
{
    $ecopulseRU = get_list_product()["ecopulseRU"];
    $url = $ecopulseRU["url"];
    $fileName = $ecopulseRU["fileName"];
    upload_page($url, $fileName);
    return get_json($ecopulseRU);
}
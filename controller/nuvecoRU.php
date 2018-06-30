<?php
//include (ABSOLUTE_PATH.'/template/listShopProduct.php');
//include (ABSOLUTE_PATH.'/template/templatePage.php');
// (ABSOLUTE_PATH.'/function/savepage/pageSave.php');
//
function get_api_nuvecoRU()
{
    $nuvecoRU = get_list_product()["nuvecoRU"];
    $url = $nuvecoRU["url"];
    $fileName = $nuvecoRU["fileName"];
    upload_page($url, $fileName);
    return get_json($nuvecoRU);
}
<?php
//include (ABSOLUTE_PATH.'/template/listShopProduct.php');
//include (ABSOLUTE_PATH.'/template/templatePage.php');
// (ABSOLUTE_PATH.'/function/savepage/pageSave.php');
//
function get_api_gammaSepticRU()
{
    $gammaSepticRU = get_list_product()["gammaSepticRU"];
    $url = $gammaSepticRU["url"];
    $fileName = $gammaSepticRU["fileName"];
    upload_page($url, $fileName);
    return get_json($gammaSepticRU);
}
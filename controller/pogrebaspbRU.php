<?php
//include (ABSOLUTE_PATH.'/template/listShopProduct.php');
//include (ABSOLUTE_PATH.'/template/templatePage.php');
// (ABSOLUTE_PATH.'/function/savepage/pageSave.php');
//
function get_api_pogrebaspbRF()
{
    $pogrebaspbRF = get_list_product()["pogrebaspbRF"];
    $url = $pogrebaspbRF["url"];
    $fileName = $pogrebaspbRF["fileName"];
    upload_page($url, $fileName);
    return get_json($pogrebaspbRF);
}
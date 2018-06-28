<?php
include (ABSOLUTE_PATH.'/template/listShopProduct.php');
include (ABSOLUTE_PATH.'/template/templatePage.php');
include (ABSOLUTE_PATH.'/function/savepage/pageSave.php');

function get_api_3agorodRU()
{
    $_3agorodRUProduct = get_list_product()["3agorodRU"];
    $url = $_3agorodRUProduct["url"];
    $fileName = $_3agorodRUProduct["fileName"];
    upload_page($url, $fileName);
    return get_json($_3agorodRUProduct);
}
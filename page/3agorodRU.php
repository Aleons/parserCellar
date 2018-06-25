<?php
include(ABSOLUTE_PATH."/model/cellar.php");
include(ABSOLUTE_PATH.'/function/getelement.php');
include(ABSOLUTE_PATH.'/function/savepage/savepage.php');



$tingard1500 = new Cellar();
upload_page();
$file = ABSOLUTE_PATH.'/function/savepage/3agorodRU.html';
$url = "https://3agorod.ru/tingard/";
$tingard1500->setName(trim(get_element($file, "//*[@class='title']")->item(0)->textContent));
$tingard1500->setPrice(trim(get_element($file,"//*[@class='price_val']")->item(0)->textContent));

$tingard1900 = new Cellar();
$tingard1900->setName(trim(get_element($file,"//*[@class='title']")->item(1)->textContent));
$tingard1900->setPrice(trim(get_element($file,"//*[@class='price_val']")->item(1)->textContent));

$tingard2500 = new Cellar();
$tingard2500->setName(trim(get_element($file,"//*[@class='title']")->item(2)->textContent));
$tingard2500->setPrice(trim(get_element($file,"//*[@class='price_val']")->item(2)->textContent));

function get_3agorodRU_cellars(){
    global $url;
    global $file;
    global $tingard1500;
    global $tingard1900;
    global $tingard2500;
    $json = "{\"cellars\":["
        .$tingard1500->toString().","
        .$tingard1900->toString().","
        .$tingard2500->toString()."],\n \"url\":\""
        .$url."\"}";
    unlink($file);
    return $json;

}
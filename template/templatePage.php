<?php
include(ABSOLUTE_PATH."/model/cellar.php");
include(ABSOLUTE_PATH.'/function/getelement.php');


function get_json(array $component){
    $tingard1500 = new Cellar();
    $file = ABSOLUTE_PATH.'/function/savepage/'.$component["fileName"].'.html';
    $url = $component["url"];

    $tingard1500->setName(trim(get_element($file, $component["xpathNameT1500"])->item(0)->textContent));
    $tingard1500->setPrice(trim(get_element($file,$component["xpathPriceT1500"])->item(0)->textContent));
    if($component["xpathDiscountPriceT1500"]!=null) {
        $tingard1500->setDiscountPrice(trim(get_element($file, $component["xpathDiscountPriceT1500"])->item(0)->textContent));
    }

    $tingard1900 = new Cellar();
    $tingard1900->setName(trim(get_element($file,$component["xpathNameT1900"])->item(0)->textContent));
    $tingard1900->setPrice(trim(get_element($file,$component["xpathPriceT1900"])->item(0)->textContent));
    if($component["xpathDiscountPriceT1900"]!=null) {
        $tingard1900->setDiscountPrice(trim(get_element($file, $component["xpathDiscountPriceT1900"])->item(0)->textContent));
    }

    $tingard2500 = new Cellar();
    $tingard2500->setName(trim(get_element($file,$component["xpathNameT2500"])->item(0)->textContent));
    $tingard2500->setPrice(trim(get_element($file,$component["xpathPriceT2500"])->item(0)->textContent));
    if($component["xpathDiscountPriceT2500"]!=null) {
        $tingard2500->setDiscountPrice(trim(get_element($file, $component["xpathDiscountPriceT2500"])->item(0)->textContent));
    }

    $json = "{\"cellars\":["
        .$tingard1500->toString().","
        .$tingard1900->toString().","
        .$tingard2500->toString()."],\n \"url\":\""
        .$url."\"}";

    unlink($file);

    return $json;
}
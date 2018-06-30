<?php
function get_list_product(){
    return
    array(
        "3agorodRU"=>array(
            "url"=>"https://3agorod.ru/tingard/",
            "fileName"=>"3agorodRU",

            "xpathNameT1500"=>"//*[@class=\"catalog item-views table\"]/div/div[1]//*[@class=\"title\"]",
            "xpathPriceT1500"=>"//*[@class=\"catalog item-views table\"]/div/div[1]//*[@class=\"price_val\"]",
            "xpathDiscountPriceT1500"=>null,

            "xpathNameT1900"=>"//*[@class=\"catalog item-views table\"]/div/div[2]//*[@class=\"title\"]",
            "xpathPriceT1900"=>"//*[@class=\"catalog item-views table\"]/div/div[2]//*[@class=\"price_val\"]",
            "xpathDiscountPriceT1900"=>null,

            "xpathNameT2500"=>"//*[@class=\"catalog item-views table\"]/div/div[3]//*[@class=\"title\"]",
            "xpathPriceT2500"=>"//*[@class=\"catalog item-views table\"]/div/div[3]//*[@class=\"price_val\"]",
            "xpathDiscountPriceT2500"=>null),
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        "pogrebaspbRF"=>array(
            "url"=>"http://xn----7sbccgm5dhgfp.xn--p1ai/",
            "fileName"=>"PogrebaSpbRF",

            "xpathNameT1500"=>"//*[@class=\"order_product_two\"]//a",
            "xpathPriceT1500"=>"//*[@class=\"order_product_two\"]//div[1]",
            "xpathDiscountPriceT1500"=>"//*[@class=\"order_product_two\"]//div[2]",

            "xpathNameT1900"=>"//*[@class=\"order_product_one\"]//a",
            "xpathPriceT1900"=>"//*[@class=\"order_product_one\"]//div[1]",
            "xpathDiscountPriceT1900"=>"//*[@class=\"order_product_one\"]//div[2]",

            "xpathNameT2500"=>"//*[@class=\"order_product\"]//a",
            "xpathPriceT2500"=>"//*[@class=\"order_product\"]//div[1]",
            "xpathDiscountPriceT2500"=>"//*[@class=\"order_product\"]//div[2]"),
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        "ecopulseRU"=>array(
            "url"=>"http://eco-pulse.ru/products/pogreb-tingard",
            "fileName"=>"ecopulseRU",

            "xpathNameT1500"=>"//*[@class=\"field-item odd\"]//tr[1]/td[2]",
            "xpathPriceT1500"=>"//*[@class=\"field-item odd\"]//tr[13]/td[2]",
            "xpathDiscountPriceT1500"=>null,

            "xpathNameT1900"=>"//*[@class=\"field-item odd\"]//tr[1]/td[3]",
            "xpathPriceT1900"=>"//*[@class=\"field-item odd\"]//tr[13]/td[3]",
            "xpathDiscountPriceT1900"=>null,

            "xpathNameT2500"=>"//*[@class=\"field-item odd\"]//tr[1]/td[4]",
            "xpathPriceT2500"=>"//*[@class=\"field-item odd\"]//tr[13]/td[4]",
            "xpathDiscountPriceT2500"=>null),
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            "gammaSepticRU"=>array(
                "url"=>"https://gamma-septic.ru/pogreba-i-kessony/tingard/",
                "fileName"=>"gammaSepticRU",

                "xpathNameT1500"=>"//*[@id=\"product-table\"]//tr[2]/td[1]",
                "xpathPriceT1500"=>"//*[@id=\"product-table\"]//tr[2]/td[2]",
                "xpathDiscountPriceT1500"=>null,

                "xpathNameT1900"=>"//*[@id=\"product-table\"]//tr[3]/td[1]",
                "xpathPriceT1900"=>"//*[@id=\"product-table\"]//tr[3]/td[2]",
                "xpathDiscountPriceT1900"=>null,

                "xpathNameT2500"=>"//*[@id=\"product-table\"]//tr[4]/td[1]",
                "xpathPriceT2500"=>"//*[@id=\"product-table\"]//tr[4]/td[2]",
                "xpathDiscountPriceT2500"=>null),
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            "nuvecoRU"=>array(
                "url"=>"https://nuveco.ru/katalog/pogreba/tingard",
                "fileName"=>"nuvecoRU",

                "xpathNameT1500"=>"//*[@id=\"catalogList\"]/div[2]//*[@class=\"product-item__title\"]",
                "xpathPriceT1500"=>"//*[@id=\"catalogList\"]/div[2]//*[@class=\"product-item__price-value\"]",
                "xpathDiscountPriceT1500"=>null,

                "xpathNameT1900"=>"//*[@id=\"catalogList\"]/div[3]//*[@class=\"product-item__title\"]",
                "xpathPriceT1900"=>"//*[@id=\"catalogList\"]/div[3]//*[@class=\"product-item__price-value\"]",
                "xpathDiscountPriceT1900"=>null,

                "xpathNameT2500"=>"//*[@id=\"catalogList\"]/div[5]//*[@class=\"product-item__title\"]",
                "xpathPriceT2500"=>"//*[@id=\"catalogList\"]/div[5]//*[@class=\"product-item__price-value\"]",
                "xpathDiscountPriceT2500"=>null),
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    );
}
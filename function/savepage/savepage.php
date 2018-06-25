<?php
$nameFilePages=array("3agorodRU",

    );
$namePage = array("https://3agorod.ru/tingard/",

    );


function upload_page (){
    global $nameFilePages;
    global $namePage;
    for($i = 0;$i<count($nameFilePages);$i++){
        if(!file_exists(ABSOLUTE_PATH."/function/savepage/".$namePage[$i].".html")) {
            $page = file_get_contents($namePage[$i]);
            $fp = fopen(ABSOLUTE_PATH."/function/savepage/" . $nameFilePages[$i] . ".html", "w");
            fwrite($fp, $page);
            fclose($fp);
        }
    }
}
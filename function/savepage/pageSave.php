<?php
function upload_page ($url, $fileName){
    if(!file_exists(ABSOLUTE_PATH."/function/savepage/".$fileName.".html")) {
        $page = file_get_contents($url);
        $fp = fopen(ABSOLUTE_PATH."/function/savepage/".$fileName . ".html", "w");
        fwrite($fp, $page);
        fclose($fp);
    }
}
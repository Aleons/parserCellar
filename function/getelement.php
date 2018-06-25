<?php
function get_element($file, $xpath){
    $html  = new DOMDocument();
    @$html ->loadHTMLFile($file);
    $path = new DOMXPath($html);
    $nodes = $path ->query($xpath);
    return $nodes;
}
<?php
define('ABSOLUTE_PATH', dirname(__FILE__));
include (ABSOLUTE_PATH.'/controller/3agorodRU.php');
include(ABSOLUTE_PATH . '/controller/pogrebaspbRU.php');
include(ABSOLUTE_PATH . '/controller/ecopulseRU.php');
include(ABSOLUTE_PATH . '/controller/gammaSepticRU.php');
include(ABSOLUTE_PATH . '/controller/nuvecoRU.php');

echo get_api_3agorodRU();
print"\n **********************";
echo get_api_pogrebaspbRF();
print"\n **********************";
echo get_api_ecopulseRU();
print"\n **********************";
echo get_api_gammaSepticRU();
print"\n **********************";
echo get_api_nuvecoRU();
print"\n **********************";
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../../config/init.php';
include_once $BASE_DIR . 'database/filters.php';

$res = getFilteredProducts(filter_input(INPUT_GET, 'q'));

print_r(json_encode($res));
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../../config/init.php';
include_once $BASE_DIR . 'database/products.php';

if ($_SESSION['permission'] != 1 && $_SESSION['permission'] != 2) {
    header('Location: ' . filter_input(INPUT_SERVER, 'HTTP_REFERER'));
}

$param = filter_input(INPUT_GET, 'id');

if ($param) {
    $param = '?id=' . $param;
    $smarty->assign('param', $param);
}

$smarty->display('manage/add_product.tpl');
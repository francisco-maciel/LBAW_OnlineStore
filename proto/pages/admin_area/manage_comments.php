<?php

include_once '../../config/init.php';
include_once $BASE_DIR . 'database/comments.php';

if ($_SESSION['permission'] != 1 && $_SESSION['permission'] != 2) {
    header('Location: ' . $BASE_URL);
}
$smarty->assign('no_cart', true);

$count = countComments();

$smarty->assign('pages', (int) ($count['count'] / 20));

$smarty->display('manage/manage_comments.tpl');

<?php
include_once __DIR__ .'/path.php';
include_once View_Setting;
$view = new View(Template);
$view->assign('name', 'suraj');
$view->display('startup.tpl');
?>
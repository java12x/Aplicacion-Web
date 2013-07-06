<?php

header("Cache-Control: no-cache");
header("Pragma: no-cache");

include_once '../../libs.inc.php';

$edit_mode = @($_REQUEST['edit_mode'] == "true");
$smarty->assign("edit_mode", !$edit_mode);

$ajax_request = @($_SERVER["HTTP_AJAX_REQUEST"] == "true");
$smarty->display($ajax_request ? 'p/demo_form.tpl' : 'p/demo_page.tpl');
?>
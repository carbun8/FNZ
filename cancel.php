<?php

require_once '/var/www/html/billing/common_function/update_userbase.php';
require_once '/var/www/html/billing/common_function/common_functions.php';
require_once 'productConfig.php';

$phpInput   = file_get_contents('php://input');
$sLog = __FILE__."|".__LINE__."|Start|".json_encode($_REQUEST)."|".$phpInput;
commonLogging($sLog, $logPath);

echo "Cancel";
exit();
?>

<?php
error_reporting(E_ALL)
;
ini_set('display_errors', 1);
function customErrorHandler($errno, $errstr, $errfile, $errline){
$message= "Error [$errno] $ - $errfile $errline";
error_log($message.PHP_EOL,3,'error_log.txt');
}
set_error_handler('customErrorHandler');
echo 'hello world';
echo $undefineVar;
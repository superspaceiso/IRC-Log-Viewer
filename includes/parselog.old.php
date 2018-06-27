 <?php

//path to logs
$file_path='./logs/';
//get file name from url
$log_location = $_GET['l'];
//combine path and url
$file_path = '../logs/2016-07-25.log';

$log_file=file_get_contents($file_path/*.$log_location*/);

//regex for capturing in channel status change (name changes or parts)
$param1 = '/\\[(.*)\\] (\\*{3}) (.*)/';
preg_match_all($param1, $log_file, $log_output1, PREG_PATTERN_ORDER,$offset = 0);

unset($log_output1[0]);
//print_r($log_output1);

//regex for capturing user action (such as /me)
$param2 = '/\\[(.*)\] (\\*{1}) (.*)/';
preg_match_all($param2, $log_file, $log_output2, PREG_PATTERN_ORDER,$offset = 0);

unset($log_output2[0]);
//print_r($log_output2);

//regex for capturing user message
$param3 ='/\[(.*)\] <(.*?)> (.*)/';
preg_match_all($param3, $log_file, $log_output3, PREG_PATTERN_ORDER,$offset = 0);

unset($log_output3[0]);
//print_r($log_output3);

$timestamp = array_merge($log_output1[1], $log_output2[1], $log_output3[1]);
$user = array_merge($log_output1[2], $log_output2[2], $log_output3[2]);
$message = array_merge($log_output1[3], $log_output2[3], $log_output3[3]);

print_r($log_output1);

$messages = array_map(null, $timestamp,$user,$message);

//require 'parselog.view.php';

?>

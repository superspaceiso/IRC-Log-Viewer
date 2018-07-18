<?php

//path to logs
$file_path='../logs/2016-07-25.log';
//$file_path='./logs/channel/';
//get file name from url
//$log_location = $_GET['l'];
//combine path and url
$log_file=file_get_contents($file_path);

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
$user = array_count_values(array_merge($log_output1[2], $log_output2[2], $log_output3[2]));
$message = array_merge($log_output1[3], $log_output2[3], $log_output3[3]);


function hr00($ts){
  return($ts >= "00:00:00" AND $ts <= "00:59:59");
}
function hr01($ts){
  return($ts >= "01:00:00" AND $ts <= "01:59:59");
}
function hr02($ts){
  return($ts >= "02:00:00" AND $ts <= "02:59:59");
}
function hr03($ts){
  return($ts >= "03:00:00" AND $ts <= "03:59:59");
}
function hr04($ts){
  return($ts >= "04:00:00" AND $ts <= "04:59:59");
}
function hr05($ts){
  return($ts >= "05:00:00" AND $ts <= "05:59:59");
}
function hr06($ts){
  return($ts >= "06:00:00" AND $ts <= "06:59:59");
}
function hr07($ts){
  return($ts >= "07:00:00" AND $ts <= "07:59:59");
}
function hr08($ts){
  return($ts >= "08:00:00" AND $ts <= "08:59:59");
}
function hr09($ts){
  return($ts >= "09:00:00" AND $ts <= "09:59:59");
}
function hr10($ts){
  return($ts >= "10:00:00" AND $ts <= "10:59:59");
}
function hr11($ts){
  return($ts >= "11:00:00" AND $ts <= "11:59:59");
}
function hr12($ts){
  return($ts >= "12:00:00" AND $ts <= "12:59:59");
}
function hr13($ts){
  return($ts >= "13:00:00" AND $ts <= "13:59:59");
}
function hr14($ts){
  return($ts >= "14:00:00" AND $ts <= "14:59:59");
}
function hr15($ts){
  return($ts >= "15:00:00" AND $ts <= "15:59:59");
}
function hr16($ts){
  return($ts >= "16:00:00" AND $ts <= "16:59:59");
}
function hr17($ts){
  return($ts >= "17:00:00" AND $ts <= "17:59:59");
}
function hr18($ts){
  return($ts >= "18:00:00" AND $ts <= "18:59:59");
}
function hr19($ts){
  return($ts >= "19:00:00" AND $ts <= "19:59:59");
}
function hr20($ts){
  return($ts >= "20:00:00" AND $ts <= "20:59:59");
}
function hr21($ts){
  return($ts >= "21:00:00" AND $ts <= "21:59:59");
}
function hr22($ts){
  return($ts >= "22:00:00" AND $ts <= "22:59:59");
}
function hr23($ts){
  return($ts >= "23:00:00" AND $ts <= "23:59:59");
}

$hr00 = count(array_filter($timestamp, "hr00"));
$hr01 = count(array_filter($timestamp, "hr01"));
$hr02 = count(array_filter($timestamp, "hr02"));
$hr03 = count(array_filter($timestamp, "hr03"));
$hr04 = count(array_filter($timestamp, "hr04"));
$hr05 = count(array_filter($timestamp, "hr05"));
$hr06 = count(array_filter($timestamp, "hr06"));
$hr07 = count(array_filter($timestamp, "hr07"));
$hr08 = count(array_filter($timestamp, "hr08"));
$hr09 = count(array_filter($timestamp, "hr09"));
$hr10 = count(array_filter($timestamp, "hr10"));
$hr11 = count(array_filter($timestamp, "hr11"));
$hr12 = count(array_filter($timestamp, "hr12"));
$hr13 = count(array_filter($timestamp, "hr13"));
$hr14 = count(array_filter($timestamp, "hr14"));
$hr15 = count(array_filter($timestamp, "hr15"));
$hr16 = count(array_filter($timestamp, "hr16"));
$hr17 = count(array_filter($timestamp, "hr17"));
$hr18 = count(array_filter($timestamp, "hr18"));
$hr19 = count(array_filter($timestamp, "hr19"));
$hr20 = count(array_filter($timestamp, "hr20"));
$hr21 = count(array_filter($timestamp, "hr21"));
$hr22 = count(array_filter($timestamp, "hr22"));
$hr23 = count(array_filter($timestamp, "hr23"));

$linecount = [];

$linecount["00:00"] = $hr00;
$linecount["01:00"] = $hr01;
$linecount["02:00"] = $hr02;
$linecount["03:00"] = $hr03;
$linecount["04:00"] = $hr04;
$linecount["05:00"] = $hr05;
$linecount["06:00"] = $hr06;
$linecount["07:00"] = $hr07;
$linecount["08:00"] = $hr08;
$linecount["09:00"] = $hr09;
$linecount["10:00"] = $hr10;
$linecount["11:00"] = $hr11;
$linecount["12:00"] = $hr12;
$linecount["13:00"] = $hr13;
$linecount["14:00"] = $hr14;
$linecount["15:00"] = $hr15;
$linecount["16:00"] = $hr16;
$linecount["17:00"] = $hr17;
$linecount["18:00"] = $hr18;
$linecount["19:00"] = $hr19;
$linecount["20:00"] = $hr20;
$linecount["21:00"] = $hr21;
$linecount["22:00"] = $hr22;
$linecount["23:00"] = $hr23;

print_r($linecount);


?>

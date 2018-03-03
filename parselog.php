 <?php

//path to logs
$file_path='./logs/';
//get file name from url
$log_location = $_GET['log'];
//combine path and url
$log_file=file_get_contents($file_path.$log_location);

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
$messasge = array_merge($log_output1[3], $log_output2[3], $log_output3[3]);

$messages = array_map(null, $timestamp,$user,$messasge);

echo "<table>";
echo "<tr><th></th><th></th><th></th></tr>";

foreach ($messages as $line) {
  $ts = $line[0];
  $usr = $line[1];
  $msg = $line[2];

  echo "<tr><td>",$ts,"</td><td>",$usr,"</td><td>",$msg,"</td>";
}

echo "</table>";

?>

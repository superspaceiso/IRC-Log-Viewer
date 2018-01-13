<?php

//path to logs
$file_path='./logs/2015-08-02.log';
//get file name from url
//$log_location = $_GET['log'];
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

//=======================================================================================================

/*
$log_output1, $log_output2, and $log_output3 are each multi-dimensional arrays.
The first index will point you towards one of the three sub arrays. For example:

$log_output1[0] contains all the time stamps
$log_output1[1] contains all the username strings it seems
$log_output1[2] contains all the message outputs

$log_output1[0][0] contains the first time stamp
$log_output1[0][1] contains the second time stamp

$log_output1[1][0] contains the first "user name"
$log_output1[1][1] contains the second "user name"

$log_output1[2][0] contains the first message output
$log_output1[2][1] contains the second message output

This is a bit of a mess and isn't really ideal. Because now we have to manually consolidate all these values back together in an accessible form, and re sort it some how.

It would probably be easier to utilize the output pattern of the log file itself and output directly line by line, rather than using regular expressions.
But lets get this working anyway, the best solution off the top of my head in a situation like this, is to transfer all
the data from these multidimensional arrays into a single array that can then be sorted. Each value can then be iterated and
exploded back into an array to use each column.

None of the values are next to each other right now, which is the biggest issue. But there is always an equal number of values in each column it seems.
So in theory we can get the size of the sub array holding all the time stamps, for each of the $log_output arrays, and that number will tell us how many entries
there should be in total, which we can then use to figure out the offsets to attach the data back together again.
*/

//get size of each time stamp array, minus 1 so we know the highest key number rather than the amount of values.
$log_output1_size = sizeof($log_output1[1]) - 1;
$log_output2_size = sizeof($log_output2[1]) - 1;
$log_output3_size = sizeof($log_output3[1]) - 1;

//declare the array we will transfer all this information into, and then sort
$irc_log = array();

//loop through each log output array, and re-combine the data into single values inside the $irc_log array. We will use a unique known string as a separater, [ISEP].
$irun = 0;
while($irun <= $log_output1_size){
	$irc_log[] = $log_output1[1][$irun].'[ISEP]'.$log_output1[2][$irun].'[ISEP]'.$log_output1[3][$irun];
	$irun++;
}

$irun = 0;
while($irun <= $log_output2_size){
	$irc_log[] = $log_output2[1][$irun].'[ISEP]'.$log_output2[2][$irun].'[ISEP]'.$log_output2[3][$irun];
	$irun++;
}

$irun = 0;
while($irun <= $log_output3_size){
	$irc_log[] = $log_output3[1][$irun].'[ISEP]'.$log_output3[2][$irun].'[ISEP]'.$log_output3[3][$irun];
	$irun++;
}

//as we have put time stamps at the start of the string, we should be able to sort the values back into the right order.
array_multisort($irc_log);

//now lets loop through $irc_log, explode each value back into columns, and output in some form or another
$irun = 0;
while($irc_log[$irun] != NULL){

	$thisRow = explode('[ISEP]',$irc_log[$irun]);
	$thisRow_time = $thisRow[0];
	$thisRow_user = $thisRow[1];
	$thisRow_message = $thisRow[2];

	echo '('.$thisRow_time.') <strong>'.$thisRow_user.':</strong><br>'.$thisRow_message.'<br><br>';

	$irun++;
}

?>

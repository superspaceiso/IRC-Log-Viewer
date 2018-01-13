<?php include ('includes/header.php'); ?>

<?php
$url=$_SERVER['REQUEST_URI'];
preg_match("/([a-zA-Z]+)_([0-9]+).log/", $url, $mod_url);
$correct_date = strtotime($mod_url[2]);
echo '<h1>Log: ', $mod_url[1], ' ', date('d/m/Y', $correct_date) ,'</h1>';
?>

<div id="content">

<?php

//path to logs
$file_path='./logs/';
//get file name from url
$log_location = $_GET['log'];
//combine path and url 
$log_file=file_get_contents($file_path.$log_location);

//regex  to separate text file
preg_match_all("/\[(.*)\] <(.*?)> (.*)/", $log_file, $log_output, PREG_SET_ORDER, $offset = 0);

//unset first array, this is the unseparated text
unset($log_output[0]);

//builds table with log contents  
echo "<table border='0'id='log_table'>","<tr>","<th id='timestamp'>Time Stamp</th>","<th id='user'>User</th>","<th> </th>","</tr>";

//$log_text[1](timestamp)
//$log_text[2](user)
//$log_text[3](message)
foreach ($log_output as $log_text) {
    echo "<tr>";	
    echo "<td class=\"timestamp\">" . $log_text[1] . "</td>";
    echo "<td class=\"username\">" . $log_text[2] . ": </td>";
    echo "<td>" . $log_text[3] . "</td>";
    echo "</tr>";	
}

echo "</table>";

?>


</div>

<?php include ('includes/footer.php'); ?>

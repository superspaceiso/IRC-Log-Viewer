<?php include ('includes/header.php'); ?>
 
 <div id="content">
 
 <?php
//if ($handle = opendir('/home/pi/.znc/users/Iso/moddata/log/')) {
//while (false !== ($entry = readdir($handle))) {
//if ($entry != "." && $entry != "..") {
//   echo '<a href="viewlog.php?log=', urlencode($entry), '">';
//	echo "$entry";
//	echo "</a><br>";
//            }
//       }
//           closedir($handle);
//  }

//	foreach (glob("/home/pi/.znc/users/Iso/moddata/log/*.log") as $log) {
//	 	echo '<a href="viewlog.php?log=',  urlencode(basename($log)), '">';
// 		echo basename($log);
// 		echo "</a><br>";
//	};
  
foreach (glob("./logs/*.log") as $log) {
	preg_match("/([a-zA-Z]+)_([0-9]+).log/", $log, $mod_log);
		$correct_date = strtotime($mod_log[2]);
		
	echo '<a href="viewlog.php?log=',  urlencode(basename($log)), '">';
	echo '#', $mod_log[1], ' ';
	echo date('d/m/Y', $correct_date);
	echo "</a><br>";
};  
  
?>



</div>

<?php include ('includes/footer.php'); ?>
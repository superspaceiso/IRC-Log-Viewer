<?php include ('includes/header.php'); ?>

<div id="content">

<?php
foreach (glob("./logs/*.log") as $log) {
	preg_match("/([0-9]+)-([0-9]+)-([0-9]+)/", $log, $mod_log);

  $correct_date = strtotime($mod_log[0]);

	echo '<a href="parselog.php?log=',  urlencode(basename($log)), '">';
  echo date('d/m/Y', $correct_date);
	echo "</a><br>";
};


?>

</div>

<?php include ('includes/footer.php'); ?>

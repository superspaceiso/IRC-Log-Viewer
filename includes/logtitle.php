<?php
 $url=$_SERVER['REQUEST_URI'];
 preg_match("/([0-9]+)-([0-9]+)-([0-9]+)/", $url, $mod_url);
 $correct_date = strtotime($mod_url[0]);
 echo '<h1>',date('d/m/Y', $correct_date) ,'</h1>';
?>

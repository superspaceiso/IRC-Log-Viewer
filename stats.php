<?php

$location = $_GET['l'];
$url = $_SERVER['REQUEST_URI'];

require 'src/includes/header.php';
require 'src/classes/create_logtitle.php';
require 'src/classes/parselog.php';
require 'src/classes/create_stats.php';


$title = new PageTitle($url);
$stats = new Stats($location);

require 'src/views/title.view.php';

require 'src/views/stats.view.php';

require 'src/includes/footer.php';
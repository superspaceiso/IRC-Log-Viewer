<?php

$location = $_GET['l'];
$url = $_SERVER['REQUEST_URI'];

spl_autoload_register(function ($class) {
    include 'src/classes/' . $class . '.php';
});

$title = new PageTitle($url);
$stats = new Stats($location);
$linecount = new Linecount($location);

require 'src/includes/header.php';

require 'src/views/title.view.php';

require 'src/views/stats.view.php';

require 'src/includes/footer.php';
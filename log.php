<?php

$location = $_GET['l'];
$url = $_SERVER['REQUEST_URI'];

spl_autoload_register(function ($class) {
    require 'src/classes/' . $class . '.php';
});

$title = new PageTitle($url);
$log = new ParseLog($location);

require 'src/includes/header.php';

require 'src/views/title.view.php';

require 'src/views/log.view.php';

require 'src/includes/footer.php';
<?php

$url=$_SERVER['REQUEST_URI'];

class pageTitle
{
    private $mod_url;
    public function __construct($url=null)
    {
        if ($url == null) {
            throw new Exception('URL cannot be null');
        }
        return preg_match("/([0-9]+)-([0-9]+)-([0-9]+)/", $url, $this->mod_url);
    }
    public function createTitle()
    {
        $date = strtotime($this->mod_url[0]);
        return date('d/m/Y', $date);
    }
}

$title = new pageTitle($url);

require './includes/views/title.view.php';

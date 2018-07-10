<?php

$url=$_SERVER['REQUEST_URI'];

class PageTitle
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
        return date('d/m/Y', strtotime($this->mod_url[0]));
    }
}

$title = new PageTitle($url);

require './includes/views/title.view.php';

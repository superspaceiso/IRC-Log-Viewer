<?php

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

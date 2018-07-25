<?php 

class Stats extends ParseLog
{
    public function __construct($location)
    {
        parent::__construct($location);
    }
    
    public function frequentUsers()
    {
      $frequent_users = array_count_values(array_diff($this->mergeUser(),['*','**','***']));
      arsort($frequent_users);
      return $frequent_users;
    }

    public function frequentWords($array_length)
    {
        $words = [];
        foreach ($this->mergeMessage() as $line) {
            $words = array_merge($words, explode(" ", $line));
        }
        $counted_words = array_count_values(array_map("strtolower", $words));
        arsort($counted_words);
        return array_slice($counted_words, 1, $array_length);
    }
}

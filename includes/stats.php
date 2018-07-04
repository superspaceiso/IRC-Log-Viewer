<?php 

class Stats extends ParseLog
{
    public function frequentUsers()
    {
        return array_count_values($this->mergeUser());
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

$stats = new Stats($location);

var_dump($stats->frequentUsers());
var_dump($stats->frequentWords(10));

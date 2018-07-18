 <?php

class ParseLog
{
    //The constructor method runs once, each time the class is instanced.
    protected $file_data;

    public function __construct($file_location=null)
    {

        //Backwards compatible argument validation for PHP versions below 7
        if ($file_location == null) {
            throw new Exception('File path cannot be null');
        }

        //$file_path='./logs/';
        //Because the constructor runs only once, we should read the file and store the data now.
        //This means we aren't re-reading the file from scratch everytime one of the methods below are called.
        $this->file_data = file_get_contents($file_location);
    }

    //Lets centralize where we are performing the regex, since the logic is the same each time and only the pattern changes
    public function searchData($pattern=null)
    {
        if ($pattern == null) {
            throw new Exception('Regex search pattern string cannot be null');
        }

        preg_match_all($pattern, $this->file_data, $matches, PREG_PATTERN_ORDER, $offset = 0);
        unset($matches[0]);

        return $matches;
    }

    private function getStatus()
    {
        return $this->searchData('/\\[(.*)\\] (\\*{3}) (.*)/');
    }

    private function getUserActions()
    {
        return $this->searchData('/\\[(.*)\] (\\*{1}) (.*)/');
    }

    private function getUserMessages()
    {
        return $this->searchData('/\[(.*)\] <(.*?)> (.*)/');
    }

    public function mergeTimeStamp()
    {
        return array_merge($this->getStatus()[1], $this->getUserActions()[1], $this->getUserMessages()[1]);
    }

    public function mergeUser()
    {
        return array_merge($this->getStatus()[2], $this->getUserActions()[2], $this->getUserMessages()[2]);
    }

    public function mergeMessage()
    {
        return array_merge($this->getStatus()[3], $this->getUserActions()[3], $this->getUserMessages()[3]);
    }

    public function mergeLogs()
    {
        return array_map(null, $this->mergeTimeStamp(), $this->mergeUser(), $this->mergeMessage());
    }
}

//equire 'views/log.view.php';


 <?php

class ParseLog{

  //public $log_location = $_GET['l'];
  public $file_path= '../logs/2016-07-25.log';

  private $param1 = '/\\[(.*)\\] (\\*{3}) (.*)/';
  private $param2 = '/\\[(.*)\] (\\*{1}) (.*)/';
  private $param3 = '/\[(.*)\] <(.*?)> (.*)/';

  public function OpenLog(){
    return file_get_contents($this->file_path);
  }
  public function StatusChange(){
    preg_match_all($this->param1, $this->OpenLog(), $log_output1, PREG_PATTERN_ORDER,$offset = 0);
    unset($log_output1[0]);
    return $log_output1;
  }
  public function UserAction(){
    preg_match_all($this->param2, $this->OpenLog(), $log_output2, PREG_PATTERN_ORDER,$offset = 0);
    unset($log_output2[0]);
    return $log_output2;
  }
  public function UserMessage(){
    preg_match_all($this->param3, $this->OpenLog(), $log_output3, PREG_PATTERN_ORDER,$offset = 0);
    unset($log_output3[0]);
    return $log_output3;
  }
  public function TimeStamp(){
    return array_merge($this->StatusChange(), $this->UserAction(), $this->UserMessage());
  }
  public function Username(){
    return array_merge($this->StatusChange(), $this->UserAction(), $this->UserMessage());
  }
  public function Message(){
    return array_merge($this->TimeStamp(), $this->UserAction(), $this->UserMessage());
  }
  public function MergeLog(){
    return array_map(null, $this->CombineTS(),$this->CombineUsr(),$this->CombineMsg());
  }
}



$test = new ParseLog();
print_r($test->Message());

//require 'parselog.view.php';

?>

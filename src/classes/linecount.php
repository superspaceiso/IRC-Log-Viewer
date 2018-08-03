<?php

class Linecount extends ParseLog
{
    public function __construct($location)
    {
        parent::__construct($location);
    }
  
    public function lineCount()
    {
        $linecount = [];
        $linecount["00:00"] = count(array_filter($this->mergeTimeStamp(), array($this, 'hr00')));
        $linecount["01:00"] = count(array_filter($this->mergeTimeStamp(), array($this, 'hr01')));
        $linecount["02:00"] = count(array_filter($this->mergeTimeStamp(), array($this, 'hr02')));
        $linecount["03:00"] = count(array_filter($this->mergeTimeStamp(), array($this, 'hr03')));
        $linecount["04:00"] = count(array_filter($this->mergeTimeStamp(), array($this, 'hr04')));
        $linecount["05:00"] = count(array_filter($this->mergeTimeStamp(), array($this, 'hr05')));
        $linecount["06:00"] = count(array_filter($this->mergeTimeStamp(), array($this, 'hr06')));
        $linecount["07:00"] = count(array_filter($this->mergeTimeStamp(), array($this, 'hr07')));
        $linecount["08:00"] = count(array_filter($this->mergeTimeStamp(), array($this, 'hr08')));
        $linecount["09:00"] = count(array_filter($this->mergeTimeStamp(), array($this, 'hr09')));
        $linecount["10:00"] = count(array_filter($this->mergeTimeStamp(), array($this, 'hr10')));
        $linecount["11:00"] = count(array_filter($this->mergeTimeStamp(), array($this, 'hr11')));
        $linecount["12:00"] = count(array_filter($this->mergeTimeStamp(), array($this, 'hr12')));
        $linecount["13:00"] = count(array_filter($this->mergeTimeStamp(), array($this, 'hr13')));
        $linecount["14:00"] = count(array_filter($this->mergeTimeStamp(), array($this, 'hr14')));
        $linecount["15:00"] = count(array_filter($this->mergeTimeStamp(), array($this, 'hr15')));
        $linecount["16:00"] = count(array_filter($this->mergeTimeStamp(), array($this, 'hr16')));
        $linecount["17:00"] = count(array_filter($this->mergeTimeStamp(), array($this, 'hr17')));
        $linecount["18:00"] = count(array_filter($this->mergeTimeStamp(), array($this, 'hr18')));
        $linecount["19:00"] = count(array_filter($this->mergeTimeStamp(), array($this, 'hr19')));
        $linecount["20:00"] = count(array_filter($this->mergeTimeStamp(), array($this, 'hr20')));
        $linecount["21:00"] = count(array_filter($this->mergeTimeStamp(), array($this, 'hr21')));
        $linecount["22:00"] = count(array_filter($this->mergeTimeStamp(), array($this, 'hr22')));
        $linecount["23:00"] = count(array_filter($this->mergeTimeStamp(), array($this, 'hr23')));
        return $linecount;
    }
    private function callbacks()
    {
        call_user_func(array($this, 'hr00'));
        call_user_func(array($this, 'hr01'));
        call_user_func(array($this, 'hr02'));
        call_user_func(array($this, 'hr03'));
        call_user_func(array($this, 'hr04'));
        call_user_func(array($this, 'hr05'));
        call_user_func(array($this, 'hr06'));
        call_user_func(array($this, 'hr07'));
        call_user_func(array($this, 'hr08'));
        call_user_func(array($this, 'hr09'));
        call_user_func(array($this, 'hr10'));
        call_user_func(array($this, 'hr11'));
        call_user_func(array($this, 'hr12'));
        call_user_func(array($this, 'hr13'));
        call_user_func(array($this, 'hr14'));
        call_user_func(array($this, 'hr15'));
        call_user_func(array($this, 'hr16'));
        call_user_func(array($this, 'hr17'));
        call_user_func(array($this, 'hr18'));
        call_user_func(array($this, 'hr19'));
        call_user_func(array($this, 'hr20'));
        call_user_func(array($this, 'hr21'));
        call_user_func(array($this, 'hr22'));
        call_user_func(array($this, 'hr23'));
    }
    private function hr00($array)
    {
        return($array >= "00:00:00" and $array <= "00:59:59");
    }
    private function hr01($array)
    {
        return($array >= "01:00:00" and $array <= "01:59:59");
    }
    private function hr02($array)
    {
        return($array >= "02:00:00" and $array <= "02:59:59");
    }
    private function hr03($array)
    {
        return($array >= "03:00:00" and $array <= "03:59:59");
    }
    private function hr04($array)
    {
        return($array >= "04:00:00" and $array <= "04:59:59");
    }
    private function hr05($array)
    {
        return($array >= "05:00:00" and $array <= "05:59:59");
    }
    private function hr06($array)
    {
        return($array >= "06:00:00" and $array <= "06:59:59");
    }
    private function hr07($array)
    {
        return($array >= "07:00:00" and $array <= "07:59:59");
    }
    private function hr08($array)
    {
        return($array >= "08:00:00" and $array <= "08:59:59");
    }
    private function hr09($array)
    {
        return($array >= "09:00:00" and $array <= "09:59:59");
    }
    private function hr10($array)
    {
        return($array >= "10:00:00" and $array <= "10:59:59");
    }
    private function hr11($array)
    {
        return($array >= "11:00:00" and $array <= "11:59:59");
    }
    private function hr12($array)
    {
        return($array >= "12:00:00" and $array <= "12:59:59");
    }
    private function hr13($array)
    {
        return($array >= "13:00:00" and $array <= "13:59:59");
    }
    private function hr14($array)
    {
        return($array >= "14:00:00" and $array <= "14:59:59");
    }
    private function hr15($array)
    {
        return($array >= "15:00:00" and $array <= "15:59:59");
    }
    private function hr16($array)
    {
        return($array >= "16:00:00" and $array <= "16:59:59");
    }
    private function hr17($array)
    {
        return($array >= "17:00:00" and $array <= "17:59:59");
    }
    private function hr18($array)
    {
        return($array >= "18:00:00" and $array <= "18:59:59");
    }
    private function hr19($array)
    {
        return($array >= "19:00:00" and $array <= "19:59:59");
    }
    private function hr20($array)
    {
        return($array >= "20:00:00" and $array <= "20:59:59");
    }
    private function hr21($array)
    {
        return($array >= "21:00:00" and $array <= "21:59:59");
    }
    private function hr22($array)
    {
        return($array >= "22:00:00" and $array <= "22:59:59");
    }
    private function hr23($array)
    {
        return($array >= "23:00:00" and $array <= "23:59:59");
    }
}

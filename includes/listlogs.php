<?php

$dir = './logs/';

$DirectoryIterator = new RecursiveDirectoryIterator($dir);
$IteratorIterator  = new RecursiveIteratorIterator($DirectoryIterator, RecursiveIteratorIterator::SELF_FIRST);

foreach($IteratorIterator as $path) {
  if(!$IteratorIterator->isDot()){
    $files = preg_replace('/(\\\\)/m','/',$path);
    if($IteratorIterator->isDir()){
      if(!preg_match('/(#)/', $files)){  
        echo preg_replace('/(\.\/logs\/)/m','',$files),"<br>";
      }
      if(preg_match('/(#)/', $files)){  
        echo preg_replace('/(\.\/logs\/)([a-zA-Z0-9]*\/)/m','',$files),"<br>";
      }    
    }
    if($IteratorIterator->isFile()){
      $log = preg_replace('/(\.\/logs\/[a-zA-Z0-9]*\/\#[a-zA-Z0-9]*\/)/m','',$files);
      preg_match("/([0-9]+)-([0-9]+)-([0-9]+)/", $log, $mod_log);
      $correct_date = strtotime($mod_log[0]);
    
      echo '<a href="./log.php?l=',  urlencode($files), '">';
      echo date('d/m/Y', $correct_date);
      echo "</a><br>";
    }
  }
}

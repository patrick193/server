<?php

function __autoload($class){
     $class = str_replace('\\', '/', $class) . '.php';
//     var_dump($class);die;
  require_once($class);
}


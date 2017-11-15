<?php

require 'config.php';

spl_autoload_register(function ($className){
    if(strpos($className, 'Controller') > -1){
        if(file_exists('controllers/'.$className.'.php')){
            require_once 'controllers/'.$className.'.php';
        }
    }else if (file_exists('models/'.$className.'.php')) {
        require_once 'models/'.$className.'.php';
    }else{
        require_once 'core/'.$className.'.php';
    }
});

$core = new Core();
$core->execute();
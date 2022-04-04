<?php

    function __autoload($class_name){

      // Directories to look in
      // (relativ to the current file)

      $dirs = [
            		'lib/',
            		'model/',
                'functions/',
            	];

      // Try to load class
      foreach ($dirs as $dir) {
        // code...
        $file = __DIR__."/$dir$class_name.class.php";
        if(file_exists($file)){
          require_once($file);
          break;
        }
      }
    }

<?php

namespace app\src;

class Load
{


    public static function file($file){

        $file = path(). $file;

        if(!file_exists($file)){

            throw new \Exception("File doesn't exists {$file}");
        }

        return require $file;
    }
    
}

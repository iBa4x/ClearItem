<?php

namespace NawafPluginARC;

class API extends ABI{
    
    public static function getPlayer($array,$index){
        if($array === $this || ! is_array($array) ){
            return;
        }
        return $array[$index];
    }
    
    public function getVar(){
        return $this;
    }
    
    public static function getArray(){
        return;
    }
}
?>
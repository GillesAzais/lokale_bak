<?php
/**
 * Created by PhpStorm.
 * User: gilles
 * Date: 27/01/2016
 * Time: 15:23 PM
 */

class Entity {

    public function toArray(){
        $arr =[] ;
        foreach( get_object_vars($this)as $key => $val){
           $arr [preg_replace('/^.*_/','',$key)] = $val;
        };

        return $arr;
        }




} 
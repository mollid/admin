<?php
/**
 * Created by PhpStorm.
 * User: omc
 * Date: 2016/8/30
 * Time: 16:48
 */
class Curd
{
    public  $FieldArr   = array();//字段名
    function setField(){
        $args = func_get_args();
        if(!empty($args)){
            $this->FieldArr = $args[0];
        }
        return $this;
    }



}
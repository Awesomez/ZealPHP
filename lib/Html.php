<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Html
 *
 * @author YunPeng
 */
class Html {
    public static function js($src){
        return '<script charset="utf-8" src="' . THIS_HOST . $src . '" type="text/javascript"></script>';
    }
    
    public static function css($src){
        return '<link rel="stylesheet" href="' . THIS_HOST . $src . ' " />';
    }
}
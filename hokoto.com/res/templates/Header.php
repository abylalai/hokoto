<?php

Header::setDoctypeValues([
    'title' => 'Hokoto.com - Download, Send, Pay, Buy Documents',
    'metaCharset' => 'UTF-8',
    'htmlLang' => __SITE_LANG__
]);

Header::linkStyles([
    '/res/css/our/default.css'
]);

class Header extends HeaderTemplates{

    protected static $doctypeValues = [];
    protected static $linkStyles = '';

    public static function get(){
       return (
          static::doctype() .
          static::headerTemp()
       );
    }

    public static function linkStyles($pathes){
        foreach($pathes as $path){
            static::$linkStyles .= '<link rel="stylesheet" href="'.$path.'">';
        }
    }

    public static function setDoctypeValues($tags){
        foreach($tags as $tag => $val){
            static::$doctypeValues[$tag] = $val; 
        }
    }
}


?>
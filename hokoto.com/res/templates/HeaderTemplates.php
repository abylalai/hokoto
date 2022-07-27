<?php
class HeaderTemplates{
    protected static function doctype(){
        return (
        '<!DOCTYPE html>
        <html lang="'.static::$doctypeValues['htmlLang'].'">
        <head>
            <meta charset="'.static::$doctypeValues['metaCharset'].'">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>'.static::$doctypeValues['title'].'</title>
            '.static::$linkStyles.'
        </head>
        <body>'
        );
    }
    protected static function headerTemp(){
        return ('
        <header class="header">
            <div class="container">
                <div class="header-content">
                    <div class="header-right">
                        <div class="header-logo">
                            <a href="/">HOKOTO</a>
                        </div>
                    </div>
                    <div class="header-left">
                        '.self::headerLeft().'
                    </div>
                </div>
            </div>
        </header>
        ');
    }
    protected static function headerLeft(){
        return (__CHECK_AUTH__ === true ? self::authTemp() : self::notAuthTemp());
    }
    protected static function notAuthTemp(){
        return (
        '<div class="header-left-not-right">
            <ul class="header-left-not-right-ul">
                <li class="header-left-not-right-ul-reg-btn">
                    <a href="/reg">'.Translate::getWord('Registration').'</a>
                </li>
                <li class="header-left-not-right-ul-login-btn">
                    <a href="/login">'.Translate::getWord('Login').'</a>
                </li>
            </ul>
        </div>');
    }
    protected static function authTemp(){
        return (
        '<div class="header-left-not-right">
            <ul class="header-left-not-right-ul">
                <li class="header-left-not-right-ul-reg-btn">
                    <a href="/profile">'.Translate::getWord('Profile').'</a>
                </li>
            </ul>
        </div>');
    }
}
?>
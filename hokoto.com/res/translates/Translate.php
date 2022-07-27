<?php

class Translate{

    public static $words;
    public static function setWord($en, $translations){
        foreach($translations as $lang => $val){
            self::$words[$en][$lang] = $val;
        }
    }
    public static function getWord($en){
        $word = self::$words[$en][__SITE_LANG__];
        return (isset($word) ? $word : '');
    }
}

Translate::setWord('Registration', [
    'ru' => 'Регистрация',
    'kk' => 'Тіркелу'
]);
Translate::setWord('Login', [
    'ru' => 'Войти',
    'kk' => 'Кіру'
]);
Translate::setWord('Profile', [
    'ru' => 'Профиль',
    'kk' => 'Профайл'
]);


?>
<?php

class TestCommons  
{
    public static $username = 'demo';
    public static $password = 'Welcome01!';

    public static function logMeIn($I)
    {
        $I->amOnPage(\LoginPage::$URLFusion);
        $I->fillField('username', self::$username);
        $I->fillField('password', self::$password);
        $I->click(\LoginPage::$loginButton);
    }
}
?>
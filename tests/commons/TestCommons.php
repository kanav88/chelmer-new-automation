<?php
class TestCommons
{
    public static $username = 'demo';
    public static $password = 'Welcome01!';
    public static $usernameext = 'yogi';
    public static $passwordext = 'YgShE1gRUl6gcGjf';

    public static function logInAsDemoUser($I)
    {
    	$I->amOnPage(\LoginPage::$URLFusion);
        $I->waitForElement(\LoginPage::$loginButton, 30);
        $I->fillField(\LoginPage::$usernameField, self::$username);
        $I->fillField(\LoginPage::$passwordField, self::$password);
        $I->click(\LoginPage::$loginButton);
    }
    public static function logInAsYogi($I)
    {
    	$I->amOnPage(\LoginPage::$URLFusionworkspace);
        $I->waitForElement(\LoginPage::$loginButton, 30);
        $I->fillField(\LoginPage::$usernameField, self::$usernameext);
        $I->fillField(\LoginPage::$passwordField, self::$passwordext);
        $I->click(\LoginPage::$loginButton);
    }
    
    
}
?>



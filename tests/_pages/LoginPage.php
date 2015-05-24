<?php

class LoginPage
{
    // include url of current page
    public static $URLWorkspace = '/';
    public static $URLFusionworkspace = '/';
    public static $URLFusion = '/';
    public static $usernameField = '#IDToken1';
    public static $passwordField = '#IDToken2';
    public static $loginButton = '/html/body/div/div[2]/div[2]/div/form/fieldset/div/input';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = '/html/body/div[2]/div[2]/div/div/form/table/tbody/tr[4]/td[2]/input";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: EditPage::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }


}
?>
<?php

class SearchPage
{
    // include url of current page
    public static $URL = '/fusion/FormHandler?Page=ClientSearch&Form=ClientSearch&Action=reset#';
    public static $clientId = '/html/body/div[3]/div[2]/ul/li[5]/input';
    public static $SearchButton = '/html/body/div[3]/div[2]/ul/li[5]/img';
    //'/html/body/div[4]/div[2]/ul/li[2]/a/img';
    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
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
<?php

class fusionClientRelationshipPage
{
    // include url of current page
    public static $URLfusionClientRelationship = '/fusion/FormHandler?Page=Holdings&AID=0&accountid=100021';
    public static $clientButton = '/html/body/div[3]/div[2]/ul/li[5]/a/div[1]';
    public static $relationshipButton = 'Relationships';
    public static $entityButton = ".//*[@id='sortableTable0']/tbody/tr[1]/td[5]/a";
    
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
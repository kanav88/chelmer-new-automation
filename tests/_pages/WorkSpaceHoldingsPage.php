<?php

class WorkSpaceHoldingsPage
{
    // include url of current page
    public static $URL = '/ws/FormHandler?Page=CustodyHoldingsSearchFusion&Form=ClientSearchFusion&Action=reset&targetPage=CustodyHoldingsSearchFusionSummary&titleOne=View Holdings Fusion';
    public static $clientNumber = '/html/body/form/table[1]/tbody/tr[1]/td[2]/table/tbody/tr[2]/td[1]/div/input';
    public static $SearchButton = '/html/body/table[5]/tbody/tr/td[2]/button';
    public static $custodyButton = '/html/body/table[3]/tbody/tr/td/table/tbody/tr[4]/td/ul/li/a';
    public static $viewHoldingsButton = '/html/body/table[3]/tbody/tr/td/table/tbody/tr[4]/td/ul/li/div/ul/li/a';
    public static $viewHoldingsSearchButton = '/html/body/table[6]/tbody/tr/td[3]/input';
    
    
    
    
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
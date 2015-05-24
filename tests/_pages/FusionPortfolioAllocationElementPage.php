<?php

class FusionPortfolioAllocationElementPage
{
    // include url of current page
    public static $URLPortfolioAllocation = 'https://chm-qa33-css.web-apps.co.nz/fusion/FormHandler?Page=PortfolioAllocation&AID=1512544554&accountid=100100';
    public static $Marixtab = '/html/body/div[3]/div[3]/div[2]/div/ul/li[1]/a';
    public static $Countrytab ='/html/body/div[3]/div[3]/div[2]/div/ul/li[3]/a';
    public static $creditratingtab = '/html/body/div[3]/div[3]/div[2]/div/ul/li[4]/a';
    public static $concentrationtab ='/html/body/div[3]/div[3]/div[2]/div/ul/li[5]/a';
    public static $sectortab ='/html/body/div[3]/div[3]/div[2]/div/ul/li[6]/a';
    public static $distributiontab ='/html/body/div[3]/div[3]/div[2]/div/ul/li[7]/a';
    public static $marketcaptab ='/html/body/div[3]/div[3]/div[2]/div/ul/li[8]/a';
    public static $recommendationtab ='/html/body/div[3]/div[3]/div[2]/div/ul/li[9]/a';
    
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
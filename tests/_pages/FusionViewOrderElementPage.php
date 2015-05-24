<?php

class FusionViewOrderElementPage
{
    // include url of current page
    public static $URLFusionViewPage = 'https://chm-qa33-css.web-apps.co.nz/fusion/FormHandler?Page=ClientOrders&Form=filterOrders&Action=reset&type=eq&accountid=100100';
    public static $Orderbutton1 = '/html/body/div[4]/div[2]/ul/li[7]/a/div[1]';
    public static $Orderbutton2 = '/html/body/div[4]/div[2]/ul/li[7]/div/div/ul/li/a';
    public static $OrderNobutton = 'Order No.';
    public static $Assetbutton = 'Asset';
    public static $Pricebutton ='Price';
    
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
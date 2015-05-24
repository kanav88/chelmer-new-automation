<?php

class fusionCreateTransactionPage
{
    // include url of current page
    public static $URL = '/fusion/FormHandler?Page=Holdings&AID=0&accountid=100100';
    public static $accountsDropDownButton = '/html/body/div[3]/div[2]/ul/li[6]/a/div[1]';
    public static $createTransactionsButton = 'Create Transactions';
    public static $selectButton = '/html/body/div[4]/div[3]/div[2]/div/grid-menu/div/table/tbody/tr/td/div/table/tbody/tr/td[7]/div/table/tbody/tr/td[1]/div/div/div/span';
    public static $buyButton = '/html/body/div[2]/div/div[2]/form/table[1]/tbody/tr[1]/td[2]/a[1]/img';
    public static $adjustmentButton = '/html/body/div[4]/div[3]/div[2]/div/grid-menu/div/table/tbody/tr/td/div/table/tbody/tr/td[7]/div/table/tbody/tr/td[1]/div/div/ul/li[2]/a/label';
    public static $checkBox = '/html/body/div[4]/div[3]/div[2]/div/div/div[1]/div[2]/div/div[2]/div/div[1]/div/div/div/div/div';
    public static $listingField = ".//*[@id='editorGrid']/div[3]/div[2]/div/div/div/div[5]/div";
    public static $quantityField = ".//*[@id='editorGrid']/div[3]/div[2]/div/div[1]/div/div[6]/div";
    public static $considerationField = ".//*[@id='editorGrid']/div[3]/div[2]/div/div[1]/div/div[8]/div";
    public static $holdingTypeField = ".//*[@id='editorGrid']/div[3]/div[2]/div/div[1]/div/div[9]/div";
    public static $settleCurrencyField = ".//*[@id='editorGrid']/div[3]/div[2]/div/div[1]/div/div[11]/div";
    public static $commentField = ".//*[@id='editorGrid']/div[3]/div[2]/div/div[1]/div/div[14]/div";
    public static $referenceField = ".//*[@id='editorGrid']/div[3]/div[2]/div/div[1]/div/div[15]/div";
    public static $settleDate = ".//*[@id='editorGrid']/div[3]/div[2]/div/div[1]/div/div[19]/div";
    public static $commitTransactionButton = '/html/body/div[4]/div[3]/div[2]/div/grid-menu/div/table/tbody/tr/td/div/table/tbody/tr/td[7]/div/table/tbody/tr/td[5]/a';

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
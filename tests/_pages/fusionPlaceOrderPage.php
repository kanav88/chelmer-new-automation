<?php

class fusionPlaceOrderPage
{
    // include url of current page
  public static $URLfusionPlaceOrder = '/fusion/FormHandler?Page=Holdings&AID=0&accountid=100100';
  public static $orderDropDownButton = '/html/body/div[3]/div[2]/ul/li[7]/a/div[1]';
  public static $orderButton = '/html/body/div[3]/div[2]/ul/li[7]/div/div/ul/li/a';
  public static $placeOrderButton = '/html/body/div[4]/div[3]/div[2]/table[2]/tbody/tr/td[4]/input';
  public static $buyButton = '/html/body/div[2]/div/div[2]/form/table[1]/tbody/tr[1]/td[2]/a[1]/img';
  public static $quantityField = '#quantity';
  public static $assetField = '#seccode';
  public static $orderGiverField = '#orderGiver';
  public static $orderNoteField = '#orderNote';
  public static $nextButton1 = '/html/body/div[2]/div/div[2]/form/table[3]/tbody/tr[2]/td/input[3]';
  public static $nextButton2 = '/html/body/div[2]/div/div[2]/form/table[3]/tbody/tr[2]/td/table[2]/tbody/tr[2]/td/input[3]';
  public static $submitButton = '/html/body/div[2]/div/div[2]/form/table[3]/tbody/tr[2]/td/table[3]/tbody/tr[2]/td/input[4]';
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
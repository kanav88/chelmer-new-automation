<?php

class fusionHoldingsPage
{
    // include url of current page
  public static $URLfusionHoldingOrder = '/fusion/FormHandler?Page=Holdings&AID=0&accountid=100021';
  public static $currencyList = '/html/body/div[3]/div[3]/div[2]/table[1]/tbody/tr/td/div/form/table/tbody/tr/td/div[2]/table/tbody/tr/td[2]/span/img';
  public static $currencyAudSelect = '/html/body/div[3]/div[3]/div[2]/table[1]/tbody/tr/td/div/form/table/tbody/tr/td/div[2]/table/tbody/tr/td[2]/span/div/div/table/tbody/tr[2]/td[3]/a';
  public static $currencyCheck = '/html/body/div[3]/div[3]/div[2]/table[2]/tbody/tr[6]/td[8]';
  public static $calenderView = '/html/body/div[3]/div[3]/div[2]/table[1]/tbody/tr/td/div/form/table/tbody/tr/td/div[2]/table/tbody/tr/td[4]/img';
  public static $dateSelect = 'Done';
  public static $searchClick = '/html/body/div[3]/div[3]/div[2]/table[1]/tbody/tr/td/div/form/table/tbody/tr/td/div[2]/table/tbody/tr/td[12]/img';
  public static $firstRowQtyClick = '/html/body/div[3]/div[3]/div[2]/table[2]/tbody/tr[7]/td[4]/a';
  public static $transListCancelButton = '/html/body/div[18]/div[1]/button';
  public static $marketPriceClick = '/html/body/div[3]/div[3]/div[2]/table[2]/tbody/tr[11]/td[7]/a/span';
  public static $stockChartCancelButton = '/html/body/div[8]/div[1]/button';
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
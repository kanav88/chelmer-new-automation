<?php
namespace AcceptanceTester;

class MemberSteps extends \AcceptanceTester
{
    public function loginWorkspace($name, $password)
    {
        $I = $this;
        $I->amOnPage(\LoginPage::$URLWorkspace);
        $I->wait(3);
        //$password = $I->grabTextFrom('#IDToken2');
        //$name = $I->grabTextFrom('#IDToken1');
        $I->fillField(\LoginPage::$usernameField, $name);
        $I->fillField(\LoginPage::$passwordField, $password);
        $I->click(\LoginPage::$loginButton);
    }
    
    public function loginFusion($name, $password)
    {
    	$I = $this;
    	$I->amOnPage(\LoginPage::$URLFusion);
    	$I->wait(3);
    	$I->fillField(\LoginPage::$usernameField, $name);
    	$I->fillField(\LoginPage::$passwordField, $password);
    	$I->click(\LoginPage::$loginButton);
    }
    public function loginFusionexternal($name, $password)
    {
      $I = $this;
      $I->amOnPage(\LoginPage::$URLFusionexternal);
      $I->wait(3);
      $I->fillField(\LoginPage::$usernameField, $name);
      $I->fillField(\LoginPage::$passwordField, $password);
      $I->click(\LoginPage::$loginButton);
    }
    public function searchFusion($clientId)
    {
    	$I = $this;
    	//$I->amOnPage(\SearchPage::$URL);
    	$I->wait(5);
    	$I->fillField(\SearchPage::$clientId, $clientId);
    	$I->click(\SearchPage::$SearchButton);
    }
    public function searchWorkSpace($clientNumber)
    {
    	$I = $this;
    	//$I->amOnPage(\SearchPage::$URL);
    	$I->wait(5);
    	$I->fillField(\WorkSpaceHoldingsPage::$clientNumber, $clientNumber);
    	$I->click(\WorkSpaceHoldingsPage::$SearchButton);
    }
    public function viewClientRelationship()
    {
    	$I = $this;
    	//$I->amOnPage(\SearchPage::$URL);
    	$I->wait(3);
    	$I->see('Portfolio Holdings');
    	$I->click(\fusionClientRelationshipPage::$clientButton);
    	$I->click(\fusionClientRelationshipPage::$relationshipButton);
    	$I->wait(7);
    	$I->click(\fusionClientRelationshipPage::$entityButton);
    	$I->wait(3);
    	$I->seeElement('html body div#Wrapper.MenuBG div#ContentWrapper div#TitleBar div#Title');
    	$I->makeScreenshot('FusionClientRelationship_page');
    	$I->wait(5);
    }

    public function viewWorkSpaceHoldings()
    {
    	$I = $this;
    	$I->wait(3);
    	$I->click(\WorkSpaceHoldingsPage::$custodyButton);
    	$I->click(\WorkSpaceHoldingsPage::$viewHoldingsButton);
    }
    public function viewWorkSpaceHoldingsSearch()
    {
    	$I = $this;
    	$I->wait(5);
    	$I->see('Search criteria...');
    	$I->makeScreenshot('WorkSpaceHoldings_page');
    	$I->wait(5);
    	$I->click(\WorkSpaceHoldingsPage::$viewHoldingsSearchButton);
    	$I->makeScreenshot('WorkSpaceHoldings_page');
    	$I->seeElement('/html/body/table[2]/tbody/tr/td/table/tbody/tr/td[1]/span');;
    }

    public function AllocatePortfolio()
    {
    	$I = $this;
    	$I->see('portfolio allocation');
    	$I->click(\FusionPortfolioAllocationElementPage::$Marixtab);
    	$I->wait(3);
    	$I->makeScreenshot('Matrix_total_page');
    	$I->click(\FusionPortfolioAllocationElementPage::$Countrytab);
    	$I->wait(3);
    	$I->makeScreenshot('Country_total_page');
    	$I->click(\FusionPortfolioAllocationElementPage::$creditratingtab);
    	$I->wait(3);
    	$I->makeScreenshot('credit_rating_total_page');
    	$I->click(\FusionPortfolioAllocationElementPage::$concentrationtab);
    	$I->wait(5);
		$I->makeScreenshot('concentration_total_page');
    	$I->click(\FusionPortfolioAllocationElementPage::$sectortab);
    	$I->wait(5);
		$I->makeScreenshot('sector_total_page');
    	$I->click(\FusionPortfolioAllocationElementPage::$distributiontab);
    	$I->wait(5);
		$I->makeScreenshot('distribution_total_page');
    	$I->click(\FusionPortfolioAllocationElementPage::$marketcaptab);
    	$I->wait(5);
		$I->makeScreenshot('marketcap_total_page');
    	$I->click(\FusionPortfolioAllocationElementPage::$recommendationtab);
    	$I->wait(5);
		$I->makeScreenshot('recommendation_total_page');
    	
    }
    
      public function viewOrders()
      {
      	$I =$this;
      	
      	//$I->click(\FusionViewOrderElementPage::$Orderbutton1);
      	$I->wait(3);
      	//$I->click(\FusionViewOrderElementPage::$Orderbutton2);
      	$I->see('Confirmed Orders');
      	$I->click(\FusionViewOrderElementPage::$OrderNobutton);
      	//$I->click(\FusionViewOrderElementPage::$Assetbutton);
      	$I->click(\FusionViewOrderElementPage::$Pricebutton);
      	$I->wait(5);
      	
      }
      
      public function OpenPlaceOrder()
      {
      	$I =$this;
      	$I->wait(3);
      	$I->click(\fusionPlaceOrderPage::$orderDropDownButton);
      	$I->click(\fusionPlaceOrderPage::$orderButton);
      	$I->wait(3);
      	$I->seeElement('/html/body/div[4]/div[3]/div[1]/div[1]');
      	$I->click(\fusionPlaceOrderPage::$placeOrderButton);
      	$I->wait(3);
      	$I->makeScreenshot('FusionPlaceOrders_page');
      	$I->wait(3);
      }
      
      public function placeOrder()
      {
      	$I =$this;
      	$I->wait(3);
      	$I->fillField(\fusionPlaceOrderPage::$quantityField,'1000');
      	$I->fillField(\fusionPlaceOrderPage::$assetField,'CEN');
      	$I->click(\fusionPlaceOrderPage::$buyButton);
      	$I->wait(3);
      	//$I->fillField(\fusionPlaceOrderPage::$orderGiverField,'NeerajM');
      	//$I->selectOption('noteNarrativeList','Custom Narrative');
      	//$I->fillField(\fusionPlaceOrderPage::$orderNoteField, 'kanav');
      	//$I->click(\fusionPlaceOrderPage::$nextButton1);
      	//$I->wait(3);
      	//$I->makeScreenshot('FusionPlaceOrders_page');
      	//$I->wait(3);
      	//$I->click(\fusionPlaceOrderPage::$nextButton2);
      	//$I->click(\fusionPlaceOrderPage::$submitButton);
      	//$I->wait(3);
      }

      public function viewFusionHoldings()
      {
      	$I =$this;
      	$I->wait(5);
      	$I->see('Portfolio Holdings');
      	$I->makeScreenshot('FusionHoldigs_page');
      	$I->wait(5);
      	$I->click(\fusionHoldingsPage::$currencyList);
      	$I->wait(5);
      	$I->click(\fusionHoldingsPage::$currencyAudSelect);
      	$I->makeScreenshot('FusionHoldigs_AUD_page');
      	$I->wait(3);
      	$I->seeElement(\fusionHoldingsPage::$currencyCheck);
      	$I->click(\fusionHoldingsPage::$calenderView);
      	$I->click(\fusionHoldingsPage::$dateSelect);
      	//$I->see('Viewing as at 1/4/15');
      	$I->makeScreenshot('FusionHoldigs_Date_page');
      	$I->selectOption('selectGroupBy','NZ Tax Reporting');
      	$I->click(\fusionHoldingsPage::$searchClick);
      	$I->wait(3);
      	$I->makeScreenshot('FusionHoldigs_Group_page');
      	$I->selectOption('selectSortBy','Maturity Date Desc');
      	$I->click(\fusionHoldingsPage::$searchClick);
      	$I->makeScreenshot('FusionHoldigs_Sort_page');
      	$I->wait(3);
      	$I->click(\fusionHoldingsPage::$firstRowQtyClick);
      	//$I->see('             Transactions for 100100 :      NZD Cash');
      	$I->wait(3);
      	//$I->click(\fusionHoldingsPage::$transListCancelButton);
      	//$I->wait(3);
      	//$I->click(\fusionHoldingsPage::$marketPriceClick);
      	//$I->wait(3);
      	//$I->click(\fusionHoldingsPage::$stockChartCancelButton);
      	//$I->wait(3);
       }
       
       public function createTransactions()
       {
       	$I =$this;
       	$I->wait(5);
       	$I->click(\fusionCreateTransactionPage::$accountsDropDownButton);
       	$I->wait(10);
       	$I->click(\fusionCreateTransactionPage::$createTransactionsButton);
       	$I->wait(10);
       	$I->click(\fusionCreateTransactionPage::$selectButton);
       	$I->wait(10);
       	$I->click(\fusionCreateTransactionPage::$adjustmentButton);
       	$I->waitForElementVisible('.ui-grid-viewport.ng-isolate-scope',30);
       	$I->waitForElementVisible('.ui-grid-cell-contents.ng-binding.ng-scope',30);
        $I->click(".//*[@id='editorGrid']/div[3]/div[2]/div/div[1]/div/div[5]");
       // $I->click(".//*[@id='editorGrid']/div[3]/div[2]/div/div[1]/div/div[5]/div[2]/form/input");
        // 	$I->click(\fusionCreateTransactionPage::$listingField);
     	$I->pressKey(\fusionCreateTransactionPage::$listingField, 'AIA');
     	$I->wait(2);
       	$I->pressKey(\fusionCreateTransactionPage::$quantityField, '1000');
       	$I->wait(2);
       	$I->pressKey(\fusionCreateTransactionPage::$considerationField, '87687');
       	$I->wait(2);
       	$I->pressKey(\fusionCreateTransactionPage::$holdingTypeField, 'Safe Custody');
       	$I->wait(5);
       	$I->pressKey(\fusionCreateTransactionPage::$settleCurrencyField, 'AUD Ledger');
       	$I->wait(2);
       	$I->pressKey(\fusionCreateTransactionPage::$commentField, 'kanav');
       	$I->wait(2);
       	$I->pressKey(\fusionCreateTransactionPage::$referenceField, 'success');
       	$I->wait(2);
       	$I->pressKey(\fusionCreateTransactionPage::$settleDate, '07/05/2015');
       	$I->click(".//*[@id='editorGrid']/div[3]/div[2]");
       	$I->wait(10);
       	$I->seeElement('/html/body/div[4]/div[3]/div[2]/div/div/div[1]/div[3]/div[2]/div/div[1]/div/div[1]/img');
       	$I->wait(2);
       	$I->click(\fusionCreateTransactionPage::$checkBox);
       	$I->wait(2);
       	$I->click(\fusionCreateTransactionPage::$commitTransactionButton);
       	$I->wait(3); 
       	$I->amOnUrl('https://chm-qa33-css.web-apps.co.nz');
       	$I->amOnPage('/fusion/FormHandler?Page=Holdings&AID=1512544554&accountid=100100');
       	$I->click('/html/body/div[3]/div[3]/div[2]/table[2]/tbody/tr[31]/td[4]/a');
       	$I->wait(8);
       	
       }
}

?>
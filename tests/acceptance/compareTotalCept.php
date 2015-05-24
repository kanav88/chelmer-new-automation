<?php
$I = new AcceptanceTester\MemberSteps($scenario);
$I->resizeWindow(1366, 768);
//$I->loginFusion('demo', 'Welcome01!');
//TestCommons::logInAsYogi($I);
TestCommons::logInAsDemoUser($I);
$I->searchFusion('100021');
/*$I->wait(2);
$I->see('Portfolio Holdings');
$name = $I->grabTextFrom(".//*[@id='Holdings']/tbody/tr[112]/td[9]");
$I->see($name);
//$I->see('45,272.56');
$I->makeScreenshot('FusionHoldings_page');
$I->click('/html/body/div[3]/div[2]/ul/li[5]/a/div[1]');
$I->click('/html/body/div[3]/div[2]/ul/li[5]/div/div[2]/ul/li[2]/a');
$I->wait(3);
$I->click('/html/body/div[3]/div[3]/div[2]/div/ul/li[4]/a');
$I->wait(3);
$I->see($name);
$I->makeScreenshot('Allocations_Credit_Rating');
$I->click('/html/body/div[3]/div[3]/div[2]/div/ul/li[5]/a');
$I->wait(3);
$I->see($name);
$I->makeScreenshot('Allocations_Concentration');
$I->click('/html/body/div[3]/div[3]/div[2]/div/ul/li[6]/a');
$I->wait(3);
$I->see($name);
$I->makeScreenshot('Allocations_Sector');
$I->click('/html/body/div[3]/div[3]/div[2]/div/ul/li[7]/a');
$I->wait(3);
$I->see($name);
$I->makeScreenshot('Allocations_Distribution');

$I->click('/html/body/div[3]/div[3]/div[2]/div/ul/li[8]/a');
$I->wait(3);
$I->see($name);
$I->makeScreenshot('Allocations_Market_Cap');
$I->click('/html/body/div[3]/div[3]/div[2]/div/ul/li[9]/a');
$I->wait(3);
$I->see($name);
$I->makeScreenshot('Allocations_Recommendation');
$I->click('/html/body/div[3]/div[3]/div[2]/div/ul/li[1]/a');
$I->wait(3);
//$I->amOnPage('/fusion/FormHandler?Page=Holdings&AID=1599&accountid=100021');
//$I->see($name);*/

?>
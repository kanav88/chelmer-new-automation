<?php 
$I = new AcceptanceTester\MemberSteps($scenario);
$I->wantTo('perform actions and see result');
$I->resizeWindow(1366, 768);
TestCommons::logInAsDemoUser($I);
//$I->loginFusion('demo', 'Welcome01!');
$I->searchFusion('100021');
$I->wait(3);
//$I->click('/html/body/div[3]/div[2]/ul/li[7]/a/div[1]');
//$I->click('/html/body/div[3]/div[2]/ul/li[7]/div/div/ul/li/a');
//$I->viewOrders();
?>
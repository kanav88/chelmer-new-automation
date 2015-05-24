<?php 
$I = new AcceptanceTester\MemberSteps($scenario);
$I->wantTo('perform actions and see result');
$I->resizeWindow(1366, 768);
TestCommons::logInAsDemoUser($I);
//$I->loginFusion('demo', 'Welcome01!');
$I->searchFusion('100021');
//$I->OpenPlaceOrder();
//$I->switchToWindow("PlaceOrder");
//$I->placeOrder();
//$I->switchToWindow("OrderView");
?>

<?php 
$I = new AcceptanceTester\MemberSteps($scenario);
$I->wantTo('perform actions and see result');
$I->resizeWindow(1366, 768);
//$I->loginFusion('demo', 'Welcome01!');
//TestCommons::logInAsYogi($I);
TestCommons::logInAsDemoUser($I);
$I->searchFusion('100021');
$I->viewClientRelationship();
?>
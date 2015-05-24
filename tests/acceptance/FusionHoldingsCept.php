<?php
$I = new AcceptanceTester\MemberSteps($scenario);
$I->resizeWindow(1366, 768);
TestCommons::logInAsDemoUser($I);
//$I->loginFusion('demo', 'Welcome01!');
$I->searchFusion('100021');
$I->viewFusionHoldings();
?>
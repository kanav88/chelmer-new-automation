<?php 
$I = new AcceptanceTester\MemberSteps($scenario);
$I->wantTo('perform actions and see result');
$I->resizeWindow(1366, 768);
TestCommons::logInAsDemoUser($I);
//$I->loginFusion('demo', 'Welcome01!');
$I->searchFusion('100021');  
//$I->fillfield("Name", 'sharma');
//$I->click('/html/body/div[4]/div[3]/div[2]/table[2]/tbody/tr/td/table/tbody/tr[2]/td[5]/input[1]');
$I->wait(3);
?>

<?php 
$I = new AcceptanceTester\MemberSteps($scenario);
$I->wantTo('perform actions and see result');
$I->resizeWindow(1366, 768);
$I->loginFusion('xyz', 'xyz');
$I->click('html body div.container_12 div.box.clear-float div.grid_9.left-seperator div.box-content.clear-float form fieldset div.row input.button.primary');
$I->wait(3);
$I->makeScreenshot('Fusion_login_faliure');
?>
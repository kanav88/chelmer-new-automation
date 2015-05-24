<?php
$I = new AcceptanceTester\MemberSteps($scenario);
$I->resizeWindow(1366, 768);
TestCommons::logInAsDemoUser($I);
$I->wait(3);
?>
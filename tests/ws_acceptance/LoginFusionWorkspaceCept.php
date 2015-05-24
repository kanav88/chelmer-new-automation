<?php 
$I = new Ws_acceptanceTester($scenario);
$I->resizeWindow(1366, 768);
TestCommons::logInAsYogi($I);
$I->wait(10);
?>

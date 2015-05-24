<?php 
$I = new ApiTester($scenario);
$I->wantTo('login successfully');
$I->sendGET('https://ws-aas.web-apps.co.nz/openam/UI/Login?realm=/QA33&goto=http%3A%2F%2Fchm-qa33-css.web-apps.co.nz%3A80%2Fws%2F',array('do' => 'submit','username' => 'yogi', 'password' => 'YgShE1gRUl6gcGjf'));
$I->seeResponseCodeIs(200);

?>


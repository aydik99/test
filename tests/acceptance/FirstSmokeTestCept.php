<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');

$I->amOnPage('/contacts.php');
// $I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK);
$I->fillField('email','12345@mail.ru');
$I->fillField('name','Ivanov');
$I->checkOption('.forget');
$I->click('#btn1');
$I->click('.home');

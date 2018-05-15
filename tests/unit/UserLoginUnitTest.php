<?php
require __DIR__.'/../../site/classes/UserLogin.php';

class UserLoginUnitTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    protected $userLogin;
    
    protected function _before()
    {
        $this->userLogin = new UserLogin();
    }

    protected function _after()
    {
        $this->userLogin = null;
    }

    // tests
    public function testLoginCount()
    {
        $userLogin = new UserLogin();
        $this->assertCount(2, $this->userLogin->getUsers());
    }

    /** @dataProvider userLoginProvider */

    public function testAuthUser($login, $password)
    {
        $userLogin = new UserLogin();
        $this->assertTrue($this->userLogin->authUser($login, $password));
    }

    public function userLoginProvider()
    {
        return [
            ['my', '1234'],
            ['my2', '1234'],
        ];
    }
    
}
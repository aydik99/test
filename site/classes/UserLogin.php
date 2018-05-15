<?php 

class UserLogin 
{
	private $userList = [
		[
			'login' => 'my',
			'password' => '1234'
		],
		[
			'login' => 'my2',
			'password' => '1234'
		]
	];

	public function getUsers()
	{
		return $this->userList;
	}

	public function authUser($login, $password)
	{
		$auth = false;
		foreach ($this->getUsers() as $item)
		{

				if($login === $item['login'] && $password === $item['password'])
				{
					$auth = true;
				}
			
		}
		return $auth;
	}
}
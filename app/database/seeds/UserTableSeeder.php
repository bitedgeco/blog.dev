<?php 

class UserTableSeeder extends Seeder
{
	public function run()
	{

		$user = new User();
		$user->email = 'canning.jimmy@gmail.com';
		$user->screen_name = 'James';
		$user->password = $_ENV['USER_PASSWORD'];
		$user->save();

		$user = new User();
		$user->email = 'test@test.test';
		$user->screen_name = 'test';
		$user->password = $_ENV['USER_PASSWORD'];
		$user->save();

	}

}


?>
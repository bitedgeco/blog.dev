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
		$user->email = 'bob@bob.com';
		$user->screen_name = 'Bob';
		$user->password = $_ENV['USER_PASSWORD'];
		$user->save();

	}

}


?>
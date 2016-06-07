<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		DB::table('users')->delete();

		DB::table('posts')->delete();

		$this->call('UserTableSeeder');

		$this->call('PostTableSeeder');

	}

	

}

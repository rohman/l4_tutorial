<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Eloquent::unguard();
		$this->call('SentrySeeder');
		$this->command->info('Sentry tables Seeded');
		
		$this->call('ContentSeeder');
		$this->command->info('Content Table Seeded');
		
		// $this->call('UserTableSeeder');
	}

}
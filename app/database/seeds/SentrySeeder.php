<?php
use App\Models\User;

class SentrySeeder extends Seeder
{
	public function run()
	{
		DB::table('users')->delete();
		DB::table('groups')->delete();
		DB::table('users_groups')->delete();
		
		Sentry::getUserProvider()->create(array(
			'email'=>'admin@admin.com',
			'password' => "admin",
			'first_name'=>'ariel',
			'last_name' => 'rohman',
			'activated' => 1,
		));
		
		Sentry::getGroupProvider()->create(array(
			'name' => 'Admin',
			'permissions' => array('admin' => 1),
		));
		
		$adminUser = Sentry::getUserProvider()->findByLogin('admin@admin.com');
		$adminGroup = Sentry::getGroupProvider()->findByName('Admin');
		$adminUser->addGroup($adminGroup);
	}

}

<?php namespace App\Controllers\Admin;

use BaseController, Input, Redirect, View, Sentry;

class AuthController extends BaseController
{
	public function getLogin()
	{
		return View::make('admin.auth.login');
	}
	
	public function postLogin()
	{
		$credential = array(
			'email' => Input::get('email'),
			'password' => Input::get('password')
		);
		
		try
		{
			$user = Sentry::authenticate($credential, false);
			if($user)
			{
				return Redirect::route('admin.pages.index');
			}
		
		}
		catch(\Exception $e)
		{
			return Redirect::route('admin.login')->withErrors( array('login' => $e->getMessage() ));
		}
	
	}
	
	public function getLogout()
	{
		Sentry::logout();
		
		return Redirect::route('admin.login');
	}

}
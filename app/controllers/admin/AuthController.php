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
	
	public function getChangePassword()
	{
		return View::make('admin.auth.changepass');
	}
	
	public function postChangePassword()
	{
		$rules = array(
			'password' => 'required|min:5',
			'password_confirm' => 'required|same:password'
		);
		
		$validator = \Validator::make(Input::all(), $rules);
		
		if($validator->passes())
		{
			try
			{
				$user = Sentry::findUserById(Sentry::getUser()->id);
				
				$user->password = Input::get('password');
				$user->save();
			
				return Redirect::route('admin.changePass')->with('message', 'The Password Has been changed');
			}
			catch(\Exception $e)
			{
				print_r($e);
			}
		}
		else
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		
	}

}
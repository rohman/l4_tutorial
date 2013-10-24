<?php namespace App\Controllers\Admin;

use App\Models\Page;
use BaseController, View, Input, Redirect, Str, Sentry;

class PagesController extends BaseController
{
	public function index()
	{
		return View::make('admin.pages.index')
				->with('pages', Page::getAll());
	}
	
	public function create()
	{
		return View::make('admin.pages.create');
	}
	
	public function store()
	{
		$validate = Page::validate(Input::all());
		
		if($validate->fails())
		{
			return Redirect::back()->withErrors($validate)->withInput();
		}
		else
		{
			$page 			= new Page;
			$page->title 	= Input::get('title');
			$page->slug 	= Str::slug(Input::get('title'));
			$page->body 	= Input::get('body');
			$page->user_id 		= Sentry::getUser()->id;
			$page->save();
			
			return Redirect::route('admin.pages.index')->with('message', 'The page was created');
		}
	}
	
	public function show($id)
	{
		return View::make('admin.pages.show')
				->with('page', Page::find($id) );
	}
	
	public function edit($id)
	{
		return View::make('admin.pages.edit')
			->with('page', Page::find($id));
	}
	
	public function update($id)
	{
		$validate = Page::validate(Input::all());
		
		if($validate->fails())
		{
			return Redirect::back()->withErrors($validate)->withInput();
		}
		else
		{
			$page = Page::find($id);
			
			$page->title 	= Input::get('title');
			$page->slug 	= Str::slug(Input::get('title'));
			$page->body 	= Input::get('body');
			$page->user_id 		= Sentry::getUser()->id;
			$page->save();
			
			return Redirect::route('admin.pages.index')->with('message', 'The page was update');
		}
	}
	
	public function destroy($id)
	{
		$page = Page::find($id);
		$page->delete();
		return Redirect::route('admin.pages.index')->with('message', 'The page was deleted');
	}
}
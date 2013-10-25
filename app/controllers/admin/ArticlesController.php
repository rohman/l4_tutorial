<?php namespace App\Controllers\Admin;

Use App\Models\Article;
use App\Services\Validators\ArticleValidator;
use BaseController, Input, View, Redirect, Str, Sentry;

class ArticlesController extends BaseController
{
	public function index()
	{
		return View::make('admin.articles.index')
				->with('articles', Article::getAll());
	}
	
	public function show($id)
	{
		return View::make('admin.articles.show')
				->with('article', Article::find($id));
	}
	
	public function create()
	{
		return View::make('admin.articles.create');
	}
	
	public function store()
	{
		$validation = new ArticleValidator;
		if($validation->passes())
		{
			$article = new Article;
			$article->title = Input::get('title');
			$article->slug = Str::slug(Input::get('title'));
			$article->body = Input::get('body');
			$article->user_id = Sentry::getUser()->id;
			$article->save();
			
			return Redirect::route('admin.articles.index')->with('message', 'The Article Has been Created');
			
		}
		
		return Redirect::back()->withErrors($validation->errors)->withInput();
	}
	
	public function edit($id)
	{
		return View::make('admin.articles.edit')
				->with('article', Article::find($id));
	}
	
	public function update($id)
	{
		$validation = new ArticleValidator;
		
		if($validation->passes())
		{
			$article = Article::find($id);
			$article->title = Input::get('title');
			$article->slug = Str::slug(Input::get('title'));
			$article->body = Input::get('body');
			$article->user_id = Sentry::getUser()->id;
			$article->save();
			return Redirect::route('admin.articles.index')->with('message', 'The Article Was Updated');
		}
		
		return Redirect::back()->withErrors($validation->errors)->withInput();
	}
	
	public function destroy($id)
	{
		$article = Article::find($id);
		$article->delete();
		
		return Redirect::route('admin.articles.index')->with('message', 'The Article Was delete');
	}
}

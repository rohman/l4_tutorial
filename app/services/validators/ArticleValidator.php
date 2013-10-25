<?php namespace App\Services\Validators;

class ArticleValidator extends Validator
{
	public static $rules = array(
		'title' => 'required|min:5',
		'body'	=> 'required|min:10'
	);
	
}

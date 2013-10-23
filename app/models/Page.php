<?php namespace App\Models;

class Page extends \Eloquent
{
	protected $table='pages';
	protected $fillable = array('title', 'slug', 'body', 'user_id');
	
	public function author()
	{
		return $this->belongsTo('User');
	}
}

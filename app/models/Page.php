<?php namespace App\Models;

use Validator, DB;

class Page extends \Eloquent
{
	protected $table='pages';
	protected $fillable = array('title', 'slug', 'body', 'user_id');
	
	public static $rules = array(
		'title' => 'required|min:5',
		'body' => 'required|min:10'
	);
	
	public function author()
	{
		return $this->belongsTo('User');
	}
	
	public static function validate($data)
	{
		return Validator::make($data, static::$rules);
	}
	
	public static function getAll()
	{
		return DB::table('pages AS a')
			->select('a.*', 'b.first_name')
            ->leftJoin('users AS b', 'b.id', '=', 'a.user_id')
            ->get();
	
	}
}

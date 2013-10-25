<?php namespace App\Models;

use DB;
class Article extends \Eloquent {
 
    protected $table = 'articles';
	protected $fillable = array('title', 'slug', 'body', 'user_id');
	
    public function author()
    {
        return $this->belongsTo('User');
    }
	
	public static function getAll()
	{
		return DB::table('articles AS a')
				->select('a.*', 'b.first_name')
				->leftJoin('users AS b' ,'b.id' ,'=', 'a.user_id')
				->get();
	}
 
}
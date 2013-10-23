<?php namespace App\Models;
 
class Article extends \Eloquent {
 
    protected $table = 'articles';
	protected $fillable = array('title', 'slug', 'body', 'user_id');
    public function author()
    {
        return $this->belongsTo('User');
    }
 
}
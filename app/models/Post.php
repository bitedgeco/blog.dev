<?php

class Post extends BaseModel
{
    protected $table = 'posts';

    public static $rules = array(
    'title'      => 'required',
    'img_url'	=> 'url',
    'content'       => 'required',
    'meta_description' => 'max:160'
	);

	public function user()
	{
		return $this->belongsTo('User'); 
	}
}    


<?php

class Post extends BaseModel
{
    protected $table = 'posts';

    public static $rules = array(
    'title' => 'required',
    'img_url' => 'url',
    'content' => 'required',
    'meta_description' => 'max:160'
	);

	public function user()
	{
		return $this->belongsTo('User'); 
	}

    public static function getIdFromSceenName($screen_name)
    {
        $id = User::where('screen_name', '=', $screen_name)->get()->first()->id; 

        return static::where('user_id', '=', $id)->get();
    }

    public static function getCatagory($catagory)
    {
        $posts = self::where('catagory', '=', $catagory)->get(); 

        return $posts;
    }
}    


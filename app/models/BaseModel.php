<?php 

use Carbon\Carbon;

class BaseModel extends Eloquent
{
	// public function getCreatedAtAttribute($value)
	// {
	//     $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
	//     return $utc->setTimezone('America/Chicago');
	// }

	// public function setCreatedAtAttribute($value)
	// {
 //    	$this->attributes['created_at'] = Hash::make($value);
	// }

	public function setPasswordAttribute($value)
	{
    	$this->attributes['password'] = Hash::make($value);
	}
}

 ?>
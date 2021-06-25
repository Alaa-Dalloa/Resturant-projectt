<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function meals(){
    	return $this->hasMany('App\Meal' ,'image_id');
    } 
}

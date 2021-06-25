<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{

    public function type(){
    	return $this->belongsTo('App\Type','type_id');
    }


    public function image(){
    	return $this->belongsTo('App\Image','image_id');
    }


   public function branches(){
    	return $this->hasMany('App\Branch' ,'meal_id');
    } 
}

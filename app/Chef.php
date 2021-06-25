<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
     public function branches(){
    	return $this->hasMany('App\Branch' ,'chef_id');
    } 
}

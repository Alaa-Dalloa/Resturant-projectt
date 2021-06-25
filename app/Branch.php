<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
      public function meal(){
    	return $this->belongsTo('App\Meal','meal_id');
    }

     public function chef(){
    	return $this->belongsTo('App\Chef','chef_id');
    }

}


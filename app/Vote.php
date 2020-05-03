<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
	protected $fillable = [
        'question' 
    ];
    public function results() {
    	return $this->hasMany('App\Result');
    }
}

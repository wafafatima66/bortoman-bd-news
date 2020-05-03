<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
	protected $fillable = [
        'result', 'vote_id'
    ];
    public function vote() {
    	return $this->belongsTo('App\Vote');
    }
}

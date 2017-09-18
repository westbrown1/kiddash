<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Join extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'team', 'user_id',
    ];

    public function users()
    {
    	return $this->belongsTo('App\User');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dashboard extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'url'];

   public function user()
    {
    	return $this->belongsTo('App\User');
    }
}


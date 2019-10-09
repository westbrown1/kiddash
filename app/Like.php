<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'post_id',
    ];

    public function photo()
    {
    	return $this->belongsTo('App\Photo');    
    }
    
}

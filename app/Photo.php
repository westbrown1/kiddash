<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'image', 'user_id', 'name',
    ];

   public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function like()
    {
        return $this->hasMany(Like::class);
    }
}

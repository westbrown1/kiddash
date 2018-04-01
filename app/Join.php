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
       'team', 'user_id', 'name',
    ];

    public function users()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function follows()
    {
        return $this->belongsTo('App\Follow', 'follow_id');
    }

    public function teams()
    {
        return $this->belongsTo('App\Team');
    }
}

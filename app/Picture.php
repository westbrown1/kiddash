<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'picture', 'user_id', 'name',
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function tasks()
    {
        return $this->belongsTo(Task::class);
    }

}

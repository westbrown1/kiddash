<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Cmgmyr\Messenger\Traits\Messagable;
use App\Notifications\MessageReceived;

class User extends Authenticatable
{
    use Notifiable;
    use Messagable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'name', 'contact', 'email', 'team', 'team2', 'team3', 'team4', 'team5',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function dashboard()
    {
        return $this->hasMany('App\Dashboard');
    }

    public function photo()
    {
        return $this->hasMany('App\Photo');
    }

    /**
     * Get all of the tasks for the user.
     */
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
    /**
     * @return mixed
     */
    public function follows() {
        return $this->hasMany(Follow::class);
    }

    // app/User.php

    /**
     * A user can have many messages
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messages()
    {
      return $this->hasMany(Message::class);
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function teams()
    {
        return $this->hasMany(Team::class);
    }

    public function joins()
    {
        return $this->hasMany(Join::class);
    }

    public function myimages()
    {
        return $this->hasMany(Myimage::class);
    }

    public function pictures()
    {
        return $this->hasOne(Picture::class);
    }
}
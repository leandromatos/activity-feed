<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the activity timeline for the user.
     *
     * @return mixed
     */
    public function activity()
    {
        return $this->hasMany('App\Activity')
            ->with(['user', 'subject'])
            ->latest();
    }
    /**
     * Record new activity for the user.
     *
     * @param  string $name
     * @param  mixed  $related
     * @throws \Exception
     * @return void
     */
    public function recordActivity($name, $related)
    {
        if (!method_exists($related, 'recordActivity')) {
            throw new \Exception('..');
        }

        return $related->recordActivity($name);
    }
}

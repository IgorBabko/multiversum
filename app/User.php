<?php

namespace Multiversum;

use Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Multiversum\Subscription;

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
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Check if user is admin
     */
    public function isAdmin()
    {
        return $this->email === env('EMAIL', 'portaciya@gmail.com');
    }

    /**
     * Check if user is subscribed
     */
    public function isSubscribed()
    {
        return Subscription::where('email', $this->email)->count() !== 0;
    }

    /**
     * Hash user's password
     *
     * @param $password
     * @return void
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }
}

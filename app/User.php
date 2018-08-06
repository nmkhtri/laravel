<?php

namespace samenta;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use samenta\Comments;

class User extends Authenticatable
{
    use Notifiable;

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

    //one to one
    public function comment()
    {
        return $this->hasOne('samenta\Comments');
    }
    public function comments()
    {
        return $this->hasMany('samenta\Comments');
    }
    public function roles()
    {
        return $this->belongsToMany('samenta\Role');
    }
    public function photos()
    {
        return $this->morphMany('samenta\Photo','imageble');
    }
    public function Address()
    {
        return $this->hasOne('samenta\User');
    }
    //Relation between user & roles
    public function role()
    {
        return $this->belongsTo('samenta\Role');
    }
    public  function isAdmin()
    {
        if($this->role()->name == "Admin")
        {
            return true;
        }
        else{
            return false;
        }
    }
}

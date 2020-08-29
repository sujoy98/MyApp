<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     // A user has many post,(A user can have many post) it is basically a one to many relationship
    public function posts(){
        return $this->hasMany('App\Post');
    }

    // getting all the roles assigned to a user
    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    // assigning role to a user
    public function assignRole($role)
    {
        if(is_string($role)){
            $role = Role::whereName($role)->firstOrFail();
        }
        $this->roles()->sync($role,false);
    }

    // to check the ablilities of a user, using HIGHER ORDER COLLECTION
    public function abilities()
    {
        return $this->roles->map->abilities->flatten()->pluck('name')->unique();
    }
}

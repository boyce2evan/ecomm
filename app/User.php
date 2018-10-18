<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
     * Cek apakah user adalah administrator
     *
     */
    public function isAdmin()
    {
        return $this->roles()->where('title', 'administrator')->exists();
    }

    /**
     * Cek apakah user memiliki role yang telah ditentukan
     *
     * @param role
     */
    public function hasRole($role)
    {
        return $this->roles()->where('title', $role)->exists();
    }

    /**
     * Relasi dengan pivot tabel role_user
     *
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role', 'role_user');
    }
}

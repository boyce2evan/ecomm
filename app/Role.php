<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table= 'roles';

    public $timestamps= false;

    protected $fillable= ['title', 'description'];

    public function getTitleAttribute($value)
    {
        return title_case($value);
    }

    public function users() {
        return $this->belongsToMany('App\User', 'role_user');
    }
}

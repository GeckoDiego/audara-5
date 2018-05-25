<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_test extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'last_name', 'address', 'company', 'web', 'phone', 'email', 'position'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'web'
    ];
}

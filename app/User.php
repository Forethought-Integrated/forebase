<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Spatie\Permission\Traits\HasRoles;

// Forethought-vikram added for passport   05/dec/18
use Laravel\Passport\HasApiTokens;
// ./Forethought-vikram added for passport   05/dec/18




class User extends Authenticatable
{
    use HasRoles,HasApiTokens, Notifiable;

    // Forethought-vikram added for passport   05/dec/18
    // use HasApiTokens, Notifiable;
    // ./Forethought-vikram added for passport   05/dec/18



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

    public function setPasswordAttribute($password)
{   
    $this->attributes['password'] = bcrypt($password);
}



}

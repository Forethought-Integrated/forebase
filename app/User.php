<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

// Forethought-vikram added for passport   05/dec/18
use Laravel\Passport\HasApiTokens;
// ./Forethought-vikram added for passport   05/dec/18
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail {
	use HasRoles, HasApiTokens, Notifiable;

	// Forethought-vikram added for passport   05/dec/18
	// use HasApiTokens, Notifiable;
	// ./Forethought-vikram added for passport   05/dec/18

	protected $guarded = [];

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array


	 */
	protected $table    = 'users';
	protected $fillable = [
		'name', 'email', 'password', 'avatar', 'lastName', 'gender', 'mobileNo', 'address', 'locationCode', 'salutationCode', 'designationCode',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	public function setPasswordAttribute($password) {
		// $this->attributes['password'] = bcrypt($password);
		$this->attributes['password'] = Hash::make($password);
	}

	public function team() {
		return $this->belongsToMany('App\Model\Team', 'team_user', 'user_id', 'teams_id');
	}

}

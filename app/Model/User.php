<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $primaryKey = 'id';

    protected $fillable= ['name','email','email_verified_at','password','avatar','lastName','gender','mobileNo','address','locationCode','departmentCode','saluationCode',' designationCode','remember_token'];
    
} 

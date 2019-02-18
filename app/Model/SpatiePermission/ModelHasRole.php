<?php

namespace App\Model\SpatiePermission;

use Illuminate\Database\Eloquent\Model;

class ModelHasRole extends Model
{
    
    // protected $primaryKey = 'role_id';
    protected $fillable=['model_type','model_id'];    
    public $timestamps = false;
}

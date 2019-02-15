<?php

namespace App\Model\SpatiePermission;

use Illuminate\Database\Eloquent\Model;

class RoleHasPermission extends Model
{
    protected $fillable=['permission_id','role_id'];
    protected $table = 'role_has_permissions';
    public $timestamps = false;
    
}

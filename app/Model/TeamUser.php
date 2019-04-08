<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TeamUser extends Model
{
    protected $table='team_user';
    protected $primaryKey='null';
    protected $fillable = ['tu_id','user_id','teams_id'];
   
}
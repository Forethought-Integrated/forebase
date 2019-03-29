<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table='team';
    protected $primaryKey='team_id';
    protected $fillable = ['team_name','team_icon_path','team_description'];
   
   
}
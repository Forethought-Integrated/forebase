<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table='team';
    protected $primaryKey='team_id';
    protected $fillable = ['team_name','team_icon_path','team_description'];
   
   public function user()
   {
   	return $this->belongsToMany('App\User','team_user','teams_id','user_id');
   	// return $this->belongsToMany('App\User','team_user','user_id','teams_id');
   }
}
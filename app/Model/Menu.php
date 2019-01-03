<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $primaryKey='menu_id';
    protected $fillable  = ['user_id','menu_type']; 
    
}

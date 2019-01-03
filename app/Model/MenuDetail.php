<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class MenuDetail extends Model
{
    
   protected $primaryKey='menu_detail_id';
   
   protected $fillable=['menu_id','menu_field_name','menu_url','menu_sort'];
    
}

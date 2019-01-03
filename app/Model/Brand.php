<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{

	protected $primaryKey='brand_id';
	protected $fillable = ['brand_persona','brand_guidelines','brand_color_palette','brand_typography','brand_email_signature','brand_disclaimer'];
    
   
    
}

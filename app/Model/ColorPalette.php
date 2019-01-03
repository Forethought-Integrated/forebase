<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ColorPalette extends Model
{
    protected $primaryKey='color_palette_id'; 

    protected $fillable=[ 'color_type','color_description','color_cmyk_code','color_rgb_code','color_hex_code','color_pantone_code'];
    
}

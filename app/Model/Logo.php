<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    // protected $guarded = ['logo_id'];
    protected $primaryKey = 'logo_id';
    
     protected $fillable = [
        'primary_logo_url', 'secondary_logo_url','mnemonic_url','logo_usage'
    ];
}

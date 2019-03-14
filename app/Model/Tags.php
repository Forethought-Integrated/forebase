<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $primaryKey = 'id';

    protected $fillable= ['name', 'slug', 'order_column'];
    
} 

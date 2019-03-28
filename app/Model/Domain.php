<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{

	// protected $table = 'domains';
    protected $primaryKey='domain_id';
    protected $fillable  = ['domain_name']; 
    
}

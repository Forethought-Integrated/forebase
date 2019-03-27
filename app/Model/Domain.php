<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{

	// protected $table = 'domain_validation';
    protected $primaryKey='domain_id';
    protected $fillable  = ['domain_name']; 
    
}

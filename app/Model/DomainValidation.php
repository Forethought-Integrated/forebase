<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DomainValidation extends Model
{

	protected $table = 'domain_validation';
    protected $primaryKey='id';
    protected $fillable  = ['domain']; 
    
}

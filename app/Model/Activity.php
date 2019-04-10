<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model {

	protected $primaryKey = 'id';
	protected $fillable   = ['log_name', 'description', 'subject_id', 'subject_type', 'causer_id', '	causer_type	properties'];

}

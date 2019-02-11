<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $primaryKey='template_id';
    protected $fillable=['template_body','template_created_by'];
}

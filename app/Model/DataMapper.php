<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DataMapper extends Model
{
    //
    protected $primaryKey='data_mappers_id';
    protected $fillable = ['table_name','field_name','mapping_table_name','mapping_field_name','mapping_platform'];
}

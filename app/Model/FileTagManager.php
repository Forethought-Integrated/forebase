<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class FileTagManager extends Model implements HasMedia
{
	use HasMediaTrait, \Spatie\Tags\HasTags;

	// protected 	$table ='file_managers';
    protected $primaryKey = 'filemanager_id';

    protected $fillable=['filemanager_name','filemanager_folderpath','filemanager_filepath','filemanager_description'];

}

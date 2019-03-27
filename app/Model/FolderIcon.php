<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FolderIcon extends Model
{

	protected $table = 'folder_icon_mapping';
    protected $primaryKey='id';
    protected $fillable  = ['folder_name','image','file_path']; 
    
}

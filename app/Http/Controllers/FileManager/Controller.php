<?php

// namespace UniSharp\LaravelFilemanager\Controllers;
namespace App\Http\Controllers\FileManager;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;
}

<?php

namespace App\Providers;
use App\Model\Department;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class DepartmentProvider extends ServiceProvider
{
  



  public function boot()
  {
     view()->composer('*',function($view){
            $view->with('department_array', Department::all());
        });

  }
 

}

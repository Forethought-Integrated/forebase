<?php

namespace App\Providers;
use App\Model\Location;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class LocationProvider extends ServiceProvider
{
  

  public function boot()
  {
     view()->composer('*',function($view){
            $view->with('location_array', Location::all());
        });

  }
 
}

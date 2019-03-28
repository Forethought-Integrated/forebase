<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Validator;

// Forethought-vikram added for passport   05/dec/18
use Laravel\Passport\Passport; 
// ./Forethought-vikram added for passport   05/dec/18


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {

        $this->registerPolicies();

        // Forethought-vikram added for passport   05/dec/18

        Passport::routes(); 
        
        // ./Forethought-vikram added for passport   05/dec/18

    }
}

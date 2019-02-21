<?php

use Illuminate\Database\Seeder;
// require_once('vendor/autoload.php');
// require_once('vendor\spatie\laravel-permission\src\Models\Role.php');
// use src\Models\Role;
use App\Model\SpatiePermission\Role;

// use vendor\spatie\laravel-permission\src\Models\Role;
// use laravel-permission\src\Models\Role;

class Roletableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $role=new Role;
       // $role->id='1';
       $role->name='Admin';
       $role->guard_name='web';
       $role->save();

       $role=new Role;
       // $role->id='1';
       $role->name='FileManager';
       $role->guard_name='web';
       $role->save();

       $role=new Role;
       $role->name='SocialPost';
       $role->guard_name='web';
       $role->save();
    }
}

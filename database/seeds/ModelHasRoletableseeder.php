<?php

use Illuminate\Database\Seeder;
use App\Model\SpatiePermission\ModelHasRole;
// use App\Model\SpatiePermission\Eloquent;

class ModelHasRoletableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        ModelHasRole::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $model=new ModelHasRole;
        $model->role_id ='1';
        $model->model_type ='App\User';
        $model->model_id ='1';
        $model->save();
    }

    // public function run()
    // {
    //     DB::table('model_has_roles')->delete();
    //     ModelHasRole::create(array(
    //             'role_id' => 1,
    //             'model_type' => 'App\User',
    //             'model_id' => 1,
                
    //     ));
    //      $model->timestamps = false;
    //      $model->save();
    // }
}

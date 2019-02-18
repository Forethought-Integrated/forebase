<?php

use Illuminate\Database\Seeder;
use App\Model\SpatiePermission\ModelHasPermission;

class ModelHasPermissiontableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $model=new ModelHasPermission;
        // $model->permission_id='1';
        // $model->model_type='App\User';
        // $model->model_id='1';
        // $model->save();

     
        DB::table('model_has_permissions')->delete();
        ModelHasPermission::create(array(
                // 'role_id' => 1,
                'model_type' => 'App\User',
                'model_id' => 1,
                
        ));
         $model->timestamps = false;
         $model->save();
    
    }
}

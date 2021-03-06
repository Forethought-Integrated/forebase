<?php

use App\Model\ServiceAuthorization;

use Illuminate\Database\Seeder;

class Service_authorizationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        ServiceAuthorization::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $service=new ServiceAuthorization();
        $service->authorizations_client='helpdesk';
        $service->authorizations_token='123456';
        $service->save();

        $service=new ServiceAuthorization();
        $service->authorizations_client='crmapi';
        $service->authorizations_token='1234567';
        $service->save();

        $service=new ServiceAuthorization();
        $service->authorizations_client='socialapi';
        $service->authorizations_token='12345678';
        $service->save();
    }
}

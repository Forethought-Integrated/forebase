<?php

use Illuminate\Database\Seeder;

use App\Model\MenuDetail;

class menuseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        MenuDetail::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

         $menu_detail = new \App\MenuDetail();
         $menu_detail->menu_id='1';
         $menu_detail->menu_field_name='social';
         $menu_detail->menu_url="localhost:8000/social";
         $menu_detail->menu_sort='10';
         $menu_detail->save();

         $menu_detail = new \App\MenuDetail();
         $menu_detail->menu_id='2';
         $menu_detail->menu_field_name='file manager';
         $menu_detail->menu_url="localhost:8000/file";
         $menu_detail->menu_sort='11';
         $menu_detail->save();

         $menu_detail = new \App\MenuDetail();
         $menu_detail->menu_id='3';
         $menu_detail->menu_field_name='crm';
         $menu_detail->menu_url="localhost:8000/crm";
         $menu_detail->menu_sort='12';
         $menu_detail->save();

         $menu_detail = new \App\MenuDetail();
         $menu_detail->menu_id='4';
         $menu_detail->menu_field_name='social';
         $menu_detail->menu_url="localhost:8000/helpdesk";
         $menu_detail->menu_sort='13';
         $menu_detail->save();

         $menu_detail = new \App\MenuDetail();
         $menu_detail->menu_id='1';
         $menu_detail->menu_field_name='social';
         $menu_detail->menu_url="localhost:8000/social";
         $menu_detail->menu_sort='14';
         $menu_detail->save();

    }
}

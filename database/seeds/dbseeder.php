<?php

use Illuminate\Database\Seeder;

class dbseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $menu = new \App\Menu();
        // //$menu ->model='menu-1';
        // $menu->user_id='20';
        // $menu->menu_type='admin';
        // $menu->save();

        // $menu = new \App\Menu();        
        // $menu->user_id='76';
        // $menu->menu_type='admin';
        // $menu->save();
        $menu = new \App\Menu(); 
        $menu->user_id='77';
        $menu->menu_type='vk';
        $menu->save();

        $menu = new \App\Menu(); 
        $menu->user_id='11';
        $menu->menu_type='fields';
        $menu->save();

        $menu = new \App\Menu(); 
        $menu->user_id='12';
        $menu->menu_type='forethought';
        $menu->save();

        $menu = new \App\Menu(); 
        $menu->user_id='13';
        $menu->menu_type='the higherpitch';
        $menu->save();

        $menu = new \App\Menu(); 
        $menu->user_id='13';
        $menu->menu_type='logix';
        $menu->save();

        $menu = new \App\Menu(); 
        $menu->user_id='13';
        $menu->menu_type='technova';
        $menu->save();

        $menu = new \App\Menu(); 
        $menu->user_id='13';
        $menu->menu_type='adobe';
        $menu->save();
    }
}

<?php

// use DB;
use Illuminate\Database\Seeder;
use App\User;
use App\Model\MenuDetail;
use App\Model\Menu;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // $this->call(UsersTableSeeder::class);
        // $faker = Faker::create();
        // foreach (range(1,10) as $index) {
        //     DB::table('users')->insert([
        //         'name' => $faker->name,
        //         'email' => $faker->email,
        //         'password' => bcrypt('secret'),
        //     ]);
        // }

        
        //  User::create([
        //     'name' => 'Administrator',
        //     'email' => 'admin@telesales.test',
        //      // 'user_address' => '123123 34',
        //      // 'user_phone' => '+123123213',
        //     'password' => bcrypt('123456')
        // ]);

        //   Menu::create([
        //      'menu_id' => '1',
        //      'user-id' => '',
        //     'menu_type' => 'default',
        // ]);


        //   MenuDetail::create([
        //     'menu_id' => '1',
        //     'menu_field_name' => 'Socail',
        //     'menu_url' => 'social',
        //     'menu_sort' => '1',
        // ]);

        //   MenuDetail::create([
        //     'menu_id' => '1',
        //     'menu_field_name' => 'File Manager',
        //     'menu_url' => 'knowledge',
        //     'menu_sort' => '2',
        // ]);

        //   MenuDetail::create([
        //     'menu_id' => '1',
        //     'menu_field_name' => 'CRM',
        //     'menu_url' => 'crm',
        //     'menu_sort' => '3',
        // ]);

        //   MenuDetail::create([
        //     'menu_id' => '1',
        //     'menu_field_name' => 'HelpDesk',
        //     'menu_url' => '#',
        //     'menu_sort' => '4',
        // ]);

        //   MenuDetail::create([
        //     'menu_id' => '1',
        //     'menu_field_name' => 'Permission & Role',
        //     'menu_url' => 'social',
        //     'menu_sort' => '5',
        // ]);

    }
}

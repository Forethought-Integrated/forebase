<?php
use App\User;
use Illuminate\Database\Seeder;

class Usertableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
    	$users=new User();
    	$users->name='Vikram';
    	$users->email='vikramforvk@gmail.com';
        // $users->password='$2y$10$oEc/R/VjUcWVe1Mj4ICie.DmtPBJJ/ijBTGSluNOwTn8cBgcmjeKa';
    	$users->password='123456';
        $users->email_verified_at='2019-02-18 00:00:00';
    	$users->avatar='default.jpg';
    	$users->save();


  //        factory(App\User::class, 2)->create()->each(function($u) {
  //   $u->issues()->save(factory(App\Issues::class)->make());
  // });
       
    }
}

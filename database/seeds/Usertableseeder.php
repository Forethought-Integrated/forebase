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
    	$users->password='$2y$10$oEc/R/VjUcWVe1Mj4ICie.DmtPBJJ/ijBTGSluNOwTn8cBgcmjeKa';
    	$users->avatar='default.jpg';
    	$users->save();
       
    }
}

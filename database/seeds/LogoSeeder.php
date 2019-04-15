<?php
use App\Model\Logo;
use Illuminate\Database\Seeder;

class LogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Logo::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $logos=new Logo;
        $logos->primary_logo_url='www.Mastechprimarylogo.com';
        $logos->secondary_logo_url='www.Mastechsecondrylogo.com';
        $logos->mnemonic_url='www.mnemonic_url.com';
        $logos->logo_usage='The Mastech Digital Logo is primary symbol which represents the Mastech Digital Brand and its subdiaries. The logotype is stylized to represent our modern take on the rapidly-evolving digital landscape.';
        $logos->save();

       
        
    }
}

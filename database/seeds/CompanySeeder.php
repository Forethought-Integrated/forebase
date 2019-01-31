<?php
use App\Model\Company;

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies=new Company;
        $companies->company_name='The Higher Pitch';
        $companies->company_registration_address='Noida';
        $companies->company_state='Uttar Pradesh';
        $companies->company_country='India';
        $companies->company_pincode='201301';
        $companies->company_email='play@thehigherpitch.com';
        $companies->company_phone_no='03566264942';
        $companies->company_primary_contact='9839567867';
        $companies->company_secondary_contact='9721236756';
        $companies->company_pan_no='ASDF3456';
        $companies->company_registration_no='345675788';
        $companies->company_overview='The Higher Pitch is a marketing and Developement company';
        $companies->company_industry='Marketing and Web Developement';
        $companies->company_website='www.theHigherpitch.com';
        $companies->save();


        
    }
}

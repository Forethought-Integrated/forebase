<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	protected $table ='companies';
    protected $primaryKey = 'company_id';

    protected $fillable= ['company_name','company_registration_address','company_state','company_country','company_pincode','company_email','company_phone_no','company_primary_contact','company_secondary_contact','company_pan_no','company_registration_no','company_overview','company_industry','company_website'];
    
}

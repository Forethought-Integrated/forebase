<?php

namespace App\Http\Controllers\Company; 
use Illuminate\Http\Request;

use App\Http\Requests\CompanyRequest;
use App\Company;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
  

class CompanyController extends Controller
{


     function get_singel_data($id)
    {
        $data = DB::table('companies')->where('company_id',$id)->first();
               
        return $data;
    }
    public function index()
    {
       $company=DB::table('companies')->get();

       return view('CRM.Company.listCompany',['company'=>$company]);
    }


    public function create()
    {
         return view('CRM.Company.createCompany');

    }

    public function store(Request $request)
    {
         Company::create([
                    
                    'company_name'=>$request->company_name,
                    'company_registration_address'=>$request->company_registration_address,
                    'company_state'=>$request->company_state,
                    'company_country'=>$request->company_country,
                    'company_pincode'=>$request->company_pincode,
                    'company_email'=>$request->company_email,
                    'company_phone_no'=>$request->company_phone_no,
                    'company_primary_contact'=>$request->company_primary_contact,
                    'company_secondary_contact'=>$request->company_secondary_contact,
                    'company_pan_no'=>$request->company_pan_no,
                    'company_registration_no'=>$request->company_registration_no,
                    'company_overview'=>$request->company_overview,
                    'company_industry'=>$request->company_industry,
                    'company_website'=>$request->company_website,
                   
                    
                ]);
                    return redirect('/companies');    }

    public function show($id)
    {
        $company = $this->get_singel_data($id);
            
       
        return view('CRM.Company.showCompany',['companies'=>$company]);
    }

     public function edit($id)
    {
       $company = $this->get_singel_data($id);
            
        
         return view('CRM.Company.editCompany',['companies'=>$company]);


    }


    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);
        $company->update($request->all());

        $company->save();
        return redirect('/companies');
    }

    public function destroy($id)
    {
         DB::table('companies')->where('company_id','=',$id)->delete();

       
            return redirect('/companies');
    }
}

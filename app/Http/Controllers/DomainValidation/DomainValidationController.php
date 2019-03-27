<?php

namespace App\Http\Controllers\DomainValidation;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\DomainValidation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class DomainValidationController extends Controller
{

         function get_singel_data($id)
        {
            $data = DB::table('domain_validation')->where('id',$id)->first();
            return $data;
        }
        public function index()
        {
               
           $domains=DB::table('domain_validation')->paginate(10);

           return view('DomainValidation.listDomainValidation',['domains'=>$domains]);
        }

         public function create()
         {
             return view('DomainValidation.createDomainValidation');

         }


        public function store(Request $request)
        {
           
           
                DomainValidation::create([
                        
                        'domain'=>$request->domain,
                        
                    ]);
                        return redirect('/UsersDomains'); 
        }

        public function show($id)
        {
             $domains = $this->get_singel_data($id);
                
           
            return view('DomainValidation.showDomainValidation',['domain'=>$domains]);
        }

        public function edit($id)
        {
             $domains = $this->get_singel_data($id);
                
             return view('DomainValidation.editDomainValidation',['domain'=>$domains]);
        }

        public function update(Request $request, $id)
        {
            $domains = DomainValidation::findOrFail($id);
            $domains->update($request->all());
            $domains->save();
            return redirect('/UsersDomains');
        }

        public function destroy($id)
        {
           
             DB::table('domain_validation')->where('id','=',$id)->delete();
             return redirect('/UsersDomains');
        }
}

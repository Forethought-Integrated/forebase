<?php

namespace App\Http\Controllers\DomainValidation;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\Domain;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class DomainValidationController extends Controller
{

         function get_singel_data($id)
        {
            $data = DB::table('domains')->where('domain_id',$id)->first();
            return $data;
        }
        public function index()
        {
               
           $domains=DB::table('domains')->paginate(10);

           return view('DomainValidation.listDomainValidation',['domains'=>$domains]);
        }

         public function create()
         {
             return view('DomainValidation.createDomainValidation');

         }


        public function store(Request $request)
        {
           
                Domain::create([
                        'domain_name'=>$request->domain_name,
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
            $domains = Domain::findOrFail($id);
            $domains->update($request->all());
            $domains->save();
            return redirect('/UsersDomains');
        }

        public function destroy($id)
        {
           
             DB::table('domains')->where('domain_id','=',$id)->delete();
             return redirect('/UsersDomains');
        }
}

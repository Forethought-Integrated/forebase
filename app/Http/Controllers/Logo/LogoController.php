<?php

namespace App\Http\Controllers\Logo;

 use Illuminate\Http\Request;
// use App\Http\Requests;

//use App\Http\Requests\Request;
use App\Model\Logo;
use App\Http\Requests\LogoRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

 

class LogoController extends Controller
{

     function get_singel_data($id)
    {
        $data = DB::table('logos')->where('logo_id',$id)->first();
               
        return $data;
    }
    public function index()
    {
        
       $logo=DB::table('logos')->paginate(10);

       return view('CRM.Logos.listLogo',['logo'=>$logo]); 
    } 

     public function create()
    { 
         return view('CRM.Logos.createLogo');

    }

    public function store(Request $request)
    {


         Logo::create([
                    
                    'primary_logo_url'=>$request->primary_logo_url,
                    'secondary_logo_url'=>$request->secondary_logo_url,
                    'mnemonic_url'=>$request->mnemonic_url,
                    'logo_usage'=>$request->logo_usage,

                 ]);

                  return redirect('/logos'); 
    }

    public function show($id)
    {
       
        $logo = $this->get_singel_data($id);
            
       
        return view('CRM.Logos.showLogo',['logos'=>$logo]);
    }

     public function edit($id)
    {
       $logo = $this->get_singel_data($id);
            
        
         return view('CRM.Logos.editLogo',['logos'=>$logo]);


    }

    public function update(Request $request, $id)
    {
        $logo = Logo::findOrFail($id);
        $logo->update($request->all());
        $logo->save();
        return redirect('/logos');

        
    }

    public function destroy($id)
    {
       
       DB::table('logos')->where('logo_id','=',$id)->delete();

       
            return redirect('/logos');
    }
}

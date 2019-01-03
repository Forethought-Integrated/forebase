<?php


namespace App\Http\Controllers\Brand;

use App\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\BrandResources;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Facade;

//use App\Http\Controllers\BrandController;


class  BrandController extends Controller
{
    
     function get_singel_data($id)
    {
        $data = DB::table('brands')->where('brand_id',$id)->first();
               
        return $data;
    }
     
    public function index()
    { 
        
       $brands=DB::table('Brands')->get();
       return view('CRM.Brand.listBrand',['brands'=>$brands]);
    }


    public function create()
    {
         return view('CRM.Brand.createBrand');

    }


    public function store(Request $request)
    {
        
                   Brand::create([
                    
                    'brand_persona' => $request->brandPerson,
                    'brand_guidelines' => $request->brandGuidelines,
                    'brand_color_palette'=> $request->brandColorpalate,
                    'brand_typography' => $request->brandTypography,
                    'brand_email_signature' => $request->brandEmail,
                    'brand_disclaimer' => $request->brandDisc,
                   
                    
                ]);
                    return redirect('/brands');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) 
    {

        $brands = $this->get_singel_data($id);
            
       
        return view('CRM.Brand.showBrand',['brand'=>$brands]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $brands = $this->get_singel_data($id);
            
        
         return view('CRM.Brand.editBrand',['brand'=>$brands]);
    }

         public function update(Request $request, $id)

     {  
        $brand=Brand::findOrFail($id);
        $brand->update($request->all());
        //return $brand;
        $brand->save();
            
                // DB::table('brands')->where('brand_id', $id)->update(['brand_persona' => $request->brand_persona]);

                // return redirect('/brands');




    
       
                //    Brand::create([
                    
                //     'brand_persona' => $request->brandPerson,
                //     'brand_guidelines' => $request->brandGuidelines,
                //     'brand_color_palette'=> $request->brandColorpalate,
                //     'brand_typography' => $request->brandTypography,
                //     'brand_email_signature' => $request->brandEmail,
                //     'brand_disclaimer' => $request->brandDisc,
                   
                    
                // ]);
                    return redirect('/brands');
     }

   
     
    public function destroy($id)
    {
         DB::table('brands')->where('brand_id','=',$id)->delete();

       
            return redirect('/brands');
    }
}

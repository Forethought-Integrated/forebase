<?php
namespace App\Http\Controllers\Menudetail;
use App\Model\MenuDetail;  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\MenudetailResources;
use Illuminate\Support\Facades\DB;


class MenudetailController extends Controller
{   

     function get_singel_data($id)
    {
        $data = DB::table('menu_details')->where('menu_detail_id',$id)->first();
               
        return $data;
    }

    public function index()
    {
       $menu_details=DB::table('menu_details')->get();

       return view('CRM.Menudetail.listMenudetail',['menu_details'=>$menu_details]); 
    }
    

     public function create()
    {
         return view('CRM.Menudetail.createMenudetail');

    }

    public function store(Request $request)
    {
      // return "hello";
          Menudetail::create([
                    
                    'menu_id'=> $request->menu_id,
                    'menu_field_name' => $request->menu_field_name,
                    'menu_url' => $request->menu_url,
                    'menu_sort' => $request->menu_sort,


                 ]);

                  return redirect('/menudetails');     
                   
    }

    public function show($id)
    {
        $menu_details = $this->get_singel_data($id);
            
       
        return view('CRM.Menudetail.showMenudetail',['menu_details'=>$menu_details]);
    }

     public function edit($id)
    {
       $menu_details = $this->get_singel_data($id);
            
        
         return view('CRM.Menudetail.editMenudetail',['menu_details'=>$menu_details]);


    }

    public function update(Request $request, $id)
    { 
         
        $menu_details=Menudetail::findOrFail($id);      
        $menu_details->update($request->all());
         
        $menu_details->save();
        return redirect('/menudetails');
    }


    public function destroy($id)
    {
       DB::table('menu_details')->where('menu_detail_id','=',$id)->delete();

       
            return redirect('/menudetails');
    }
}

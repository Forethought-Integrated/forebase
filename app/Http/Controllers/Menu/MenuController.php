<?php 


namespace App\Http\Controllers\Menu;

// use App\Http\Requests\MenuRequest;
use App\Menu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\BrandResources;
use Illuminate\Support\Facades\DB; 


class MenuController extends Controller
{
    
     function get_singel_data($id)
    {
        $data = DB::table('menus')->where('menu_id',$id)->first();
               
        return $data;
    }


    public function index()
    {
       $menu=DB::table('Menus')->paginate(10);
       return view('CRM.Menu.listMenu',['menu'=>$menu]); 
    }
      
    
    public function create()
    {
         return view('CRM.Menu.createMenu');

    }

    public function store(Request $request)
    {
       Menu::create([
                    
                    'user_id' => $request->user_id,
                    'menu_type' => $request->menu_type,


                     ]);
                    return redirect('/menus');
    }

    public function show($id)
    {
      $menu = $this->get_singel_data($id);
            
       
        return view('CRM.Menu.showMenu',['menu'=>$menu]);
    }
    
    public function edit($id)
    {
       $menu = $this->get_singel_data($id);
            
        
         return view('CRM.Menu.editMenu',['menu'=>$menu]);


    }
    public function update(Request $request, $id)
    {
        
        $menu=Menu::findOrFail($id);
        $menu->update($request->all());
        $menu->save();

         return redirect('/menus');
    }

    public function destroy($id) 
    {
       DB::table('menus')->where('menu_id','=',$id)->delete();

       
            return redirect('/menus');
    }
}

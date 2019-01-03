<?php

namespace App\Http\Controllers\ColorPalette;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\ColorPalette;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;



class ColorPaletteController extends Controller
{

     function get_singel_data($id)
    {
        $data = DB::table('color_palettes')->where('color_palette_id',$id)->first();
               
        return $data;
    }
    public function index()
    {
           
       $color_palette=DB::table('color_palettes')->get();

       return view('CRM.ColorPalette.listColorPalette',['color_palettes'=>$color_palette]);
    }

     public function create()
     {
         return view('CRM.ColorPalette.createColorPalette');

     }


    public function store(Request $request)
    {
       
       
            ColorPalette::create([
                    
                    'color_type'=>$request->color_type,
                    'color_description'=>$request->color_description,
                    'color_cmyk_code'=>$request->color_cmyk_code,
                    'color_rgb_code'=>$request->color_rgb_code,
                    'color_hex_code'=>$request->color_hex_code,
                    'color_pantone_code'=>$request->color_pantone_code,
                   
                    
                ]);
                    return redirect('/colorpalettes'); 
    }

    public function show($id)
    {
         $color_palette = $this->get_singel_data($id);
            
       
        return view('CRM.ColorPalette.showColorPalette',['color_palette'=>$color_palette]);
    }

    public function edit($id)
    {
         $color_palette = $this->get_singel_data($id);
            
        
         return view('CRM.ColorPalette.editColorPalette',['color_palette'=>$color_palette]);
    }

    public function update(Request $request, $id)
    {
        $color_palette = ColorPalette::findOrFail($id);
        $color_palette->update($request->all());

        $color_palette->save();
        return redirect('/colorpalettes');
    }

    public function destroy($id)
    {
       
         DB::table('color_palettes')->where('color_palette_id','=',$id)->delete();

       
            return redirect('/colorpalettes');
    }
}

<?php

namespace App\Http\Controllers\Logo;

// use App\Http\Requests\LogoRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
use Illuminate\Support\Facades\DB;



class LogoController extends Controller
{
    public function index()
    {
        $logos = Logo::latest()->get();

        return response()->json($logos);
    }

    public function store(LogoRequest $request)
    {
        $logo = Logo::create($request->all());

        return response()->json($logo, 201);
    }

    public function show($id)
    {
        // $logo = Logo::findOrFail('1');
                // $data = DB::table('logos')->where('logo_id','1' )->first();
$logo = DB::table('logos')->get();
// $logo = DB::table('logos')->where('logo_id', '1')->first();
        // $logo=Logo::where('logo_id',$id)->pluck('primary_logo_url')->all();
        // $logo=Logo::where('logo_id',$id)->pluck('post_body','user_name')->all();
        return response()->json($logo);
        // return $logo;
    }

    public function update(LogoRequest $request, $id)
    {
        $logo = Logo::findOrFail($id);
        $logo->update($request->all());

        return response()->json($logo, 200);
    }

    public function destroy($id)
    {
        Logo::destroy($id);

        return response()->json(null, 204);
    }
}

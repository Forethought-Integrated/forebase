<?php

namespace App\Http\Controllers\Menu;

// use App\Http\Requests\MenuRequest;
use App\Model\Menu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::latest()->get();

        return response()->json($menus);
    }

    public function store(Request $request)
    {
        $menu = Menu::create($request->all());

        return response()->json($menu, 201);
    }

    public function show($id)
    {
        $menu = Menu::findOrFail($id);

        return response()->json($menu);
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);
        $menu->update($request->all());

        return response()->json($menu, 200);
    }

    public function destroy($id)
    {
        Menu::destroy($id);

        return response()->json(null, 204);
    }
}

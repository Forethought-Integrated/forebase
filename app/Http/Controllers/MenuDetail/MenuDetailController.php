<?php

namespace App\Http\Controllers\MenuDetail;

use App\Http\Requests\MenuDetailRequest;
use App\MenuDetail;
use App\Http\Controllers\Controller;


class MenuDetailController extends Controller
{
    public function index()
    {
        $menudetails = MenuDetail::latest()->get();

        return response()->json($menudetails);
    }

    public function store(MenuDetailRequest $request)
    {
        $menudetail = MenuDetail::create($request->all());

        return response()->json($menudetail, 201);
    }

    public function show($id)
    {
        $menudetail = MenuDetail::findOrFail($id);

        return response()->json($menudetail);
    }

    public function update(MenuDetailRequest $request, $id)
    {
        $menudetail = MenuDetail::findOrFail($id);
        $menudetail->update($request->all());

        return response()->json($menudetail, 200);
    }

    public function destroy($id)
    {
        MenuDetail::destroy($id);

        return response()->json(null, 204);
    }
}

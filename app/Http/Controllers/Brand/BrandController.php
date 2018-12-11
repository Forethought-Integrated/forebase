<?php

namespace App\Http\Controllers\Brand;

use App\Http\Requests\BrandRequest;
use App\Brand;
use App\Http\Controllers\Controller;


class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::latest()->get();

        return response()->json($brands);
    }

    public function store(BrandRequest $request)
    {
        $brand = Brand::create($request->all());

        return response()->json($brand, 201);
    }

    public function show($id)
    {
        $brand = Brand::findOrFail($id);

        return response()->json($brand);
    }

    public function update(BrandRequest $request, $id)
    {
        $brand = Brand::findOrFail($id);
        $brand->update($request->all());

        return response()->json($brand, 200);
    }

    public function destroy($id)
    {
        Brand::destroy($id);

        return response()->json(null, 204);
    }
}

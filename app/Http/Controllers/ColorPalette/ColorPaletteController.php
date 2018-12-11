<?php

namespace App\Http\Controllers\ColorPalette;

use App\Http\Requests\ColorPaletteRequest;
use App\ColorPalette;
use App\Http\Controllers\Controller;


class ColorPaletteController extends Controller
{
    public function index()
    {
        $colorpalettes = ColorPalette::latest()->get();

        return response()->json($colorpalettes);
    }

    public function store(ColorPaletteRequest $request)
    {
        $colorpalette = ColorPalette::create($request->all());

        return response()->json($colorpalette, 201);
    }

    public function show($id)
    {
        $colorpalette = ColorPalette::findOrFail($id);

        return response()->json($colorpalette);
    }

    public function update(ColorPaletteRequest $request, $id)
    {
        $colorpalette = ColorPalette::findOrFail($id);
        $colorpalette->update($request->all());

        return response()->json($colorpalette, 200);
    }

    public function destroy($id)
    {
        ColorPalette::destroy($id);

        return response()->json(null, 204);
    }
}

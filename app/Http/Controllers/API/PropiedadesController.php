<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Propiedad;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PropiedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $propiedades = Propiedad::all();
        return response()->json($propiedades);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'direccion' => 'required',
            'tipo' => 'required',
            'precio' => 'required|numeric',
            'estado' => 'required',
            'descripcion' => 'required',
        ]);

        $propiedad = Propiedad::create($request->all());
        return response()->json($propiedad, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json($propiedad);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'direccion' => 'required',
            'tipo' => 'required',
            'precio' => 'required|numeric',
            'estado' => 'required',
            'descripcion' => 'required',
        ]);

        $propiedad->update($request->all());
        return response()->json($propiedad);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $propiedad->delete();
        return response()->json(null, 204);
    }
}

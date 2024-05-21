<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Visita;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class VisitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visitas = Visita::all();
        return response()->json($visitas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'propiedad_id' => 'required|exists:propiedades,id',
            'cliente_id' => 'required|exists:clientes,id',
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
            'comentarios' => 'nullable',
        ]);

        $visita = Visita::create($request->all());
        return response()->json($visita, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json($visita);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'propiedad_id' => 'required|exists:propiedades,id',
            'cliente_id' => 'required|exists:clientes,id',
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
            'comentarios' => 'nullable',
        ]);

        $visita->update($request->all());
        return response()->json($visita);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $visita->delete();
        return response()->json(null, 204);
    }
}

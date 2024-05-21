<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Contrato;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ContratosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contratos = Contrato::all();
        return response()->json($contratos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'propiedad_id' => 'required|exists:propiedades,id',
            'cliente_id' => 'required|exists:clientes,id',
            'agente_id' => 'required|exists:agentes,id',
            'tipo_contrato' => 'required',
            'fecha_contrato' => 'required|date',
            'detalles' => 'nullable',
        ]);

        $contrato = Contrato::create($request->all());
        return response()->json($contrato, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json($contrato);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'propiedad_id' => 'required|exists:propiedades,id',
            'cliente_id' => 'required|exists:clientes,id',
            'agente_id' => 'required|exists:agentes,id',
            'tipo_contrato' => 'required',
            'fecha_contrato' => 'required|date',
            'detalles' => 'nullable',
        ]);

        $contrato->update($request->all());
        return response()->json($contrato);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contrato->delete();
        return response()->json(null, 204);
    }
}

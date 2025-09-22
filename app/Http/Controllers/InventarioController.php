<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // listar solo activos
        return Inventario::where('estado', true)->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_articulo' => 'required|string|max:50',
            'cantidad_total' => 'required|integer|min:1',
            'descripcion' => 'nullable|string|max:100',
            'fecha_ingreso' => 'required|date',
            'id_usuario' => 'required|exists:usuario,id_usuario',
        ]);

        return Inventario::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Inventario::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $inventario = Inventario::findOrFail($id);

        $inventario->update($request->all());

        return $inventario;
    }

    /**
     * Remove the specified resource from storage (cambio de estado).
     */
    public function destroy($id)
    {
        $inventario = Inventario::findOrFail($id);

        // cambio de estado en vez de borrado
        $inventario->estado = false;
        $inventario->save();

        return response()->json([
            'message' => 'Artículo deshabilitado correctamente',
            'inventario' => $inventario
        ]);
    }
}

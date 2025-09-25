<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\InventarioRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
         $busqueda = $request->get('nombre'); // capturamos el texto del input

        $inventarios = Inventario::when($busqueda, function ($query, $busqueda) {
            return $query->where('nombre_articulo', 'like', '%' . $busqueda . '%');
        })
        ->paginate();

    return view('inventario.index', compact('inventarios', 'busqueda'))
        ->with('i', ($request->input('page', 1) - 1) * $inventarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $inventario = new Inventario();

        return view('inventario.create', compact('inventario'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InventarioRequest $request): RedirectResponse
    {
        Inventario::create($request->validated());

        return Redirect::route('inventarios.index')
            ->with('success', '');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $inventario = Inventario::find($id);

        return view('inventario.show', compact('inventario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $inventario = Inventario::find($id);

        return view('inventario.edit', compact('inventario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InventarioRequest $request, Inventario $inventario): RedirectResponse
    {
        $inventario->update($request->validated());

        return Redirect::route('inventarios.index')
            ->with('success', '');
    }

    public function destroy($id): RedirectResponse
    {
        $inventario = Inventario::find($id);

        if ($inventario) {
            $inventario->estado = false;   // 👈 se asigna manualmente
            $inventario->save();
        }

        return Redirect::route('inventarios.index')
            ->with('success', '');
    }
    
}

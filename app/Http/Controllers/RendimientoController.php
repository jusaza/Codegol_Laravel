<?php

namespace App\Http\Controllers;

use App\Models\Rendimiento;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\RendimientoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class RendimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
{
    $query = Rendimiento::query();

    // Si hay búsqueda
    if ($request->has('busqueda') && !empty($request->busqueda)) {
        $busqueda = $request->busqueda;
        $query->where(function($q) use ($busqueda) {
            $q->where('fecha_evaluacion', 'like', "%{$busqueda}%")
              ->orWhere('posicion', 'like', "%{$busqueda}%")
              ->orWhere('estado', 'like', "%{$busqueda}%");
        });
    }

    $rendimientos = $query->paginate(10)->withQueryString();

    return view('rendimiento.index', compact('rendimientos'))
        ->with('i', ($request->input('page', 1) - 1) * $rendimientos->perPage());
}


    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $rendimiento = new Rendimiento();

        return view('rendimiento.create', compact('rendimiento'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RendimientoRequest $request): RedirectResponse
    {
        Rendimiento::create($request->validated());

        return Redirect::route('rendimientopag')
            ->with('success', '');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $rendimiento = Rendimiento::find($id);

        return view('rendimiento.show', compact('rendimiento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $rendimiento = Rendimiento::find($id);

        return view('rendimiento.edit', compact('rendimiento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RendimientoRequest $request, Rendimiento $rendimiento): RedirectResponse
    {
        $rendimiento->update($request->validated());

        return Redirect::route('rendimientopag')
            ->with('success', '');
    }

   public function destroy($id): RedirectResponse
    {
        $rendimiento = Rendimiento::find($id);

        if ($rendimiento ) {
            $rendimiento ->estado = false;   // 👈 se asigna manualmente
            $rendimiento ->save();
        }

        return Redirect::route('rendimientopag')
            ->with('success', '');
    }
}

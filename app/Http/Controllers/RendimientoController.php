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
        $rendimientos = Rendimiento::paginate();

        return view('rendimientos.index', compact('rendimientos'))
            ->with('i', ($request->input('page', 1) - 1) * $rendimientos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $rendimiento = new Rendimiento();

        return view('rendimientos.create', compact('rendimiento'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RendimientoRequest $request): RedirectResponse
    {
        Rendimiento::create($request->validated());

        return Redirect::route('rendimientos.index')
            ->with('success', 'Rendimiento creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $rendimiento = Rendimiento::find($id);

        return view('rendimientos.show', compact('rendimiento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $rendimiento = Rendimiento::find($id);

        return view('rendimientos.edit', compact('rendimiento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RendimientoRequest $request, Rendimiento $rendimiento): RedirectResponse
    {
        $rendimiento->update($request->validated());

        return Redirect::route('rendimientos.index')
            ->with('success', 'Rendimiento actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        Rendimiento::find($id)->delete();

        return Redirect::route('rendimientos.index')
            ->with('success', 'Rendimiento eliminado correctamente.');
    }
}

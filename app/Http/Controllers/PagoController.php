<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Http\Requests\PagoRequest;

class PagoController extends Controller
{
    /**
     * Muestra la lista de pagos paginada.
     */
    public function index(Request $request): View
    {
        $pagos = Pago::paginate();

        return view('pago.index', compact('pagos'))
            ->with('i', ($request->input('page', 1) - 1) * $pagos->perPage());
    }

    /**
     * Muestra el formulario para crear un nuevo pago.
     */
    public function create(): View
    {
        $pago       = new Pago();
        $usuarios   = \App\Models\Usuario::all();
        $matriculas = \App\Models\Matricula::all();

        return view('pago.create', compact('pago','usuarios','matriculas'));
    }

    /**
     * Guarda un nuevo pago en la base de datos.
     */
    public function store(PagoRequest $request): RedirectResponse
    {
        Pago::create($request->validated());

        return Redirect::route('pago.index')
            ->with('success', 'Pago creado correctamente.');
    }

    /**
     * Muestra un pago en detalle.
     */
    public function show($id): View
    {
        $pago = Pago::with(['usuario','usuario_responsable','matricula'])->findOrFail($id);

        return view('pago.show', compact('pago'));
    }

    /**
     * Muestra el formulario para editar un pago.
     */
    public function edit($id): View
    {
        $pago       = Pago::findOrFail($id);
        $usuarios   = \App\Models\Usuario::all();
        $matriculas = \App\Models\Matricula::all();

        return view('pago.edit', compact('pago','usuarios','matriculas'));
    }

    /**
     * Actualiza un pago existente.
     */
    public function update(PagoRequest $request, Pago $pago): RedirectResponse
    {
        $pago->update($request->validated());

        return Redirect::route('pago.index')
            ->with('success', 'Pago actualizado correctamente.');
    }

    /**
     * Elimina un pago.
     */
    public function destroy($id): RedirectResponse
    {
        Pago::findOrFail($id)->delete();

        return Redirect::route('pago.index')
            ->with('success', 'Pago eliminado correctamente.');
    }
}


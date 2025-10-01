<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Http\Requests\PagoRequest;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Usuario;
use App\Models\Matricula;

class PagoController extends Controller
{
    /**
     * Muestra la lista de pagos paginada.
     */
    public function reportePdf(Request $request)
    {
        $busqueda = $request->get('nombre');
        $pagos = \App\Models\Pago::with(['usuario','usuario_responsable','matricula'])
                    ->when($busqueda, function ($query, $busqueda) {
                    return $query->where('concepto_pago', 'like', '%' . $busqueda . '%');
                    })
                    ->orderBy('id_pago','asc')
                    ->get();

        $pdf = Pdf::loadView('pago.reportes', compact('pagos'))
                ->setPaper('a4', 'landscape');

        return $pdf->download('reporte_pagos.pdf');
    }

    public function index(Request $request): View
    {

        $busqueda = $request->get('nombre');
         $metodoPago   = $request->get('metodo_pago');

        $pagos = Pago::when($busqueda, function ($query, $busqueda) {
            return $query->where('concepto_pago', 'like', '%' . $busqueda . '%');
        })
        ->paginate();

        return view('pago.index', compact('pagos',"busqueda"))
            ->with('i', ($request->input('page', 1) - 1) * $pagos->perPage());
    }

    /**
     * Muestra el formulario para crear un nuevo pago.
     */
    public function create(): View
    {
        $pago       = new Pago();
        $usuarios   = Usuario::all();
        $matriculas = Matricula::all();
        $responsables = Usuario::whereHas('roles', function($query) {
        $query->where('rol_usuario', 'Responsable');  // Asegúrate de que 'rol_usuario' es el campo correcto
    })->get();


        return view('pago.create', compact('pago','usuarios',"responsables",'matriculas'));
    }

    /**
     * Guarda un nuevo pago en la base de datos.
     */
    public function store(PagoRequest $request): RedirectResponse
    {
        Pago::create($request->validated());

        return Redirect::route('pago.index')
            ->with('success', '');
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
            ->with('success', '');
    }

    /**
     * Elimina un pago.
     */
    public function destroy($id): RedirectResponse
    {
        $pago = Pago::find($id);

        if ($pago) {
            $pago->estado = false;   // 👈 se asigna manualmente
            $pago->save();
        }

        return Redirect::route('pago.index')
            ->with('success', '');
    }
}


<?php

namespace App\Http\Controllers;

use App\Models\Entrenamiento;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\EntrenamientoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class EntrenamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $busqueda = $request->get('busqueda'); // capturamos el texto del input

        $entrenamientos = Entrenamiento::when($busqueda, function ($query, $busqueda) {
                return $query->where(function ($q) use ($busqueda) {
                    $q->where('fecha', 'like', '%' . $busqueda . '%')
                    ->orWhereRaw("LOWER(TRIM(descripcion)) LIKE ?", ['%' . strtolower(trim($busqueda)) . '%']);
                });
            })
            ->paginate();

        return view('entrenamiento.index', compact('entrenamientos', 'busqueda'))
            ->with('i', ($request->input('page', 1) - 1) * $entrenamientos->perPage());
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $entrenamiento = new Entrenamiento();

        return view('entrenamiento.create', compact('entrenamiento'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EntrenamientoRequest $request): RedirectResponse
    {
        Entrenamiento::create($request->validated());

        return Redirect::route('entrenamientos.index')
            ->with('success', 'Entrenamiento created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $entrenamiento = Entrenamiento::find($id);

        return view('entrenamiento.show', compact('entrenamiento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $entrenamiento = Entrenamiento::find($id);

        return view('entrenamiento.edit', compact('entrenamiento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EntrenamientoRequest $request, Entrenamiento $entrenamiento): RedirectResponse
    {
        $entrenamiento->update($request->validated());

        return Redirect::route('entrenamientos.index')
            ->with('success', 'Entrenamiento updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        $entrenamiento = Entrenamiento::find($id);
        if ($entrenamiento) {
            $entrenamiento->estado = false;   // 👈 se asigna manualmente
            $entrenamiento->save();
        }

        return Redirect::route('entrenamientos.index')
            ->with('success', 'Entrenamiento deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\MatriculaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class MatriculaController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {

        $busqueda = $request->get('search'); // capturamos el texto del input

        $matriculas = Matricula::when($busqueda, function ($query, $busqueda) {
            return $query->where('fecha_inicio', 'like', '%' . $busqueda . '%')
            ->orWhereRaw("LOWER(TRIM(observaciones)) LIKE ?", ['%' . strtolower(trim($busqueda)) . '%']);
        })
        ->paginate();

        return view('matricula.matriculapag', compact('matriculas',"busqueda"))
            ->with('i', ($request->input('page', 1) - 1) * $matriculas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $matricula = new Matricula();

        return view('matricula.create', compact('matricula'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MatriculaRequest $request): RedirectResponse
    {
        Matricula::create($request->validated());

        return Redirect::route('matriculapag')
            ->with('success', '');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $matricula = Matricula::find($id);

        return view('matricula.show', compact('matricula'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $matricula = Matricula::find($id);

        return view('matricula.edit', compact('matricula'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MatriculaRequest $request, $id): RedirectResponse
{
    $matricula = Matricula::findOrFail($id);
    $matricula->update($request->validated());

    return Redirect::route('matriculapag')
        ->with('success', '');
}   

    public function destroy($id): RedirectResponse
    {
        $matricula = Matricula::find($id);

        if ($matricula) {
            $matricula->estado = false;   // 👈 se asigna manualmente
            $matricula->save();
        }

        return Redirect::route('matriculapag')
            ->with('success', '');
    }

        public function pag()
    {
        $matriculas = \App\Models\Matricula::paginate(10); // o ->all() si no quieres paginación
        return view('matricula.matriculapag', compact('matriculas'));
    }

}



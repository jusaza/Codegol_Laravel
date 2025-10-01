<?php

namespace App\Http\Controllers;

use App\Models\Rendimiento;
use App\Models\Usuario;   // Asegúrate de importar el modelo de Usuario
use App\Models\Matricula; // Asegúrate de importar el modelo de Matricula
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\RendimientoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Barryvdh\DomPDF\Facade\Pdf;

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
    
    // Filtra solo los usuarios con el rol 'Responsable'
    $responsables = Usuario::whereHas('roles', function($query) {
        $query->where('rol_usuario', 'Responsable');  // Asegúrate de que 'rol_usuario' es el campo correcto
    })->get();

    // Obtener todos los usuarios disponibles (o solo los que desees mostrar)
    $usuarios = Usuario::all();  // Puedes ajustar esto si deseas filtrar a usuarios específicos

    // Obtener todas las matrículas disponibles
    $matriculas = Matricula::all();

    // Pasamos los usuarios, responsables y matrículas a la vista
    return view('rendimiento.create', compact('rendimiento', 'usuarios', 'responsables', 'matriculas'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(RendimientoRequest $request): RedirectResponse
    {
        // Crear el rendimiento con los datos validados del formulario
        Rendimiento::create($request->validated());

        // Redirigir a la lista de rendimientos con un mensaje de éxito
        return Redirect::route('rendimientopag')
            ->with('success', 'Rendimiento creado correctamente');
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
        
        // Filtra solo los usuarios con el rol 'Responsable'
        $responsables = Usuario::whereHas('roles', function($query) {
            $query->where('rol_usuario', 'Responsable');  // Asegúrate de que 'rol_usuario' es el campo correcto
        })->get();

        // Obtener todas las matrículas disponibles
        $matriculas = Matricula::all();

        // Pasamos los responsables y las matrículas a la vista
        return view('rendimiento.edit', compact('rendimiento', 'responsables', 'matriculas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RendimientoRequest $request, Rendimiento $rendimiento): RedirectResponse
    {
        // Actualizar el rendimiento con los datos validados del formulario
        $rendimiento->update($request->validated());

        // Redirigir a la lista de rendimientos con un mensaje de éxito
        return Redirect::route('rendimientopag')
            ->with('success', 'Rendimiento actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage (Soft Delete).
     */
    public function destroy($id): RedirectResponse
    {
        $rendimiento = Rendimiento::find($id);

        if ($rendimiento) {
            $rendimiento->estado = false;  // Cambiar el estado del rendimiento a "inactivo"
            $rendimiento->save();  // Guardar los cambios
        }

        return Redirect::route('rendimientopag')
            ->with('success', 'Rendimiento desactivado correctamente');
    }

    /**
     * Generate and download PDF report.
     */
    public function reportePdf(Request $request)
    {
        $busqueda = $request->get('busqueda');

        $rendimientos = \App\Models\Rendimiento::when($busqueda, function ($query, $busqueda) {
                return $query->where('fecha_evaluacion', 'like', "%$busqueda%")
                             ->orWhere('posicion', 'like', "%$busqueda%")
                             ->orWhere('estado', 'like', "%$busqueda%");
            })
            ->orderBy('id_rendimiento', 'asc')
            ->get();

        $pdf = Pdf::loadView('rendimientos.reportes', compact('rendimientos', 'busqueda'))
                  ->setPaper('a4', 'landscape');

        return $pdf->download('reporte_rendimientos.pdf');
    }
}

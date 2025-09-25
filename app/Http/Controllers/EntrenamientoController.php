<?php

namespace App\Http\Controllers;

use App\Models\Entrenamiento;
use App\Models\DetallesUtiliza;
use App\Models\Inventario;
use App\Models\Matricula;
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
        $inventarios = Inventario::all();

        // Solo jugadores con matrícula activa y rol 'Jugador'
        $matriculas = Matricula::where('estado', true)
            ->whereHas('jugador.roles', function($q) {
                $q->where('rol_usuario', 'Jugador');
            })
            ->with('jugador')
            ->get();

        return view('entrenamiento.create', compact('entrenamiento', 'inventarios', 'matriculas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EntrenamientoRequest $request): RedirectResponse
    {
        // Guardar entrenamiento principal
        $entrenamiento = Entrenamiento::create($request->validated());

        // Guardar detalles utiliza (si existen)
        if ($request->has('detalles')) {
            foreach ($request->input('detalles') as $detalle) {
                DetallesUtiliza::create([
                    'cantidad_usada'   => $detalle['cantidad_usada'],
                    'observaciones'    => $detalle['observaciones'] ?? null,
                    'devuelto'         => isset($detalle['devuelto']) ? 1 : 0,
                    'id_entrenamiento' => $entrenamiento->id_entrenamiento,
                    'id_inventario'    => $detalle['id_inventario'],
                ]);
            }
        }

        // Guardar asistencias (si existen)
        if ($request->has('asistencias')) {
            foreach ($request->input('asistencias') as $asiste) {
                \App\Models\DetallesAsiste::create([
                    'tipo_asistencia'   => $asiste['tipo_asistencia'],
                    'justificacion'     => $asiste['justificacion'] ?? null,
                    'observaciones'     => $asiste['observaciones'] ?? null,
                    'id_matricula'      => $asiste['id_matricula'],
                    'id_entrenamiento'  => $entrenamiento->id_entrenamiento,
                ]);
            }
        }

        return Redirect::route('entrenamientos.index')
            ->with('success', 'Entrenamiento creado correctamente.');
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
        $entrenamiento = Entrenamiento::with(['detallesUtilizas', 'detallesAsistes'])->find($id);
        $inventarios = Inventario::all();

        $matriculas = Matricula::where('estado', true)
            ->whereHas('jugador.roles', function($q) {
                $q->where('rol_usuario', 'Jugador');
            })
            ->with('jugador')
            ->get();

        return view('entrenamiento.edit', compact('entrenamiento', 'inventarios', 'matriculas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EntrenamientoRequest $request, Entrenamiento $entrenamiento): RedirectResponse
    {
        $entrenamiento->update($request->validated());

        // Elimina los detalles anteriores
        $entrenamiento->detallesUtilizas()->delete();

        // Guarda los nuevos detalles
        if ($request->has('detalles')) {
            foreach ($request->input('detalles') as $detalle) {
                DetallesUtiliza::create([
                    'cantidad_usada'   => $detalle['cantidad_usada'],
                    'observaciones'    => $detalle['observaciones'] ?? null,
                    'devuelto'         => isset($detalle['devuelto']) ? 1 : 0,
                    'id_entrenamiento' => $entrenamiento->id_entrenamiento,
                    'id_inventario'    => $detalle['id_inventario'],
                ]);
            }
        }

        // Elimina las asistencias anteriores
        $entrenamiento->detallesAsistes()->delete();

        // Guarda las nuevas asistencias
        if ($request->has('asistencias')) {
            foreach ($request->input('asistencias') as $asiste) {
                \App\Models\DetallesAsiste::create([
                    'tipo_asistencia'   => $asiste['tipo_asistencia'],
                    'justificacion'     => $asiste['justificacion'] ?? null,
                    'observaciones'     => $asiste['observaciones'] ?? null,
                    'id_matricula'      => $asiste['id_matricula'],
                    'id_entrenamiento'  => $entrenamiento->id_entrenamiento,
                ]);
            }
        }

        return Redirect::route('entrenamientos.index')
            ->with('success', 'Entrenamiento actualizado correctamente');
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

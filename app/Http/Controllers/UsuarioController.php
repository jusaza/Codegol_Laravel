<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Rol;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\UsuarioRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    
    public function login(Request $request)
{
    $documento = $request->input('num_identificacion');
    $contrasena = $request->input('contrasena');

    // Llamada al procedimiento almacenado
    $resultado = DB::select('CALL acceso(?, ?)', [$documento, $contrasena]);

    if (count($resultado) > 0) {
        $usuario = $resultado[0];
        $rol     = $usuario->rol_usuario;

        // Guardamos datos en sesión
        session([
            'usuario_id' => $usuario->id_usuario,
            'rol_id'     => $usuario->id_rol,
            'rol'        => $rol,
            'nombre'     => $usuario->nombre_completo,
        ]);

        // Redirigir según rol
        switch ($rol) {
            case 'Administrador':
                return redirect()->route('pagina_original')->with('nombre', $usuario->nombre_completo);

            case 'Entrenador':
                return redirect()->route('pagina_original_entrenador')->with('nombre', $usuario->nombre_completo);

            case 'Jugador':
                return redirect()->route('pagina_original_jugador')->with('nombre', $usuario->nombre_completo);

            case 'Responsable':
                return redirect()->route('pagina_original_responsable')->with('nombre', $usuario->nombre_completo);

            default:
                return redirect()->route('pagina_original')->withErrors(['msg' => 'Rol no reconocido.']);
        }
    } else {
        return Redirect::back()->withErrors(['msg' => 'Credenciales inválidas.']);
    }
}

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $usuarios = Usuario::with('roles')->paginate();

        return view('usuario.index', compact('usuarios'))
            ->with('i', ($request->input('page', 1) - 1) * $usuarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $usuario = new Usuario();
        $rols = Rol::all();
        $rolsSeleccionados = [];
        // Obtener usuarios con rol "Responsable"|      
        $responsables = Usuario::whereHas('roles', function($query) {
            $query->where('rol_usuario', 'Responsable');
        })->get();
        return view('usuario.create', compact('usuario', 'rols', 'rolsSeleccionados', 'responsables'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UsuarioRequest $request): RedirectResponse
    {
        $usuario = Usuario::create($request->validated());
        $usuario->roles()->attach($request->input('roles', []));

        return Redirect::route('usuarios.index')
            ->with('success', 'Usuario created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $usuario = Usuario::find($id);

        return view('usuario.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $usuario = Usuario::find($id);
        $rols = Rol::all();
        $rolsSeleccionados = $usuario->roles->pluck('id_rol')->toArray();
        // Obtener usuarios con rol "Responsable"
        $responsables = Usuario::whereHas('roles', function($query) {
            $query->where('rol_usuario', 'Responsable');
        })->get();
        return view('usuario.edit', compact('usuario', 'rols', 'rolsSeleccionados', 'responsables'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UsuarioRequest $request, $id): RedirectResponse
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->validated());

        $usuario->roles()->sync($request->input('roles', []));

        return Redirect::route('usuariopag')
            ->with('success', '');
    }

    public function destroy($id): RedirectResponse
    {
        $usuario = Usuario::find($id);

        if ($usuario) {
            $usuario->estado = false;   
            $usuario->save();
        }

        return Redirect::route('usuariopag')
            ->with('success', '');
    }

    public function pag()
    {
        // ✅ Se agrega with('roles') para traer los roles también en la paginación personalizada
        $usuarios = \App\Models\Usuario::with('roles')->paginate(10); // o ->all() si no quieres paginación
        return view('usuario.usuariopag', compact('usuarios'));
    }

}

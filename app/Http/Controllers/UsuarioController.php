<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Rol;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\UsuarioRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $usuarios = Usuario::paginate();

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
    public function update(UsuarioRequest $request, Usuario $usuario): RedirectResponse
    {
        $usuario->update($request->validated());

        $usuario->roles()->sync($request->input('roles', []));

        return Redirect::route('usuarios.index')
            ->with('success', 'Usuario updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Usuario::find($id)->delete();

        return Redirect::route('usuarios.index')
            ->with('success', 'Usuario deleted successfully');
    }
}

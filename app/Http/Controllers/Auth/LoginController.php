<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('num_identificacion', 'contrasena');

        $user = \App\Models\User::where('num_identificacion', $credentials['num_identificacion'])->first();

        if ($user && Hash::check($credentials['contrasena'], $user->contrasena)) {
            Auth::login($user);
            return redirect()->intended('/index');
        }
        return back()->withErrors
        (['num_identificacion' => 'La credenciales son invalidas']);
    }
    public function logout(Request $request)
    {
        Auth::guard('usuario')->logout();
    }
}

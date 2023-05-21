<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    public function store (Request $request)

    {
        $credentials = $request->validate([
             'email'=> ['required', 'string', 'email'],
             'password'=> ['required', 'string'],

         ]);
         // Recibe las variables encriptadas y las compara con la base de datos, devuelve un booleano
         if ( ! Auth::attempt($credentials, $request->boolean('remember')))
         {
            throw ValidationException::withMessages([
                'email' => __('auth.failed')

            ]);
         }
        $request->session()->regenerate();
        return to_route('challenges.index')->with('status', 'Inicio de sesión exitoso');
    }

    public function destroy (Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->intended()->with('status', 'Sesión finalizada');

    }

}

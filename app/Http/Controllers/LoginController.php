<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials)) {
            session(['user' => $credentials['name']]);
            return redirect()->action([ProductController::class, 'index']);
        } else {
            return back()->withErrors(['invalid' => 'Estas credenciales no coinciden con nuestros registros.']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();

        return redirect()->route('login');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller{
    protected function validateLogin(Request $request){
    $request->validate([
                'email' => 'required|email|in:admin@gmail.com',
                'password' => 'required|in:1234567890',
            ]);

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                // Connexion réussie, rediriger l'utilisateur
                return $this->sendLoginResponse($request);
            }

            // Connexion échouée, rediriger l'utilisateur vers la page de connexion avec une erreur
            throw ValidationException::withMessages([
                'email' => [trans('auth.failed')],
            ]);

             return redirect()->route('users.index')->with('success', 'connexion avec succès.');
}
}

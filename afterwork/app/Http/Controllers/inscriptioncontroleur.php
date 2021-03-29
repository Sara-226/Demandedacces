<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\utilisateurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class inscriptioncontroleur extends Controller
{
    function register(Request $request)
    {
        //dd($request);
        $user = new utilisateurs();

        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->mail = $request->mail;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('connexion');
    }
    function connexion(Request $request)
    {
        //return $request->input();
        // $request->validate([
        //     'email' => 'required|email',
        //     'role' => 'required|role',
        //     'password' => 'required|min:5|max:12'
        // ]);
        //ceci est le code de la connexion des différents utilisateur telle que admin et apprennant//
        $test = Auth::attempt([
            'mail' => request('email'),
            'role' => request('role'),
            'password' => request('password')
        ]);
        if ($test) {
            if ($user = 'admin') {
                return view('inscription');
            } else {
                return 'reserver';
            }
        } else {
            return redirect('connexion');
        }
        //return 'Authentifié';

        // return redirect('inscription');
        //$user = utilisateurs::where('email', '=', $request->mail)->first();
        //if ($user) {
        //    if (Hash::check($request->password, $user->password)) {
        //    } else {
        //       return back()->with('fail', 'mot de passe incorrecte');
        //   }
        //  } else {
        //     return back()->with('fail', 'mail incorrecte');
        //   }
    }
}

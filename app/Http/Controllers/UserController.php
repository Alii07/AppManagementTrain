<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use resources\views\users\index;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function destroy($id)
        {
            $user = User::findOrFail($id);
            $user->delete();
            return redirect()->route('users.index');

            // Rediriger vers une page appropriée ou retourner une réponse JSON selon vos besoins
        }

        public function edit($id)
            {
                $user = User::find($id);
                return view('users.edit', compact('user'));
            }

            public function update(Request $request, $id)
            {
                $user = User::find($id);
                // Mettez à jour les attributs de l'utilisateur avec les données du formulaire
                $user->name = $request->input('name');
                $user->email = $request->input('email');
                // ... autres attributs à mettre à jour

                $user->save();

                return redirect()->route('users.index')->with('success', 'Compte utilisateur mis à jour avec succès.');
            }

            public function register(Request $request)
            {
                // Valider les données du formulaire
                $validatedData = $request->validate([
                    'name' => 'required',
                    'email' => 'required|email|unique:users',
                    'password' => 'required|min:8',
                ]);

                // Créer un nouvel utilisateur
                $user = new User();
                $user->name = $request->input('name');
                $user->email = $request->input('email');
                $user->password = Hash::make($request->input('password'));
                $user->save();



                // Rediriger l'utilisateur vers une page appropriée (par exemple, page de succès)
                return redirect()->route('users.index');
            }



            public function create()
            {
                $user = user::simplePaginate(1);
                return view('pagination', compact('user'));
            }

            public function add(){
                $user = user::all();
                return view('add',compact('user'));
            }

            public function ajouter(Request $request)
                        {

                                        // Récupérer les données du formulaire
                                        $data = $request->all();

                                        // Créer un nouvel utilisateur
                                        $user = new User();
                                        $user->name = $request->input('name');
                                        $user->email = $request->input('email');
                                        $user->password = Hash::make($request->input('password'));
                                        $user->save();

                                        // Rediriger ou afficher un message de succès
                                        return redirect()->route('add')->with('success', 'Utilisateur ajouté avec succès.');


        }
}



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\parcelles;
use Illuminate\Support\Facades\Config;



class ParcelleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parcelle = parcelles::simplePaginate(1);
        return view('parcelle', compact('parcelle'));
    }


    public function create()
    {
        return view('formulaire');
    }

    public function store(Request $request)
    {
         $validatedData = $request->validate([
                            'description' => 'required|unique:parcelles',
                            'superficie' => 'required',
                            'typedeculture' => 'required',

                        ]);

                        // Créer un nouvel utilisateur
                        $parcelle = new parcelles();
                        $parcelle->description = $request->input('description');
                        $parcelle->superficie = $request->input('superficie');
                        $parcelle->typedeculture = $request->input('typedeculture');
                        $parcelle->longitude = $request->input('longitude');
                        $parcelle->latitude = $request->input('latitude');
                        $parcelle->save();

                        return redirect()->route('parcelle');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Rechercher la parcelle correspondante à l'ID
        $parcelle = parcelles::find($id);

        // Vérifier si la parcelle existe
        if ($parcelle) {
            // Supprimer la parcelle
            $parcelle->delete();

            // Rediriger vers une page ou retourner une réponse appropriée
            return redirect()->back()->with('success', 'Parcelle supprimée avec succès.');
        } else {
            // La parcelle n'a pas été trouvée
            return redirect()->back()->with('error', 'Parcelle introuvable.');
        }
    }

    public function edit($id)
    {
        // Récupérer la parcelle correspondant à l'ID
        $parcelle = parcelles::find($id);

        // Vérifier si la parcelle existe
        if (!$parcelle) {
            abort(404); // Gérer le cas où la parcelle n'existe pas
        }

        // Afficher le formulaire d'édition avec les données de la parcelle
        return view('parcelles.edit', compact('parcelle'));
    }

    public function update(Request $request, $id)
    {
        // Valider les données du formulaire de modification
        $request->validate([
            'superficie' => 'required',
            'description' => 'required',
            'typedeculture' => 'required',
        ]);

        // Récupérer la parcelle correspondant à l'ID
        $parcelle = parcelles::find($id);

        // Vérifier si la parcelle existe
        if (!$parcelle) {
            abort(404); // Gérer le cas où la parcelle n'existe pas
        }

        // Mettre à jour les données de la parcelle avec les valeurs du formulaire
        $parcelle->superficie = $request->input('superficie');
        $parcelle->description = $request->input('description');
        $parcelle->typedeculture = $request->input('typedeculture');
        $parcelle->longitude = $request->input('longitude');
        $parcelle->latitude = $request->input('latitude');

        // Autres champs à mettre à jour

        // Enregistrer les modifications dans la base de données
        $parcelle->save();

        // Rediriger vers la page de détails de la parcelle ou une autre page de votre choix
        return redirect()->route('parcelle', ['id' => $parcelle->id]);
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Projet;

use Inertia\Inertia;
use Inertia\Response;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projets = Projet::orderby('nom', 'asc')->get();
        return Inertia::render('Projet/ProjetIndex', compact('projets'));
    }
}
// Pour la partie ci-dessous ça m'affichait en boucle des messages d'erreur que je n'ai malheureusement pas réussi à résoudre du coup je te laisse la partie du dessous en commentaire comme ça tu peux voir ce qui a été fait quand même!

//
//     Show the form for creating a new resource.
//
//     public function create()
//     {
//         $missions = Mission::all(); // Récupérer toutes les missions
//         return Inertia::render('Projet/ProjetCreate', compact('missions'));
//     }

//
//      Store a newly created resource in storage.
//
//     public function store(Request $request)
//     {
//         $request->validate([
//             'nom' => 'required|string|max:255|unique:projets,nom',
//             'missions' => 'array',
//         ]);

//         $projet = Projet::create($request->only('nom'));

//         if ($request->missions) {
//             $projet->missions()->attach($request->missions);
//         }

//         return redirect()->route('projets.index')->with('message', "Le projet a bien été créé.");
//     }

//
//     Display the specified resource.
//
//     public function show(Projet $projet)
//     {
//         return Inertia::render('Projet/ProjetShow', compact('projet'));
//     }

//
//     Show the form for editing the specified resource.
//
//     public function edit(Projet $projet)
//     {
//         $missions = Mission::all(); // Récupérer toutes les missions
//         return Inertia::render('Projet/ProjetEdit', compact('projet', 'missions'));
//     }

//
//     Update the specified resource in storage.
//
//     public function update(Request $request, Projet $projet)
//     {
//         $request->validate([
//             'nom' => 'required|string|max:255|unique:projets,nom,' . $projet->id,
//             'missions' => 'array',
//         ]);

//         $projet->update($request->only('nom'));

//         if ($request->missions) {
//             $projet->missions()->sync($request->missions);
//         } else {
//             $projet->missions()->detach();
//         }

//         return redirect()->route('projets.index')->with('message', "Le projet a bien été mis à jour.");
//     }

//
//     Remove the specified resource from storage.
//
//     public function destroy(Projet $projet)
//     {
//         $projet->delete();
//         return redirect()->route('projets.index')->with('message', "Le projet a bien été supprimé.");
//     }
// }

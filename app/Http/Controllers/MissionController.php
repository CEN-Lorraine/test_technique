<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Mission;

use Inertia\Inertia;
use Inertia\Response;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $missions = Mission::orderby('nom', 'asc')->get();
        return Inertia::render('Mission/MissionIndex', compact('missions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Mission/MissionCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required|string|max:100|unique:missions,nom',
        ]);

        Mission::create($request->all());

        return redirect()->route('missions.index')->with('message', "La mission a bien été créée.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mission = Mission::find($id);

        if($mission){
            return Inertia::render('Mission/MissionShow', compact('mission'));
        }

        return back()->withErrors("La mission n'a pas pu être trouvée.");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mission = Mission::find($id);

        if($mission){
            return Inertia::render('Mission/MissionEdit', compact('mission'));
        }

        return back()->withErrors("Le mission n'a pas pu être trouvée.");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'nom' => 'required|string|max:100|unique:missions,nom,'.$id,
        ]);

        $mission = Mission::find($id);

        if($mission){
            $mission->update($request->all());
            return redirect()->route('missions.index')->with('message', "La mission a bien été modifiée.");
        }

        return back()->withErrors("Une erreur est survenue.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mission = Mission::find($id);

        if($mission){
            $mission->delete();
            return redirect()->route('missions.index')->with('message', "La mission a bien été supprimée.");
        }

        return back()->withErrors("La mission n'a pas pu être trouvée.");
    }
}

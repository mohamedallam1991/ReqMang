<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;
use Illuminate\Support\Facades\Auth;

class ProjetsController extends Controller
{
    public function index()
    {
        $projets = auth()->user()->projets()->get();
        return $projets;
        // there is a need to fix the view to match the projects in a list
        // return view('user.index' , compact('projets'));
    }

    public function nouveauProjet(){
        $projets = Projet::get();
        return view('projets.projet' , compact('projets'));
    }

    public function createProjet(Request $request){
        $projet = new Projet();
        $projet->title = $request['title'];
        $projet->description = $request['description'];
        $projet->user_id = Auth::id();
        $projet->save();

        $notification = array(
            'message' => 'Projet created successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }
}

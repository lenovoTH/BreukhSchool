<?php

namespace App\Http\Controllers;

use App\Http\Resources\NiveauResource;
use App\Models\Niveau;
use Illuminate\Http\Request;

class NiveauController extends Controller
{
    public function index(Request $request)
    {
        $join = $request->query('join');
        // dd($join);
        if ($join == null) {
            $niveaux = Niveau::all();
        } else {
            $niveaux = Niveau::with($join)->get();
        }
        return response()->json($niveaux, 200);
    }
}



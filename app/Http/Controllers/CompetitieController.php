<?php

namespace App\Http\Controllers;

use App\Models\Wedstrijd;
use Illuminate\Http\Request;

class CompetitieController extends Controller
{
    public function index(Request $request)
    {
        return view('competitie', [
            'spelers' => ScorebordController::create(
                $request->input('competitie') ?? Wedstrijd::latest('Competitie')
                ->first()
                ->Competitie
            ),
            'competities' => Wedstrijd::distinct()
                ->orderBy('competitie', 'desc')
                ->pluck('competitie')
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Wedstrijd;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('welcome', [
            'wedstrijden' => Wedstrijd::orderBy('Datum', 'desc')->paginate(16),
            'spelers' => ScorebordController::create(Wedstrijd::latest('Competitie')
                ->first()
                ->Competitie
            ),
        ]);
    }
}

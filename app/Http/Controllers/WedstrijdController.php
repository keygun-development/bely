<?php

namespace App\Http\Controllers;

use App\Models\Wedstrijd;
use Illuminate\Http\Request;

class WedstrijdController extends Controller
{
    public function index(Request $request)
    {
        $wedstrijden = Wedstrijd::orderBy('Datum', 'desc');

        if ($request->input('competitie'))
        {
            $wedstrijden->where('Competitie', $request->input('competitie'));
        }

        $wedstrijden = $wedstrijden->paginate(16);

        $wedstrijden->appends($request->except('page'));

        return view('wedstrijden', [
            'wedstrijden' => $wedstrijden,
            'competities' => Wedstrijd::distinct()
                ->orderBy('competitie', 'desc')
                ->pluck('competitie')
        ]);
    }
}

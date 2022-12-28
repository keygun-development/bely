<?php

namespace App\Http\Controllers;

use App\Models\Lid;
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

    public function edit(Request $request)
    {
        return view('wedstrijddetail', [
            'wedstrijd' => Wedstrijd::where('id', $request->id)
                ->first(),
            'users' => Lid::all()
        ]);
    }

    public function update(Request $request)
    {
        $wedstrijd = Wedstrijd::where('id', $request->id)->first();

        $wedstrijd->Datum = $request->datum;
        $wedstrijd->Competitie = $request->competitie;
        $wedstrijd->SpelerWij1 = $request->speler1;
        $wedstrijd->SpelerWij2 = $request->speler2;
        $wedstrijd->SpelerWij3 = $request->speler3;
        $wedstrijd->SpelerZij1 = $request->speler4;
        $wedstrijd->SpelerZij2 = $request->speler5;
        $wedstrijd->SpelerZij3 = $request->speler6;
        $wedstrijd->ScoreWij = $request->scorewij;
        $wedstrijd->ScoreZij = $request->scorezij;

        $wedstrijd->update();

        return redirect()->back()->with('success', 'Wedstrijd succesvol aangepast!');
    }

    public function delete(Request $request)
    {
        $wedstrijd = Wedstrijd::where('id', $request->id)->first();
        $wedstrijd->delete();
        return redirect()->back()->with('success', 'Wedstrijd succesvol verwijderd!');
    }
}

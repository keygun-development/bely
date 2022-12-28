<?php

namespace App\Http\Controllers;

use App\Models\Lid;
use App\Models\Wedstrijd;
use Illuminate\Http\Request;

class LidController extends Controller
{
    public function index()
    {
        return view('leden', [
            'leden' => Lid::all()
        ]);
    }

    public function delete(Request $request)
    {
        $lid = Lid::where('id', $request->id)->first();
        Wedstrijd::where('SpelerWij1', $request->id)->update(['SpelerWij1' => 0]);
        Wedstrijd::where('SpelerWij2', $request->id)->update(['SpelerWij2' => 0]);
        Wedstrijd::where('SpelerWij3', $request->id)->update(['SpelerWij3' => 0]);
        Wedstrijd::where('SpelerZij1', $request->id)->update(['SpelerZij1' => 0]);
        Wedstrijd::where('SpelerZij2', $request->id)->update(['SpelerZij2' => 0]);
        Wedstrijd::where('SpelerZij3', $request->id)->update(['SpelerZij3' => 0]);
        $lid->delete();
        return redirect()->back()->with('success', 'Lid succesvol verwijderd!');
    }

    public function edit(Request $request)
    {
        return view('liddetail', [
            'lid' => Lid::where('id', $request->id)
                ->first()
        ]);
    }

    public function update(Request $request)
    {
        $lid = Lid::where('id', $request->id)->first();

        $lid->Voornaam = $request->voornaam;
        $lid->Achternaam = $request->achternaam;
        $lid->Gebdatum = $request->datum;
        $lid->Sterkte = $request->sterkte;
        $lid->Verkortenaam = $request->verkortenaam;

        $lid->update();

        return redirect()->back()->with('success', 'Lid succesvol aangepast!');
    }
}

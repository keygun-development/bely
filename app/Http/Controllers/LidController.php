<?php

namespace App\Http\Controllers;

use App\Models\Lid;
use Illuminate\Http\Request;

class LidController extends Controller
{
    public function index()
    {
        return view('leden', [
            'leden' => Lid::all()
        ]);
    }
}

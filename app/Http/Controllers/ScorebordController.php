<?php

namespace App\Http\Controllers;

use App\Models\Lid;
use App\Models\Speler;
use App\Models\Wedstrijd;

class ScorebordController extends Controller
{
    public static function create($year = 0)
    {
        $players = Lid::all();

        $spelers = [];

        foreach ($players as $player) {
            //Initiate new Speler model foreach player
            $speler = new Speler();
            $speler->userid = $player->id;
            $speler->name = $player->Verkortenaam;
            $speler->gespeeld = 0;
            $speler->win = 0;
            $speler->verlies = 0;
            $speler->scorevoor = 0;
            $speler->scoretegen = 0;
            $speler->doelsaldo = 0;
            $speler->winstpercentage = 0;

            $games = Wedstrijd::where('Competitie', $year)
                ->where(function ($query) use ($player) {
                    $query->where('SpelerWij1', $player->id)
                        ->orWhere('SpelerWij2', $player->id)
                        ->orWhere('SpelerWij3', $player->id)
                        ->orWhere('SpelerZij1', $player->id)
                        ->orWhere('SpelerZij2', $player->id)
                        ->orWhere('SpelerZij3', $player->id);
                })
                ->get();

            foreach ($games as $game) {
                $speler->gespeeld++;

                if (($game->SpelerWij1 == $player->id ||
                        $game->SpelerWij2 == $player->id ||
                        $game->SpelerWij3 == $player->id) &&
                    $game->ScoreWij > $game->ScoreZij) {
                    $speler->win++;
                    $speler->scorevoor += $game->ScoreWij;
                    $speler->scoretegen += $game->ScoreZij;
                } elseif (($game->SpelerZij1 == $player->id ||
                        $game->SpelerZij2 == $player->id ||
                        $game->SpelerZij3 == $player->id) &&
                    $game->ScoreZij > $game->ScoreWij) {
                    $speler->win++;
                    $speler->scorevoor += $game->ScoreZij;
                    $speler->scoretegen += $game->ScoreWij;
                } else {
                    $speler->verlies++;
                    if ($game->SpelerZij1 == $player->id ||
                        $game->SpelerZij2 == $player->id ||
                        $game->SpelerZij3 == $player->id) {
                        $speler->scorevoor += $game->ScoreZij;
                        $speler->scoretegen += $game->ScoreWij;
                    } else {
                        $speler->scorevoor += $game->ScoreWij;
                        $speler->scoretegen += $game->ScoreZij;
                    }
                }
            }

            $speler->doelsaldo = $speler->scorevoor - $speler->scoretegen;
            if ($speler->gespeeld > 0) {
                $speler->winstpercentage = number_format($speler->win / $speler->gespeeld * 100, 1);
            }
            $spelers[] = $speler;
        }

        usort($spelers, array('App\Models\Speler', 'cmp'));
        return $spelers;
    }
}

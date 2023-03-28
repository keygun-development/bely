<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speler extends Model
{
    use HasFactory;

    public int $userid;
    public string $name;
    public int $gespeeld;
    public int $win;
    public int $verlies;
    public int $scorevoor;
    public int $scoretegen;
    public int $doelsaldo;
    public float $winstpercentage;

    public static function cmp($a, $b): ?int
    {
        if (round($a->winstpercentage, 10) != round($b->winstpercentage, 10)) {
            return (round($a->winstpercentage, 10) < round($b->winstpercentage, 10)) ? 1 : -1;
        } else if ($a->win != $b->win) {
            return ($a->win < $b->win) ? 1 : -1;
        } else if ($a->gespeeld != $b->gespeeld) {
            return ($a->gespeeld > $b->gespeeld) ? 1 : -1;
        } else {
            return ($a->scorevoor < $b->scorevoor) ? 1 : -1;
        }
    }
}

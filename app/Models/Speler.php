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
    public int $winstpercentage;

    public static function cmp($a, $b): ?int
    {
        if ($b->gespeeld > 0 && $a->gespeeld > 0) {
            if(round($b->win / $b->gespeeld, 5) === round($a->win / $a->gespeeld, 5)) {
                if ($b->win === $a->win) {
                    return strcmp($b->scorevoor, $a->scorevoor);
                }
                return strcmp($b->win, $a->win);
            }
            return strcmp(round($b->win / $b->gespeeld, 5), round($a->win / $a->gespeeld, 5));
        } else {
            if ($b->gespeeld > 0) {
                return strcmp($b->gespeeld, $a->gespeeld);
            }
        }
        return null;
    }
}

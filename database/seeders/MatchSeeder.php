<?php

namespace Database\Seeders;

use App\Models\Wedstrijd;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wedstrijd::factory()->count(100)->create();
    }
}

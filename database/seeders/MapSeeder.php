<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Build default map array
        $mapArray = array();
        for($row = 0; $row <= config('game.board_height'); $row++) {
            for($column = 0; $column <= config('game.board_width'); $column++) {
                $mapArray[$row][] = config('game.terrain_normal');
            }
        }

        DB::table('maps')->insert([
            'map' => json_encode($mapArray),
            'created_at' => now()
        ]);
    }
}

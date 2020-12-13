<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

define('TERRAIN_NORMAL',        0);
define('TERRAIN_WATER',         1);
define('TERRAIN_FOREST',        2);
define('TERRAIN_MOUNTAIN',      3);
define('TERRAIN_DESERT',        4);
define('TERRAIN_MAGIC',         5);
define('TERRAIN_BIGMOUNTAIN',   6);
define('TERRAIN_VOLCANO',       7);


class Map extends Model
{
    use HasFactory;

    private $terrainClasses = array(0 => 'normal',
                                    1 => 'water',
                                    2 => 'forest',
                                    3 => 'mountain',
                                    4 => 'desert',
                                    5 => 'magic',
                                    6 => 'bigmountain',
                                    7 => 'volcano');

    /** Return the HTML for the map */
    public function render() {
        $mapArray = json_decode($this->map);
        $mapHTML = '';

        for($row = 0; $row < sizeof($mapArray); $row++) {
            $mapHTML .= '<div class="row">';

            for($i = 0; $i < sizeof($mapArray[$row]); $i++) {
                $mapHTML .= '<div class="node ' . $this->terrainClasses[$mapArray[$row][$i]] . '" data-x="' . $i . '" data-y="' . $row . '" data-type="' . $mapArray[$row][$i] . '"></div>';
            }

            $mapHTML .= '</div>';
        }

        return $mapHTML;
    }

    protected function getTerrainClass(int $terrain) {

    }
}

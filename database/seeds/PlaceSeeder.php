<?php

use Illuminate\Database\Seeder;
use App\Models\Place;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file  = file_get_contents(__DIR__ . '/Json/posko-pengungsi.json');
        $json  = json_decode($file, true);

        $place = new Place();
        $place->addBulkPlace($json, 1, 1, 'Asia/Jakarta');
    }
}

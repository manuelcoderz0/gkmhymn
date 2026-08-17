<?php

namespace Database\Seeders;

use App\Models\Hymn;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HymnSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $hymns  = json_decode(file_get_contents(resource_path('hymns.json')), true);

        foreach ($hymns as $item) {
            $hymn = new Hymn();

            $hymn->id      = $item['id'];
            $hymn->title   = $item['title'];
            $hymn->details = $item['details'];
            $hymn->fav     = $item['fav'];
            $hymn->sav     = $item['sav'];
            $hymn->spe     = $item['spe'];

            $hymn->save();
        }
    }
}

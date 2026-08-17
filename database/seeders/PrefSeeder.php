<?php

namespace Database\Seeders;

use App\Models\Pref;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrefSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $prefs = [
            [
                'key' => 'font',
                'value' => '16',
            ],
            [
                'key' => 'theme',
                'value' => 'light',
            ],
        ];

        foreach ($prefs as $pref) {
            $preference = new Pref();

            $preference->key   = $pref['key'];
            $preference->value = $pref['value'];

            $preference->save();
        }
    }
}

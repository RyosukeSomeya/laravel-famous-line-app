<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlamdunkCharactersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $characters = [
            ['name' => '桜木花道'],
            ['name' => '赤木剛憲'],
            ['name' => '三井寿'],
            ['name' => '安西光義'],
            ['name' => '仙道彰'],
        ];

        foreach ($characters as $character) {
            DB::table('slamdunk_characters')->insert($character);
        }
    }
}

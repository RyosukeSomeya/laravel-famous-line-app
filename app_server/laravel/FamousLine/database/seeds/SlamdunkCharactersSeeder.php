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
            ['title_id' => 1, 'character_name' => '桜木花道'],
            ['title_id' => 1, 'character_name' => '赤木剛憲'],
            ['title_id' => 1, 'character_name' => '三井寿'],
            ['title_id' => 1, 'character_name' => '安西光義'],
            ['title_id' => 1, 'character_name' => '仙道彰'],
        ];

        foreach ($characters as $character) {
            DB::table('slamdunk_characters')->insert($character);
        }
    }
}

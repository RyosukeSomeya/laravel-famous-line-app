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
            ['chara_id' => 1, 'name' => '桜木花道'],
            ['chara_id' => 2, 'name' => '赤木剛憲'],
            ['chara_id' => 3, 'name' => '三井寿'],
            ['chara_id' => 4, 'name' => '安西光義'],
            ['chara_id' => 5, 'name' => '仙道彰'],
        ];

        foreach ($characters as $character) {
            DB::table('slamdunk_characters')->insert($character);
        }
    }
}

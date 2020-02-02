<?php

use Illuminate\Database\Seeder;

class GundamCharactersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $characters = [
            ['title_id' => 3, 'character_id' => 1, 'character_name' => 'アムロ・レイ'],
            ['title_id' => 3, 'character_id' => 2, 'character_name' => 'シャア・アズナブル'],
            ['title_id' => 3, 'character_id' => 3, 'character_name' => 'ギレン・ザビ'],
            ['title_id' => 3, 'character_id' => 4, 'character_name' => 'ブライト・ノア'],
            ['title_id' => 3, 'character_id' => 5, 'character_name' => 'ランバ・ラル'],
            ['title_id' => 3, 'character_id' => 6, 'character_name' => 'マ・クベ'],
        ];

        foreach ($characters as $character) {
            DB::table('gundam_characters')->insert($character);
        }
    }
}

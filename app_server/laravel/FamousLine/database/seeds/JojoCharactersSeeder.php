<?php

use Illuminate\Database\Seeder;

class JojoCharactersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            ['title_id' => 2, 'character_id' => 1, 'character_name' => 'ジョナサン・ジョースター'],
            ['title_id' => 2, 'character_id' => 2, 'character_name' => '空条承太郎'],
            ['title_id' => 2, 'character_id' => 3, 'character_name' => '花京院典明'],
            ['title_id' => 2, 'character_id' => 4, 'character_name' => 'Dio'],
            ['title_id' => 2, 'character_id' => 5, 'character_name' => 'ブローノ・ブチャラティ'],
            ['title_id' => 2, 'character_id' => 6, 'character_name' => 'ナレーション/効果音'],
        ];

        foreach ($params as $param) {
            DB::table('jojo_characters')->insert($param);
        }
    }
}

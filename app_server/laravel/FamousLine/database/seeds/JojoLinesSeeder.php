<?php

use Illuminate\Database\Seeder;

class JojoLinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            ['title_id' => 2, 'jojo_character_id' => 1, 'famousline' => 'なにするだーッ！'],
            ['title_id' => 2, 'jojo_character_id' => 2, 'famousline' => 'てめえはオレを怒らせた。'],
            ['title_id' => 2, 'jojo_character_id' => 3, 'famousline' => 'レロレロレロレロ'],
            ['title_id' => 2, 'jojo_character_id' => 4, 'famousline' => 'ロードローラーだッ!!!'],
            ['title_id' => 2, 'jojo_character_id' => 5, 'famousline' => 'この味は!……嘘をついている「味」だぜ……'],
            ['title_id' => 2, 'jojo_character_id' => 6, 'famousline' => '意外ッ!それは髪の毛ッ!'],
        ];

        foreach ($params as $param) {
            DB::table('jojo_lines')->insert($param);
        }
    }
}

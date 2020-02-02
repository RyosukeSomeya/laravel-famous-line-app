<?php

use Illuminate\Database\Seeder;

class GundamLinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            ['title_id' => 3, 'gundam_character_id' => 1, 'famousline' => '親父が夢中になるわけだ！'],
            ['title_id' => 3, 'gundam_character_id' => 2, 'famousline' => 'デニムに新兵が抑えられんとはな。'],
            ['title_id' => 3, 'gundam_character_id' => 3, 'famousline' => '老いたな、父上。'],
            ['title_id' => 3, 'gundam_character_id' => 4, 'famousline' => '殴ってなぜ悪いか！'],
            ['title_id' => 3, 'gundam_character_id' => 5, 'famousline' => '見ておくがいい、戦いに敗れるとは、こういうことだ！'],
            ['title_id' => 3, 'gundam_character_id' => 6, 'famousline' => '北宋だな'],
        ];

        foreach ($params as $param) {
            DB::table('gundam_lines')->insert($param);
        }
    }
}

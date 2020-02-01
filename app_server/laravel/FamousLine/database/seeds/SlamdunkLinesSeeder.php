<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlamdunkLinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            ['title_id' => 1, 'slamdunk_character_id' => 1, 'famousline' => 'ヤマオーはオレが倒す!!'],
            ['title_id' => 1, 'slamdunk_character_id' => 2, 'famousline' => 'いいからテーピングだ!!'],
            ['title_id' => 1, 'slamdunk_character_id' => 3, 'famousline' => 'なぜオレはあんなムダな時間を...'],
            ['title_id' => 1, 'slamdunk_character_id' => 4, 'famousline' => 'シュート2万本です'],
            ['title_id' => 1, 'slamdunk_character_id' => 5, 'famousline' => 'まだあわてるような時間じゃない'],
        ];

        foreach ($params as $param) {
            DB::table('slamdunk_lines')->insert($param);
        }
    }
}

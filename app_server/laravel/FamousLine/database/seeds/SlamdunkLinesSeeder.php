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
            ['famousline' => 'ヤマオーはオレが倒す!!', 'slamdunk_character_id'  => 1],
            ['famousline' => 'いいからテーピングだ!!', 'slamdunk_character_id'  => 2],
            ['famousline' => 'なぜオレはあんなムダな時間を...', 'slamdunk_character_id'  => 3],
            ['famousline' => 'シュート2万本です', 'slamdunk_character_id'  => 4],
            ['famousline' => 'まだあわてるような時間じゃない', 'slamdunk_character_id'  => 5],
        ];

        foreach ($params as $param) {
            DB::table('slamdunk_lines')->insert($param);
        }
    }
}

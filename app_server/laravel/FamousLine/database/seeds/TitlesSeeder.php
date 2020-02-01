<?php

use Illuminate\Database\Seeder;

class TitlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            ['title' => 'スラムダンク'],
            ['title' => 'ジョジョの奇妙な冒険'],
            ['title' => '機動戦士ガンダム'],
        ];

        foreach ($params as $param) {
            DB::table('titles')->insert($param);
        }
    }
}

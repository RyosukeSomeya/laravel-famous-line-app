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
            ['title' => 'スラムダンク', 'path' => 'slamdunk'],
            ['title' => 'ジョジョの奇妙な冒険', 'path' => 'jojo'],
            ['title' => '機動戦士ガンダム', 'path' => 'gundam'],
        ];

        foreach ($params as $param) {
            DB::table('titles')->insert($param);
        }
    }
}

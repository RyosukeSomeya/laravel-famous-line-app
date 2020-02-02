<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(SlamdunkCharactersSeeder::class);
        $this->call(SlamdunkLinesSeeder::class);
        $this->call(GundamCharactersSeeder::class);
        $this->call(GundamLinesSeeder::class);
        $this->call(JojoCharactersSeeder::class);
        $this->call(JojoLinesSeeder::class);
        $this->call(TitlesSeeder::class);
    }
}

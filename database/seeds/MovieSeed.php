<?php

use Illuminate\Database\Seeder;

use App\Movie;

class MovieSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Movie::class, 50) -> create();
    }
}

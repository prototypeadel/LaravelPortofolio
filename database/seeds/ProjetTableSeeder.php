<?php

use Illuminate\Database\Seeder;

class ProjetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Projet::class, 10)-> create();
    }
}

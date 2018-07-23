<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**@author Lupita Llamas
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountriesTableSeeder::class);
    }
}

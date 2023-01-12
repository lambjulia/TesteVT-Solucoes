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
         $this->call(OperadoraSeeder::class);
         $this->call(FuncionarioSeeder::class);
         $this->call(CartaoSeeder::class);
    }
}

<?php

use Illuminate\Database\Seeder;

class OperadoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('operadoras')->insert(
            [
                [
                    'id'=> '1',
                    'cnpj'=> '04.740.876/0001-25',
                    'nome'=> 'Alelo',
                ],
                [
                    'id'=> '2',
                    'cnpj'=> '05.930.925/0001-55',
                    'nome'=> 'V R Refeicões',
                ],


            ]
        );
    }
}

<?php

use Illuminate\Database\Seeder;

class CartaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cartoes')->insert(
            [
                [
                    'id'=> '1',
                    'numero'=> '5402 7639 1165 5872',
                    'saldo'=> '500',
                    'operadora_id'=> '2',
                    'funcionario_id'=> '1',
                ],
                [
                    'id'=> '2',
                    'numero'=> '4716 9122 7473 2356',
                    'saldo'=> '350',
                    'operadora_id'=> '1',
                    'funcionario_id'=> '1',
                ],


            ]
        );
    }
}

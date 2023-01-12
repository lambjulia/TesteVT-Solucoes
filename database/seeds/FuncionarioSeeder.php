<?php

use Illuminate\Database\Seeder;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('funcionarios')->insert(
            [
                [
                    'id'=> '1',
                    'nome'=> 'Zélia Luz Sandinha',
                    'cpf'=> '64188116820',
                    'data_de_nascimento'=> '1970/06/21',
                    'telefone'=> '(43) 97425-7257',
                    'email'=> 'zelia@hotmail.com',
                ],
            ]
        );
    }
}

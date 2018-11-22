<?php

use Illuminate\Database\Seeder;

class CargosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cargos')->insert([
            ['nome'=>'Mensageiro'],
            ['nome'=>'Diretor'],
            ['nome'=>'Secretário']
        ]);
    }
}

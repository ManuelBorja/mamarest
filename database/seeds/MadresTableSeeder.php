<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Madre;

class MadresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('madres')->insert([
            'dni' => mt_rand(09000000, 10000000),
            'nombres' => str_random(10),
            'apellidos' => str_random(10),
            'celular' => mt_rand(900000000, 999999999),
            'celular_acompanante' => mt_rand(900000000, 999999999),
            'fecha_parto' => '2016-01-01 00:00:00',
            'historia' => str_random(10),
            'historia_familiar' => str_random(10),
            'bienvenida' => '1',
            'user_id' => '1',
        ]); 
        DB::table('madres')->insert([
            'dni' => mt_rand(09000000, 10000000),
            'nombres' => str_random(10),
            'apellidos' => str_random(10),
            'celular' => mt_rand(900000000, 999999999),
            'celular_acompanante' => mt_rand(900000000, 999999999),
            'fecha_parto' => '2016-01-01 00:00:00',
            'historia' => str_random(10),
            'historia_familiar' => str_random(10),
            'bienvenida' => '1',
            'user_id' => '1',
        ]); 
        DB::table('madres')->insert([
            'dni' => mt_rand(09000000, 10000000),
            'nombres' => str_random(10),
            'apellidos' => str_random(10),
            'celular' => mt_rand(900000000, 999999999),
            'celular_acompanante' => mt_rand(900000000, 999999999),
            'fecha_parto' => '2016-01-01 00:00:00',
            'historia' => str_random(10),
            'historia_familiar' => str_random(10),
            'bienvenida' => '1',
            'user_id' => '1',
        ]);         


    }
}

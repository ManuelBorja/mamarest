<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Manuel',
            'apellido' => 'Borja',
            'servicio' => 'Enfermería',
            'api_token' => str_random(60),
            'email' => 'mborja@progob.org.pe',
            'password' => bcrypt('carecuy82'),
        ]);

        DB::table('users')->insert([
            'name' => str_random(10),
            'apellido' => str_random(10),
            'servicio' => str_random(10),
            'api_token' => str_random(60),
            'email' => str_random(10).'@progob.org.pe',
            'password' => bcrypt('secret'),
        ]);        
    }
}

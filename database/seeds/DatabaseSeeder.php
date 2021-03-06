<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Status;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        User::create([
            'name' => 'Fabián Montero',
            'email' => 'mntr_rdrgz@hotmail.com',
            'password' => bcrypt('123456')
        ]);
        Status::create([
            'status' => 'En Espera',
            'color' => '#d9534f'
        ]);
        Status::create([
            'status' => 'Trabajando',
            'color' => '#5cb85c'
        ]);
        Status::create([
            'status' => 'Finalizado',
            'color' => '#ccc'
        ]);
    }
}

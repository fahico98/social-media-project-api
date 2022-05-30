<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            [
                // "id" => 1,
                "name" => "Fabián Cárcamo Cárcamo",
                "email" => "fahico98@gmail.com",
                "username" => "fahico98",
                "password" => Hash::make("12345678"),
                "role_id" => 2
            ],
            [
                // "id" => 2,
                "name" => "Jand David Prada Vasquez",
                "email" => "juanpunish23@hotmail.com",
                "username" => "juanp23",
                "password" => Hash::make("12345678"),
                "role_id" => 1
            ],
            [
                // "id" => 3,
                "name" => "Pablo Enrique Salas Toro",
                "email" => "ddconstantine@gmail.com",
                "username" => "enriquesalas",
                "password" => Hash::make("12345678"),
                "role_id" => 1
            ],
            [
                // "id" => 4,
                "name" => "Henry Torres Preciado",
                "email" => "torres1992@gmail.com",
                "username" => "torrespre92",
                "password" => Hash::make("12345678"),
                "role_id" => 1
            ]
        ]);
    }
}

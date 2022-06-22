<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            // "id" => 1,
            "name" => "Fahibram Cárcamo Cárcamo",
            "email" => "fahico98@gmail.com",
            "username" => "fahico98",
            "password" => Hash::make("12345678"),
            "role_id" => 2,
            "biography" => "Aut est et vel ut. Consequatur numquam repellat reiciendis nulla laboriosam dolorum. Voluptate architecto ea asperiores et velit voluptas. Distinctio consectetur et quod repellendus et ipsum et."
        ]);

        factory(User::class, 13)->state("male")->create();
        factory(User::class, 13)->state("female")->create();

        /*
        DB::table("users")->insert([

            [
                // "id" => 1,
                "name" => "Fahibram Cárcamo Cárcamo",
                "email" => "fahico98@gmail.com",
                "username" => "fahico98",
                "password" => Hash::make("12345678"),
                "role_id" => 2,
                "biography"
            ],

            // Male users...

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
            ],
            [
                // "id" => 5,
                "name" => "Serafín Yeray Barrientos",
                "email" => "seraf766@gmail.com",
                "username" => "serafbarri766",
                "password" => Hash::make("12345678"),
                "role_id" => 1
            ],
            [
                // "id" => 6,
                "name" => "Abel Noé Escalante Ospino",
                "email" => "thenotorius@outlook.com",
                "username" => "abel99",
                "password" => Hash::make("12345678"),
                "role_id" => 1
            ],
            [
                // "id" => 7,
                "name" => "Estanislao Uriarte Alcázar",
                "email" => "estanisurial32@red5g.com.co",
                "username" => "estanislaouriarte",
                "password" => Hash::make("12345678"),
                "role_id" => 1
            ],
            [
                // "id" => 8,
                "name" => "Pavel Serafín Góngora Magallón",
                "email" => "rock332@yahoo.com",
                "username" => "pavel_rocky_887",
                "password" => Hash::make("12345678"),
                "role_id" => 1
            ],
            [
                // "id" => 9,
                "name" => "Marco Barrera De la Cuesta",
                "email" => "reactjs@hotmail.com",
                "username" => "marcobarrera43",
                "password" => Hash::make("12345678"),
                "role_id" => 1
            ],
            [
                // "id" => 10,
                "name" => "Gaspar Elias Fábregas Hierro",
                "email" => "gaspar_fabregas@gmail.com",
                "username" => "realdataloop876",
                "password" => Hash::make("12345678"),
                "role_id" => 1
            ],
            [
                // "id" => 11,
                "name" => "Pascual Hernando Iglesias Lastreto",
                "email" => "pascual009@yahoo.com",
                "username" => "pascual_hil009",
                "password" => Hash::make("12345678"),
                "role_id" => 1
            ],
            [
                // "id" => 12,
                "name" => "Logan Blake Kane Henderson",
                "email" => "hotchocolate@gmail.com",
                "username" => "loganbchocolate115",
                "password" => Hash::make("12345678"),
                "role_id" => 1
            ],
            [
                // "id" => 13,
                "name" => "Luke Danton Collins",
                "email" => "wheelcollins35@gmail.com",
                "username" => "lukedantoncollins",
                "password" => Hash::make("12345678"),
                "role_id" => 1
            ],
            [
                // "id" => 14,
                "name" => "Ziro Enrique Guerra Diaz",
                "email" => "zirozero877@hotmail.com",
                "username" => "ziro_zero",
                "password" => Hash::make("12345678"),
                "role_id" => 1
            ],

            // Female users...

            [
                // "id" => 15,
                "name" => "Ashley Scott Taylor",
                "email" => "ashleytaylor12@yahoo.com",
                "username" => "ashleystaylor",
                "password" => Hash::make("12345678"),
                "role_id" => 1
            ],
            [
                // "id" => 16,
                "name" => "Angela María Hoyos Parra",
                "email" => "womanblue643@gmail.com",
                "username" => "womanbluehoyos",
                "password" => Hash::make("12345678"),
                "role_id" => 1
            ],
            [
                // "id" => 17,
                "name" => "Brittany McManus Moore",
                "email" => "brittanymcmanusm@gmail.com",
                "username" => "brittanymcmanusm",
                "password" => Hash::make("12345678"),
                "role_id" => 1
            ],
            [
                // "id" => 18,
                "name" => "Angie Daniela Barragan Toro",
                "email" => "angie_d_barragan@hotmail.com",
                "username" => "angie_dbt_87",
                "password" => Hash::make("12345678"),
                "role_id" => 1
            ],
            [
                // "id" => 19,
                "name" => "Alex Jade Greenwood Lacroix",
                "email" => "lacroixalexx@vw.com.co",
                "username" => "alexjadegreenwood",
                "password" => Hash::make("12345678"),
                "role_id" => 1
            ],
            [
                // "id" => 20,
                "name" => "Desirée Marrón Carmona",
                "email" => "desimarronc@gmail.com",
                "username" => "desireemarron98",
                "password" => Hash::make("12345678"),
                "role_id" => 1
            ],
            [
                // "id" => 21,
                "name" => "Ingrid Estefania Beltran Casas",
                "email" => "ingridestefa243@hotmail.com",
                "username" => "ingridestefaniab11",
                "password" => Hash::make("12345678"),
                "role_id" => 1
            ],
            [
                // "id" => 22,
                "name" => "Liliana Prada Equivel",
                "email" => "liliprada23@hotmail.com",
                "username" => "lilianaprada23",
                "password" => Hash::make("12345678"),
                "role_id" => 1
            ],
            [
                // "id" => 23,
                "name" => "Emma Stokes Williamson",
                "email" => "queenemma117@company.com.uk",
                "username" => "queenemma_uk",
                "password" => Hash::make("12345678"),
                "role_id" => 1
            ],
            [
                // "id" => 24,
                "name" => "Keira Jhonson White",
                "email" => "keirajw_621@google.com.us",
                "username" => "shecat",
                "password" => Hash::make("12345678"),
                "role_id" => 1
            ],
            [
                // "id" => 25,
                "name" => "Rachel Bright Parris",
                "email" => "hypergirl@outlook.com",
                "username" => "hypergirl12",
                "password" => Hash::make("12345678"),
                "role_id" => 1
            ],

            [
                // "id" => 26,
                "name" => "Carly Rooney Telford",
                "email" => "carly_the_cringe@gmail.com",
                "username" => "carlyrooney49",
                "password" => Hash::make("12345678"),
                "role_id" => 1
            ],
        ]);
        */
    }
}

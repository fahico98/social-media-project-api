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

        factory(User::class, 12)->state("male")->create();
        factory(User::class, 12)->state("female")->create();
    }
}

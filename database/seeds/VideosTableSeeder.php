<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("images")->insert([
            [
                "image_type" => "user profile picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 2,
                "url" => asset("storage/images/users/profile-pictures") . "/alexander-hipp-iEEBWgY_6lA-unsplash.jpg",
                "file_name" => "alexander-hipp-iEEBWgY_6lA-unsplash.jpg"
            ],
        ]);
    }
}

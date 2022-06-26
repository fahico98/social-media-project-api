<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesTableSeeder extends Seeder
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
            [
                "image_type" => "user cover picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 2,
                "url" => asset("storage/images/users/cover-images") . "/delfina-iacub-zsgJdHDP4IE-unsplash.jpg",
                "file_name" => "delfina-iacub-zsgJdHDP4IE-unsplash.jpg"
            ],
            [
                "image_type" => "user profile picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 3,
                "url" => asset("storage/images/users/profile-pictures") . "/alex-suprun-ZHvM3XIOHoE-unsplash.jpg",
                "file_name" => "alex-suprun-ZHvM3XIOHoE-unsplash.jpg"
            ],
            [
                "image_type" => "user cover picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 3,
                "url" => asset("storage/images/users/cover-images") . "/derek-thomson-TWoL-QCZubY-unsplash.jpg",
                "file_name" => "derek-thomson-TWoL-QCZubY-unsplash.jpg"
            ],
            [
                "image_type" => "user profile picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 4,
                "url" => asset("storage/images/users/profile-pictures") . "/braxton-apana-a7UqwdLWOZQ-unsplash.jpg",
                "file_name" => "braxton-apana-a7UqwdLWOZQ-unsplash.jpg"
            ],
            [
                "image_type" => "user cover picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 4,
                "url" => asset("storage/images/users/cover-images") . "/ethan-robertson-SYx3UCHZJlo-unsplash.jpg",
                "file_name" => "ethan-robertson-SYx3UCHZJlo-unsplash.jpg"
            ],
            [
                "image_type" => "user profile picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 5,
                "url" => asset("storage/images/users/profile-pictures") . "/christian-buehner-N3ZYHw7f0XM-unsplash.jpg",
                "file_name" => "christian-buehner-N3ZYHw7f0XM-unsplash.jpg"
            ],
            [
                "image_type" => "user cover picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 5,
                "url" => asset("storage/images/users/cover-images") . "/gabriel-l1sqXJXBgd0-unsplash.jpg",
                "file_name" => "gabriel-l1sqXJXBgd0-unsplash.jpg"
            ],
            [
                "image_type" => "user profile picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 6,
                "url" => asset("storage/images/users/profile-pictures") . "/ivan-perez-uMYCyYNP4q8-unsplash.jpg",
                "file_name" => "ivan-perez-uMYCyYNP4q8-unsplash.jpg"
            ],
            [
                "image_type" => "user cover picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 6,
                "url" => asset("storage/images/users/cover-images") . "/mark-tegethoff-NbgQfUvKFE0-unsplash.jpg",
                "file_name" => "mark-tegethoff-NbgQfUvKFE0-unsplash.jpg"
            ],
            [
                "image_type" => "user profile picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 7,
                "url" => asset("storage/images/users/profile-pictures") . "/james-timothy-6EgCxDNfd3Q-unsplash.jpg",
                "file_name" => "james-timothy-6EgCxDNfd3Q-unsplash.jpg"
            ],
            [
                "image_type" => "user cover picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 7,
                "url" => asset("storage/images/users/cover-images") . "/melanie-magdalena-KpBAYMNf9Tw-unsplash.jpg",
                "file_name" => "melanie-magdalena-KpBAYMNf9Tw-unsplash.jpg"
            ],
            [
                "image_type" => "user profile picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 8,
                "url" => asset("storage/images/users/profile-pictures") . "/julian-wan-WNoLnJo7tS8-unsplash.jpg",
                "file_name" => "julian-wan-WNoLnJo7tS8-unsplash.jpg"
            ],
            [
                "image_type" => "user cover picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 8,
                "url" => asset("storage/images/users/cover-images") . "/tobse-fritz-rpvhOzyv2jM-unsplash.jpg",
                "file_name" => "tobse-fritz-rpvhOzyv2jM-unsplash.jpg"
            ],
            [
                "image_type" => "user profile picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 9,
                "url" => asset("storage/images/users/profile-pictures") . "/kultbrecher-106coBynOtc-unsplash.jpg",
                "file_name" => "kultbrecher-106coBynOtc-unsplash.jpg"
            ],
            [
                "image_type" => "user cover picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 9,
                "url" => asset("storage/images/users/cover-images") . "/delfina-iacub-zsgJdHDP4IE-unsplash.jpg",
                "file_name" => "delfina-iacub-zsgJdHDP4IE-unsplash.jpg"
            ],
            [
                "image_type" => "user profile picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 10,
                "url" => asset("storage/images/users/profile-pictures") . "/nicolas-horn-MTZTGvDsHFY-unsplash.jpg",
                "file_name" => "nicolas-horn-MTZTGvDsHFY-unsplash.jpg"
            ],
            [
                "image_type" => "user cover picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 10,
                "url" => asset("storage/images/users/cover-images") . "/derek-thomson-TWoL-QCZubY-unsplash.jpg",
                "file_name" => "derek-thomson-TWoL-QCZubY-unsplash.jpg"
            ],
            [
                "image_type" => "user profile picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 11,
                "url" => asset("storage/images/users/profile-pictures") . "/seth-doyle-vmBik4xv27s-unsplash.jpg",
                "file_name" => "seth-doyle-vmBik4xv27s-unsplash.jpg"
            ],
            [
                "image_type" => "user cover picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 11,
                "url" => asset("storage/images/users/cover-images") . "/ethan-robertson-SYx3UCHZJlo-unsplash.jpg",
                "file_name" => "ethan-robertson-SYx3UCHZJlo-unsplash.jpg"
            ],
            [
                "image_type" => "user profile picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 12,
                "url" => asset("storage/images/users/profile-pictures") . "/seth-doyle-wys9Jty8wNQ-unsplash.jpg",
                "file_name" => "seth-doyle-wys9Jty8wNQ-unsplash.jpg"
            ],
            [
                "image_type" => "user cover picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 12,
                "url" => asset("storage/images/users/cover-images") . "/gabriel-l1sqXJXBgd0-unsplash.jpg",
                "file_name" => "gabriel-l1sqXJXBgd0-unsplash.jpg"
            ],
            [
                "image_type" => "user profile picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 13,
                "url" => asset("storage/images/users/profile-pictures") . "/vladislav-nikonov-faTo2IqmXXw-unsplash.jpg",
                "file_name" => "vladislav-nikonov-faTo2IqmXXw-unsplash.jpg"
            ],
            [
                "image_type" => "user cover picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 13,
                "url" => asset("storage/images/users/cover-images") . "/mark-tegethoff-NbgQfUvKFE0-unsplash.jpg",
                "file_name" => "mark-tegethoff-NbgQfUvKFE0-unsplash.jpg"
            ],
            [
                "image_type" => "user profile picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 14,
                "url" => asset("storage/images/users/profile-pictures") . "/art-hauntington-0wRXAXqIp58-unsplash.jpg",
                "file_name" => "art-hauntington-0wRXAXqIp58-unsplash.jpg"
            ],
            [
                "image_type" => "user cover picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 14,
                "url" => asset("storage/images/users/cover-images") . "/melanie-magdalena-KpBAYMNf9Tw-unsplash.jpg",
                "file_name" => "melanie-magdalena-KpBAYMNf9Tw-unsplash.jpg"
            ],
            [
                "image_type" => "user profile picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 15,
                "url" => asset("storage/images/users/profile-pictures") . "/aykut-bingul-kBonaevi3yA-unsplash.jpg",
                "file_name" => "aykut-bingul-kBonaevi3yA-unsplash.jpg"
            ],
            [
                "image_type" => "user cover picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 15,
                "url" => asset("storage/images/users/cover-images") . "/tobse-fritz-rpvhOzyv2jM-unsplash.jpg",
                "file_name" => "tobse-fritz-rpvhOzyv2jM-unsplash.jpg"
            ],
            [
                "image_type" => "user profile picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 16,
                "url" => asset("storage/images/users/profile-pictures") . "/bruce-dixon-p4jxrYcGsGg-unsplash.jpg",
                "file_name" => "bruce-dixon-p4jxrYcGsGg-unsplash.jpg"
            ],
            [
                "image_type" => "user cover picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 16,
                "url" => asset("storage/images/users/cover-images") . "/delfina-iacub-zsgJdHDP4IE-unsplash.jpg",
                "file_name" => "delfina-iacub-zsgJdHDP4IE-unsplash.jpg"
            ],
            [
                "image_type" => "user profile picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 17,
                "url" => asset("storage/images/users/profile-pictures") . "/daniil-lobachev-u3pi6HhSYew-unsplash.jpg",
                "file_name" => "daniil-lobachev-u3pi6HhSYew-unsplash.jpg"
            ],
            [
                "image_type" => "user cover picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 17,
                "url" => asset("storage/images/users/cover-images") . "/derek-thomson-TWoL-QCZubY-unsplash.jpg",
                "file_name" => "derek-thomson-TWoL-QCZubY-unsplash.jpg"
            ],
            [
                "image_type" => "user profile picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 18,
                "url" => asset("storage/images/users/profile-pictures") . "/hayes-potter-Dcr2sFFopP8-unsplash.jpg",
                "file_name" => "hayes-potter-Dcr2sFFopP8-unsplash.jpg"
            ],
            [
                "image_type" => "user cover picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 18,
                "url" => asset("storage/images/users/cover-images") . "/ethan-robertson-SYx3UCHZJlo-unsplash.jpg",
                "file_name" => "ethan-robertson-SYx3UCHZJlo-unsplash.jpg"
            ],
            [
                "image_type" => "user profile picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 19,
                "url" => asset("storage/images/users/profile-pictures") . "/joanna-nix-walkup-h2pnXHMz8YM-unsplash.jpg",
                "file_name" => "joanna-nix-walkup-h2pnXHMz8YM-unsplash.jpg"
            ],
            [
                "image_type" => "user cover picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 19,
                "url" => asset("storage/images/users/cover-images") . "/gabriel-l1sqXJXBgd0-unsplash.jpg",
                "file_name" => "gabriel-l1sqXJXBgd0-unsplash.jpg"
            ],
            [
                "image_type" => "user profile picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 20,
                "url" => asset("storage/images/users/profile-pictures") . "/nick-night-QSAoi1qBNnQ-unsplash.jpg",
                "file_name" => "nick-night-QSAoi1qBNnQ-unsplash.jpg"
            ],
            [
                "image_type" => "user cover picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 20,
                "url" => asset("storage/images/users/cover-images") . "/mark-tegethoff-NbgQfUvKFE0-unsplash.jpg",
                "file_name" => "mark-tegethoff-NbgQfUvKFE0-unsplash.jpg"
            ],
            [
                "image_type" => "user profile picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 21,
                "url" => asset("storage/images/users/profile-pictures") . "/raamin-ka-zfWcUc48WXk-unsplash.jpg",
                "file_name" => "raamin-ka-zfWcUc48WXk-unsplash.jpg"
            ],
            [
                "image_type" => "user cover picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 21,
                "url" => asset("storage/images/users/cover-images") . "/melanie-magdalena-KpBAYMNf9Tw-unsplash.jpg",
                "file_name" => "melanie-magdalena-KpBAYMNf9Tw-unsplash.jpg"
            ],
            [
                "image_type" => "user profile picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 22,
                "url" => asset("storage/images/users/profile-pictures") . "/seth-doyle-BZ2PNGD5Emw-unsplash.jpg",
                "file_name" => "seth-doyle-BZ2PNGD5Emw-unsplash.jpg"
            ],
            [
                "image_type" => "user cover picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 22,
                "url" => asset("storage/images/users/cover-images") . "/tobse-fritz-rpvhOzyv2jM-unsplash.jpg",
                "file_name" => "tobse-fritz-rpvhOzyv2jM-unsplash.jpg"
            ],
            [
                "image_type" => "user profile picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 23,
                "url" => asset("storage/images/users/profile-pictures") . "/seth-doyle-hF2XIzJimtM-unsplash.jpg",
                "file_name" => "seth-doyle-hF2XIzJimtM-unsplash.jpg"
            ],
            [
                "image_type" => "user cover picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 23,
                "url" => asset("storage/images/users/cover-images") . "/delfina-iacub-zsgJdHDP4IE-unsplash.jpg",
                "file_name" => "delfina-iacub-zsgJdHDP4IE-unsplash.jpg"
            ],
            [
                "image_type" => "user profile picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 24,
                "url" => asset("storage/images/users/profile-pictures") . "/seth-doyle-uJ8LNVCBjFQ-unsplash.jpg",
                "file_name" => "seth-doyle-uJ8LNVCBjFQ-unsplash.jpg"
            ],
            [
                "image_type" => "user cover picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 24,
                "url" => asset("storage/images/users/cover-images") . "/derek-thomson-TWoL-QCZubY-unsplash.jpg",
                "file_name" => "derek-thomson-TWoL-QCZubY-unsplash.jpg"
            ],
            [
                "image_type" => "user profile picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 25,
                "url" => asset("storage/images/users/profile-pictures") . "/zane-bolen--7lcFpuVWv4-unsplash.jpg",
                "file_name" => "zane-bolen--7lcFpuVWv4-unsplash.jpg"
            ],
            [
                "image_type" => "user cover picture",
                "owner_type" => "App\Models\User",
                "owner_id" => 25,
                "url" => asset("storage/images/users/cover-images") . "/mark-tegethoff-NbgQfUvKFE0-unsplash.jpg",
                "file_name" => "mark-tegethoff-NbgQfUvKFE0-unsplash.jpg"
            ]
        ]);
    }
}

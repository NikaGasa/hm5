<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Posts;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Posts::create([
            "nickname" => "Yes",
            "caption" => "No"
        ]);
        Posts::create([
            "nickname" => "waltuh",
            "caption" => "put your gun away waltuh"
        ]);
    }
}

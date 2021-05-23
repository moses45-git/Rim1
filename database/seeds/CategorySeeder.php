<?php

use App\User;
use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Category::factory(5)->hasProducts(10)->create();
        User::create([
                "name" => "NTOYA Moise",
                "email" => "mosesnzuzi45@gmail.com",
                "password" => Hash::make("Moses2271998_45"),

        ]);
    }
}

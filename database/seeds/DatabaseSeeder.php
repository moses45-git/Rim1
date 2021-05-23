<?php

use App\Produit;
use App\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        factory(App\Produit::class, 50)->create();
        $this->call([
                CategorySeeder::class,
                ]
        );
    }
}

<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(ContentsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(FamiliesTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(ModelsTableSeeder::class);
        $this->call(SeriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(SubfamiliesTableSeeder::class);
    }
}

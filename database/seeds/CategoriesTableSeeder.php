<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Category::class, 10)->create();

        App\Category::create([
            'name' => 'design'
        ]);
        App\Category::create([
            'name' => 'web'
        ]);
        App\Category::create([
            'name' => 'networking'
        ]);
        App\Category::create([
            'name' => 'database'
        ]);
        App\Category::create([
            'name' => 'microsoft'
        ]);
        App\Category::create([
            'name' => 'programming'
        ]);
    }
}

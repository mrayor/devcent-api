<?php

use Illuminate\Database\Seeder;

class CourseOutlinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\CourseOutline::class, 15)->create();
    }
}

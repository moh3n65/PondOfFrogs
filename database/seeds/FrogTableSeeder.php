<?php

use Illuminate\Database\Seeder;

class FrogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Frog::class, 'ancestor_male', 1)->create();
        factory(App\Models\Frog::class, 'ancestor_female', 1)->create();
        factory(App\Models\Frog::class, 'child', 10)->create();
    }
}
